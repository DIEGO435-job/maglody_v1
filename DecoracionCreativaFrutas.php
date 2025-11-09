<?php
include_once 'init.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Decoración creativa con frutas | Blog Pastelero</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/estilosBlog.css">
</head>
<body>

  <section class="blog-detail-hero d-flex align-items-center justify-content-center text-center">
    <div>
      <h1 class="display-5 blog-title-efect">Decoración creativa con frutas</h1>
      <p class="blog-detail-date">Publicado el 25/06/2025</p>
    </div>
  </section>

  <section class="container py-5 blog-detail-content">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <img src="img/Blog/blog_frutas.jpg" alt="Decoración creativa con frutas" class="img-fluid rounded shadow blog-detail-img mb-4">
        <h2 class="mb-3">¡Dale color y frescura a tus postres con frutas!</h2>
        <p>
          Las frutas no solo aportan sabor y frescura, también son el toque perfecto para decorar tortas, tartas y postres. Aquí te mostramos ideas y técnicas sencillas para lograr presentaciones espectaculares y deliciosas.
        </p>
        <h3 class="mt-4 mb-2">Ideas de decoración con frutas</h3>
        <ul class="blog-list">
          <li><strong>Rosas de manzana:</strong> Corta manzanas en láminas finas, blanquéalas y enróllalas para formar rosas. Perfectas para tartas y cupcakes.</li>
          <li><strong>Frutas en abanico:</strong> Corta fresas, kiwis o mangos en láminas y ábrelas en forma de abanico sobre el pastel.</li>
          <li><strong>Brochetas de frutas:</strong> Inserta trozos de frutas variadas en palillos y colócalos sobre la torta para un efecto divertido y colorido.</li>
          <li><strong>Figuras con cortadores:</strong> Usa cortadores de galletas para dar formas a rodajas de melón, sandía o piña.</li>
          <li><strong>Frutas glaseadas:</strong> Baña uvas, fresas o rodajas de naranja en almíbar y déjalas secar para un acabado brillante.</li>
        </ul>
        <div class="row my-4 g-3">
          <div class="col-12 col-md-6">
            <img src="img/Blog/tarta_frutas.jpg" alt="Tarta decorada con frutas frescas" class="img-fluid rounded shadow w-100 mb-2">
            <div class="small text-muted text-center">Tarta con frutas frescas en abanico</div>
          </div>
          <div class="col-12 col-md-6">
            <img src="img/Blog/cupcakes_manzana.jpg" alt="Cupcakes con rosas de manzana" class="img-fluid rounded shadow w-100 mb-2">
            <div class="small text-muted text-center">Cupcakes con rosas de manzana</div>
          </div>
        </div>
        <h3 class="mt-4 mb-2">Tips para una decoración perfecta</h3>
        <ul class="blog-list">
          <li>Elige frutas frescas, firmes y de colores variados para un mejor contraste visual.</li>
          <li>Seca bien las frutas antes de colocarlas para evitar que humedezcan el bizcocho.</li>
          <li>Pincela las frutas con un poco de mermelada o gelatina neutra para dar brillo y conservarlas por más tiempo.</li>
          <li>Combina frutas ácidas y dulces para equilibrar sabores.</li>
        </ul>
        <div class="blog-detail-quote my-4">
          <span class="blog-quote-mark">“</span>
          <span>La decoración con frutas transforma cualquier postre en una obra de arte natural. ¡Atrévete a experimentar!</span>
        </div>
        <div class="text-center mt-5">
          <a href="blog-pastelero.php" class="btn btn-outline-danger px-4">← Volver al Blog Pastelero</a>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>
</body>
</html>