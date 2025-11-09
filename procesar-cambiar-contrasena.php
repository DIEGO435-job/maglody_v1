<?php
// Asegurar que el usuario esté logueado
if (!isset($_SESSION['usuario_id'])) {
  header('Location: login.php');
  exit();
}

$mensaje = "";

// Procesar el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_usuario = $_SESSION['usuario_id'];
  $actual = $_POST['contrasena_actual'] ?? '';
  $nueva = $_POST['nueva_contrasena'] ?? '';
  $confirmar = $_POST['confirmar_contrasena'] ?? '';

  // Verificar que las nuevas coincidan
  if ($nueva !== $confirmar) {
    $mensaje = "❌ Las nuevas contraseñas no coinciden.";
  } else {
    // Obtener contraseña actual desde BD
    $query = "SELECT contrasena FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $stmt->bind_result($hash_actual);
    $stmt->fetch();
    $stmt->close();

    // Verificar contraseña actual
    if (!password_verify($actual, $hash_actual)) {
      $mensaje = "❌ La contraseña actual es incorrecta.";
    } else {
      // Hashear nueva contraseña
      $nueva_hash = password_hash($nueva, PASSWORD_DEFAULT);

      // Actualizar en la base de datos
      $update = "UPDATE usuarios SET contrasena = ? WHERE id = ?";
      $stmt = $conn->prepare($update);
      $stmt->bind_param("si", $nueva_hash, $id_usuario);
      $stmt->execute();
      $stmt->close();

      $mensaje = "✅ Contraseña actualizada correctamente.";
    }
  }
}
