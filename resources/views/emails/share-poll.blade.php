@component('mail::message')
    Hello, a Poll has been shared with you ,

    Click on this URL to Continue : {{$url}}

    ... or search for this Poll ID : {{$poll->code}}

    Thanks,
    {{ config('app.name') }}
@endcomponent

