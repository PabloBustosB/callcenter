<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
        <h1>
            Hola, bienvenido @auth {{Auth::user()->nombre}} @endauth
        </h1>
        </br>
        <a href="{{ route('logout') }}">Cerrar Session</a>
</body>
</html>