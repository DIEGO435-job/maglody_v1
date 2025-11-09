<?php
session_start();
include 'login-procesar.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión | Maglody</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php include 'header.php'; ?>

<section class="login-section d-flex align-items-center justify-content-center py-4">
  <div class="card login-card shadow-lg border-0" style="max-width: 420px; width: 100%; border-radius: 1rem;">
    <div class="card-body p-4">
      <div class="text-center mb-4">
        <img src="img/user-login.png" alt="Login" style="width: 60px;">
        <h2 class="text-maglody mb-2" style="font-weight: bold; font-style: italic;">Bienvenido de nuevo</h2>
        <p style="color: #666;">Inicia sesión para gestionar tus pedidos</p>
      </div>
      <?php if (!empty($error)): ?>
        <div class="alert alert-danger text-center"> <?= $error ?> </div>
      <?php endif; ?>
      <form method="POST">
        <div class="mb-3">
          <label for="correo" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" name="correo" id="correo" required>
        </div>
        <div class="mb-3">
          <label for="contrasena" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="contrasena" id="contrasena" required>
        </div>
        <button type="submit" class="btn w-100 login-btn d-flex justify-content-center align-items-center gap-2">Ingresar</button>
      </form>
      <div class="mt-3 text-center small-links">
        <a href="olvide-password.php" class="d-block">¿Olvidaste tu contraseña?</a>
        <a href="registro.php" class="d-block">¿No tienes cuenta? <strong>Regístrate</strong></a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
