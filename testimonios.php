<?php
include_once 'init.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maglody | Testimonios de Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v19.0" nonce="Xyz123"></script>

  <!-- Testimonios -->
  <section class="py-5" style="background: #eeeeee;">
    <div class="container">
      <h1 class="main-title mb-5 text-center">Lo que dicen nuestros clientes</h1>
      <!-- Facebook Widget -->
      <div class="my-5 text-center">
        <div class="fb-page"
          data-href="https://www.facebook.com/p/Maglody-Pasteler%C3%ADa-100063573610754/?locale=es_LA"
          data-tabs="recommendations"
          data-width="500"
          data-height=""
          data-small-header="false"
          data-adapt-container-width="true"
          data-hide-cover="false"
          data-show-facepile="true">
        </div>
      </div>  
      <!-- Widget de Google Reviews de Elfsight -->
      <div class="my-5 text-center">
        <script src="https://static.elfsight.com/platform/platform.js" async></script>
        <div class="elfsight-app-773fa2f0-37f9-41dc-a36f-0a14087fe388" data-elfsight-app-lazy></div>
      </div>
    </div>
  </section>

  

  <!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>