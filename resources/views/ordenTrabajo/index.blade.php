<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Consulta de Órdenes de Trabajo</title>


    <style>
        .grafica-container {
            background-color: rgba(12, 98, 10, 0.5); /* Color gris con transparencia */              }
        .numeros{
            background-color: rgba(12, 98, 88, 0.5);
        }
    </style>
</head>
<body>

<div class="container"
    <div class="d-flex align-items-center vh-100">
            <div class="mx-auto">
                <h1>Consulta de Órdenes de Trabajo</h1>
                <form action="{{ route('procesar.formulario') }}" method="get">
                    <label for="desde">Desde:</label>
                    <input type="date" id="desde" name="desde">

                    <label for="hasta">Hasta:</label>
                    <input type="date" id="hasta" name="hasta">

                    <button type="submit">Consultar</button>
                    <!-- Botón para exportar el reporte -->
                    <!-- Botón para exportar el reporte -->
                    @if ($desde && $hasta)
                        <a href="{{ route('reporte.ordenes', ['desde' => $desde, 'hasta' => $hasta]) }}" class="btn btn-primary">Exportar</a>
                    @else
                        <button class="btn btn-primary" disabled>Exportar</button>
                        <p>Aún no se ha realizado la consulta.</p>
                    @endif
                </form>
                <div id="titulo">
                    <h2>Consulta de Órdenes de Trabajo</h2>
                    <p>Resultados para el rango de fechas: {{ $desde }} - {{ $hasta }}</p>
                </div>
                <button type="button" id="botonExportar">Exportar a PDF</button>
            </div>
    </div>
</div>

<div id="indice" class="row p-3 mb-2">
  <div class="col-lg-3 col-6 text-center">
    <div class="border border-light border-3 border-radius-md py-3 numeros">
      <h6 class="text-primary text-gradient mb-0">total</h6>
      <h4 class="font-weight-bolder"><span class="small"> </span><span id="state1" countTo="{{ isset($contadorOrdenes) ? $contadorOrdenes->contador : 0 }}"></span></h4>
    </div>
  </div>
  <div class="col-lg-3 col-6 text-center">
    <div class="border border-light border-3 border-radius-md py-3 numeros">
      <h6 class="text-primary text-gradient mb-0">{{ isset($ordenesPorEstado[0]) ? $ordenesPorEstado[0]->estado : 'Estado1' }}</h6>
      <h4 class="font-weight-bolder"><span class="small"> </span><span id="state2" countTo="{{ isset($ordenesPorEstado[0]) ? $ordenesPorEstado[0]->contador : 0 }}"></span></h4>
    </div>
  </div>
  <div class="col-lg-3 col-6 text-center mt-4 mt-lg-0">
    <div class="border border-light border-3 border-radius-md py-3 numeros">
      <h6 class="text-primary text-gradient mb-0">{{ isset($ordenesPorEstado[1]) ? $ordenesPorEstado[1]->estado : 'Estado2'}}</h6>
      <h4 class="font-weight-bolder"><span class="small"> </span><span id="state3" countTo="{{ isset($ordenesPorEstado[1]) ? $ordenesPorEstado[1]->contador : 0 }}"></span></h4>
    </div>
  </div>
  <div class="col-lg-3 col-6 text-center mt-4 mt-lg-0">
    <div class="border border-light border-3 border-radius-md py-3 numeros">
      <h6 class="text-primary text-gradient mb-0">{{ isset($ordenesPorEstado[2]) ? $ordenesPorEstado[2]->estado : 'Estado3' }}</h6>
      <h4 class="font-weight-bolder"><span id="state4" countTo="{{ isset($ordenesPorEstado[2]) ? $ordenesPorEstado[2]->contador : 0 }}"></span><span class="small"> </span></h4>
    </div>
  </div>
</div>


<div id="graficos-container" class="container text-center grafica-container p-3">
    <div class="row row-cols-2">
        <!-- Contenedor para los gráficos -->
        <div class="col">
            <!-- Contenedor para la gráfica de barras -->
            <div style="width: 100%; margin: auto;">
                <canvas id="graficaBarras"></canvas>

            </div>
        </div>
        <div class="col">
            <!-- Contenedor para la gráfica de dona -->
            <div style="width: 100%; margin: auto;">
                <canvas id="graficaDonut"></canvas>

            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/cUp.js') }}"></script>
    <script src="{{ asset('js/html2canvas.js') }}"></script>
    <script src="{{ asset('js/jspdf.min.js') }}"></script>



    <!-- Script para crear la gráfica de barras -->
    <script>
        var datoBarras = {!! json_encode($ordenes) !!};

        var nombres = datoBarras.map(dato => dato.nombre)
        var contadores = datoBarras.map(dato => dato.contador)

        console.log(nombres,contadores)
        var ctx = document.getElementById('graficaBarras').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: nombres,
                datasets: [{
                    label: 'Contador',
                    data: contadores,
                    backgroundColor: 'rgba(20, 200, 52, 0.8)',
                    borderColor: 'rgba(20, 100, 200, 1)',
                    borderWidth: 1.5
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                        stepSize: 1, // Incremento entre los valores del eje Y
                        callback: function(value, index, values) {
                            return Math.round(value); // Mostrar solo números enteros
                        }
                    }
                    }
                }
            },

        });
    </script>


    <script>
    // Obtener los datos desde el controlador y convertirlos a formato JSON
    var datosDona = {!! json_encode($ordenesPorEstado) !!};

    // Obtener los nombres de los estados y los contadores
    var nombresEstados = datosDona.map(dato => dato.estado);
    var contadoresEstados = datosDona.map(dato => dato.contador);

    // Obtener el contexto del canvas de la gráfica de dona
    var ctxDona = document.getElementById('graficaDonut').getContext('2d');

    // Crear la gráfica de dona
    var myDoughnutChart = new Chart(ctxDona, {
        type: 'doughnut',
        data: {
            labels: nombresEstados,
            datasets: [{
                data: contadoresEstados,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    // Puedes agregar más colores aquí si hay más estados
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    // Puedes agregar más colores aquí si hay más estados
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: true,
                    text: 'Órdenes de Trabajo por Estado'
                }
            },
        },

    });




</script>




<!-- Script para inicializar el contador con CountUp.js -->
<script>
    if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state4')) {
    const countUp = new CountUp('state4', document.getElementById("state4").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
</script>


<!-- Script para capturar la vista en una imagen usando Html2canvas y generar el PDF con JSPDF -->
<script>
        document.getElementById('botonExportar').addEventListener('click', function() {
            // Obtener los elementos que deseas incluir en el reporte PDF
            const indice = document.getElementById('indice');
            const graficosContainer = document.getElementById('graficos-container');
            const titulo = document.getElementById('titulo');

            // Convertir los elementos en imágenes utilizando html2canvas
            html2canvas(indice).then(function(canvasIndice) {
                html2canvas(graficosContainer).then(function(canvasGraficos) {
                    html2canvas(titulo).then(function(canvasTitulo) {
                        // Obtener la URL de las imágenes en formato base64
                        const imgDataIndice = canvasIndice.toDataURL('image/png');
                        const imgDataGraficos = canvasGraficos.toDataURL('image/png');
                        const imgDataTitulo = canvasTitulo.toDataURL('image/png');

                        // Crear el objeto PDF utilizando DomPDF
                        const pdf = new jsPDF('l', 'mm', 'a4'); // 'l' para orientación horizontal, 'mm' para unidades en milímetros, 'a4' para tamaño de papel A4

                        // Agregar las imágenes al PDF
                        pdf.addImage(imgDataTitulo, 'PNG', 100, 10, 200, 20);
                        pdf.addImage(imgDataIndice, 'PNG', 20, 30, 250, 40); // Los parámetros representan la posición y tamaño de la imagen en el PDF
                        pdf.addImage(imgDataGraficos, 'PNG', 20, 70, 250, 120);


                        // Guardar el PDF con el nombre 'reporte.pdf'
                        pdf.save('reporte.pdf');
                    });
                });
            });
        });
    </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>



</body>
</html>

