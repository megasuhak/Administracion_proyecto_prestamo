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
    <link rel="stylesheet" href="vista/assets/css/kite-menu.css" />
    <link rel="stylesheet" href="vista/assets/css/slideWiz.css"/>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
    include_once 'ModulosHomePage/cabecera.php';
    include_once 'ModulosHomePage/carousel.php';
    include_once 'ModulosHomePage/contenido.php'

    ?>

    <script src="vista/assets/js/jquery.kitemenu.js"></script>
    <script src="vista/assets/js/slideShow.js"></script>
    <script src="vista/assets/js/framework/slideWiz.js"></script>
    
    <script>
       $(".kite-menu").kiteMenu({
          kiteSkin: "rainbow",
          });
    </script>
  </body>
</html>
