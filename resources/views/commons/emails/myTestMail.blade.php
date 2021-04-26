@component('mail::message')
# {{ $details['title'] }}



Greetings from Owl Hub,

{{ $details['message'] }}


@component('mail::button', ['url' => $details['url']])
Reset Password
@endcomponent
   
Thanks,

{{ config('app.name') }}
@endcomponent