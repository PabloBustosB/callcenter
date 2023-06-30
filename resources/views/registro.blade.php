<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <form action="{{ route('validar-registro') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required autocomplete="disable">
        <label>Cedula:</label>
        <input type="text" name="ci" required autocomplete="disable">
        <label>Direccion:</label>
        <input type="text" name="dir" required autocomplete="disable">
        <label>Telefono:</label>
        <input type="text" name="telefono" required autocomplete="disable">
        <label>Username:</label>
        <input type="text" name="username" required autocomplete="disable">
        <label>Email:</label>
        <input type="email" name="email" required autocomplete="disable">
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit" >Registrarse</button>
    </form>
</body>
</html>