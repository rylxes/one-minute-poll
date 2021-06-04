<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePollAPIRequest;
use App\Http\Requests\API\UpdatePollAPIRequest;
use App\Models\Poll;
use App\Repositories\PollRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\PollResource;
use Response;

/**
 * Class PollController
 * @group Poll
 * @package App\Http\Controllers\API
 */

class PollAPIController extends AppBaseController
{
    /** @var  PollRepository */
    private $pollRepository;

    public function __construct(PollRepository $pollRepo)
    {
        $this->pollRepository = $pollRepo;
    }

    /**
     * Display a listing of the Poll.
     * GET|HEAD /polls
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $polls = $this->pollRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(PollResource::collection($polls), 'Polls retrieved successfully');
    }

    /**
     * Store a newly created Poll in storage.
     * POST /polls
     *
     * @param CreatePollAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePollAPIRequest $request)
    {
        $input = $request->all();

        $poll = $this->pollRepository->create($input);

        return $this->sendResponse(new PollResource($poll), 'Poll saved successfully');
    }

    /**
     * Display the specified Poll.
     * GET|HEAD /polls/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Poll $poll */
        $poll = $this->pollRepository->find($id);

        if (empty($poll)) {
            return $this->sendError('Poll not found');
        }

        return $this->sendResponse(new PollResource($poll), 'Poll retrieved successfully');
    }

    /**
     * Update the specified Poll in storage.
     * PUT/PATCH /polls/{id}
     *
     * @param int $id
     * @param UpdatePollAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePollAPIRequest $request)
    {
        $input = $request->all();

        /** @var Poll $poll */
        $poll = $this->pollRepository->find($id);

        if (empty($poll)) {
            return $this->sendError('Poll not found');
        }

        $poll = $this->pollRepository->update($input, $id);

        return $this->sendResponse(new PollResource($poll), 'Poll updated successfully');
    }

    /**
     * Remove the specified Poll from storage.
     * DELETE /polls/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Poll $poll */
        $poll = $this->pollRepository->find($id);

        if (empty($poll)) {
            return $this->sendError('Poll not found');
        }

        $poll->delete();

        return $this->sendSuccess('Poll deleted successfully');
    }
}
