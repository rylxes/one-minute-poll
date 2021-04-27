@component('mail::message')
    Hello, You have an invitation from {{$company->name}}, to join their team

    @component('mail::button', ['url' => url('join',$company->id)])
        Click here to continue
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
