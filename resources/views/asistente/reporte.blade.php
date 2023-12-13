 <!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <link href="{{ asset('css/flatpickr.min.css') }}" rel="stylesheet" >
    <title>Gráfico de Líneas</title>
    <!-- Agrega estilos personalizados para el margen inferior -->
    <style>
        .container-margen {
            margin-bottom: 70px; /* Ajusta el valor según el espacio deseado */
        }
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container mt-4">
        <h1>Reporte de Interacciones</h1>
        <form class="form-inline" method="get" action="{{ route('procesar.reporte') }}">
            <div class="row">
                <div class="col-auto">
                    <label for="ano">Seleccione el año:</label>
                    <input type="text" class="form-control"  name="ano" readonly value="2023">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-warning mt-4">Consultar</button>
                </div>
            </div>
        </form>
       <div id="titulo">
            <h2>Reporte de las interacciones</h2>
            <p>Resultados del año: {{ $ano }} </p>
       </div>
       <div class="row">
            <button type="button" class="btn btn-primary" id="botonExportar">Exportar a PDF</button>
       </div>

    </div>

   <!-- Aquí mostrarás el gráfico de líneas (puedes usar el código de gráfico que hemos creado anteriormente) -->
    <div id="graficoLineas" class="container-margen">
        <div style="width: 80%; margin: auto;">
            <canvas id="lineChart"></canvas>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/cUp.js') }}"></script>
    <script src="{{ asset('js/html2canvas.js') }}"></script>
    <script src="{{ asset('js/jspdf.min.js') }}"></script>
    <script src="{{ asset('js/flatpickr.js') }}"></script>
    <script>
        // Obtener los datos desde PHP
        var datos = {!! json_encode($datos) !!};

        // Obtener los nombres únicos de los meses
        var mesesUnicos = [...new Set(datos.map(item => item.mes))];

        // Filtrar los datos por tipo de servicio para cada mes
        var instalacionData = mesesUnicos.map(mes => {
            var data = datos.find(item => item.mes === mes && item.nombre_servicio === 'Instalación domiciliaria');
            return data ? data.cantidad : 0;
        });

        var solicitarInfoData = mesesUnicos.map(mes => {
            var data = datos.find(item => item.mes === mes && item.nombre_servicio === 'Soporte técnico brindado por asistente virtual');
            return data ? data.cantidad : 0;
        });

        var revisionEquiposData = mesesUnicos.map(mes => {
            var data = datos.find(item => item.mes === mes && item.nombre_servicio === 'Contratar un servicio');
            return data ? data.cantidad : 0;
        });

        // Configuración del gráfico de líneas
        var config = {
            type: 'line',
            data: {
                labels: mesesUnicos,
                datasets: [
                    {
                        label: 'Instalación domiciliaria',
                        data: instalacionData,
                        borderColor: 'rgb(255, 99, 132)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    },
                    {
                        label: 'Soporte técnico brindado por asistente virtual',
                        data: solicitarInfoData,
                        borderColor: 'rgb(54, 162, 235)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    },
                    {
                        label: 'Contratar un servicio',
                        data: revisionEquiposData,
                        borderColor: 'rgb(75, 192, 192)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    }
                ]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Cantidad de Servicios por Mes'
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Crear el gráfico de líneas
        var ctx = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(ctx, config);
    </script>

    <!-- Agrega el código JavaScript para configurar flatpickr -->
<script>
    flatpickr("#ano", {
        altInput: true,
        altFormat: "Y",
        dateFormat: "Y",
        minDate: "2000-01-01",
        maxDate: "2099-12-31",
    });
</script>

<script>
        document.getElementById('botonExportar').addEventListener('click', function() {
            // Obtener los elementos que deseas incluir en el reporte PDF
            const titulo = document.getElementById('titulo');
            const graficoLineas = document.getElementById('graficoLineas');

            // Convertir los elementos en imágenes utilizando html2canvas
            html2canvas(titulo).then(function(canvasTitulo) {
                html2canvas(graficoLineas).then(function(canvasLineas) {
                        // Obtener la URL de las imágenes en formato base64
                        const imgDataTitulo = canvasTitulo.toDataURL('image/png');
                        const imgDataLineas = canvasLineas.toDataURL('image/png');

                        // Crear el objeto PDF utilizando DomPDF
                        const pdf = new jsPDF('l', 'mm', 'a4'); // 'l' para orientación horizontal, 'mm' para unidades en milímetros, 'a4' para tamaño de papel A4

                        // Agregar las imágenes al PDF
                        pdf.addImage(imgDataTitulo, 'PNG', 100, 10, 200, 20);
                        pdf.addImage(imgDataLineas, 'PNG', 20, 30, 250, 150); // Los parámetros representan la posición y tamaño de la imagen en el PDF


                        // Guardar el PDF con el nombre 'reporte.pdf'
                        pdf.save('reporte.pdf');
                    });
                });
        });
</script>

@endsection
</body>
</html>

