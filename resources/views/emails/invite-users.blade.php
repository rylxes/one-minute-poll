@component('mail::message')
    Hello, You have an invitation from {{$company->name}}, to join their team

    Click on this URL to Continue : {{$url}}

    Thanks,
    {{ config('app.name') }}
@endcomponent

