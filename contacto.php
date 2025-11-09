<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maglody | Contáctanos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Sección de Contacto -->
  <section class="py-5">
    <div class="container">
      <h1 class="main-title mb-3 text-center">Contáctanos</h1>
      <p class="main-description mb-3">Si tienes alguna pregunta o consulta, no dudes en ponerte en contacto con nosotros. Estaremos encantados de ayudarte.</p>
      <div class="row justify-content-center">
        <!-- Columna de información -->
        <div class="col-12 col-md-5 contact-section mb-4 mb-md-0">
          <h4 class="mb-4" style="color:#A91B47;">Información de contacto</h4>
          
          <div class="contact-info-item">
            <span class="me-2"><i class="bi bi-clock-fill"></i></span>
            <div>
              <strong>Horario de atención:</strong><br>
              Lun-Sáb: 8:00 a.m. - 8:00 p.m.<br>
              Dom: 8:00 a.m. - 2:00 p.m.
            </div>
          </div>
          <div class="contact-info-item">
            <span class="me-2"><i class="bi bi-telephone-fill"></i></span>
            <span>Teléfono: (52)505775</span>
          </div>
          <div class="contact-info-item">
            <span class="me-2"><i class="bi bi-whatsapp"></i></span>
            <span>WhatsApp: 952620291</span>
          </div>
          <div class="contact-info-item">
            <span class="me-2"><i class="bi bi-envelope-fill"></i></span>
            <span>maglodypasteleria@gmail.com</span>
          </div>
          <div class="contact-info-item">
            <span class="me-2"><i class="bi bi-geo-alt-fill"></i></span>
            Urbanización San Roque H4, Tacna
            <br>
            (Una cuadra más abajo de Maestro)
          </div>

          <div class="mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.084570577396!2d-70.2658529!3d-18.021278399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915acf15237b401f%3A0xcb645dcbf96c20d9!2sPasteleria%20Maglody!5e0!3m2!1ses-419!2spe!4v1748910160909!5m2!1ses-419!2spe"
              width="100%" height="140" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <!-- Columna de formulario -->
        <div class="col-12 col-md-7 contact-section">
          <h4 class="contact-form-title">Envíanos un mensaje</h4>
          <form id="contactoForm" autocomplete="off">
            <div class="mb-3">
              <input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required>
            </div>
            <div class="mb-3">
              <input type="tel" class="form-control" name="celular" placeholder="Celular" required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="correo" placeholder="Correo electrónico" required>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..." required></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary px-5">Enviar</button>
            </div>
          </form>
          <div id="contactoExito" class="alert alert-success mt-4 text-center d-none">
            ¡Gracias por contactarnos! Te responderemos pronto.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
  <script src="pedidos.js"></script>
</body>
</html>