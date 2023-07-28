<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Consulta de Órdenes de Trabajo</title>

    <!-- Incluir CountUp.js a través de CDN -->
    <!--script src="https://cdn.jsdelivr.net/npm/countup.js"></script-->
</head>
<body>

    <h1>Interaccion de los usuarios</h1>
    <form action="{{ route('procesar.formulario') }}" method="get">
        <label for="desde">Desde:</label>
        <input type="date" id="desde" name="desde">

        <label for="hasta">Hasta:</label>
        <input type="date" id="hasta" name="hasta">

        <button type="submit">Consultar</button>
    </form>
    <h2>Interacciones</h2>
    <p>Resultados para el rango de fechas: {{ $desde }} - {{ $hasta }}</p>


    <div class="row">
  <div class="col-lg-3 col-6 text-center">
    <div class="border border-light border-1 border-radius-md py-3">
      <h6 class="text-primary text-gradient mb-0">Earnings</h6>
      <h4 class="font-weight-bolder"><span class="small">$ </span><span id="state1" countTo="23980"></span></h4>
    </div>
  </div>
  <div class="col-lg-3 col-6 text-center">
    <div class="border border-light border-1 border-radius-md py-3">
      <h6 class="text-primary text-gradient mb-0">Customers</h6>
      <h4 class="font-weight-bolder"><span class="small">$ </span><span id="state2" countTo="2400"></span></h4>
    </div>
  </div>
  <div class="col-lg-3 col-6 text-center mt-4 mt-lg-0">
    <div class="border border-light border-1 border-radius-md py-3">
      <h6 class="text-primary text-gradient mb-0">Avg. Value</h6>
      <h4 class="font-weight-bolder"><span class="small">$ </span><span id="state3" countTo="48"></span></h4>
    </div>
  </div>
  <div class="col-lg-3 col-6 text-center mt-4 mt-lg-0">
    <div class="border border-light border-1 border-radius-md py-3">
      <h6 class="text-primary text-gradient mb-0">Refund Rate</h6>
      <h4 class="font-weight-bolder"><span id="state4" countTo="4"></span><span class="small"> %</span></h4>
    </div>
  </div>
</div>

    <!-- Contenedor para la gráfica de barras -->
    <div style="width: 80%; margin: auto;">
        <canvas id="graficaBarras"></canvas>
    </div>

    <!-- Contenedor para la gráfica de dona -->
    <div style="width: 80%; margin: auto;">
        <canvas id="graficaDonut"></canvas>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/cUp.js') }}"></script>



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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


</body>
</html>

