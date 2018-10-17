<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Index: Crear Productos</title>
	<!-- Incluir Bootstrap -->
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css" />
	<!-- Incluir Fontawesome -->
	<link rel="stylesheet" href="../../public/css/fontawesome.min.css" />
</head>
<body>
	<div class="container">
    <h1>Crear Productos</h1>
		<form action="../../Controladores/ProductoController.php" method="post">
      <input type="hidden" name="opcion" value="create">
      <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre" required>
      </div>
      <div class="form-group">
        <label for="">Descripción</label>
        <input type="text" name="descripcion" class="form-control" placeholder="Ingrese Descripcion" required>
      </div>
      <div class="form-group">
        <label for="">Valor</label>
        <input type="text" name="valor" class="form-control" placeholder="Ingrese Valor" required>
      </div>

      <div class="form-group">
        <input type="submit" name="" class="btn btn-success" value="Crear Producto">
        <a href="index.php" class="btn btn-primary">Volver</a>
      </div>
    </form>
	</div>

	<!-- Incluir Jquery -->
	<script src="../../public/js/jquery.min.js"></script>
	<!-- Incluir Bootstrap -->
	<script src="../../public/js/bootstrap.min.js"></script>
	<!-- Incluir Fontawesome -->
	<script src="../../public/js/fontawesome.min.js"></script>
</body>
</html>
