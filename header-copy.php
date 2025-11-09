<?php include_once 'init.php'; ?>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-maglody-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" alt="Maglody Logo" style="height: 80px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav ms-auto">

          <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'productos.php') echo 'active'; ?>" href="productos.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'pedido.php') echo 'active'; ?>" href="pedido.php">Pedidos</a>
          </li>
                    <li class="nav-item"><a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'carrito.php') echo 'active'; ?>" href="carrito.php" title="Carrito de compras">
              <img src="img/cart-icon.png" alt="Carrito">
            </a>
          </li>
          <?php if (isset($_SESSION['usuario_id'])): ?>
          <!-- Dropdown de usuario logueado -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if(in_array(basename($_SERVER['PHP_SELF']), ['perfil.php','mis-pedidos.php'])) echo 'active'; ?>" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="img/user-login.png" alt="Perfil" style="width: 25px; height: 25px;">
              <?php echo htmlspecialchars($_SESSION['nombre']); ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-maglody" aria-labelledby="userDropdown">
              <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'perfil.php') echo 'active'; ?>" href="perfil.php">Mi perfil</a></li>
              <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'mis-pedidos.php') echo 'active'; ?>" href="mis-pedidos.php">Mis pedidos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="logout.php">Cerrar sesión</a></li>
            </ul>
          </li>
          <?php endif; ?>

        </ul>
      </div>
    </div>
  </nav>
</header>
