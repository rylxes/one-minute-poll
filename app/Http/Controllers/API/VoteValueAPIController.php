<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateVoteValueAPIRequest;
use App\Http\Requests\API\UpdateVoteValueAPIRequest;
use App\Models\VoteValue;
use App\Repositories\VoteValueRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\VoteValueResource;
use Response;

/**
 * Class VoteValueController
 * @group Vote Value
 * @package App\Http\Controllers\API
 */

class VoteValueAPIController extends AppBaseController
{
    /** @var  VoteValueRepository */
    private $voteValueRepository;

    public function __construct(VoteValueRepository $voteValueRepo)
    {
        $this->voteValueRepository = $voteValueRepo;
    }

    /**
     * Display a listing of the VoteValue.
     * GET|HEAD /voteValues
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $voteValues = $this->voteValueRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(VoteValueResource::collection($voteValues), 'Vote Values retrieved successfully');
    }

    /**
     * Store a newly created VoteValue in storage.
     * POST /voteValues
     *
     * @param CreateVoteValueAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateVoteValueAPIRequest $request)
    {
        $input = $request->all();

        $voteValue = $this->voteValueRepository->create($input);

        return $this->sendResponse(new VoteValueResource($voteValue), 'Vote Value saved successfully');
    }

    /**
     * Display the specified VoteValue.
     * GET|HEAD /voteValues/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var VoteValue $voteValue */
        $voteValue = $this->voteValueRepository->find($id);

        if (empty($voteValue)) {
            return $this->sendError('Vote Value not found');
        }

        return $this->sendResponse(new VoteValueResource($voteValue), 'Vote Value retrieved successfully');
    }

    /**
     * Update the specified VoteValue in storage.
     * PUT/PATCH /voteValues/{id}
     *
     * @param int $id
     * @param UpdateVoteValueAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVoteValueAPIRequest $request)
    {
        $input = $request->all();

        /** @var VoteValue $voteValue */
        $voteValue = $this->voteValueRepository->find($id);

        if (empty($voteValue)) {
            return $this->sendError('Vote Value not found');
        }

        $voteValue = $this->voteValueRepository->update($input, $id);

        return $this->sendResponse(new VoteValueResource($voteValue), 'VoteValue updated successfully');
    }

    /**
     * Remove the specified VoteValue from storage.
     * DELETE /voteValues/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var VoteValue $voteValue */
        $voteValue = $this->voteValueRepository->find($id);

        if (empty($voteValue)) {
            return $this->sendError('Vote Value not found');
        }

        $voteValue->delete();

        return $this->sendSuccess('Vote Value deleted successfully');
    }
}
