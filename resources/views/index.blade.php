<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="color:red;">{{ $title }}</h1>
    <form method="post" action="{{ route('login_route') }}">
        {{ csrf_field() }}
        Username: <input type="text" name="username" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>