<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Servicio de Internet</title>
</head>
<body>
        <img src="assets/img/viva.png" alt="Brand Logo" style="width: 25%; height: 120px;">
        <h1>Solicitud de Servicio de Internet</h1>

        <p>En fecha {{ $data['fecha'] }} se solicito el servicio de {{ $data['servicio'] }} solicitado por {{ $data['usuario'] }} para la adquisición del
            plan {{ $data['plan'] }} con un precio mensual de {{ $data['precio'] }} bs. que ofrece la telefonia VIVA.</p>

        <!-- Agrega más contenido del contrato según tus necesidades -->

        <h2>Términos y Condiciones</h2>
        <ul>
            <li>El Cliente acuerda pagar los cargos mensuales por los servicios de Internet según lo acordado.</li>
            <li>El Proveedor se compromete a proporcionar servicios de Internet de acuerdo con las especificaciones
                acordadas.</li>
            <!-- Agrega más términos y condiciones según sea necesario -->
        </ul>

        <p>Firma del Cliente: ________________________   </p>
        <p>{{ $data['usuario'] }}</p>
        {{-- <p>Firma del Tecnico: ________________________</p> --}}
</body>

</html>
