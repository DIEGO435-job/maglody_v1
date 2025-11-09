<?php
$host = 'apstivigil.edu.pe';
$usuario = 'iespvigil_udia_e7';
$contrasena = 'Xp9!Tk$E2wNz';
$base_datos = 'iespvigil_bddia_e7';
$puerto = 3306;

$conn = new mysqli($host, $usuario, $contrasena, $base_datos, $puerto);

if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
}
?>