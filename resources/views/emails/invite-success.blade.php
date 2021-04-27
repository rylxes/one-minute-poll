@component('mail::message')
    Hello {{$user->name}}, You have successfully registered under {{$company->name}}, you can now login to checkout all the new features


    Thanks,
    {{ config('app.name') }}
@endcomponent
