<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!--Font Awesome-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /><!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/kite-menu.css" />
    <link rel="stylesheet" href="./assets/css/slideWiz.css"/>
    <link rel="stylesheet" href="./assets/css/toastr.css"/>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  </head>
  <body background="assets/img/dinero.jpg">


<div class="container mt-5 pt-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-6 animated bounceInDown bg-light" style="box-shadow: 1px 2px 4px gray;">

      <form id="login_usuario" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar sesion</h5>
      </div>
      <div class="modal-body">
      
      <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" name="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Ingrese su correo">
      </div>
      <div class="form-group">
        <label for="clave">Contraseña</label>
        <input type="password" name="clave" class="form-control" id="clave" placeholder="Ingrese su contraseña">
      </div>
    
      </div>
      <div class="modal-footer">
        <a href="registro.php" class="btn btn-primary text-white" title="">Registrate</a>
        <button type="submit" class="btn btn-success">Ingresar</button>
      </div>
      </form>

    </div>
  </div>
</div>

     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/toastr.min.js"></script>
     <script src="assets/js/main.js"></script>
     <script src="assets/js/sweetalert2.js"></script>
  </body>
</html>

