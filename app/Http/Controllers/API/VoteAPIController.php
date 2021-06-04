<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateVoteAPIRequest;
use App\Http\Requests\API\UpdateVoteAPIRequest;
use App\Models\Vote;
use App\Repositories\VoteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\VoteResource;
use Response;

/**
 * Class VoteController
 * @group Vote
 * @package App\Http\Controllers\API
 */

class VoteAPIController extends AppBaseController
{
    /** @var  VoteRepository */
    private $voteRepository;

    public function __construct(VoteRepository $voteRepo)
    {
        $this->voteRepository = $voteRepo;
    }

    /**
     * Display a listing of the Vote.
     * GET|HEAD /votes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $votes = $this->voteRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(VoteResource::collection($votes), 'Votes retrieved successfully');
    }

    /**
     * Store a newly created Vote in storage.
     * POST /votes
     *
     * @param CreateVoteAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateVoteAPIRequest $request)
    {
        $input = $request->all();

        $vote = $this->voteRepository->create($input);

        return $this->sendResponse(new VoteResource($vote), 'Vote saved successfully');
    }

    /**
     * Display the specified Vote.
     * GET|HEAD /votes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Vote $vote */
        $vote = $this->voteRepository->find($id);

        if (empty($vote)) {
            return $this->sendError('Vote not found');
        }

        return $this->sendResponse(new VoteResource($vote), 'Vote retrieved successfully');
    }

    /**
     * Update the specified Vote in storage.
     * PUT/PATCH /votes/{id}
     *
     * @param int $id
     * @param UpdateVoteAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVoteAPIRequest $request)
    {
        $input = $request->all();

        /** @var Vote $vote */
        $vote = $this->voteRepository->find($id);

        if (empty($vote)) {
            return $this->sendError('Vote not found');
        }

        $vote = $this->voteRepository->update($input, $id);

        return $this->sendResponse(new VoteResource($vote), 'Vote updated successfully');
    }

    /**
     * Remove the specified Vote from storage.
     * DELETE /votes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Vote $vote */
        $vote = $this->voteRepository->find($id);

        if (empty($vote)) {
            return $this->sendError('Vote not found');
        }

        $vote->delete();

        return $this->sendSuccess('Vote deleted successfully');
    }
}
