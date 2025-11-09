<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Libro de Reclamaciones | Maglody</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <!-- Header -->
<?php include 'header.php'; ?>

  <section class="py-5" style="background: #f8f9fa;">
    <div class="container">
      <h1 class="main-title mb-4 text-center">Libro de Reclamaciones</h1>
      <!-- Consulta de reclamos -->
      <div class="consulta-section mb-4">
        <h5 class="mb-3" style="color:#A91B47;">Consultar estado de reclamo</h5>
        <form id="consultaReclamoForm" class="row g-3 align-items-end">
          <div class="col-md-6">
            <label for="codigoReclamo" class="form-label">Código de Reclamo</label>
            <input type="text" class="form-control" id="codigoReclamo" required>
          </div>
          <div class="col-md-4">
            <label for="captchaConsulta" class="form-label">Verificación</label>
            <div class="captcha-box">
              <span id="captchaPregunta"></span>
              <input type="text" class="form-control" id="captchaRespuesta" placeholder="Respuesta" required style="max-width:90px;">
            </div>
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-danger w-100">Consultar</button>
          </div>
        </form>
        <div id="consultaResultado" class="alert alert-info mt-3 d-none"></div>
      </div>

      <!-- Formulario de datos personales -->
      <div class="reclamo-section">
        <h4 class="reclamo-title">Datos del consumidor</h4>
        <form id="datosPersonalesForm" autocomplete="off">
          <div class="row g-3">
            <div class="col-md-6">
              <input type="text" class="form-control" name="nombre" placeholder="Nombres y Apellidos" required>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" name="dni" placeholder="DNI" required>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" name="telefono" placeholder="Celular" required>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" name="correo" placeholder="Correo electrónico" required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" name="direccion" placeholder="Dirección" required>
            </div>
          </div>
        </form>
      </div>

      <!-- Formulario de reclamo/queja -->
      <div class="reclamo-section">
        <h4 class="reclamo-title">Detalle del reclamo o queja</h4>
        <form id="reclamoForm" autocomplete="off">
          <div class="row g-3">
            <div class="col-md-4">
              <label class="form-label">Tipo</label>
              <select class="form-select" name="tipo" required>
                
                <option value="Reclamo">Reclamo</option>
                <option value="Queja">Queja</option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label">Valor del producto (S/)</label>
              <input type="number" class="form-control" name="valor" min="0" step="0.01" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">N° de comprobante de pago</label>
              <input type="text" class="form-control" name="comprobante" required>
            </div>
            <div class="col-12">
              <label class="form-label">Descripción de los hechos</label>
              <textarea class="form-control" name="descripcion" rows="3" required></textarea>
            </div>
            <div class="col-12">
              <label class="form-label">Detalle de lo que solicita</label>
              <textarea class="form-control" name="pedido" rows="2" required></textarea>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-danger px-5">Enviar Reclamo</button>
            </div>
          </div>
        </form>
      </div>

      <!-- Mensaje de decisión del negocio -->
      <div class="negocio-mensaje" id="mensajeNegocio" style="display:none;">
        <strong>Respuesta del negocio:</strong>
        <div id="textoNegocio">Su reclamo ha sido recibido y está en proceso de revisión. Nos comunicaremos con usted a la brevedad posible.</div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-4">
    <div class="container text-center">
      <p class="mb-0">© 2025 Maglody. Todos los derechos reservados.</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/utilidades.js"></script>
</body>
</html>