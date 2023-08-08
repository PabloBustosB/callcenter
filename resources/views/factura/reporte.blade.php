<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('css/flatpickr.min.css') }}" rel="stylesheet" >
    <title>Consulta de Facturas</title>

</head>
<body>

<div class="container"
    <div class="d-flex align-items-center vh-100">
            <div class="container mt-5">
                <h1>Reporte de monto total por Plan</h1>
                <form action="{{ route('procesar.factura') }}" method="get">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="desde">Desde:</label>
                                <input type="date" class="form-control" id="desde" name="desde">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hasta">Hasta:</label>
                                <input type="date" class="form-control" id="hasta" name="hasta">

                            </div>
                        </div>
                        <div class="col-md-4 p-4">
                            <button type="submit" class="btn btn-warning">Consultar</button>
                        </div>
                    </div>
                </form>
                <div id="titulo">
                    <h2>Reporte monto total por Plan</h2>
                    <p>Resultados para el rango de fechas: {{ $desde }} - {{ $hasta }}</p>


                </div>
                <div class="row">
                    <button type="button" class="btn btn-primary" id="botonExportar">Exportar a PDF</button>
                </div>

            </div>
    </div>
</div>


<div id="indice" class="row p-3 mb-2">
  <div class="col-lg-3 col-6 text-center">
    <div class="border border-light border-3 border-radius-md py-3 numeros">
      <h6 class="text-primary text-gradient mb-0">Total ingresos</h6>
      <h4 class="font-weight-bolder"><span class="small"> </span><span id="state1" countTo="{{  $montoTotal}}"></span></h4>
    </div>
  </div>
</div>

<div id="grafico" class="container text-center p-6">
    <canvas id="myChart" width="400" height="200"></canvas>
<div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/cUp.js') }}"></script>
    <script src="{{ asset('js/html2canvas.js') }}"></script>
    <script src="{{ asset('js/jspdf.min.js') }}"></script>
    <script src="{{ asset('js/flatpickr.js') }}"></script>

<script>

            var ctx = document.getElementById('myChart').getContext('2d');
            var datosBarras = {!! json_encode($resultados) !!};
            var tipoPlan = datosBarras.map(dato => dato.tipo_plan);
            var montoTotal = datosBarras.map(dato => dato.monto_total);
            console.log(tipoPlan);
            console.log(montoTotal);
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: tipoPlan,
                    datasets: [{
                        label: 'Monto Total por Plan',
                        data: montoTotal,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
</script>

<!-- Script para capturar la vista en una imagen usando Html2canvas y generar el PDF con JSPDF -->
<script>
        document.getElementById('botonExportar').addEventListener('click', function() {
            // Obtener los elementos que deseas incluir en el reporte PDF
            const titulo = document.getElementById('titulo');
            const grafico = document.getElementById('grafico');

            // Convertir los elementos en imágenes utilizando html2canvas
            html2canvas(titulo).then(function(canvasTitulo) {
                html2canvas(grafico).then(function(canvasGrafico) {
                    html2canvas(indice).then(function(canvasIndice) {
                        // Obtener la URL de las imágenes en formato base64
                        const imgDataTitulo = canvasTitulo.toDataURL('image/png');
                        const imgDataGrafico = canvasGrafico.toDataURL('image/png');
                        const imgDataIndice = canvasIndice.toDataURL('imamge/png');
                        // Crear el objeto PDF utilizando DomPDF
                        const pdf = new jsPDF('l', 'mm', 'a4'); // 'l' para orientación horizontal, 'mm' para unidades en milímetros, 'a4' para tamaño de papel A4

                        // Agregar las imágenes al PDF
                        pdf.addImage(imgDataTitulo, 'PNG', 100, 10, 200, 20);
                        pdf.addImage(imgDataIndice, 'PNG', 120, 30, 120, 50);
                        pdf.addImage(imgDataGrafico, 'PNG', 50, 70, 200, 120); // Los parámetros representan la posición y tamaño de la imagen en el PDF


                        // Guardar el PDF con el nombre 'reporte.pdf'
                        pdf.save('reporteTotal.pdf');
                    });
                });
            });
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



</script>




















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>



</body>
</html>

