@component('mail::message')
    Hello {{$user->name}}, You have successfully Changed your password

    Thanks,
    {{ config('app.name') }}
@endcomponent
