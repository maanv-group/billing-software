@component('mail::message')
# You are now Registered!

You can now login by clicking he button below

@component('mail::button', ['url' => $url])
Login Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
