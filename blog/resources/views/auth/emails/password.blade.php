Click here to reset your Password: <br>
<a href="{{ $link = url('reset-password', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">{{ $link }}</a>