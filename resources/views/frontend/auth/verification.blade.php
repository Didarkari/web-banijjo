<!-- resources/views/emails/test.blade.php -->

<!DOCTYPE html>

<html>

<head>

    <title>Test Email</title>

</head>

<body>

    <h1>Hello!</h1>
    <a href="{{ url("otp/verification/$otp") }}">Click & Verify Here</a>

    <p>This is a test email from Laravel 11.</p>

</body>

</html>