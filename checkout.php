<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Finalizar Pedido | Maglody</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

 <?php include 'header-copy.php'; ?>


<!-- Sección de Checkout -->
  <section class="py-5" style="background-color: #fff6ea;">
    <div class="container">
      <h2 class="text-center text-maglody mb-4 fw-bold">Finalizar Pedido</h2>
      <form class="row g-4" id="pedidoForm">
        <!-- Datos de envío -->
        <div class="col-md-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="fw-bold mb-3 text-maglody">Datos de Envío</h5>
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" id="nombre" required>
              </div>
              <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" required>
              </div>
              <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" required>
              </div>
            </div>
          </div>
        </div>

          <!-- Resumen del pedido -->
          <div class="col-md-6">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="fw-bold mb-3 text-maglody">Resumen del Pedido</h5>
                <ul class="list-group mb-3" id="resumenPedido"></ul>
                <h6 class="fw-bold text-maglody">Método de pago</h6>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pago" id="pagoEfectivo" value="Efectivo" checked>
                  <label class="form-check-label" for="pagoEfectivo">Efectivo</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pago" id="pagoYape" value="Yape">
                  <label class="form-check-label" for="pagoYape">Yape</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pago" id="pagoPlin" value="Plin">
                  <label class="form-check-label" for="pagoPlin">Plin</label>
                </div>
                <div class="text-center">
                  <img src="img/yape_qr.png" alt="QR Yape" id="qrYape" class="qr-img">
                  <img src="img/plin_qr.png" alt="QR Plin" id="qrPlin" class="qr-img">
                </div>
                <button type="submit" class="btn btn-danger w-100">Confirmar Pedido</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>

  <?php include 'footer.php'; ?>
  <script src="js/pedidos.js"></script>
</body>
</html>
