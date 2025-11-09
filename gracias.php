<?php
include_once 'init.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gracias por tu compra | Maglody</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<section class="agradecimiento d-flex align-items-center justify-content-center" style="min-height: 80vh; background-color: #fff5f7;">
  <div class="text-center p-4">
    <img src="img/logo.png" alt="Logo Maglody" class="mb-4" style="max-width: 120px;">
    <h1 class="text-maglody fw-bold mb-3">¡Gracias por tu compra!</h1>
    <p class="lead mb-4">Tu pedido ha sido registrado exitosamente. Muy pronto nos pondremos en contacto contigo para coordinar la entrega.</p>
    <p class="text-muted mb-4">¡Esperamos que disfrutes tu pedido y regreses pronto por más dulces momentos!</p>
    <a href="productos.php" class="btn btn-danger btn-lg px-5">Seguir comprando</a>
  </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
