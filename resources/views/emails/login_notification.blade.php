<!DOCTYPE html>
<html>
<head>
    <title>Login Notification</title>
</head>
<body>
    <p>Hello {{ $user->name }},</p>
    <p>You have successfully logged in to your account.</p>
    <p>Best regards,<br>{{ config('app.name') }}</p>
</body>
</html>
