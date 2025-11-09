<?php
include 'perfil-procesar.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi Perfil | Maglody</title>
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
      <i class="bi bi-person-circle me-2"></i>Mi Perfil
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
            <a href="panel_admin.php" class="btn btn-outline-danger btn-sm mt-3">
              <i class="bi bi-pencil-fill me-1"></i> Panel de administrador
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
                <h5 class="fw-bold text-maglody mb-3"><i class="bi bi-clock-history me-2"></i>Últimos pedidos</h5>
                <ul class="list-group list-group-flush small">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Torta de Chocolate - 1kg
                    <span class="badge bg-success rounded-pill">Entregado</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cupcakes personalizados (12u)
                    <span class="badge bg-warning text-dark rounded-pill">En preparación</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Panetón casero
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

          <!-- Promociones -->
          <div class="col-12">
            <div class="card card-maglody h-100">
              <div class="card-body">
                <h5 class="fw-bold text-maglody mb-3"><i class="bi bi-gift-fill me-2"></i>Promociones para ti</h5>
                <ul class="list-unstyled small">
                  <li><i class="bi bi-star-fill text-warning me-2"></i>10% de descuento en tu próxima compra</li>
                  <li><i class="bi bi-truck text-success me-2"></i>Envío gratis en pedidos mayores a S/ 50</li>
                </ul>
                <a href="promociones.php" class="btn btn-outline-danger btn-sm mt-2">
                  <i class="bi bi-arrow-right-circle me-1"></i> Ver todas
                </a>
              </div>
            </div>
          </div>

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