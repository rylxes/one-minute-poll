<?php

namespace App\Observers;

use App\Models\PollOption;

class pollOptionObserver
{
    /**
     * Handle the PollOption "created" event.
     *
     * @param  \App\Models\PollOption  $pollOption
     * @return void
     */
    public function created(PollOption $pollOption)
    {
        //
    }

    /**
     * Handle the PollOption "updated" event.
     *
     * @param  \App\Models\PollOption  $pollOption
     * @return void
     */
    public function updated(PollOption $pollOption)
    {
        //
    }

    /**
     * Handle the PollOption "deleted" event.
     *
     * @param  \App\Models\PollOption  $pollOption
     * @return void
     */
    public function deleted(PollOption $pollOption)
    {
        //
    }

    /**
     * Handle the PollOption "restored" event.
     *
     * @param  \App\Models\PollOption  $pollOption
     * @return void
     */
    public function restored(PollOption $pollOption)
    {
        //
    }

    /**
     * Handle the PollOption "force deleted" event.
     *
     * @param  \App\Models\PollOption  $pollOption
     * @return void
     */
    public function forceDeleted(PollOption $pollOption)
    {
        //
    }
}
