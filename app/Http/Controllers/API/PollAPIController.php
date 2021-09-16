<?php

namespace App\Http\Controllers\API;

use App\Events\AccountInvitation;
use App\Events\PollCreated;
use App\Events\PollInvitation;
use App\Events\PollShared;
use App\Http\Requests\API\CreatePollAPIRequest;
use App\Http\Requests\API\ListPollAPIRequest;
use App\Http\Requests\API\OnlyEmails;
use App\Http\Requests\API\SearchAPIRequest;
use App\Http\Requests\API\SharePolls;
use App\Http\Requests\API\UpdatePollAPIRequest;
use App\Models\Poll;
use App\Models\User;
use App\Models\Vote;
use App\Models\VoteValue;
use App\Repositories\PollRepository;
use App\Traits\FilesTrait;
use App\Traits\OptionsTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\PollResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;
use Stevebauman\Location\Facades\Location;

/**
 * Class PollController
 * @group Poll
 * @package App\Http\Controllers\API
 */
class PollAPIController extends AppBaseController
{
    use FilesTrait;
    use OptionsTrait;

    /** @var  PollRepository */
    private $pollRepository;
    private $polls;
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
//        $polls = $this->pollRepository->all(
//            $request->except(['skip', 'limit']),
//            $request->get('skip'),
//            $request->get('limit')
//        );


        $polls = Poll::orderBy('created_at', 'desc')
            ->get();

        $res = PollResource::collection($polls);
        //  $res = $res->

        return $this->sendResponse($res, 'Polls retrieved successfully');
    }


    public function listAll(ListPollAPIRequest $request)
    {
        $input = $request->all();
        $uuid = $request->header("UUID");
        $lat = $input['lat'];
        $lon = $input['long'];

        $tbl = DB::table("polls");
        $tbl = $tbl->whereNotNull('lat');
        $tbl = $tbl->whereNotNull('long');
        $tbl = $tbl->where(function ($query) use ($uuid) {
            if (Auth::guard('api')->check()) {
                $query
                    ->where('user_id', '!=', Auth::guard('api')->user()->id);
            }
            if (!empty($uuid)) {
                $query
                    ->where('uuid', '!=', $uuid);
            }
        });
        $tbl = $tbl->select("polls.id", DB::raw("6371 * acos(cos(radians(" . $lat . "))
                                * cos(radians(polls.lat)) * cos(radians(polls.long) - radians(" . $lon . "))
                                + sin(radians(" . $lat . ")) * sin(radians(polls.lat))) AS distance"));
        $tbl = $tbl->orderBy('distance');
        $tbl = $tbl->orderBy('created_at', 'desc');
        $tbl = $tbl->limit(6);
        $tbl = $tbl->get();
        $this->polls = $p = collect([]);
        $tbl->map(function ($val) {
            $poll = Poll::find($val->id);
            $poll->distance = $val->distance;
            $this->polls->add($poll);
        });
        $tbl = PollResource::collection($this->polls);
        return $this->sendResponse($tbl, 'Polls retrieved successfully');
    }


    public function sharedWithMe(Request $request)
    {

        $uuid = $request->header("UUID");
        $user = User::where('uuid', $uuid)->first();
        if (empty($user)) {
            return $this->sendResponse([], 'Polls retrieved successfully');
        }

        $polls = Poll::whereHas('shared', function ($q) use ($user) {
            $q->where('share_polls.email', $user->email);
        })
            ->orderBy('created_at', 'desc')
            ->get();
        //dd($uuid, $polls);
        return $this->sendResponse(PollResource::collection($polls), 'Polls retrieved successfully');
    }

    private $allInvited;
    private $unRegistered;

    public function sharePolls(SharePolls $request)
    {
        //$uuid = $request->header("UUID");
        //$hasAuth = @$request->header("HasAuth");
        $input = $request->all();
        $email = collect(explode(",", $input['emails']));
        //$userCheck = Auth::guard('api')->check();
        // dd(Auth::user());
        $this->allInvited = collect([]);
        $this->unRegistered = collect([]);
        $poll = Poll::find($input['poll_id']);
        $email->each(function ($val) use ($poll) {
            $user = User::where('email', $val)->first();
            $this->allInvited->add($val);
            if (empty($user)) {
                $this->unRegistered->add($val);
            }
            $poll->shared()->create(['email' => $val]);
        });
        // event(new AccountInvitation($this->unRegistered));
        // event(new PollShared($poll, $this->allInvited));

        return $this->sendResponse([
            'shared' => $this->allInvited->toArray(),
            'unregistered' => $this->unRegistered->toArray(),
        ], 'Polls shared successfully');

    }


    public function mine(Request $request)
    {

        $uuid = $request->header("UUID");
        $hasAuth = @$request->header("HasAuth");

        $userCheck = Auth::guard('api')->check();
        // dd(Auth::user());
        if (!$userCheck && ($hasAuth != "YES")) {
            return $this->sendResponse([], 'Polls retrieved successfully');
        }


        //$userID = Auth::guard('api')->user()->id;
//        $polls = Poll::where('user_id', $userID)
//            ->orderBy('created_at', 'desc')
//            ->get();


        $polls = Poll::where(function ($query) use ($uuid) {
            if (Auth::guard('api')->check()) {
                $query
                    ->orWhere('user_id', Auth::guard('api')->user()->id);
            }
            if (!empty($uuid)) {
                $query
                    ->orWhere('uuid', $uuid);
            }
        })
            ->orderBy('created_at', 'desc')
            ->get();

        //dd($uuid, $polls);
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
            $user = Auth::guard('api')->user();
            $input['user_id'] = $user->id;
            if (empty($user->uuid)) {
                $user->uuid = $input['uuid'];
                $user->save();
            }
        }
        $poll = new Poll();
        $input['code'] = $this->nextCode($poll);
        if ($position = Location::get($request->ip())) {
            $input['ip_country'] = $position->countryName;
            $input['ip_address'] = $position->ip;
        }
        $poll = $this->pollRepository->create($input);
        $__response = $this->uploadOneFile($request, $poll, $this->collectionName, 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        $this->generateOptions($poll, $input);
        DB::commit();
        if ($this->hasFile) {
            $poll = $this->pollRepository->find($poll->id);
            $mediaItems = $poll->getMedia($this->collectionName);
            $input['url'] = $mediaItems[0]->getFullUrl();
            $poll = $this->pollRepository->update($input, $poll->id);
        }
        event(new PollCreated($poll));
        return $this->sendResponse(new PollResource($poll), 'Poll saved successfully');
    }

    /**
     * By Branch.
     */
    public function search(SearchAPIRequest $request)
    {
        $input = $request->all();
        $result = Poll::findByName($input['name']);
        return $this->sendResponse(PollResource::collection($result), 'Polls retrieved successfully');
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
        })->first();

        if (empty($poll)) {
            return $this->sendError('Poll not found');
        }
        // dd($poll);

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
        // dd($newInput, $input, $id);
        /** @var Poll $poll */
        $poll = $this->pollRepository->find($id);
        if (empty($poll)) {
            return $this->sendError('Poll not found');
        }
        foreach ($input as $key => $eachInput) {
            if (!empty($eachInput)) {
                $newInput[$key] = $eachInput;
            }
        }
        unset($newInput['email']);
        DB::beginTransaction();
        $poll = $this->pollRepository->update($newInput, $id);
        $__response = $this->uploadOneFile($request, $poll, $this->collectionName, 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        if ($this->hasFile) {
            $poll = $this->pollRepository->find($poll->id);
            $mediaItems = $poll->getMedia($this->collectionName);
            $input['url'] = $mediaItems[0]->getFullUrl();
            $poll = $this->pollRepository->update($input, $poll->id);
        }
        //event(new PollCreated($poll));
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
