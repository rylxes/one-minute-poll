<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePollOptionAPIRequest;
use App\Http\Requests\API\UpdatePollOptionAPIRequest;
use App\Models\PollOption;
use App\Repositories\PollOptionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\PollOptionResource;
use Response;

/**
 * Class PollOptionController
 * @group Poll Option
 * @package App\Http\Controllers\API
 */

class PollOptionAPIController extends AppBaseController
{
    /** @var  PollOptionRepository */
    private $pollOptionRepository;

    public function __construct(PollOptionRepository $pollOptionRepo)
    {
        $this->pollOptionRepository = $pollOptionRepo;
    }

    /**
     * Display a listing of the PollOption.
     * GET|HEAD /pollOptions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $pollOptions = $this->pollOptionRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(PollOptionResource::collection($pollOptions), 'Poll Options retrieved successfully');
    }

    /**
     * Store a newly created PollOption in storage.
     * POST /pollOptions
     *
     * @param CreatePollOptionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePollOptionAPIRequest $request)
    {
        $input = $request->all();

        $pollOption = $this->pollOptionRepository->create($input);

        return $this->sendResponse(new PollOptionResource($pollOption), 'Poll Option saved successfully');
    }

    /**
     * Display the specified PollOption.
     * GET|HEAD /pollOptions/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PollOption $pollOption */
        $pollOption = $this->pollOptionRepository->find($id);

        if (empty($pollOption)) {
            return $this->sendError('Poll Option not found');
        }

        return $this->sendResponse(new PollOptionResource($pollOption), 'Poll Option retrieved successfully');
    }

    /**
     * Update the specified PollOption in storage.
     * PUT/PATCH /pollOptions/{id}
     *
     * @param int $id
     * @param UpdatePollOptionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePollOptionAPIRequest $request)
    {
        $input = $request->all();

        /** @var PollOption $pollOption */
        $pollOption = $this->pollOptionRepository->find($id);

        if (empty($pollOption)) {
            return $this->sendError('Poll Option not found');
        }

        $pollOption = $this->pollOptionRepository->update($input, $id);

        return $this->sendResponse(new PollOptionResource($pollOption), 'PollOption updated successfully');
    }

    /**
     * Remove the specified PollOption from storage.
     * DELETE /pollOptions/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PollOption $pollOption */
        $pollOption = $this->pollOptionRepository->find($id);

        if (empty($pollOption)) {
            return $this->sendError('Poll Option not found');
        }

        $pollOption->delete();

        return $this->sendSuccess('Poll Option deleted successfully');
    }
}
