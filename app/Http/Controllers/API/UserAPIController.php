<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateUserAPIRequest;
use App\Http\Requests\API\ShareGroup;
use App\Http\Requests\API\ShareGroupWithEmail;
use App\Http\Requests\API\UpdateUserAPIRequest;
use App\Models\Group;
use App\Models\Library;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Response;

/**
 * Class UserController
 * @group User
 * @package App\Http\Controllers\API
 */
class UserAPIController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     * GET|HEAD /users
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $users = new User();
        $users = $users->whereHas('theCompany', function ($query) {
            $query->where('company_id', Auth::user()->theCompany->first()->id);
        })->get();


        return $this->sendResponse(UserResource::collection($users), 'Users retrieved successfully');
    }


    /**
     * Add User to Group.
     *
     */
    public function shareToGroup(ShareGroup $request)
    {
        $data = $request->all();
        $group = Group::find($data['group_id']);
        $group->users()->attach($data['user_id']);
        $message = "Group shared";
        return $this->sendResponse($data, $message);
    }

    /**
     * Remove User to Group.
     *
     */
    public function removeToGroup(ShareGroup $request)
    {
        $data = $request->all();
        $group = Group::find($data['group_id']);
        $group->users()->detach($data['user_id']);
        $message = "User Detached";
        return $this->sendResponse($data, $message);
    }


    /**
     * Remove User to Group with Comma seperated Email.
     *
     */
    public function removeGroupWithEmail(ShareGroupWithEmail $request)
    {
        $data = $request->all();
        $group = Group::find($data['group_id']);
        $email = $data['email'];
        $email = explode(',', $email);
        foreach ($email as $each) {
            $user = User::whereHas('theCompany', function ($q) {
                $q->where('company_id', Auth::user()->theCompany->first()->id);
            })
                ->where('email', $each)
                ->first();
            if (!empty($user)) {
                $group->users()->detach($user->id);
            }
        }
        $message = "Users Detached";
        return $this->sendResponse($data, $message);
    }

    /**
     * Add User to Group with Comma seperated Email.
     *
     */
    public function shareGroupWithEmail(ShareGroupWithEmail $request)
    {
        $data = $request->all();
        $group = Group::find($data['group_id']);
        $email = $data['email'];
        $email = explode(',', $email);
        foreach ($email as $each) {
            $user = User::whereHas('theCompany', function ($q) {
                $q->where('company_id', Auth::user()->theCompany->first()->id);
            })
                ->where('email', $each)
                ->first();
            if (!empty($user)) {
                $group->users()->attach($user->id);
            }
        }
        $message = "Group shared";
        return $this->sendResponse($data, $message);
    }


    /**
     * My Activities.
     */

    public function myActivities()
    {
        $actions = Auth::user()->actions;
        return $this->sendResponse($actions->toArray(), 'My Activities');
    }


    /**
     * Display the specified User.
     * GET|HEAD /users/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var User $user */
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            return $this->sendError('User not found');
        }

        return $this->sendResponse(new UserResource($user), 'User retrieved successfully');
    }


    /**
     * Remove the specified User from storage.
     * DELETE /users/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var User $user */
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            return $this->sendError('User not found');
        }

        $user->delete();

        return $this->sendSuccess('User deleted successfully');
    }
}
