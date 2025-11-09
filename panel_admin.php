<?php
include 'perfil-procesar.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Administrador | Maglody</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Header -->
<?php include 'header-copy.php'; ?>

<section class="perfil-section py-5">
  <div class="container">
    <h2 class="text-center text-maglody fw-bold mb-5">
      <i class="bi bi-person-circle me-2"></i>Administrador
    </h2>
    <div class="row g-4">

      <!-- Panel izquierdo: Datos del cliente -->
      <div class="col-md-4">
          <div class="card card-maglody text-center">
            <div class="card-body">
            <img src="img/user-login1.png" alt="Perfil" class="rounded-circle mb-3 shadow-sm" style="width: 100px;">
            <h5 class="fw-bold text-maglody"><?= htmlspecialchars($datos_usuario['nombre']) ?></h5>
            <p class="text-muted small mb-1"><?= htmlspecialchars($datos_usuario['correo']) ?></p>
            <p class="text-muted small">Cliente desde <?= date('Y', strtotime($datos_usuario['fecha_registro'])) ?></p>

            <hr class="my-3">
            <ul class="list-unstyled text-start small">
              <li><i class="bi bi-person-vcard-fill me-2 text-primary"></i>DNI: <?= htmlspecialchars($datos_usuario['dni']) ?></li>
              <li><i class="bi bi-telephone-fill me-2 text-primary"></i><?= htmlspecialchars($datos_usuario['telefono']) ?></li>
              <li><i class="bi bi-geo-alt-fill me-2 text-primary"></i><?= htmlspecialchars($datos_usuario['direccion']) ?></li>
            </ul>
            <a href="editar-datos.php" class="btn btn-outline-danger btn-sm mt-3">
              <i class="bi bi-pencil-fill me-1"></i> Editar datos
            </a>
          </div>
        </div>
      </div>

      <!-- Panel derecho: Pedidos, promociones, configuración -->
      <div class="col-md-8">
        <div class="row g-4">

          <!-- Últimos pedidos -->
          <div class="col-12">
            <div class="card card-maglody h-100">
              <div class="card-body">
                <h5 class="fw-bold text-maglody mb-3"><i class="bi bi-clock-history me-2"></i>Pedidos de clientes</h5>
                <ul class="list-group list-group-flush small">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Andrés Felipe Gómez Sáez
                    <span class="badge bg-success rounded-pill">Entregado</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    José María Ramírez Tovar
                    <span class="badge bg-warning text-dark rounded-pill">En preparación</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Daniel Andrés Torres Frías
                    <span class="badge bg-secondary rounded-pill">Archivado</span>
                  </li>
                </ul>
                <div class="mt-3 text-end">
                  <a href="historial.php" class="btn btn-outline-danger btn-sm">
                    <i class="bi bi-list-ul me-1"></i> Ver historial completo
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- agregar productos -->
          <div class="col-12">
  <div class="card card-maglody h-100">
    <div class="card-body">
      <h5 class="fw-bold text-maglody mb-3">
        <i class="bi bi-box-seam-fill me-2"></i>Agregar nuevo producto
      </h5>

      <form action="agregar_producto.php" method="POST" enctype="multipart/form-data" class="small">
        <div class="mb-2">
          <label for="nombre" class="form-label">Nombre del producto</label>
          <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" required>
        </div>

        <div class="mb-2">
          <label for="precio" class="form-label">Precio (S/)</label>
          <input type="number" class="form-control form-control-sm" id="precio" name="precio" step="0.01" required>
        </div>

        <div class="mb-2">
          <label for="categoria" class="form-label">Categoría</label>
          <select class="form-select form-select-sm" id="categoria" name="categoria" required>
            <option value="" selected disabled>Seleccione una categoría</option>
            <option value="pintura">Pastel</option>
            <option value="metal">Bocadito</option>
            <option value="madera">Postre</option>
          </select>
        </div>

        <div class="mb-2">
          <label for="imagen" class="form-label">Imagen del producto</label>
          <input type="file" class="form-control form-control-sm" id="imagen" name="imagen" accept="image/*" required>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-outline-danger btn-sm mt-2">
            <i class="bi bi-plus-circle me-1"></i> Agregar producto
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- grafico de ingresos -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="col-12">
  <div class="card card-maglody h-100">
    <div class="card-body">
      <h5 class="fw-bold text-maglody mb-3">
        <i class="bi bi-bar-chart-fill me-2"></i>Ingresos de la tienda
      </h5>

      <p class="small text-muted mb-3">
        Visualiza el rendimiento de tus ventas durante los últimos meses.
      </p>

      <!-- Contenedor del gráfico -->
      <canvas id="graficoIngresos" height="150"></canvas>

      <div class="text-center mt-3">
        <a href="reportes_ingresos.php" class="btn btn-outline-danger btn-sm">
          <i class="bi bi-file-earmark-bar-graph me-1"></i> Ver reporte completo
        </a>
      </div>
    </div>
  </div>
</div>
<script src="js/carrito.js"></script>

          <!-- Configuración -->
          <div class="col-12">
            <div class="card card-maglody h-100">
              <div class="card-body">
                <h5 class="fw-bold text-maglody mb-3"><i class="bi bi-gear-fill me-2"></i>Configuración</h5>
                <a href="cambiar-contrasena.php" class="d-block mb-2">
                  <i class="bi bi-lock-fill me-2"></i>Cambiar contraseña
                </a>
                <a href="logout.php" class="d-block text-danger">
                  <i class="bi bi-box-arrow-right me-2"></i>Cerrar sesión
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


  <!-- Footer -->
<?php include 'footer.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>