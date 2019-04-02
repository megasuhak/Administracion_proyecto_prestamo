<div class="container" style="height:100vh;">
	<a href="dentro.php" class="btn btn-outline-white bg-white btn-block shadow">Inicio</a>
	<a href="prestamos.php" class="btn btn-outline-white bg-white btn-block shadow">Prestamos</a>
	<a href="usuarios.php" class="btn btn-outline-white bg-white btn-block shadow">Usuarios</a>
	<?php if($_SESSION['role'] == 'admin') { ?>
	<a href="administradores.php" class="btn btn-outline-white bg-white btn-block shadow">Si eres administrador</a>
	<?php } ?>
	<a href="perfil.php" class="btn btn-outline-white bg-white btn-block shadow">Perfil</a>
	<a href="configuracion.php" class="btn btn-outline-white bg-white btn-block shadow">Configuracion</a>
</div>