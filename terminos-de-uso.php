<?php
include_once 'init.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maglody | Términos de Uso</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>


  <!-- Términos de Uso -->
  <section class="py-5">
    <div class="container">
      <h1 class="main-title mb-4 text-center">Términos de Uso</h1>
      <div class="accordion" id="terminosAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="term1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTerm1" aria-expanded="true" aria-controls="collapseTerm1">
              1. Aceptación de los términos
            </button>
          </h2>
          <div id="collapseTerm1" class="accordion-collapse collapse show" aria-labelledby="term1" data-bs-parent="#terminosAccordion">
            <div class="accordion-body">
              Al acceder y utilizar nuestro sitio web, aceptas cumplir con estos términos y condiciones de uso. Si no estás de acuerdo, por favor no utilices nuestros servicios.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="term2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTerm2" aria-expanded="false" aria-controls="collapseTerm2">
              2. Uso del sitio
            </button>
          </h2>
          <div id="collapseTerm2" class="accordion-collapse collapse" aria-labelledby="term2" data-bs-parent="#terminosAccordion">
            <div class="accordion-body">
              El sitio web y sus contenidos son para uso personal y no comercial. No está permitido copiar, modificar, distribuir o vender cualquier parte del sitio sin autorización.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="term3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTerm3" aria-expanded="false" aria-controls="collapseTerm3">
              3. Registro y seguridad
            </button>
          </h2>
          <div id="collapseTerm3" class="accordion-collapse collapse" aria-labelledby="term3" data-bs-parent="#terminosAccordion">
            <div class="accordion-body">
              Eres responsable de mantener la confidencialidad de tu cuenta y contraseña, así como de todas las actividades que ocurran bajo tu cuenta.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="term4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTerm4" aria-expanded="false" aria-controls="collapseTerm4">
              4. Compras y pagos
            </button>
          </h2>
          <div id="collapseTerm4" class="accordion-collapse collapse" aria-labelledby="term4" data-bs-parent="#terminosAccordion">
            <div class="accordion-body">
              Todas las compras están sujetas a disponibilidad y confirmación del pago. Nos reservamos el derecho de rechazar o cancelar pedidos en cualquier momento.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="term5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTerm5" aria-expanded="false" aria-controls="collapseTerm5">
              5. Modificaciones de los términos
            </button>
          </h2>
          <div id="collapseTerm5" class="accordion-collapse collapse" aria-labelledby="term5" data-bs-parent="#terminosAccordion">
            <div class="accordion-body">
              Nos reservamos el derecho de modificar estos términos en cualquier momento. Los cambios serán publicados en esta página y el uso continuado del sitio implica la aceptación de los mismos.
            </div>
          </div>
        </div>
        <!-- Puedes agregar más secciones si lo deseas -->
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

</body>
</html>