<?php include_once 'init.php'; ?> 
<header>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-maglody-navbar">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="img/logo.png" alt="Maglody Logo" class="logo-image" style="height: 90px; width: 130px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">

          <!-- Menú desplegable "Nosotros" -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if(in_array(basename($_SERVER['PHP_SELF']), ['nosotros.php','trabaja-con-nosotros.php','equipo.php'])) echo 'active'; ?>" href="#" id="navbarNosotros" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nosotros
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-maglody" aria-labelledby="navbarNosotros">
              <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'nosotros.php') echo 'active'; ?>" href="nosotros.php">Quiénes Somos</a></li>
              <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'trabaja-con-nosotros.php') echo 'active'; ?>" href="trabaja-con-nosotros.php">Trabaja con Nosotros</a></li>
              <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'equipo.php') echo 'active'; ?>" href="equipo.php">Nuestro Equipo</a></li>
            </ul>
          </li>

          <!-- Otras páginas -->
          <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'productos.php') echo 'active'; ?>" href="productos.php">Productos</a></li>
          <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'pedido.php') echo 'active'; ?>" href="pedido.php">Pedidos</a></li>
          <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'galeria.php') echo 'active'; ?>" href="galeria.php">Galería</a></li>
          <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'contacto.php') echo 'active'; ?>" href="contacto.php">Contacto</a></li>
          <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'sitemap.php') echo 'active'; ?>" href="sitemap.php">Mapa del Sitio</a></li>
          <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'carrito.php') echo 'active'; ?>" href="carrito.php" title="Carrito de compras">
              <img src="img/cart-icon.png" alt="Carrito">
            </a>
          </li>

          <?php if (isset($_SESSION['usuario_id'])): ?>
            <!-- Usuario logueado -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?php if(in_array(basename($_SERVER['PHP_SELF']), ['perfil.php','mis-pedidos.php'])) echo 'active'; ?>" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="img/user-login.png" alt="Perfil" style="width: 25px; height: 25px;">
                <?php echo htmlspecialchars($_SESSION['nombre']); ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-maglody">
                <li><a class="dropdown-item" href="perfil.php">Mi perfil</a></li>
                <li><a class="dropdown-item" href="mis-pedidos.php">Mis pedidos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="logout.php">Cerrar sesión</a></li>
              </ul>
            </li>
          <?php else: ?>
            <!-- Usuario no logueado -->
            <li class="nav-item">
              <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'login.php') echo 'active'; ?>" href="login.php" title="Iniciar sesión">
                <img src="img/user-login.png" alt="Iniciar sesión">
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
</header>
