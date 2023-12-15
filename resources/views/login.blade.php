<!DOCTYPE html>
<html lang="en" class="material-style layout-fixed">
<head>
    <title>Login</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description"
        content="Empire Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="Empire, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Srthemesvilla" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/icons.png') }}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="assets/css/shreerang-material.css">
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/pages/authentication.css">
</head>

<body>
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ content ] Start -->
    <div class="authentication-wrapper authentication-1 px-4">
        <div class="authentication-inner py-5">

            <!-- [ Logo ] Start -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="ui-w-60">
                    <div class="w-100 position-relative">
                        <img src="assets/img/viva.png" alt="Brand Logo" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- [ Logo ] End -->
            <form action="{{ route('inicia-sesion') }}" method="POST" class="my-5">
                @csrf
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" required autocomplete="disable">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" required>
                </div>
                    <button type="submit" class="btn btn-success btn-block">Acceder</button>
            </form>
            <div class="text-center text-muted">
                <p>No tienes cuenta? <a class="enlace" href="{{ route('registro') }}"> Registrate</a></p>
            </div>

        </div>
    </div>
</body>

</html>
