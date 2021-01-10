<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProfileAPIRequest;
use App\Http\Requests\API\UpdateProfileAPIRequest;
use App\Models\Profile;
use App\Repositories\ProfileRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;

/**
 * Class ProfileController
 * @group Profile
 * @package App\Http\Controllers\API
 */

class ProfileAPIController extends AppBaseController
{
    /** @var  ProfileRepository */
    private $profileRepository;

    public function __construct(ProfileRepository $profileRepo)
    {
        $this->profileRepository = $profileRepo;
    }

    /**
     * Display a listing of the Profile.
     * GET|HEAD /profiles
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $id = Auth::user()->id;
        $profile = Profile::where('user_id',$id)->with(['user.theCompany'])->first();
        //$profile = $this->profileRepository->find($id)->with('user.company');
        return $this->sendResponse($profile->toArray(), 'Profiles retrieved successfully');
    }

    /**
     * Store a newly created Profile in storage.
     * POST /profiles
     *
     * @param CreateProfileAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProfileAPIRequest $request)
    {
        $input = $request->all();

        $profile = $this->profileRepository->create($input);

        return $this->sendResponse($profile->toArray(), 'Profile saved successfully');
    }

    /**
     * Display the specified Profile.
     * GET|HEAD /profiles/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Profile $profile */
        $profile = $this->profileRepository->find($id)->with('user.company');
        if (empty($profile)) {
            return $this->sendError('Profile not found');
        }

        return $this->sendResponse($profile->toArray(), 'Profile retrieved successfully');
    }

    /**
     * Update the specified Profile in storage.
     * PUT/PATCH /profiles/{id}
     *
     * @param int $id
     * @param UpdateProfileAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProfileAPIRequest $request)
    {
        $input = $request->all();
        DB::beginTransaction();

        /** @var Profile $profile */
       // $profile = $this->profileRepository->find($id);
        $profile = Profile::all()->first();
        if (empty($profile)) {
            return $this->sendError('Profile not found');
        }
        unset($input['user_id']);
        $profile = $this->profileRepository->update($input, $profile->id);
        if (!empty($request->file('file'))) {
            try {
                $profile->addMedia($request->file('file'))->toMediaCollection('avatar');
                $mediaItems = $profile->getMedia('avatar');
                $input['avatar'] = $mediaItems[0]->getFullUrl();
                $this->profileRepository->update($input, $profile->id);
            } catch (\Exception $exception) {
                DB::rollBack();
                return $this->sendError($exception->getMessage());
            }
        }
        DB::commit();
        return $this->sendResponse($profile->toArray(), 'Profile updated successfully');
    }

    /**
     * Remove the specified Profile from storage.
     * DELETE /profiles/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Profile $profile */
        $profile = $this->profileRepository->find($id);

        if (empty($profile)) {
            return $this->sendError('Profile not found');
        }

        $profile->delete();

        return $this->sendSuccess('Profile deleted successfully');
    }
}
