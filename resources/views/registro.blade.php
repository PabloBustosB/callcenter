<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Registro</title>

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

    <!-- Icon fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.css">
    <link rel="stylesheet" href="assets/fonts/linearicons.css">
    <link rel="stylesheet" href="assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="assets/css/shreerang-material.css">
    <link rel="stylesheet" href="assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <!-- Page -->
    <link rel="stylesheet" href="assets/css/pages/authentication.css">
</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ content ] Start -->
    <div class="authentication-wrapper authentication-1 px-4">
        <div class="authentication-inner py-5">

            <!-- [ Logo ] Start -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="ui-w-60">
                    <div class="w-100 position-relative">
                        <img src="assets/img/viva.png" alt="Brand Logo" class="img-fluid">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- [ Logo ] End -->

            <form action="{{ route('validar-registro') }}" method="POST" class="my-5">
                @csrf
                <div class="form-group">
                    <label class="form-label">Nombre:</label>
                    <input type="text" name="nombre" required autocomplete="disable" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Cedula:</label>
                    <input type="text" name="ci" required autocomplete="disable" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Direccion:</label>
                    <input type="text" name="dir" required autocomplete="disable" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Telefono:</label>
                    <input type="text" name="telefono" required autocomplete="disable" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Username:</label>
                    <input type="text" name="username" required autocomplete="disable" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" required autocomplete="disable" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Password:</label>
                    <input type="password" name="password" required class="form-control">
                </div>
                <button type="submit" class="btn btn-success btn-block mt-4">Registrarse</button>
            </form>
            <div class="text-center text-muted">
                <p>Tienes cuenta? <a class="enlace" href="{{ route('login') }}"> Iniciar Sesion</a></p>
            </div>
        </div>
    </div>
</body>

</html>
