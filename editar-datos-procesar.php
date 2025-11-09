<?php
session_start();
include 'conexion.php';

if (!isset($_SESSION['usuario_id'])) {
  header("Location: login.php");
  exit();
}

$id = $_SESSION['usuario_id'];
$exito = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = trim($_POST['nombre']);
  $correo = trim($_POST['correo']);
  $telefono = trim($_POST['telefono']);
  $dni = trim($_POST['dni']);
  $direccion = trim($_POST['direccion']);

  $stmt = $conn->prepare("UPDATE usuarios SET nombre = ?, correo = ?, telefono = ?, dni = ?, direccion = ? WHERE id = ?");
  $stmt->bind_param("sssssi", $nombre, $correo, $telefono, $dni, $direccion, $id);

  if ($stmt->execute()) {
    $exito = "Datos actualizados correctamente.";
    $_SESSION['nombre'] = $nombre; // por si quieres mostrarlo en navbar
  } else {
    $error = "Error al actualizar los datos.";
  }

  $stmt->close();
}

// Obtener datos actuales del usuario
$stmt = $conn->prepare("SELECT nombre, correo, telefono, dni, direccion FROM usuarios WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$usuario = $resultado->fetch_assoc();
$stmt->close();
?>
  