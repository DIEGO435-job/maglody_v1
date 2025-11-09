<?php
include_once 'init.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Pastelero | Maglody</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <!-- Header -->

  <!-- Blog Pastelero -->
  <section class="blog-hero d-flex align-items-center justify-content-center text-center">
    <div>
      <h1 class="display-4 fade-in">Blog Pastelero</h1>
      <p class="lead fade-in-delay">Recetas, tips y novedades para endulzar tu día</p>
    </div>
  </section>

  <section class="container py-5">
    <div class="row g-4">
      <!-- Post 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="blog-card basic-fade-in">
          <img src="img/blog_bizcocho.jpg" alt="Bizcocho esponjoso" class="blog-card-img">
          <div class="blog-card-body">
            <div class="blog-card-title">Receta fácil: Bizcocho esponjoso</div>
            <div class="blog-card-date">30/06/2025</div>
            <div class="blog-card-desc">
              Aprende a preparar un bizcocho suave y delicioso con ingredientes simples y tips de expertos.
            </div>
            <a href="BiscochoEsponjoso.php" class="blog-card-btn mt-2">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Post 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="blog-card basic-fade-in">
          <img src="img/blog_frutas.jpg" alt="Decoración creativa con frutas" class="blog-card-img">
          <div class="blog-card-body">
            <div class="blog-card-title">Decoración creativa con frutas</div>
            <div class="blog-card-date">25/06/2025</div>
            <div class="blog-card-desc">
              Ideas y técnicas para decorar tus postres y tortas usando frutas frescas y coloridas.
            </div>
            <a href="DecoracionCreativaFrutas.php" class="blog-card-btn mt-2">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Post 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="blog-card basic-fade-in">
          <img src="img/Blog/blog_sinazucar.jpg" alt="Postres sin azúcar" class="blog-card-img">
            <div class="blog-card-body">
              <div class="blog-card-title">Postres deliciosos sin azúcar</div>
              <div class="blog-card-date">22/06/2025</div>
              <div class="blog-card-desc">
                Descubre recetas y consejos para preparar postres saludables y sabrosos, ideales para quienes buscan reducir el consumo de azúcar.
              </div>
              <a href="PostresSinAzucar.php" class="blog-card-btn mt-2">Leer más</a>
            </div>
          </div>
        </div>
        <!-- Post 4 -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="blog-card basic-fade-in">
            <img src="img/blog_errores.jpg" alt="Errores al hornear" class="blog-card-img">
            <div class="blog-card-body">
            <div class="blog-card-title">Errores comunes al hornear y cómo evitarlos</div>
            <div class="blog-card-date">20/06/2025</div>
            <div class="blog-card-desc">
              ¿Tu pastel no sube? ¿Se quema? Aquí te contamos los errores más frecuentes y sus soluciones.
            </div>
            <a href="ErroresAlHornear.php" class="blog-card-btn mt-2">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Post 5 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="blog-card basic-fade-in">
          <img src="img/blog_chocolate.jpg" alt="Chocolate perfecto" class="blog-card-img">
          <div class="blog-card-body">
            <div class="blog-card-title">Cómo templar chocolate en casa</div>
            <div class="blog-card-date">15/06/2025</div>
            <div class="blog-card-desc">
              Descubre el secreto para lograr un chocolate brillante y crujiente, ideal para bombones y decoraciones.
            </div>
            <a href="#" class="blog-card-btn mt-2">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Post 6 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="blog-card basic-fade-in">
          <img src="img/blog_glaseado.jpg" alt="Glaseado brillante" class="blog-card-img">
          <div class="blog-card-body">
            <div class="blog-card-title">Glaseados brillantes para tortas</div>
            <div class="blog-card-date">10/06/2025</div>
            <div class="blog-card-desc">
              Aprende a preparar glaseados espejo y otros acabados para que tus tortas luzcan espectaculares.
            </div>
            <a href="#" class="blog-card-btn mt-2">Leer más</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
</body>
</html>