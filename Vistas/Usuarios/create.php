<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Index: Crear Usuario</title>
    <!-- Incluir Bootstrap -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css" />
    <!-- Incluir Fontawesome -->
    <link rel="stylesheet" href="../../public/css/fontawesome.min.css" />
  </head>
  <body>
    <div class="container">
      <h1>Crear Usuarios</h1>

      <form action="../../Controladores/UsuarioController.php" method="post">
        <input type="hidden" name="opcion" value="create">

        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre de Usuario" required>
        </div>

        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Ingrese el Email" required>
        </div>

        <div class="form-group">
          <label for="">Contraseña</label>
          <input type="password" name="password" class="form-control" placeholder="Ingrese la Contraseña" required>
        </div>

        <div class="form-group">
          <input type="submit" name="" class="btn btn-success" value="Crear Usuario">
          <a href="index.php" class="btn btn-primary">Volver</a>
        </div>
      </form>
    </div>
  </body>
</html>
