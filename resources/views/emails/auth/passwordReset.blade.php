@component('mail::message')
# Hello

You are receiving this email because we received a password reset<br>
request for your account.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/password/reset/'.$token])
Reset Password
@endcomponent

If you did not request a password reset, no further action is required.<br><br>

Regards<br>
Laravel<br>
@endcomponent
