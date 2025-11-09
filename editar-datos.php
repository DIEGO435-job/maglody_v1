<?php include 'editar-datos-procesar.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Datos | Maglody</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <!-- Navbar -->
  <?php include 'header-copy.php'; ?>

  <!-- Contenido -->
<section class="container py-5">
  <h2 class="text-center text-maglody fw-bold mb-4">
    <i class="bi bi-person-lines-fill me-2"></i>Editar mis datos
  </h2>

  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
      <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">
          <form method="POST" novalidate>
            <!-- Alertas -->
            <?php if (!empty($error)): ?>
              <div class="alert alert-danger d-flex align-items-center" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i><?= $error ?>
              </div>
            <?php elseif (!empty($exito)): ?>
              <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i><?= $exito ?>
              </div>
            <?php endif; ?>

            <!-- Nombre -->
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre completo</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="<?= htmlspecialchars($usuario['nombre']) ?>" required>
            </div>

            <!-- Correo -->
            <div class="mb-3">
              <label for="correo" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="correo" name="correo" value="<?= htmlspecialchars($usuario['correo']) ?>" required>
            </div>

            <!-- Teléfono -->
            <div class="mb-3">
              <label for="telefono" class="form-label">Teléfono</label>
              <input type="tel" class="form-control" id="telefono" name="telefono" value="<?= htmlspecialchars($usuario['telefono']) ?>">
            </div>

            <!-- DNI -->
            <div class="mb-3">
              <label for="dni" class="form-label">DNI</label>
              <input type="text" class="form-control" id="dni" name="dni" value="<?= htmlspecialchars($usuario['dni']) ?>">
            </div>

            <!-- Dirección -->
            <div class="mb-3">
              <label for="direccion" class="form-label">Dirección</label>
              <textarea class="form-control" id="direccion" name="direccion" rows="2"><?= htmlspecialchars($usuario['direccion']) ?></textarea>
            </div>

            <!-- Botones -->
            <div class="d-flex justify-content-between align-items-center mt-4">
              <a href="perfil.php" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left"></i> Volver al Perfil
              </a>
              <button type="submit" class="btn btn-maglody">
                <i class="bi bi-save me-1"></i> Guardar Cambios
              </button>
            </div>
          </form>
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