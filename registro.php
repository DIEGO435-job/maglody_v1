<?php
include 'registro-procesar.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro | Maglody</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>

<?php include 'header.php'; ?>

<section class="login-section py-1">
  <div class="card login-card shadow-lg border-0 my-5 mx-auto" style="max-width: 520px; width: 100%; border-radius: 1rem;">
    <div class="card-body p-4">
      <div class="text-center mb-4">
        <img src="img/user-login1.png" alt="Registro">
        <h2 class="text-maglody mb-2" style="font-weight: bold; font-style: italic;">Crear cuenta</h2>
        <p style="color: #666;">Completa el formulario para registrarte</p>
      </div>
      <?php if (!empty($error)): ?>
        <div class="alert alert-danger text-center"> <?= $error ?> </div>
      <?php elseif (!empty($exito)): ?>
        <div class="alert alert-success text-center"> <?= $exito ?> </div>
      <?php endif; ?>
      <form method="POST">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre completo</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
          <label for="correo" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="mb-3">
          <label for="telefono" class="form-label">Teléfono</label>
          <input type="tel" class="form-control" id="telefono" name="telefono">
        </div>
        <div class="mb-3">
          <label for="dni" class="form-label">DNI</label>
          <input type="text" class="form-control" id="dni" name="dni" maxlength="15">
        </div>
        <div class="mb-3">
          <label for="direccion" class="form-label">Dirección</label>
          <input type="text" class="form-control" id="direccion" name="direccion" maxlength="200">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
          <label for="confirmar" class="form-label">Confirmar contraseña</label>
          <input type="password" class="form-control" id="confirmar" name="confirmar" required>
        </div>
        <button type="submit" class="btn w-100 login-btn d-flex justify-content-center align-items-center gap-2">Registrarme</button>
      </form>
      <div class="mt-3 text-center small-links">
        <a href="login.php">¿Ya tienes cuenta? <strong>Inicia sesión</strong></a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>