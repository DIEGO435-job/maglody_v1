<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Productos | Maglody</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/galeria.css">
</head>
<body>

  <!-- Hero -->
  <section class="blog-hero d-flex align-items-center justify-content-center text-center" style="min-height:180px;">
    <div>
      <h1 class="display-4 fade-in">Galería de Productos</h1>
      <p class="lead fade-in-delay">Descubre nuestros pasteles, postres y creaciones especiales</p>
    </div>
  </section>

  <!-- Galería -->
  <section class="container py-5">
    <div class="row g-4">
      <!-- Producto 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="gallery-card">
          <img src="img/pastel_fresas.jpg" alt="Pastel de fresas" class="gallery-img">
          <div class="gallery-title">Pastel de Fresas</div>
          <div class="gallery-desc">Bizcocho suave, crema y fresas frescas. Ideal para celebraciones.</div>
        </div>
      </div>
      <!-- Producto 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="gallery-card">
          <img src="img/tarta_frutas.jpg" alt="Tarta de frutas" class="gallery-img">
          <div class="gallery-title">Tarta de Frutas</div>
          <div class="gallery-desc">Base crujiente y variedad de frutas frescas de temporada.</div>
        </div>
      </div>
      <!-- Producto 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="gallery-card">
          <img src="img/cupcakes_varios.jpg" alt="Cupcakes surtidos" class="gallery-img">
          <div class="gallery-title">Cupcakes Surtidos</div>
          <div class="gallery-desc">Mini pasteles decorados, perfectos para fiestas y eventos.</div>
        </div>
      </div>
      <!-- Producto 4 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="gallery-card">
          <img src="img/Blog/galletas_sinazucar.jpg" alt="Galletas decoradas" class="gallery-img">
          <div class="gallery-title">Galletas Decoradas</div>
          <div class="gallery-desc">Galletas de mantequilla con glaseado artístico y temático.</div>
        </div>
      </div>
      <!-- Producto 5 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="gallery-card">
          <img src="img/bombones_chocolate.jpg" alt="Bombones de chocolate" class="gallery-img">
          <div class="gallery-title">Bombones de Chocolate</div>
          <div class="gallery-desc">Rellenos variados y cobertura brillante, hechos a mano.</div>
        </div>
      </div>
      <!-- Producto 6 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="gallery-card">
          <img src="img/postre_sin_azucar.jpg" alt="Postre sin azúcar" class="gallery-img">
          <div class="gallery-title">Postres Sin Azúcar</div>
          <div class="gallery-desc">Opciones saludables y deliciosas para todos los gustos.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
</body>
</html>