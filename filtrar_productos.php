<?php
include 'conexion.php';

$busqueda = isset($_GET['busqueda']) ? trim($_GET['busqueda']) : '';
$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';
$orden = isset($_GET['orden']) ? $_GET['orden'] : '';

$sql = "SELECT * FROM productos WHERE 1=1";

if (!empty($busqueda)) {
  $busqueda_esc = $conn->real_escape_string($busqueda);
  $sql .= " AND nombre LIKE '%$busqueda_esc%'";
}

if (!empty($categoria)) {
  $categoria_esc = $conn->real_escape_string($categoria);
  $sql .= " AND categoria = '$categoria_esc'";
}

switch ($orden) {
  case 'precio-asc':
    $sql .= " ORDER BY precio ASC";
    break;
  case 'precio-desc':
    $sql .= " ORDER BY precio DESC";
    break;
  case 'nombre':
    $sql .= " ORDER BY nombre ASC";
    break;
  default:
    $sql .= " ORDER BY id DESC";
    break;
}

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3">';
    echo '  <div class="card h-100 shadow-sm">';
    echo '    <img src="' . $row['imagen'] . '" class="card-img-top" alt="' . $row['nombre'] . '">';
    echo '    <div class="card-body d-flex flex-column">';
    echo '      <h5 class="card-title">' . $row['nombre'] . '</h5>';
    echo '      <p class="card-text mb-2">' . $row['descripcion'] . '</p>';
    echo '      <div class="mt-auto d-flex justify-content-between align-items-center">';
    echo '        <span class="fw-bold text-primary">S/ ' . number_format($row['precio'], 2) . '</span>';
    echo '        <button class="btn btn-outline-success btn-sm add-to-cart" data-id="' . $row['id'] . '" data-nombre="' . $row['nombre'] . '" data-precio="' . $row['precio'] . '" data-imagen="' . $row['imagen'] . '" title="Agregar al carrito"> <i class="bi bi-cart-plus"></i> Agregar </button>';
    echo '      </div>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
  }
} else {
  echo '<div class="col-12 text-center text-muted">No hay productos disponibles.</div>';
}

$conn->close();
?>