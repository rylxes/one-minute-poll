<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\AssignPermissionsRole;
use App\Http\Requests\API\AssignPermissionsUser;
use App\Http\Requests\API\CreatePermissionsAPIRequest;
use App\Http\Requests\API\UpdatePermissionsAPIRequest;
use App\Models\Permissions;
use App\Models\Roles;
use App\Models\User;
use App\Repositories\PermissionsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\PermissionsResource;
use Response;

/**
 * Class PermissionsController
 * @group Permissions
 * @package App\Http\Controllers\API
 */
class PermissionsAPIController extends AppBaseController
{
    /** @var  PermissionsRepository */
    private $permissionsRepository;

    public function __construct(PermissionsRepository $permissionsRepo)
    {
        $this->permissionsRepository = $permissionsRepo;
    }

    /**
     * Display a listing of the Permissions.
     * GET|HEAD /permissions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $permissions = $this->permissionsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(PermissionsResource::collection($permissions), 'Permissions retrieved successfully');
    }

    /**
     * Assigns Permissions to User
     */

    public function userPermissionsAssign(AssignPermissionsUser $request)
    {
        $input = $request->input();
        $user = User::find($input['user_id']);
        $permissionName = Permissions::find($input['permission_id']);
        $user->givePermissionTo($permissionName->name);
        return $this->sendResponse([], 'Permissions Saved');
    }

    /**
     * Assigns Permissions to Role
     */
    public function rolePermissionsAssign(AssignPermissionsRole $request)
    {
        $input = $request->input();
        $role = Roles::find($input['role_id']);
        $permissionName = Permissions::find($input['permission_id']);
        $role->givePermissionTo($permissionName->name);
        return $this->sendResponse([], 'Permissions Saved');
    }

    /**
     * Store a newly created Permissions in storage.
     * POST /permissions
     *
     * @param CreatePermissionsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePermissionsAPIRequest $request)
    {
        $input = $request->all();

        $permissions = $this->permissionsRepository->create($input);

        return $this->sendResponse(new PermissionsResource($permissions), 'Permissions saved successfully');
    }

    /**
     * Display the specified Permissions.
     * GET|HEAD /permissions/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Permissions $permissions */
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            return $this->sendError('Permissions not found');
        }

        return $this->sendResponse(new PermissionsResource($permissions), 'Permissions retrieved successfully');
    }

    /**
     * Update the specified Permissions in storage.
     * PUT/PATCH /permissions/{id}
     *
     * @param int $id
     * @param UpdatePermissionsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePermissionsAPIRequest $request)
    {
        $input = $request->all();

        /** @var Permissions $permissions */
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            return $this->sendError('Permissions not found');
        }

        $permissions = $this->permissionsRepository->update($input, $id);

        return $this->sendResponse(new PermissionsResource($permissions), 'Permissions updated successfully');
    }

    /**
     * Remove the specified Permissions from storage.
     * DELETE /permissions/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Permissions $permissions */
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            return $this->sendError('Permissions not found');
        }

        $permissions->delete();

        return $this->sendSuccess('Permissions deleted successfully');
    }
}
