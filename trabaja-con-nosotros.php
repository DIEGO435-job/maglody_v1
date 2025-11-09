<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabaja con Nosotros | Maglody</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Hero / Encabezado -->
  <section class="main-content">
    <div class="container text-center">
      <h1 class="main-title">Únete al equipo Maglody</h1>
      <p class="main-description">Si amas la repostería tanto como nosotros, esta es tu oportunidad de formar parte de una familia apasionada, creativa y en constante crecimiento.</p>
    </div>
  </section>

  <!-- Sección de beneficios -->
  <section class="promotions">
    <div class="container">
      <h2 class="promo-title">¿Por qué trabajar con nosotros?</h2>
      <div class="row promo-grid g-4">
        <div class="col-12 col-md-4 d-flex">
          <div class="promo-item flex-fill">
            <div class="promo-icon mb-2">
              <img src="img/teamwork.png" alt="Trabajo en equipo">
            </div>
            <h3>Ambiente colaborativo</h3>
            <p>Valoramos el trabajo en equipo y el respeto entre todos nuestros colaboradores.</p>
          </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
          <div class="promo-item flex-fill">
            <div class="promo-icon mb-2">
              <img src="img/capacitacion.png" alt="Capacitación" style="color: #000000ff;">
            </div>
            <h3>Crecimiento constante</h3>
            <p>Ofrecemos capacitaciones para que desarrolles tus habilidades en repostería y atención al cliente.</p>
          </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
          <div class="promo-item flex-fill">
            <div class="promo-icon mb-2">
              <img src="img/beneficios.png" alt="Beneficios">
            </div>
            <h3>Beneficios y descuentos</h3>
            <p>Disfruta de descuentos exclusivos en productos y recompensas por tu desempeño.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Formulario de postulación -->
<section class="contact-section py-5 bg-light">
  <div class="container">
    <h2 class="text-center text-maglody fw-bold mb-4">
      <i class="bi bi-person-badge-fill me-2"></i>Postula ahora
    </h2>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow-sm border border-maglody rounded-4">
          <div class="card-body p-4">
            <form action="#" method="post" class="row g-4">
              <div class="col-md-6">
                <label for="nombre" class="form-label">
                  <i class="bi bi-person-fill me-2 text-primary"></i>Nombre completo
                </label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
              </div>

              <div class="col-md-6">
                <label for="correo" class="form-label">
                  <i class="bi bi-envelope-fill me-2 text-danger"></i>Correo electrónico
                </label>
                <input type="email" class="form-control" id="correo" name="correo" required>
              </div>

              <div class="col-md-6">
                <label for="telefono" class="form-label">
                  <i class="bi bi-telephone-fill me-2 text-success"></i>Teléfono
                </label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
              </div>

              <div class="col-md-6">
                <label for="area" class="form-label">
                  <i class="bi bi-diagram-3-fill me-2 text-info"></i>Área de interés
                </label>
                <select class="form-select" id="area" name="area" required>
                  <option value="">Selecciona un área</option>
                  <option value="reposteria">Repostería</option>
                  <option value="ventas">Ventas y atención al cliente</option>
                  <option value="delivery">Reparto / Delivery</option>
                  <option value="marketing">Marketing y redes sociales</option>
                </select>
              </div>

              <div class="col-12">
                <label for="mensaje" class="form-label">
                  <i class="bi bi-chat-text-fill me-2 text-warning"></i>Cuéntanos sobre ti
                </label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
              </div>

              <div class="col-12 text-end">
                <button type="submit" class="btn btn-maglody px-4">
                  <i class="bi bi-send-fill me-1"></i>Enviar postulación
                </button>
              </div>
            </form>
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