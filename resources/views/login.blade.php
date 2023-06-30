<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{ route('inicia-sesion') }}" method="POST">
        @csrf
        <label>Username:</label>
        <input type="text" name="username" required autocomplete="disable">
        <label>Password:</label>
        <input type="password" name="password" required>
        <p>No tienes cuenta? <a href="{{ route('registro')}}"> Registrate</a></p>
        <button type="submit" >Acceder</button>
    </form>
</body>
</html>