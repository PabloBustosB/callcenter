<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body>
    <div class="container" style="display: flex;justify-content: center;align-items: center;">
        {{-- <img src="{{ asset('assets/img/logo.png') }}" alt="img"> --}}
        <h1> Empresa de Telefonia </h1>
        
    </div>
    <div style="display: flex;
    justify-content: center;
    align-items: center;">
    <h3> Visita tecnica</h3>
    </div>
    <div class="card-body">
        
            <table style="display: flex;
            justify-content: center;
            align-items: center;">
                <tbody>
                    <tr style="margin-bottom: 10px;">
                        <th style="
                        padding: 12px;
                        text-align: left;">Cliente:</th>
                        <th ></th>
                        <th>Juan Peres</th>
                    </tr>
                    <tr></tr>
                    <tr style="margin-bottom: 10px;">
                        <th style="
                        padding: 12px;
                        text-align: left;">Tipo de servicio:</th>
                        <th ></th>
                        <th>Juan Peres</th>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <th style="
                        padding: 12px;
                        text-align: left;">Descripcion del problema:</th>
                        <th ></th>
                        <th>Juan Peres</th>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <th style="
                        padding: 12px;
                        text-align: left;">Tecnico encargado:</th>
                        <th ></th>
                        <th>Juan Peres</th>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <th style="
                        padding: 12px;
                        text-align: left;">Domicilio:</th>
                        <th ></th>
                        <th>Juan Peres</th>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <th style="
                        padding: 12px;
                        text-align: left;">Numero de Celular:</th>
                        <th ></th>
                        <th>Juan Peres</th>
                    </tr>
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
</body>

</html>
