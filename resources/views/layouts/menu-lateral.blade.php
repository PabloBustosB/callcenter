<!-- [ Layout sidenav ] Start -->
<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo">
        {{-- <span class="app-brand-logo demo">
            <img src="{{ asset('assets/img/viva.png') }}" alt="Brand Logo" class="img-fluid" />
        </span> --}}
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/img/brand-viva.png') }}" alt="Brand Logo" class="img-fluid" />
        </a>
        {{-- <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a> --}}
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">
        <li class="sidenav-header small font-weight-semibold">Telefonica VIVA</li>
        <li class="sidenav-item active">
            <a href="{{ route('home') }}" class="sidenav-link">
                <i class="sidenav-icon feather icon-home icono-verde"></i>
                <div>Home</div>
            </a>
        </li>
        @if (Auth::user()->tipo == 'usuario')
        
        <li class="sidenav-item active">
            <a href="{{ route('asistente.index') }}" class="sidenav-link">
                <i class="sidenav-icon feather icon-user icono-verde"></i>
                <div>Asistente Virtual</div>
            </a>
        </li>
        @endif
        @if (Auth::user()->tipo == 'tecnico')
        {{-- <li class="sidenav-item active">
            <a href="{{ route('ordentrabajo.index') }}" class="sidenav-link">
                <i class="sidenav-icon feather icon-check icono-verde"></i>
                <div>Ordenes de Servicio Tecnico</div>
            </a>
        </li> --}}

        <li class="sidenav-item active">
            <a href="{{ route('tecnico.ordenesTrabajo') }}" class="sidenav-link">
                <i class="sidenav-icon feather icon-check icono-verde"></i>
                <div>Ordenes de trabajo del tecnico</div>
            </a>
        </li>
        @endif
        @if (Auth::user()->tipo == 'admin')
            <li class="sidenav-item active">
                <a href="{{ route('tecnicos.index') }}" class="sidenav-link">
                    <i class="sidenav-icon feather icon-users icono-verde"></i>
                    <div>Tecnicos</div>
                </a>
            </li>
            <li class="sidenav-item active">
                <a href="{{ route('tipo-servicios-tecnicos.index') }}" class="sidenav-link">
                    <i class="sidenav-icon feather icon-check icono-verde"></i>
                    <div>Tipo de Servicio Tecnico</div>
                </a>
            </li>
            <li class="sidenav-item active">
                <a href="{{ route('interacciones.index') }}" class="sidenav-link">
                    <i class="sidenav-icon feather icon-phone icono-verde"></i>
                    <div>Interacciones</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon feather icon-play icono-verde"></i>
                    <div>Servicios</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item active">
                        <a href="{{ route('planinternets.index') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-monitor icono-verde"></i>
                            <div>Planes de internet</div>
                        </a>
                    </li>
                    <li class="sidenav-item active">
                        <a href="{{ route('plan-llamadas.index') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-phone icono-verde"></i>
                            <div>Planes de llamadas</div>
                        </a>
                    </li>
                    {{-- <li class="sidenav-item active">
                        <a href="" class="sidenav-link">
                            <i class="sidenav-icon feather icon-shopping-cart icono-verde"></i>
                            <div>Combos promocionales</div>
                        </a>
                    </li> --}}
                </ul>
            </li>

            <li class="sidenav-item">
                <a href="javascript:" class="sidenav-link sidenav-toggle">
                    <i class="sidenav-icon feather icon-file-text icono-verde"></i>
                    <div>Reportes</div>
                </a>
                <ul class="sidenav-menu">
                    <li class="sidenav-item active">
                        <a href="{{ route('procesar.formulario') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-file icono-verde"></i>
                            <div>Reporte Ordenes de trabajo</div>
                        </a>
                    </li>
                    <li class="sidenav-item active">
                        <a href="{{ route('procesar.factura') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-file icono-verde"></i>
                            <div>Reporte Ingresos por Servicio</div>
                        </a>
                    </li>
                    <li class="sidenav-item active">
                        <a href="{{ route('procesar.reporte') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-file icono-verde"></i>
                            <div>Reporte Interacciones por Año</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
        
        {{-- <li class="sidenav-item active">
            <a href="" class="sidenav-link">
                <i class="sidenav-icon feather icon-pie-chart icono-verde"></i>
                <div>Contratos de clientes</div>
            </a>
        </li> --}}
    </ul>
</div>
<!-- [ Layout sidenav ] End -->
