<html>
<head></head>
<body>
<h3>Hi {{ $name }}</h3>
<h4>Thank you for your patience, your account has been activated.  You can login now</h4>

<h4><a href="{{ getenv('APP_URL').'/login'}}">Click here to login</a></h4>

</body>
</html>
