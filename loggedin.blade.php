<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logged In</title>
</head>
<body>
    <h1>Welcome : {{ Auth::user()->name }}</h1>
    <h2>Email: {{ Auth::user()->email }} </h2>
</body>
</html>