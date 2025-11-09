<?php
include 'init.php';
include 'conexion.php';
include 'procesar-cambiar-contrasena.php';
include 'header-copy.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cambiar Contraseña | Maglody</title>
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<section class="container py-5">
  <h2 class="text-maglody text-center mb-4">Cambiar Contraseña</h2>

  <?php if (!empty($mensaje)): ?>
    <div class="alert <?php echo str_contains($mensaje, '✅') ? 'alert-success' : 'alert-danger'; ?>">
      <?php echo $mensaje; ?>
    </div>
  <?php endif; ?>

  <form method="POST" class="bg-white p-4 shadow rounded-4 mx-auto" style="max-width: 500px;">
  <h4 class="text-center text-maglody mb-4"><i class="bi bi-shield-lock-fill me-2"></i>Actualizar Contraseña</h4>

  <div class="mb-3">
    <label for="contrasena_actual" class="form-label">Contraseña Actual</label>
    <div class="input-group">
      <span class="input-group-text bg-light"><i class="bi bi-lock-fill"></i></span>
      <input type="password" name="contrasena_actual" id="contrasena_actual" class="form-control" placeholder="Ingresa tu contraseña actual" required>
    </div>
  </div>

  <div class="mb-3">
    <label for="nueva_contrasena" class="form-label">Nueva Contraseña</label>
    <div class="input-group">
      <span class="input-group-text bg-light"><i class="bi bi-key-fill"></i></span>
      <input type="password" name="nueva_contrasena" id="nueva_contrasena" class="form-control" placeholder="Crea una nueva contraseña" required>
    </div>
  </div>

  <div class="mb-4">
    <label for="confirmar_contrasena" class="form-label">Confirmar Nueva Contraseña</label>
    <div class="input-group">
      <span class="input-group-text bg-light"><i class="bi bi-check2-circle"></i></span>
      <input type="password" name="confirmar_contrasena" id="confirmar_contrasena" class="form-control" placeholder="Confirma tu nueva contraseña" required>
    </div>
  </div>

  <div class="d-grid">
    <button type="submit" class="btn btn-maglody"><i class="bi bi-save me-1"></i>Guardar Cambios</button>
    <a href="perfil.php" class="btn btn-outline-danger mt-2"><i class="bi bi-arrow-left me-1"></i>Volver al Perfil</a>
  </div>
</form>

</section>

<?php include 'footer.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>