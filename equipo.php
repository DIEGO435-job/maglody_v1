<?php 
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equipo Maglody</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Header con Bootstrap -->

<!-- Hero del equipo -->
<section class="team-hero text-center text-white py-5">
  <div class="container">
    <h1 class="display-5 fw-bold mb-3">Conoce a nuestro equipo</h1>
    <p class="lead">Detrás de cada torta deliciosa y pan crujiente hay personas apasionadas por lo que hacen.</p>
  </div>
</section>

<!-- Sección del equipo -->
<section class="team-section py-5">
  <div class="container">
    <div class="row g-4 justify-content-center">

      <!-- Empleado 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-center shadow-sm team-card">
          <img src="img/equipo_armando.jpg" class="card-img-top team-img" alt="Armando - Repostero principal">
          <div class="card-body">
            <h5 class="card-title text-maglody fw-bold">Sr. Armando Porlles</h5>
            <p class="text-muted mb-1">Repostero Principal</p>
            <p class="card-text">Especialista en tortas personalizadas y postres variados.</p>
          </div>
        </div>
      </div>

      <!-- Empleado 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-center shadow-sm team-card">
          <img src="img/equipo_juan.jpg" class="card-img-top team-img" alt="Juan - Maestro Panadero">
          <div class="card-body">
            <h5 class="card-title text-maglody fw-bold">Diego Porlles</h5>
            <p class="text-muted mb-1">Maestro Panadero</p>
            <p class="card-text">Responsable de los panes artesanales y empanadas recién horneadas.</p>
          </div>
        </div>
      </div>

      <!-- Empleado 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-center shadow-sm team-card">
          <img src="img/equipo_luisa.jpg" class="card-img-top team-img" alt="Luisa - Atención al cliente">
          <div class="card-body">
            <h5 class="card-title text-maglody fw-bold">Luisa Mendoza</h5>
            <p class="text-muted mb-1">Atención al Cliente</p>
            <p class="card-text">Siempre lista para ayudarte con tus pedidos y consultas.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
</body>
</html>