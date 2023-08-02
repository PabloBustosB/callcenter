<!DOCTYPE html>
<html lang="en">

<head>
    <title>Call Center</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description"
        content="Empire Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="Empire, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Srthemesvilla" />
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ public_path('assets/fonts/fontawesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ public_path('assets/fonts/feather.css') }}" type="text/css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ public_path('assets/css/bootstrap-material.css') }}">
    <link rel="stylesheet" href="{{ public_path('assets/css/shreerang-material.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ public_path('assets/css/uikit.css') }}" type="text/css">

    <!-- Libs -->
    <link rel="stylesheet" href="{{ public_path('assets/libs/perfect-scrollbar/perfect-scrollbar.css') }}"
        type="text/css">
</head>

<body>
    <h1> Contrato de Instalación </h1>
    <div class="card-body">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <th>Cliente:</th>
                    <th></th>
                    <th>Juan Peres</th>
                    {{-- @foreach ($interacciones as $interaccion)
                        <tr>
                            <td>{{ $interaccion->id }}</td>
                            <td>{{ $interaccion->fecha }}</td>
                            <td>{{ $interaccion->descripcion }}</td>
                            <td>{{ $interaccion->tipo_servicio->nombre_servicio }}</td>
                            <td>{{ $interaccion->usuario->nombre }}</td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
