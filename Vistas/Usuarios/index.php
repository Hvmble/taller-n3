<?php
  require_once '../../Modelos/Conexion.php';
  require_once '../../Modelos/Usuario.php';
  require_once '../../Controladores/UsuarioController.php';
 ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Index: Usuarios</title>
    <!-- Incluir Bootstrap -->
  	<link rel="stylesheet" href="../../public/css/bootstrap.min.css" />
  	<!-- Incluir Fontawesome -->
  	<link rel="stylesheet" href="../../public/css/fontawesome.min.css" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1>Listado de Usuarios</h1>
        <a href="create.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Añadir Nuevo Usuario</a>
      </div>

      <section>
        <table class="table table-bordered">
          <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Opciones</th>
          </tr>
          <?php index_usuario(); ?>
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
