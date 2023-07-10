<!-- [ Layout sidenav ] Start -->
<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo">
        <span class="app-brand-logo demo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Brand Logo" class="img-fluid" />
        </span>
        <a href="home.php" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Hospital</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">
        <li class="sidenav-item active">
            <a href="dashboard.php" class="sidenav-link">
                <i class="sidenav-icon feather icon-pie-chart"></i>
                <div>Dashboards</div>
            </a>
        </li>
        <!-- Dashboards -->
        <li class="sidenav-header small font-weight-semibold">Doctor ms1</li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-users"></i>
                <div>Consultas</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="mis-consultas.php" class="sidenav-link">
                        <div>Consultas del dia</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="modificar-consulta.php" class="sidenav-link">
                        <div>Buscar Consulta</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidenav-item">
            <a href="medicamentos.php" class="sidenav-link">
                <i class="sidenav-icon feather icon-thermometer"></i>
                <div>Medicamentos</div>
            </a>
        </li>

        <li class="sidenav-item">
            <a href="modificar-internacion.php" class="sidenav-link">
                <i class="sidenav-icon feather icon-activity"></i>
                <div>Pacientes Internados</div>
            </a>
        </li>
        <!-- Layouts -->
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-header small font-weight-semibold">Paciente ms2</li>
        <li class="sidenav-item">
            <a href="ficha-medica.php" class="sidenav-link">
                <i class="sidenav-icon feather icon-user-plus"></i>
                <div>Ficha Medica</div>
            </a>
        </li>
    </ul>
</div>
<!-- [ Layout sidenav ] End -->