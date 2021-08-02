<?php

namespace App\Providers;

use App\Models\Poll;
use App\Models\PollOption;
use App\Models\Vote;
use App\Models\VoteValue;
use App\Observers\pollObserver;
use App\Observers\pollOptionObserver;
use App\Observers\voteObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'Illuminate\Auth\Events\Verified' => [
            'App\Listeners\LogVerifiedUser',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Poll::observe(pollObserver::class);
        PollOption::observe(pollOptionObserver::class);
        Vote::observe(voteObserver::class);
    }
}
