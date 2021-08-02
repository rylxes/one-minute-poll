@component('mail::message')
    You have just created a poll

    Poll Code: {{$poll->code}}
    @component('mail::button', ['url' => url('dashboard')])
        View Dashboard
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
