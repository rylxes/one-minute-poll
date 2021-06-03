@component('mail::message')
    You are receiving this email because we received a password reset request for your account.

    Click on this URL to Continue : {{$url}}

    Thanks,
    {{ config('app.name') }}
@endcomponent

