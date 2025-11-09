<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maglody | Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Header con Bootstrap -->

  <!-- Galería principal de productos como cinta de imágenes -->
  <section class="hero-gallery py-4">
    <div class="slider-container overflow-hidden position-relative" style="width:100%;">
      <div class="slide-track d-flex align-items-center" id="sliderTrack">
        <div class="slide px-1">
          <img src="img/E_Carne.jpg" class="img-fluid" alt="Pan horneado artesanal">
        </div>
        <div class="slide px-1">
          <img src="img/E_Pollo.jpg" class="img-fluid" alt="Galletas doradas">
        </div>
        <div class="slide px-1">
          <img src="img/E_Queso.jpg" class="img-fluid" alt="Sándwiches gourmet">
        </div>
        <div class="slide px-1">
          <img src="img/E_Triple.jpg" class="img-fluid" alt="Sándwiches gourmet">
        </div>
        <div class="slide px-1">
          <img src="img/P_Ciabata.jpg" class="img-fluid" alt="Pan horneado artesanal">
        </div>
        <div class="slide px-1">
          <img src="img/P_Croissant.jpg" class="img-fluid" alt="Galletas doradas">
        </div>
        <div class="slide px-1">
          <img src="img/P_Hallulla.jpg" class="img-fluid" alt="Sándwiches gourmet">
        </div>
        <div class="slide px-1">
          <img src="img/P_Molde.jpg" class="img-fluid" alt="Sándwiches gourmet">
        </div>
        <!-- Duplicadas para efecto infinito -->
        <div class="slide px-1">
          <img src="img/E_Carne.jpg" class="img-fluid" alt="Pan horneado artesanal">
        </div>
        <div class="slide px-1">
          <img src="img/E_Pollo.jpg" class="img-fluid" alt="Galletas doradas">
        </div>
        <div class="slide px-1">
          <img src="img/E_Queso.jpg" class="img-fluid" alt="Sándwiches gourmet">
        </div>
        <div class="slide px-1">
          <img src="img/E_Triple.jpg" class="img-fluid" alt="Sándwiches gourmet">
        </div>
        <div class="slide px-1">
          <img src="img/P_Ciabata.jpg" class="img-fluid" alt="Pan horneado artesanal">
        </div>
        <div class="slide px-1">
          <img src="img/P_Croissant.jpg" class="img-fluid" alt="Galletas doradas">
        </div>
        <div class="slide px-1">
          <img src="img/P_Hallulla.jpg" class="img-fluid" alt="Sándwiches gourmet">
        </div>
        <div class="slide px-1">
          <img src="img/P_Molde.jpg" class="img-fluid" alt="Sándwiches gourmet">
        </div>
      </div>
    </div>
  </section>

  <!-- Sección principal con eslogan -->
  <section class="main-content">
    <div class="container">
      <h1 class="main-title">"Maglody, lo mejor para ti."</h1>  
      <p class="main-description">
        Te damos la bienvenida a nuestro portal web, un espacio donde podrás descubrir nuestros deliciosos productos, realizar pedidos desde casa y mantenerte al tanto de nuestras novedades.
        <br>
        ¡Calidad sobre tradición ahora para ti de siempre!
      </p>
    </div>
  </section>

  <!-- Sección Lo más vendido -->
  <section class="best-sellers">
    <div class="container">
      <h2 class="section-title">Lo más vendido</h2>
      <div class="products-grid">
        <div class="product-card">
          <div class="product-image">
            <a href="detalle-producto-tres_leches.php"><img src="img/T_TresLechesVaililla.jpg" alt="Tres Leches" class="img-fluid"></a>
          </div>
          <h3 class="product-name">Tres Leches de Vainilla</h3>
        </div>
        <div class="product-card">
          <div class="product-image">
            <a href="detalle-producto-empanada-queso.php"><img src="img/E_Queso.jpg" alt="Empanada de Queso" class="img-fluid"></a>
          </div>
          <h3 class="product-name">Empanada de Queso</h3>
        </div>
        <div class="product-card">
          <div class="product-image">
            <a href="detalle-producto-ciabata.php"><img src="img/P_Ciabata.jpg" alt="Pan Ciabata" class="img-fluid"></a>
          </div>
          <h3 class="product-name">Pan Ciabata</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de promociones -->
  <section class="promotions">
    <div class="container">
      <h2 class="promo-title">¡Disfruta de nuestras promociones!</h2>
      <div class="row g-4 justify-content-center">
      <div class="col-12 col-sm-6 col-lg-4 d-flex">
        <div class="promo-item d-flex flex-column align-items-center text-center flex-fill h-100">
          <div class="promo-icon mb-2">
            <img src="img/delivery.png" alt="Delivery">
          </div>
          <h3>Delivery</h3>
          <p class="flex-grow-1">Tengo gratis tu servicio de delivery en Maglody</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 d-flex">
        <div class="promo-item d-flex flex-column align-items-center text-center flex-fill h-100">
          <div class="promo-icon mb-2">
            <img src="img/globos.png" alt="Globos">
          </div>
          <h3>Atención</h3>
          <p class="flex-grow-1">La mejor experiencia y atención personalizada</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 d-flex">
        <div class="promo-item d-flex flex-column align-items-center text-center flex-fill h-100">
          <div class="promo-icon mb-2">
            <img src="img/descuento.png" alt="Descuento">
          </div>
          <h3>Descuento</h3>
          <p class="flex-grow-1">Aprovecha nuestros descuentos exclusivos</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
<?php include 'footer.php'; ?>
  <script src="js/utilidades.js"></script>
</body>
</html>