<?php
include 'header.php';
?>
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Carrito de Compras | Maglody</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <!-- Carrito -->
    <section class="container py-5">
      <h2 class="text-center text-maglody fw-bold mb-4">Tu Carrito de Compras</h2>

      <div class="table-responsive">
        <table class="table align-middle shadow-sm bg-white">
          <thead class="table-maglody text-white">
            <tr>
              <th>Producto</th>
              <th>Cantidad</th>
              <th>Precio unitario</th>
              <th>Subtotal</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>

      <!-- Total y acciones -->
      <div class="d-flex justify-content-between align-items-center mt-4">
        <a href="productos.php" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i> Seguir comprando</a>
        <h4>Total: <span class="text-maglody">S/ 45.00</span></h4>
        <a href="checkout.php" class="btn btn-danger">Proceder al pago</a>
      </div>
    </section>

    <!-- Footer -->

<?php include 'footer.php'; ?>
<script src="js/vista-carrito.js"></script>

  </body>
  </html>