<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!--Font Awesome-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /><!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/kite-menu.css" />
    <link rel="stylesheet" href="./assets/css/slideWiz.css"/>
    <!-- <link rel="stylesheet" href="./assets/css/toastr.css"/> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

      <?php include_once 'ModulosHomePage/linkBootstrap.php';?>
     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <script src="assets/js/jquery.kitemenu.js"></script>
  </head>
  <body background="assets/img/dinero.jpg">

  <?php include_once 'ModulosHomePage/menuModulos.php';?>



<div class="container mt-5 pt-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-10 col-lg-10 mb-3 animated fadeIn bg-light" style="box-shadow: 1px 2px 4px gray;border-top: 2px solid green;border-bottom: 2px solid green;">

      <form id="form_usuario" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de usuario</h5>
      </div>
      <div class="modal-body">

  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese su nombre" required="">
      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
      <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Ingrese su apellido" required="">
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
      <div class="form-group">
        <label for="fecha_nacimiento">Fecha de nacimiento</label>
        <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento" placeholder="Ingrese su fecha de nacimiento" required="">
      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
      <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" name="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Ingrese su correo" required="">
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
      <div class="form-group">
        <label for="cedula">Cedula</label>
        <input type="number" name="cedula" class="form-control" id="cedula" placeholder="Ingrese su cedula" required="">
      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
      <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Ingrese su telefono" required="">
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
        <div class="form-group">
          <label for="direccion">Direccion</label>
          <textarea class="form-control" id="direccion" name="direccion" rows="3" placeholder="Ingrese su direccion"></textarea>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
            <div class="form-group">
        <label for="clave">Contraseña</label>
        <input type="password" name="clave" class="form-control" id="clave" placeholder="Ingrese su contraseña">
      </div>
    </div>
  </div>
    
      </div>
      <div class="modal-footer">
        <a href="login.php" class="btn btn-primary text-white" title="">Ingresar</a>
        <button type="submit" class="btn btn-success">Registrar datos</button>
      </div>
      </form>

    </div>
  </div>
</div>

    <script>
       $(".kite-menu").kiteMenu({
          kiteSkin: "rainbow",
          });
    </script>

     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/toastr.min.js"></script>
     <script src="assets/js/main.js"></script>
     <script src="assets/js/sweetalert2.js"></script>
  </body>
</html>

