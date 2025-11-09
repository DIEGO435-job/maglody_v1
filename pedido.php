<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maglody | Realizar Pedido</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <!-- Header -->

  <!-- Formulario de Pedido -->
<section class="py-5" style="background: #f1f4f8ff;">
  <div class="container">
    <h1 class="main-title mb-4 text-center"><i class="bi bi-cart-fill me-2 text-primary"></i>Realiza tu Pedido</h1>
    <form class="bg-white rounded shadow p-4 mx-auto" style="max-width: 600px;" id="pedidoForm" autocomplete="off">

      <!-- Datos del cliente -->
      <div class="mb-4">
        <label class="form-section-title"><i class="bi bi-person-fill me-2 text-maglody"></i>Datos del Cliente</label>
        <input type="text" class="form-control mb-2" name="nombre" placeholder="👤 Nombre completo" required>
        <input type="tel" class="form-control mb-2" name="telefono" placeholder="📞 Teléfono o celular" required>
        <input type="email" class="form-control" name="email" placeholder="✉️ Correo electrónico (opcional)">
      </div>

      <!-- Producto -->
      <div class="mb-4">
        <label class="form-section-title"><i class="bi bi-box-seam me-2 text-maglody"></i>Producto</label>
        <select class="form-select mb-2" name="producto" required>
          <option value="">🍰 Selecciona un producto</option>
          <option value="Pan Ciabatta">Pan Ciabatta</option>
          <option value="Empanada de Queso">Empanada de Queso</option>
          <option value="Pastel de Chocolate">Pastel de Chocolate</option>
          <option value="Postre Tres Leches">Postre Tres Leches</option>
        </select>
        <input type="number" class="form-control mb-2" name="cantidad" min="1" placeholder="🔢 Cantidad" required>
        <input type="text" class="form-control" name="detalles" placeholder="📝 Detalles adicionales (sabor, tamaño, mensaje, etc.)">
      </div>

      <!-- Entrega -->
      <div class="mb-4">
        <label class="form-section-title"><i class="bi bi-truck me-2 text-maglody"></i>Entrega</label>
        <input type="date" class="form-control mb-2" name="fecha" required>
        <input type="time" class="form-control mb-2" name="hora" required>
        <select class="form-select" name="tipo_entrega" required>
          <option value="">Tipo de entrega</option>
          <option value="Recojo en tienda">Recojo en tienda</option>
          <option value="Delivery">Delivery</option>
        </select>
        <input type="text" class="form-control mt-2" name="direccion" placeholder="🏠 Dirección (si es delivery)">
      </div>

      <!-- Medio de pago -->
      <div class="mb-4">
        <label class="form-section-title"><i class="bi bi-credit-card-2-back-fill me-2 text-maglody"></i>Medio de Pago</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="pago" id="pagoEfectivo" value="Efectivo" checked>
          <label class="form-check-label" for="pagoEfectivo"><i class="bi bi-cash-coin me-1"></i>Efectivo</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="pago" id="pagoYape" value="Yape">
          <label class="form-check-label" for="pagoYape"><i class="bi bi-phone me-1"></i>Yape</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="pago" id="pagoPlin" value="Plin">
          <label class="form-check-label" for="pagoPlin"><i class="bi bi-phone me-1"></i>Plin</label>
        </div>
        <div class="text-center mt-3">
          <img src="img/yape_qr.png" alt="QR Yape" id="qrYape" class="qr-img me-2">
          <img src="img/plin_qr.png" alt="QR Plin" id="qrPlin" class="qr-img">
        </div>
      </div>

      <!-- Comentarios -->
      <div class="mb-4">
        <label class="form-section-title"><i class="bi bi-chat-text-fill me-2 text-maglody"></i>Comentarios adicionales</label>
        <textarea class="form-control" name="comentarios" rows="2" placeholder="💬 ¿Algo más que debamos saber?"></textarea>
      </div>

      <!-- Botón -->
      <div class="text-center">
        <button type="submit" class="btn btn-primary px-5">
          <i class="bi bi-send-fill me-1"></i>Enviar Pedido
        </button>
      </div>
    </form>

    <div id="pedidoExito" class="alert alert-success mt-4 text-center d-none">
      ¡Tu pedido ha sido enviado! Nos pondremos en contacto contigo pronto.
    </div>
  </div>
</section>


  <!-- Footer -->
  <?php include 'footer.php'; ?>
  <script src="js/pedidos.js"></script>
  
</body>
</html>