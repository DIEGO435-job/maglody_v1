<?php 
include 'header-copy.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Historial de Compras | Maglody</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>


  <!-- Título -->
  <section class="bg-light py-4 text-center border-bottom">
    <div class="container">
      <h1 class="fw-bold text-maglody">Historial de Compras</h1>
      <p class="text-muted mb-0">Consulta todos los pedidos que has realizado</p>
    </div>
  </section>

  <section class="container py-5">
  <h2 class="text-center text-maglody mb-4">
    <i class="bi bi-clock-history me-2"></i>Historial de Pedidos
  </h2>

  <div class="table-responsive">
    <table class="table table-hover align-middle shadow-sm border rounded overflow-hidden">
      <thead class="table-maglody text-white">
        <tr class="text-center">
          <th scope="col"><i class="bi bi-hash"></i> Pedido</th>
          <th scope="col"><i class="bi bi-calendar-event"></i> Fecha</th>
          <th scope="col"><i class="bi bi-card-text"></i> Productos</th>
          <th scope="col"><i class="bi bi-cash-coin"></i> Total</th>
          <th scope="col"><i class="bi bi-check2-circle"></i> Estado</th>
          <th scope="col"><i class="bi bi-gear"></i> Acción</th>
        </tr>
      </thead>
      <tbody class="bg-white">
        <!-- Pedido 1 -->
        <tr>
          <td class="text-center fw-bold">#1009</td>
          <td class="text-center">15/05/2025</td>
          <td>
            <ul class="mb-0 ps-3">
              <li>Torta de zanahoria</li>
              <li>Brownies (6 unidades)</li>
            </ul>
          </td>
          <td class="text-center fw-semibold">S/ 65.00</td>
          <td class="text-center"><span class="badge bg-success px-3 py-2">Entregado</span></td>
          <td class="text-center">
            <a href="detalle-pedido.php?id=1009" class="btn btn-outline-danger btn-sm">
              <i class="bi bi-eye-fill me-1"></i> Ver Detalles
            </a>
          </td>
        </tr>

        <!-- Pedido 2 -->
        <tr>
          <td class="text-center fw-bold">#1006</td>
          <td class="text-center">02/04/2025</td>
          <td>
            <ul class="mb-0 ps-3">
              <li>Empanadas</li>
              <li>Chocotejas</li>
            </ul>
          </td>
          <td class="text-center fw-semibold">S/ 35.00</td>
          <td class="text-center"><span class="badge bg-secondary px-3 py-2">Archivado</span></td>
          <td class="text-center">
            <a href="#" class="btn btn-outline-danger btn-sm">
              <i class="bi bi-eye-fill me-1"></i> Ver Detalles
            </a>
          </td>
        </tr>

        <!-- Más pedidos aquí -->
      </tbody>
    </table>
  </div>

  <div class="text-center mt-4">
    <a href="perfil.php" class="btn btn-outline-danger">
      <i class="bi bi-arrow-left me-1"></i> Volver a mi perfil
    </a>
  </div>
</section>
  <!-- Footer -->
  <?php include 'footer.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>