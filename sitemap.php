<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mapa del Sitio | Maglody</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="d-flex flex-column min-vh-100"> <!-- Cambio aquí -->


  <!-- Contenido principal -->
  <section class="sitemap-section flex-grow-1">
    <div class="container text-center">
      <h1 class="sitemap-title display-5">🗺️ Mapa del Sitio Web</h1>
      <p class="lead mb-5">Encuentra fácilmente cada sección del sitio de Maglody</p>

      <div class="row g-4 justify-content-center">
                <!-- Inicio -->
        <div class="col-md-3">
          <div class="sitemap-card">
            <i class="bi bi-house-door-fill icon-lg"></i>
            <h5 class="mt-3">Inicio</h5>
            <a href="index.php" class="sitemap-link">Ir a inicio</a>
          </div>
        </div>

        <!-- Nosotros -->
        <div class="col-md-3">
          <div class="sitemap-card">
            <i class="bi bi-people-fill icon-lg"></i>
            <h5 class="mt-3">Nosotros</h5>
            <a href="nosotros.php" class="sitemap-link">Conócenos</a><br>
            <a href="equipo.php" class="sitemap-link">Nuestro equipo</a><br>
            <a href="testimonios.php" class="sitemap-link">Testimonios</a><br>
            <a href="trabaja-con-nosotros.php" class="sitemap-link">Trabaja con nosotros</a>
          </div>
        </div>

        <!-- Productos -->
        <div class="col-md-3">
          <div class="sitemap-card">
            <i class="bi bi-bag-fill icon-lg"></i>
            <h5 class="mt-3">Productos</h5>
            <a href="productos.php" class="sitemap-link">Todos los productos</a><br>
            <hr>
            <a href="detalle-producto-ciabata.php" class="sitemap-link">Pan Ciabatta</a><br>
            <a href="detalle-producto-empanada-queso.php" class="sitemap-link">Empanada de queso</a><br>
            <a href="detalle-producto-tres_leches.php" class="sitemap-link">Torta tres leches</a>
          </div>
        </div>

        <!-- Pedidos -->
        <div class="col-md-3">
          <div class="sitemap-card">
            <i class="bi bi-cart-check-fill icon-lg"></i>
            <h5 class="mt-3">Pedidos</h5>
            <a href="pedido.php" class="sitemap-link">Realizar pedido</a><br>
            <a href="carrito.php" class="sitemap-link">Ver carrito</a><br>
            <a href="checkout.php" class="sitemap-link">Finalizar compra</a><br>
            <a href="historial.php" class="sitemap-link">Historial de pedidos</a><br>
            <a href="detalle-pedido.php" class="sitemap-link">Detalle de pedido</a><br>
            <a href="gracias.php" class="sitemap-link">Gracias por tu compra</a>
          </div>
        </div>

        <!-- Mi cuenta -->
        <div class="col-md-3">
          <div class="sitemap-card">
            <i class="bi bi-person-circle icon-lg"></i>
            <h5 class="mt-3">Mi Cuenta</h5>
            <a href="login.php" class="sitemap-link">Iniciar sesión</a><br>
            <a href="registro.php" class="sitemap-link">Registrarse</a><br>
            <a href="perfil.php" class="sitemap-link">Perfil</a><br>
            <a href="editar-datos.php" class="sitemap-link">Editar datos</a><br>
            <a href="mis-pedidos.php" class="sitemap-link">Mis pedidos</a><br>
            <a href="olvide-password.php" class="sitemap-link">Recuperar contraseña</a><br>
            <a href="cambiar-contrasena.php" class="sitemap-link">Cambiar contraseña</a>
          </div>
        </div>

        <!-- Blog y tips -->
        <div class="col-md-3">
          <div class="sitemap-card">
            <i class="bi bi-journal-text icon-lg"></i>
            <h5 class="mt-3">Blog y Consejos</h5>
            <a href="blog-pastelero.php" class="sitemap-link">Blog Pastelero</a><br>
            <hr>
            <a href="PostresSinAzucar.php" class="sitemap-link">Postres sin azúcar</a><br>
            <a href="DecoracionCreativaFrutas.php" class="sitemap-link">Decoración creativa</a><br>
            <a href="ErroresAlHornear.php" class="sitemap-link">Errores comunes</a><br>
            <a href="BiscochoEsponjoso.php" class="sitemap-link">Bizcocho perfecto</a>
          </div>
        </div>

        <!-- Información adicional -->
        <div class="col-md-3">
          <div class="sitemap-card">
            <i class="bi bi-info-circle-fill icon-lg"></i>
            <h5 class="mt-3">Información</h5>
            <a href="galeria.php" class="sitemap-link">Galería</a><br>
            <a href="faq.php" class="sitemap-link">Preguntas frecuentes</a><br>
            <a href="medios-de-pago.php" class="sitemap-link">Medios de pago</a>
          </div>
        </div>

        <!-- Contacto -->
        <div class="col-md-3">
          <div class="sitemap-card">
            <i class="bi bi-envelope-fill icon-lg"></i>
            <h5 class="mt-3">Contacto</h5>
            <a href="contacto.php" class="sitemap-link">Formulario de contacto</a>
          </div>
        </div>

        <!-- Legal -->
        <div class="col-md-3">
          <div class="sitemap-card">
            <i class="bi bi-file-earmark-text-fill icon-lg"></i>
            <h5 class="mt-3">Legal</h5>
            <a href="reclamaciones.php" class="sitemap-link">Libro de Reclamaciones</a><br>
            <a href="politicas-de-privacidad.php" class="sitemap-link">Política de Privacidad</a><br>
            <a href="terminos-de-uso.php" class="sitemap-link">Términos de uso</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>  

</body>
</html>
