@component('mail::message')
    Hello, You have an invitation to join {{config('app.name')}}

    Click on this URL to Continue : {{$url}}

    Thanks,
    {{ config('app.name') }}
@endcomponent

