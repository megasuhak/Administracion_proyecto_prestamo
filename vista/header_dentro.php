<nav class="navbar navbar-expand-lg navbar-light bg-dark animated" style="width:100%;position: fixed;z-index: 10;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand text-success" href="dentro.php">Prestamos</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <li><a href="dentro.php" class="nav-link text-white btn btn-outline-outline-primary mr-2">Inicio</a>
      </li>
      <div class="dropdown">
     <a class="nav-link text-white btn btn-outline-outline-primary mr-2 dropdown-toggle" data-toggle="dropdown">Menu</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="inscripcion.php">Prestamos</a>
          <a class="dropdown-item" href="selecion_materias.php">Solicitudes</a>
          <a class="dropdown-item" href="#">Perfil</a>
          <a class="dropdown-item" href="configuracion.php">Configuracion</a>
        </div>
      </div>
    </ul>

    <ul class="navbar-nav right">
      <li class="nav-item active">
        <div class="row mr-2" data-toggle="dropdown">
          <div class="col-sm-3 col-md-3">
            <img src="assets/img/default.png" width="40" alt="">
          </div>
          <div class="col-sm-9 col-md-9 left">
            <a class="nav-link text-white"><?= $_SESSION['nombre'];?></a>
          </div>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-white btn btn-danger" href="../controlador/cerrar_sesion.php">Salir</a>
      </li>
    </ul>
  </div>
</nav>