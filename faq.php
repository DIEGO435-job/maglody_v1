<?php
include_once 'init.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maglody | Preguntas Frecuentes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- Preguntas Frecuentes -->
<section class="py-5 bg-light">
  <div class="container">
    <h1 class="main-title text-center text-maglody mb-5">
      <i class="bi bi-question-circle-fill me-2"></i>Preguntas Frecuentes
    </h1>

    <div class="accordion accordion-flush shadow rounded" id="faqAccordion">
      <div class="accordion-item border-bottom">
        <h2 class="accordion-header" id="faq1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
            <i class="bi bi-clock-fill me-2 text-primary"></i>¿Cuáles son los horarios de atención?
          </button>
        </h2>
        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Nuestro horario de atención es de lunes a sábado de 8:00 a.m. a 8:00 p.m. y domingos de 8:00 a.m. a 2:00 p.m.
          </div>
        </div>
      </div>

      <div class="accordion-item border-bottom">
        <h2 class="accordion-header" id="faq2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
            <i class="bi bi-truck me-2 text-success"></i>¿Realizan entregas a domicilio?
          </button>
        </h2>
        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Sí, contamos con servicio de delivery en la ciudad de Tacna. Consulta la cobertura y condiciones al hacer tu pedido.
          </div>
        </div>
      </div>

      <div class="accordion-item border-bottom">
        <h2 class="accordion-header" id="faq3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
            <i class="bi bi-hourglass-split me-2 text-warning"></i>¿Con cuánto tiempo de anticipación debo hacer mi pedido?
          </button>
        </h2>
        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Para tortas y productos personalizados, recomendamos hacer el pedido con al menos 48 horas de anticipación. Para productos de panadería y pastelería regular, puedes pedir el mismo día según disponibilidad.
          </div>
        </div>
      </div>

      <div class="accordion-item border-bottom">
        <h2 class="accordion-header" id="faq4">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
            <i class="bi bi-brush-fill me-2 text-danger"></i>¿Puedo personalizar una torta o pastel?
          </button>
        </h2>
        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Sí, puedes personalizar tortas y pasteles con el diseño, sabor y mensaje que prefieras. Contáctanos para más detalles y cotizaciones.
          </div>
        </div>
      </div>

      <div class="accordion-item border-bottom">
        <h2 class="accordion-header" id="faq5">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
            <i class="bi bi-credit-card-fill me-2 text-info"></i>¿Qué métodos de pago aceptan?
          </button>
        </h2>
        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Aceptamos pagos en efectivo, Yape, Plin y tarjetas de débito/crédito.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="faq6">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
            <i class="bi bi-star-fill me-2 text-warning"></i>¿Cuáles son los productos más populares?
          </button>
        </h2>
        <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Nuestros productos más populares son las empanadas (de queso, triple, carne y pollo) y las tortas personalizadas.
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