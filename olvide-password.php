<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Recuperar contraseña | Maglody</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>

  <!-- Header -->
<?php include 'header.php'; ?>

  <!-- Sección de recuperación -->
  <section class="login-section d-flex align-items-center justify-content-center py-4">
    <div class="card login-card shadow-lg border-0" style="max-width: 420px; width: 100%; border-radius: 1rem;">
      <div class="card-body p-4">
        <div class="text-center mb-4">
          <img src="img/user-login.png" alt="Recuperar contraseña" style="width: 60px;">
          <h2 class="text-maglody mb-2" style="font-weight: bold; font-style: italic;">¿Olvidaste tu contraseña?</h2>
          <p style="color: #666;">Ingresa tu correo electrónico y te enviaremos un enlace para restablecerla.</p>
        </div>
        <form id="resetForm">
          <div class="mb-3">
            <label for="resetEmail" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="resetEmail" placeholder="ejemplo@correo.com" required>
          </div>
          <button type="submit" class="btn w-100 login-btn d-flex justify-content-center align-items-center gap-2">Enviar enlace</button>
        </form>
        <div class="mt-3 text-center small-links">
          <a href="login.php" class="d-block">Volver al inicio de sesión</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
 <?php include 'footer.php'; ?>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.getElementById('resetForm').addEventListener('submit', function (event) {
    event.preventDefault();
    
    // Puedes validar el correo si gustas
    const email = document.getElementById('resetEmail').value.trim();

    if (email) {
      // Simular el envío y redirigir al perfil
      window.location.href = "login.php";
    } else {
      alert("Por favor, ingresa un correo válido.");
    }
  });
</script>
</body>
</html>