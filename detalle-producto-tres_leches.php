<?php
include_once 'init.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalle de Producto | Maglody</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<section class="detalle-producto py-5">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-6 text-center">
        <img src="img/T_TresLechesVaililla.jpg" alt="Tres Leches de Vainilla" class="img-fluid detalle-img rounded shadow mb-4">
      </div>
      <div class="col-12 col-md-6">
        <h1 class="fw-bold detalle-titulo">Torta Tres Leches de Vainilla</h1>
        <p class="detalle-descripcion fs-5 mb-4 text-muted">
          Delicioso pastel empapado en tres tipos de leche con esencia de vainilla. Ideal para fiestas, cumpleaños o una tarde especial. Preparado con ingredientes frescos y decorado con cuidado.
        </p>
        <div class="detalle-precio mb-4">
          <span class="h4 text-success fw-bold">Precio: S/ 65.00</span>
        </div>
        <button
          id="btn-detalle-pedir"
          class="btn btn-danger btn-lg px-5 add-to-cart"
          data-nombre="Torta Tres Leches de Vainilla"
          data-precio="65.00"
          data-imagen="img/T_TresLechesVaililla.jpg"
        >
          Pedir ahora
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Carrito flotante -->
<div id="cart-float" class="position-fixed bottom-0 end-0 m-4 bg-white border rounded shadow p-3" style="z-index: 1050; min-width: 250px; display: none;">
  <h5 class="mb-3">Carrito</h5>
  <ul class="list-group mb-3" id="cart-items"></ul>
  <div class="d-flex justify-content-between">
    <span>Total:</span>
    <span id="cart-total" class="fw-bold">S/ 0.00</span>
  </div>
  <button class="btn btn-danger w-100 mt-3">Finalizar compra</button>
</div>

<?php include 'footer.php'; ?>
<script src="js/carrito.js"></script>
</body>
</html>
