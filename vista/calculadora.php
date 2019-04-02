<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Prestamos</title>
    <?php
      include_once 'ModulosHomePage/linkBootstrap.php';
     ?>
     <link rel="stylesheet" href="assets/css/kite-menu.css">
     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <link rel="stylesheet" href="assets\css\solicitud.css">
     <script src="assets/js/jquery.kitemenu.js"></script>
  </head>
  <body>
    <?php
      include_once 'ModulosHomePage/menuModulos.php';
      include_once 'ModulosHomePage/contenidoCalculadora.php';
      include_once 'ModulosHomePage/footer.php';
    ?>
    <script>
       $(".kite-menu").kiteMenu({
          kiteSkin: "rainbow",
          });
    </script>
  </body>
</html>
