<?php

namespace App\Observers;

use App\Models\Poll;

class pollObserver
{
    /**
     * Handle the Poll "created" event.
     *
     * @param  \App\Models\Poll  $poll
     * @return void
     */
    public function created(Poll $poll)
    {
        //
    }

    /**
     * Handle the Poll "updated" event.
     *
     * @param  \App\Models\Poll  $poll
     * @return void
     */
    public function updated(Poll $poll)
    {
        //
    }

    /**
     * Handle the Poll "deleted" event.
     *
     * @param  \App\Models\Poll  $poll
     * @return void
     */
    public function deleted(Poll $poll)
    {
        //
    }

    /**
     * Handle the Poll "restored" event.
     *
     * @param  \App\Models\Poll  $poll
     * @return void
     */
    public function restored(Poll $poll)
    {
        //
    }

    /**
     * Handle the Poll "force deleted" event.
     *
     * @param  \App\Models\Poll  $poll
     * @return void
     */
    public function forceDeleted(Poll $poll)
    {
        //
    }
}
