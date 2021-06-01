@component('mail::message')
    Hello, You have an invitation from {{$company->name}}, to join their team

    @component('mail::button', ['url' => $url])
        Click here to continue
    @endcomponent

    URL : {{$url}}

    Thanks,
    {{ config('app.name') }}
@endcomponent
