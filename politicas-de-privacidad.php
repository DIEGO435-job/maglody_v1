<?php
include_once 'init.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maglody | Políticas de Privacidad</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

 <!-- Políticas de Privacidad -->
<section class="py-5 bg-light">
  <div class="container">
    <h1 class="main-title text-center text-maglody mb-5">
      <i class="bi bi-shield-lock-fill me-2"></i>Políticas de Privacidad
    </h1>

    <div class="accordion accordion-flush shadow rounded bg-white" id="privacidadAccordion">
      <div class="accordion-item border-bottom">
        <h2 class="accordion-header" id="priv1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePriv1" aria-expanded="true" aria-controls="collapsePriv1">
            <i class="bi bi-person-vcard-fill me-2 text-primary"></i>1. ¿Qué datos personales recopilamos?
          </button>
        </h2>
        <div id="collapsePriv1" class="accordion-collapse collapse show" data-bs-parent="#privacidadAccordion">
          <div class="accordion-body">
            Recopilamos información como nombre, correo electrónico, teléfono y dirección de entrega cuando realizas un pedido o te registras en nuestro sitio.
          </div>
        </div>
      </div>

      <div class="accordion-item border-bottom">
        <h2 class="accordion-header" id="priv2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePriv2">
            <i class="bi bi-gear-fill me-2 text-success"></i>2. ¿Cómo utilizamos tus datos?
          </button>
        </h2>
        <div id="collapsePriv2" class="accordion-collapse collapse" data-bs-parent="#privacidadAccordion">
          <div class="accordion-body">
            Utilizamos tus datos para procesar pedidos, mejorar tu experiencia, enviarte información relevante y cumplir con obligaciones legales.
          </div>
        </div>
      </div>

      <div class="accordion-item border-bottom">
        <h2 class="accordion-header" id="priv3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePriv3">
            <i class="bi bi-people-fill me-2 text-danger"></i>3. ¿Compartimos tu información?
          </button>
        </h2>
        <div id="collapsePriv3" class="accordion-collapse collapse" data-bs-parent="#privacidadAccordion">
          <div class="accordion-body">
            No compartimos tus datos personales con terceros, salvo para cumplir con servicios de entrega o requerimientos legales.
          </div>
        </div>
      </div>

      <div class="accordion-item border-bottom">
        <h2 class="accordion-header" id="priv4">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePriv4">
            <i class="bi bi-shield-lock-fill me-2 text-info"></i>4. ¿Cómo protegemos tu información?
          </button>
        </h2>
        <div id="collapsePriv4" class="accordion-collapse collapse" data-bs-parent="#privacidadAccordion">
          <div class="accordion-body">
            Implementamos medidas de seguridad técnicas y organizativas para proteger tus datos contra accesos no autorizados, pérdida o alteración.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="priv5">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePriv5">
            <i class="bi bi-person-check-fill me-2 text-warning"></i>5. ¿Cuáles son tus derechos?
          </button>
        </h2>
        <div id="collapsePriv5" class="accordion-collapse collapse" data-bs-parent="#privacidadAccordion">
          <div class="accordion-body">
            Puedes acceder, rectificar o eliminar tus datos personales en cualquier momento. Para ejercer estos derechos, contáctanos a través de nuestros canales oficiales.
          </div>
        </div>
      </div>
      <div class="accordion-item border-bottom">
        <h2 class="accordion-header" id="priv6">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePriv6">
            <i class="bi bi-calendar-check-fill me-2 text-success"></i>6. ¿Durante cuánto tiempo conservamos tus datos?
          </button>
        </h2>
        <div id="collapsePriv6" class="accordion-collapse collapse" data-bs-parent="#privacidadAccordion">
          <div class="accordion-body">
            Conservamos tus datos personales únicamente durante el tiempo necesario para cumplir con los fines para los que fueron recabados o mientras mantengas una relación activa con Maglody Pastelería. Luego, serán eliminados de manera segura.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>