<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGroupAPIRequest;
use App\Http\Requests\API\UpdateGroupAPIRequest;
use App\Models\Group;
use App\Models\User;
use App\Repositories\GroupRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\GroupResource;
use Illuminate\Support\Facades\Auth;
use Response;

/**
 * Class GroupController
 * @group Group
 * @package App\Http\Controllers\API
 */
class GroupAPIController extends AppBaseController
{
    /** @var  GroupRepository */
    private $groupRepository;

    public function __construct(GroupRepository $groupRepo)
    {
        $this->groupRepository = $groupRepo;
    }

    /**
     * Display a listing of the Group.
     * GET|HEAD /groups
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $groups = new Group();
        $groups = $groups->where('company_id', Auth::user()->theCompany->first()->id)->get();
        return $this->sendResponse(GroupResource::collection($groups), 'Groups retrieved successfully');
    }

    /**
     * Store a newly created Group in storage.
     * POST /groups
     *
     * @param CreateGroupAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateGroupAPIRequest $request)
    {
        $input = $request->all();

        $group = $this->groupRepository->create($input);

        return $this->sendResponse(new GroupResource($group), 'Group saved successfully');
    }


    /**
     * Get All Users in a Group.
     */

    public function allUsersInGroup($id)
    {
        $res = User::whereHas('groups', function ($q) use ($id) {
            $q->where('group_id', $id);
        })->get();
        if ($res->isEmpty()) {
            return $this->sendError('User not found');
        }
        return $this->sendResponse($res->toArray(), 'Users retrieved successfully');
    }


    /**
     * Get All Groups for a User.
     */

    public function byUser()
    {
        $id = Auth::user()->id;
        $res = Group::whereHas('users', function ($q) use ($id) {
            $q->where('user_id', $id);
        })->get();
        if ($res->isEmpty()) {
            return $this->sendError('Groups not found');
        }
        return $this->sendResponse($res->toArray(), 'Groups retrieved successfully');
    }

    /**
     * Display the specified Group.
     * GET|HEAD /groups/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Group $group */
        $group = $this->groupRepository->find($id);

        if (empty($group)) {
            return $this->sendError('Group not found');
        }

        return $this->sendResponse(new GroupResource($group), 'Group retrieved successfully');
    }

    /**
     * Update the specified Group in storage.
     * PUT/PATCH /groups/{id}
     *
     * @param int $id
     * @param UpdateGroupAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGroupAPIRequest $request)
    {
        $input = $request->all();

        /** @var Group $group */
        $group = $this->groupRepository->find($id);

        if (empty($group)) {
            return $this->sendError('Group not found');
        }

        $group = $this->groupRepository->update($input, $id);

        return $this->sendResponse(new GroupResource($group), 'Group updated successfully');
    }

    /**
     * Remove the specified Group from storage.
     * DELETE /groups/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Group $group */
        $group = $this->groupRepository->find($id);

        if (empty($group)) {
            return $this->sendError('Group not found');
        }

        $group->delete();

        return $this->sendSuccess('Group deleted successfully');
    }
}
