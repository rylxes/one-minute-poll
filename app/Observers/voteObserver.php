<?php

namespace App\Observers;

use App\Exceptions\VoteException;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;

class voteObserver
{
    /**
     * Handle the Vote "created" event.
     *
     * @param \App\Models\Vote $vote
     * @return void
     */
    public function created(Vote $vote)
    {
        //
    }

    public function validate(Vote $model)
    {

        $res = Vote::where(function ($query) use ($model) {

            if (Auth::guard('api')->check()) {
                $query
                ->orWhere('user_id', Auth::guard('api')->user()->id);
            }
            if (!empty($model->uuid)) {
                $query
                    ->orWhere('uuid', $model->uuid);
            }

        })->where('poll_id', $model->poll_id)
            ->get();

        //dd($res, $model->uuid, $model->poll_id);
        if (!$res->isEmpty()) {
            //throw new VoteException("You cannot vote on this poll");
            throw new VoteException("You have already voted in this poll");
        }
    }


    public function creating(Vote $model)
    {
        $this->validate($model);
        if (Auth::guard('api')->check()) {
            $model->user_id = Auth::guard('api')->user()->id;
        }
    }

    public function saving(Vote $model)
    {
        $this->validate($model);
        if (Auth::guard('api')->check()) {
            $model->user_id = Auth::guard('api')->user()->id;
        }
    }

    /**
     * Handle the Vote "updated" event.
     *
     * @param \App\Models\Vote $vote
     * @return void
     */
    public function updated(Vote $vote)
    {
        //
    }

    /**
     * Handle the Vote "deleted" event.
     *
     * @param \App\Models\Vote $vote
     * @return void
     */
    public function deleted(Vote $vote)
    {
        //
    }

    /**
     * Handle the Vote "restored" event.
     *
     * @param \App\Models\Vote $vote
     * @return void
     */
    public function restored(Vote $vote)
    {
        //
    }

    /**
     * Handle the Vote "force deleted" event.
     *
     * @param \App\Models\Vote $vote
     * @return void
     */
    public function forceDeleted(Vote $vote)
    {
        //
    }
}
