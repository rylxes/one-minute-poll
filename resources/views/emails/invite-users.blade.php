@component('mail::message')
    Hello, You have an invitation from {{$company->name}}, to join their team

    @component('mail::button', ['url' => url('dashboard')])
        Click Here to Continue
    @endcomponent

    URL : {{$url}}

    Thanks,
    {{ config('app.name') }}
@endcomponent

