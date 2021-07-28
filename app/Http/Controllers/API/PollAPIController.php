<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePollAPIRequest;
use App\Http\Requests\API\UpdatePollAPIRequest;
use App\Models\Poll;
use App\Repositories\PollRepository;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\PollResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;

/**
 * Class PollController
 * @group Poll
 * @package App\Http\Controllers\API
 */
class PollAPIController extends AppBaseController
{
    use FilesTrait;

    /** @var  PollRepository */
    private $pollRepository;
    private $collectionName = 'Poll Picture';

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


    public function mine(Request $request)
    {

        $userCheck = Auth::guard('api')->check();
        if (!$userCheck) {
            return $this->sendResponse([], 'Polls retrieved successfully');
        }
        $userID = Auth::guard('api')->user()->id;
        $polls = Poll::where('user_id', $userID)->get();
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

        //email
        //   'user_id' => 'nullable|integer',

        $userCheck = Auth::guard('api')->check();
        DB::beginTransaction();
        $input = $request->all();
        if (!empty(@$input['email']) && !$userCheck) {
            $input['name'] = 'New User';
            $input['password'] = 'password';
            $user = $this->createUser($input);
            $input['user_id'] = $user->id;
        }
        if ($userCheck) {
            $input['user_id'] = Auth::guard('api')->user()->id;
        }
        $poll = new Poll();
        $input['code'] = $this->nextCode($poll);
        $poll = $this->pollRepository->create($input);
        $__response = $this->uploadOneFile($request, $poll, $this->collectionName, 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        if (!empty(@$input['options'])) {
            foreach ($input['options'] as $key => $eachOptions) {
                $poll->pollOptions()->create([
                    'name' => $key,
                    'value' => $eachOptions,
                    'count' => 0
                ]);
            }
        }
        DB::commit();
        if ($this->hasFile) {
            $poll = $this->pollRepository->find($poll->id);
            $mediaItems = $poll->getMedia($this->collectionName);
            $input['url'] = $mediaItems[0]->getFullUrl();
            $poll = $this->pollRepository->update($input, $poll->id);
        }
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
        // $poll = $this->pollRepository->find($id);
        $poll = Poll::where(function ($q) use ($id) {
            $q
                ->orWhere('id', $id)
                ->orWhere('code', $id);
        })->get();

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
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Poll $poll */
        $poll = $this->pollRepository->find($id);

        if (empty($poll)) {
            return $this->sendError('Poll not found');
        }

        $this->deleteOneFile($poll, $this->collectionName);
        $poll->delete();

        return $this->sendSuccess('Poll deleted successfully');
    }
}
