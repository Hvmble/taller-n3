<?php
require_once '../../Modelos/Conexion.php';
require_once '../../Modelos/Producto.php';
require_once '../../Controladores/ProductoController.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Index: Productos</title>
	<!-- Incluir Bootstrap -->
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css" />
	<!-- Incluir Fontawesome -->
	<link rel="stylesheet" href="../../public/css/fontawesome.min.css" />
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Listado de Productos</h1>
			<a href="create.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Añadir Nuevo Producto</a>
		</div>
		<section>
			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Valor</th>
					<th>Opciones</th>
				</tr>
				<?php index(); ?>
			</table>
		</section>
	</div>

	<!-- Incluir Jquery -->
	<script src="../../public/js/jquery.min.js"></script>
	<!-- Incluir Bootstrap -->
	<script src="../../public/js/bootstrap.min.js"></script>
	<!-- Incluir Fontawesome -->
	<script src="../../public/js/fontawesome.min.js"></script>
</body>
</html>