<?php
  $id = $_REQUEST['id'];

  require_once '../../Modelos/Conexion.php';
  $modelo = New Conexion();
  $conexion = $modelo->getConexion();
  $sql = "SELECT * FROM usuarios WHERE id = :id";
  $statement = $conexion->prepare($sql);
  $statement->bindParam(':id',$id);
  $statement->execute();

  $resultado = $statement->fetch();
  if ($resultado === FALSE) {
    echo "No existe una persona con ese ID";
    exit();
  }
 ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Index: Editar Usuario</title>
    <!-- Incluir Bootstrap -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css" />
    <!-- Incluir Fontawesome -->
    <link rel="stylesheet" href="../../public/css/fontawesome.min.css" />
  </head>
  <body>
    <div class="container">
      <h1>Editar Usuarios</h1>

      <form action="../../Controladores/UsuarioController.php" method="post">
        <input type="hidden" name="opcion" value="editar">
        <input type="hidden" name="id" value="<?php echo $resultado->id ?>">

        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre de Usuario" required value="<?php echo $resultado->nombre_usuario ?>">
        </div>

        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Ingrese el Email" required value="<?php echo $resultado->email ?>">
        </div>

        <div class="form-group">
          <label for="">Contraseña</label>
          <input type="password" name="password" class="form-control" placeholder="Ingrese la Contraseña" required value="<?php echo $resultado->password ?>">
        </div>

        <div class="form-group">
          <input type="submit" name="" class="btn btn-success" value="Crear Usuario">
          <a href="index.php" class="btn btn-primary">Volver</a>
        </div>
      </form>
    </div>
  </body>
</html>
