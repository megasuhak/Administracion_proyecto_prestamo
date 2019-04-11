<div class="container" style="height:100vh;">
	<a href="dentro.php" class="btn btn-outline-success bg-success text-white btn-block shadow">Inicio</a>
	<a href="prestamos.php" class="btn btn-outline-success bg-success text-white btn-block shadow">Prestamos</a>
	<?php if($_SESSION['role'] == 'admin') { ?>
	<a href="usuarios.php" class="btn btn-outline-success bg-success text-white btn-block shadow">Usuarios</a>
	<a href="administradores.php" class="btn btn-outline-success bg-success text-white btn-block shadow">Administradores</a>
	<?php } ?>
	<a href="pagos.php" class="btn btn-outline-success bg-success text-white btn-block shadow">Pagos</a>
	<a href="moras.php" class="btn btn-outline-success bg-success text-white btn-block shadow">Moras</a>
	<a href="taza.php" class="btn btn-outline-success bg-success text-white btn-block shadow">Taza</a>
	<a href="perfil.php" class="btn btn-outline-success bg-success text-white btn-block shadow">Perfil</a>
	<a href="configuracion.php" class="btn btn-outline-success bg-success text-white btn-block shadow">Configuracion</a>
</div>