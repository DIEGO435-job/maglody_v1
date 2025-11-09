<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Detalle del Pedido | Maglody</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<section class="main-content py-5">
  <div class="container">
    <h2 class="text-center text-maglody mb-2">
      <i class="bi bi-receipt-cutoff me-2"></i>Detalle del Pedido #1009
    </h2>
    <p class="text-center text-muted mb-4">
      Realizado el <strong>15/05/2025</strong> • Estado: <span class="badge bg-success">Entregado</span>
    </p>

    <div class="row g-4">
      <!-- Resumen del pedido -->
      <div class="col-md-6">
        <div class="card shadow rounded-4">
          <div class="card-body">
            <h5 class="text-maglody mb-3"><i class="bi bi-bag-check-fill me-2"></i>Resumen del Pedido</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between">
                <span><i class="bi bi-cupcake me-1"></i> Torta de zanahoria</span>
                <span>S/ 45.00</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span><i class="bi bi-basket2-fill me-1"></i> Brownies (6 unidades)</span>
                <span>S/ 20.00</span>
              </li>
              <li class="list-group-item d-flex justify-content-between text-muted">
                <span><i class="bi bi-truck me-1"></i> Delivery (Yape/Plin)</span>
                <span>S/ 5.00</span>
              </li>
              <li class="list-group-item d-flex justify-content-between fw-bold border-top pt-2 mt-2">
                <span><i class="bi bi-cash-coin me-1"></i> Total</span>
                <span>S/ 70.00</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Información del cliente -->
      <div class="col-md-6">
        <div class="card shadow rounded-4">
          <div class="card-body">
            <h5 class="text-maglody mb-3"><i class="bi bi-person-lines-fill me-2"></i>Información del Cliente</h5>
            <p><i class="bi bi-person-fill me-2"></i><strong>Nombre:</strong> Juan Pérez</p>
            <p><i class="bi bi-geo-alt-fill me-2"></i><strong>Ciudad:</strong> Tacna</p>
            <p><i class="bi bi-house-door-fill me-2"></i><strong>Dirección:</strong> Calle Los Pasteles 789</p>
            <p><i class="bi bi-telephone-fill me-2"></i><strong>Teléfono:</strong> 987654321</p>
            <p><i class="bi bi-credit-card-fill me-2"></i><strong>Método de Pago:</strong> Yape</p>
            <p><i class="bi bi-truck-front-fill me-2"></i><strong>Entrega:</strong> Delivery</p>
            <p><i class="bi bi-chat-dots-fill me-2"></i><strong>Observaciones:</strong> Entregar entre 3:00 y 4:00 pm</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Botón de retorno -->
    <div class="text-center mt-5">
      <a href="historial.php" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i> Volver al historial
      </a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>
