<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateNotificationTypeAPIRequest;
use App\Http\Requests\API\UpdateNotificationTypeAPIRequest;
use App\Models\NotificationType;
use App\Repositories\NotificationTypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\NotificationTypeResource;
use Response;

/**
 * Class NotificationTypeController
 * @group Notification Type
 * @package App\Http\Controllers\API
 */

class NotificationTypeAPIController extends AppBaseController
{
    /** @var  NotificationTypeRepository */
    private $notificationTypeRepository;

    public function __construct(NotificationTypeRepository $notificationTypeRepo)
    {
        $this->notificationTypeRepository = $notificationTypeRepo;
    }

    /**
     * Display a listing of the NotificationType.
     * GET|HEAD /notificationTypes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $notificationTypes = $this->notificationTypeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(NotificationTypeResource::collection($notificationTypes), 'Notification Types retrieved successfully');
    }

    /**
     * Store a newly created NotificationType in storage.
     * POST /notificationTypes
     *
     * @param CreateNotificationTypeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateNotificationTypeAPIRequest $request)
    {
        $input = $request->all();

        $notificationType = $this->notificationTypeRepository->create($input);

        return $this->sendResponse(new NotificationTypeResource($notificationType), 'Notification Type saved successfully');
    }

    /**
     * Display the specified NotificationType.
     * GET|HEAD /notificationTypes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var NotificationType $notificationType */
        $notificationType = $this->notificationTypeRepository->find($id);

        if (empty($notificationType)) {
            return $this->sendError('Notification Type not found');
        }

        return $this->sendResponse(new NotificationTypeResource($notificationType), 'Notification Type retrieved successfully');
    }

    /**
     * Update the specified NotificationType in storage.
     * PUT/PATCH /notificationTypes/{id}
     *
     * @param int $id
     * @param UpdateNotificationTypeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNotificationTypeAPIRequest $request)
    {
        $input = $request->all();

        /** @var NotificationType $notificationType */
        $notificationType = $this->notificationTypeRepository->find($id);

        if (empty($notificationType)) {
            return $this->sendError('Notification Type not found');
        }

        $notificationType = $this->notificationTypeRepository->update($input, $id);

        return $this->sendResponse(new NotificationTypeResource($notificationType), 'NotificationType updated successfully');
    }

    /**
     * Remove the specified NotificationType from storage.
     * DELETE /notificationTypes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var NotificationType $notificationType */
        $notificationType = $this->notificationTypeRepository->find($id);

        if (empty($notificationType)) {
            return $this->sendError('Notification Type not found');
        }

        $notificationType->delete();

        return $this->sendSuccess('Notification Type deleted successfully');
    }
}
