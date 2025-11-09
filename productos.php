<?php
include_once 'init.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maglody | Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4 text-center fw-bold">Nuestros Productos</h2>
</div>

<section class="py-5">
  <div class="container">
    <form id="form-filtros" method="GET" action="productos.php">
      <div class="row g-3 align-items-center">
        <div class="col-12 col-md-4">
          <input type="text" class="form-control" id="busqueda" placeholder="Buscar producto...">
        </div>
        <div class="col-6 col-md-3">
          <select class="form-select" id="categoria">
            <option value="">Categoría</option>
            <option value="pan">Panadería</option>
            <option value="empanadas">Empanadas</option>
            <option value="tortas">Tortas</option>
            <option value="postres">Postres</option>
          </select>
        </div>
        <div class="col-6 col-md-3">
          <select class="form-select" id="orden">
            <option value="">Ordenar por</option>
            <option value="precio-asc">Precio: menor a mayor</option>
            <option value="precio-desc">Precio: mayor a menor</option>
            <option value="nombre">Nombre</option>
          </select>
        </div>
        <div class="col-12 col-md-2 text-end">
          <button type="submit" class="btn btn-danger w-100">Filtrar</button>
        </div>
      </div>
    </form>
  </div>
</section>

<div class="container">
  <div class="row g-4" id="productos-lista">
    <!-- Aquí se insertarán los productos dinámicamente -->
  </div>
</div>

    <div id="cart-float" class="position-fixed bottom-0 end-0 m-4 bg-white border rounded shadow p-3" style="z-index: 1050; min-width: 250px; display: none;">
      <h5 class="mb-3">Carrito</h5>
      <ul class="list-group mb-3" id="cart-items"></ul>
      <div class="d-flex justify-content-between">
        <span>Total:</span>
        <span id="cart-total" class="fw-bold">S/ 0.00</span>
      </div>
      <a href="checkout.php" class="btn btn-danger w-100 mt-3">Finalizar compra</a>
    </div>

<?php include 'footer.php'; ?>
<script src="js/carrito.js"></script>
<script src="js/filtro-productos.js"></script>
</body>
</html>
