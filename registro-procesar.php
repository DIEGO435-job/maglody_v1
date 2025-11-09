<?php
session_start();
include 'conexion.php';

$error = '';
$exito = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre     = trim($_POST['nombre']);
  $correo     = trim($_POST['correo']);
  $telefono   = trim($_POST['telefono']);
  $dni        = trim($_POST['dni']);
  $direccion  = trim($_POST['direccion']);
  $contrasena = trim($_POST['password']);
  $confirmar  = trim($_POST['confirmar']);

  if ($contrasena !== $confirmar) {
    $error = "Las contraseñas no coinciden.";
  } else {
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
      $error = "El correo ya está registrado.";
    } else {
      $hash = password_hash($contrasena, PASSWORD_DEFAULT);
      $rol = 'cliente';

      $stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, telefono, dni, direccion, contrasena, rol) VALUES (?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssssss", $nombre, $correo, $telefono, $dni, $direccion, $hash, $rol);

      if ($stmt->execute()) {
        $exito = "Registro exitoso. Ya puedes iniciar sesión.";
      } else {
        $error = "Error al registrar usuario.";
      }
    }
    $stmt->close();
  }
}
?>
