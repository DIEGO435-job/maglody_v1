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
<body style="background: #f8f9fa;"></body>

    <!-- Medios de Pago -->
  <section class="py-5">
    <div class="container">
      <h1 class="main-title mb-5 text-center" style="color:#A91B47;">Medios de Pago</h1>
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="pago-card text-center">
            <img src="img/efectivo.png" alt="Pago en efectivo" class="pago-icon">
            <div class="pago-title">Efectivo</div>
            <div class="pago-desc">
              Puedes pagar en efectivo al momento de recoger tu pedido en tienda o al recibirlo en tu domicilio.
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="pago-card text-center">
            <img src="img/yape.png" alt="Pago con Yape" class="pago-icon">
            <div class="pago-title">Yape</div>
            <div class="pago-desc">
              Realiza tu pago de forma rápida y segura usando Yape. Solo escanea nuestro QR o busca nuestro número.
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="pago-card text-center">
            <img src="img/plin.png" alt="Pago con Plin" class="pago-icon">
            <div class="pago-title">Plin</div>
            <div class="pago-desc">
              También aceptamos pagos por Plin. Solicita nuestro número o código QR al hacer tu pedido.
            </div>
          </div>
        </div>
      <div class="text-center mt-4">
        <h5 class="mb-3" style="color:#8B1538;">¿Tienes dudas sobre cómo pagar?</h5>
        <a href="mailto:maglodypasteleria@gmail.com?subject=Consulta%20Medios%20de%20Pago" class="btn btn-danger">Contáctanos</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
</body>
</html>