<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePollTypeAPIRequest;
use App\Http\Requests\API\UpdatePollTypeAPIRequest;
use App\Models\PollType;
use App\Repositories\PollTypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\PollTypeResource;
use Response;

/**
 * Class PollTypeController
 * @group Poll Type
 * @package App\Http\Controllers\API
 */

class PollTypeAPIController extends AppBaseController
{
    /** @var  PollTypeRepository */
    private $pollTypeRepository;

    public function __construct(PollTypeRepository $pollTypeRepo)
    {
        $this->pollTypeRepository = $pollTypeRepo;
    }

    /**
     * Display a listing of the PollType.
     * GET|HEAD /pollTypes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $pollTypes = $this->pollTypeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(PollTypeResource::collection($pollTypes), 'Poll Types retrieved successfully');
    }

    /**
     * Store a newly created PollType in storage.
     * POST /pollTypes
     *
     * @param CreatePollTypeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePollTypeAPIRequest $request)
    {
        $input = $request->all();

        $pollType = $this->pollTypeRepository->create($input);

        return $this->sendResponse(new PollTypeResource($pollType), 'Poll Type saved successfully');
    }

    /**
     * Display the specified PollType.
     * GET|HEAD /pollTypes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PollType $pollType */
        $pollType = $this->pollTypeRepository->find($id);

        if (empty($pollType)) {
            return $this->sendError('Poll Type not found');
        }

        return $this->sendResponse(new PollTypeResource($pollType), 'Poll Type retrieved successfully');
    }

    /**
     * Update the specified PollType in storage.
     * PUT/PATCH /pollTypes/{id}
     *
     * @param int $id
     * @param UpdatePollTypeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePollTypeAPIRequest $request)
    {
        $input = $request->all();

        /** @var PollType $pollType */
        $pollType = $this->pollTypeRepository->find($id);

        if (empty($pollType)) {
            return $this->sendError('Poll Type not found');
        }

        $pollType = $this->pollTypeRepository->update($input, $id);

        return $this->sendResponse(new PollTypeResource($pollType), 'PollType updated successfully');
    }

    /**
     * Remove the specified PollType from storage.
     * DELETE /pollTypes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PollType $pollType */
        $pollType = $this->pollTypeRepository->find($id);

        if (empty($pollType)) {
            return $this->sendError('Poll Type not found');
        }

        $pollType->delete();

        return $this->sendSuccess('Poll Type deleted successfully');
    }
}
