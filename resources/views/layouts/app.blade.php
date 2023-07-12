<!DOCTYPE html>
<html lang="en" class="material-style layout-fixed">
<head>
    @include('layouts.head')
</head>
<body>
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            @include('layouts.menu-lateral')
            <div class="layout-container">
                @include('layouts.nav-top')
                <div class="layout-content">
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    @include('layouts.footer')
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    @include('layouts.scrips')
</body>

</html>