<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'conexion.php';

// Redirigir si no está logeado
if (!isset($_SESSION['usuario_id'])) {
  header("Location: login.php");
  exit();
}

$usuario_id = $_SESSION['usuario_id'];
$datos_usuario = [];

$stmt = $conn->prepare("SELECT nombre, correo, telefono, dni, direccion, fecha_registro FROM usuarios WHERE id = ? LIMIT 1");
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
  $datos_usuario = $resultado->fetch_assoc();
}

$stmt->close();
?>

