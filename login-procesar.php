<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'conexion.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $correo = trim($_POST['correo']);
  $contrasena = trim($_POST['contrasena']);

  $stmt = $conn->prepare("SELECT id, nombre, contrasena, rol FROM usuarios WHERE correo = ? LIMIT 1");
  $stmt->bind_param("s", $correo);
  $stmt->execute();
  $resultado = $stmt->get_result();

  if ($resultado->num_rows === 1) {
    $usuario = $resultado->fetch_assoc();
    if (password_verify($contrasena, $usuario['contrasena'])) {
      $_SESSION['usuario_id'] = $usuario['id'];
      $_SESSION['nombre'] = $usuario['nombre'];
      $_SESSION['rol'] = $usuario['rol'];
      header("Location: perfil.php");
      exit();
    } else {
      $error = "Contraseña incorrecta.";
    }
  } else {
    $error = "No se encontró una cuenta con ese correo.";
  }

  $stmt->close();
}