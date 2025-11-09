<?php
include 'init.php';

if (!isset($_GET['id'])) {
  die("ID no especificado.");
}

$pedido_id = intval($_GET['id']);

// Obtener pedido
$query = "SELECT * FROM pedidos WHERE id_pedido = $pedido_id LIMIT 1";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0) {
  die("Pedido no encontrado.");
}

$pedido = mysqli_fetch_assoc($result);

// Obtener productos
$productos_result = mysqli_query($conn, "
  SELECT p.nombre, dp.cantidad, dp.precio_unitario 
  FROM detalle_pedido dp 
  JOIN productos p ON dp.id_producto = p.id_producto 
  WHERE dp.id_pedido = $pedido_id
");

$productos = [];
$total = 0;

while ($prod = mysqli_fetch_assoc($productos_result)) {
  $subtotal = $prod['cantidad'] * $prod['precio_unitario'];
  $total += $subtotal;
  $productos[] = [
    'nombre' => $prod['nombre'],
    'cantidad' => $prod['cantidad'],
    'precio_unitario' => $prod['precio_unitario'],
    'subtotal' => $subtotal
  ];
}

// Costo de envío
$costo_envio = 0;
if ($pedido['envio'] === 'Delivery' && in_array($pedido['metodo_pago'], ['Yape', 'Plin'])) {
  $costo_envio = 5;
  $total += 5;
}
