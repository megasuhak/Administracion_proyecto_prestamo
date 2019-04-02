<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="" content="0;URL=index.php" />
<title></title>
</head>
<body>
  <?php
  
   require_once 'controlador/HomePageController.php';
   $home = new HomePageController();
   $home->inicio();

  ?>
</body>
</html>
