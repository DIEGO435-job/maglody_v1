<?php
include 'header-copy.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mis Pedidos | Maglody</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>


  <!-- Hero -->
  <section class="bg-light py-4 text-center border-bottom">
    <div class="container">
      <h1 class="fw-bold text-maglody">Mis Pedidos</h1>
      <p class="text-muted mb-0">Revisa tu historial de compras en Maglody</p>
    </div>
  </section>

  <!-- Historial de pedidos -->
  <section class="container py-5">
    <div class="table-responsive">
      <table class="table table-hover align-middle bg-white shadow-sm">
        <thead class="table-maglody text-white">
          <tr>
            <th># Pedido</th>
            <th>Fecha</th>
            <th>Productos</th>
            <th>Total</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#1024</td>
            <td>05/07/2025</td>
            <td>
              Torta personalizada, 6 cupcakes<br>
              <small class="text-muted">Ver más detalles...</small>
            </td>
            <td>S/ 85.00</td>
            <td><span class="badge bg-success">Entregado</span></td>
          </tr>
          <tr>
            <td>#1023</td>
            <td>30/06/2025</td>
            <td>Panetón + Empanadas</td>
            <td>S/ 45.00</td>
            <td><span class="badge bg-warning text-dark">En camino</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-3">
    <small>&copy; 2025 Maglody Pastelería</small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>