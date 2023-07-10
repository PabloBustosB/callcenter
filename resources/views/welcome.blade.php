<!DOCTYPE html>
<html lang="en" class="material-style layout-fixed">
<head>
    @include('plantilla.head')
</head>
<body>
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            @include('plantilla.menu-lateral')
            <div class="layout-container">
                @include('plantilla.nav-top')
                <div class="layout-content">
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @yield('contenido')
                    </div>
                    @include('plantilla.footer')
                </div>
            </div>
        </div>
    </div>
    @include('plantilla.scrips')
</body>

</html>