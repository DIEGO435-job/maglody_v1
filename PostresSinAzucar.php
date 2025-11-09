<?php
include_once 'init.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Postres deliciosos sin azúcar | Blog Pastelero</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/estilosBlog.css">
</head>
<body>

  <section class="blog-detail-hero d-flex align-items-center justify-content-center text-center">
    <div>
      <h1 class="display-5 blog-title-efect">Postres deliciosos sin azúcar</h1>
      <p class="blog-detail-date">Publicado el 22/06/2025</p>
    </div>
  </section>

  <section class="container py-5 blog-detail-content">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <img src="img/Blog/blog_sinazucar.jpg" alt="Postres sin azúcar" class="img-fluid rounded shadow blog-detail-img mb-4">
        <h2 class="mb-3">¡Disfruta de lo dulce sin culpa!</h2>
        <p>
          ¿Quieres cuidar tu salud o reducir el consumo de azúcar, pero no quieres renunciar a los postres? Aquí te mostramos recetas y consejos para preparar postres saludables, sabrosos y sin azúcar añadida, ideales para diabéticos, niños o cualquier persona que busque opciones más ligeras.
        </p>
        <h3 class="mt-4 mb-2">Sustitutos naturales del azúcar</h3>
        <ul class="blog-list">
          <li><strong>Stevia:</strong> Endulzante natural sin calorías, perfecto para hornear y bebidas.</li>
          <li><strong>Eritritol:</strong> Similar al azúcar, pero sin impacto glucémico y sin calorías.</li>
          <li><strong>Frutas maduras:</strong> Plátano, manzana, dátiles o puré de manzana aportan dulzor y textura.</li>
          <li><strong>Miel y panela:</strong> Opciones más naturales, pero recuerda que siguen siendo azúcares (úselas con moderación).</li>
        </ul>
        <h3 class="mt-4 mb-2">Receta: Brownies sin azúcar</h3>
        <img src="img/Blog/brownie_sinazucar.jpg" alt="Brownies sin azúcar" class="img-fluid rounded shadow w-100 mb-3" style="max-height:220px; object-fit:cover;">
        <ul class="blog-list">
          <li>2 plátanos maduros</li>
          <li>2 huevos</li>
          <li>1/2 taza de cacao en polvo sin azúcar</li>
          <li>1/2 taza de harina de avena</li>
          <li>1/4 taza de eritritol o stevia granulada</li>
          <li>1/4 taza de aceite vegetal</li>
          <li>1 cucharadita de polvo de hornear</li>
          <li>1 pizca de sal</li>
          <li>Opcional: nueces o chips de chocolate sin azúcar</li>
        </ul>
        <ol class="blog-list">
          <li>Precalienta el horno a 180°C y engrasa un molde cuadrado pequeño.</li>
          <li>Tritura los plátanos y mezcla con los huevos y el aceite.</li>
          <li>Agrega el cacao, la harina, el eritritol, el polvo de hornear y la sal. Mezcla bien.</li>
          <li>Vierte la mezcla en el molde, añade las nueces o chips si deseas.</li>
          <li>Hornea 20-25 minutos. Deja enfriar, corta en porciones y ¡disfruta!</li>
        </ol>
        <div class="row my-4 g-3">
          <div class="col-12 col-md-6">
            <img src="img/Blog/yogur_frutas_sinazucar.jpg" alt="Yogur con frutas sin azúcar" class="img-fluid rounded shadow w-100 mb-2">
            <div class="small text-muted text-center">Yogur natural con frutas frescas y semillas</div>
          </div>
          <div class="col-12 col-md-6">
            <img src="img/Blog/galletas_sinazucar.jpg" alt="Galletas sin azúcar" class="img-fluid rounded shadow w-100 mb-2">
            <div class="small text-muted text-center">Galletas de avena y plátano sin azúcar</div>
          </div>
        </div>
        <h3 class="mt-4 mb-2">Consejos para postres saludables</h3>
        <ul class="blog-list">
          <li>Prefiere harinas integrales o de avena para mayor fibra.</li>
          <li>Agrega frutas frescas o secas para dar dulzor y textura.</li>
          <li>Lee las etiquetas de los endulzantes y elige los más naturales.</li>
          <li>Recuerda que lo saludable también puede ser delicioso.</li>
        </ul>
        <div class="blog-detail-quote my-4">
          <span class="blog-quote-mark">“</span>
          <span>¡Endulza tu vida de forma natural y disfruta cada bocado sin remordimientos!</span>
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