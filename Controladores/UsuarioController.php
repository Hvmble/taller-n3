<?php
  $id = 0;

  if(isset($_POST['opcion'])){
    require_once '../Modelos/Conexion.php';
    require_once '../Modelos/Usuario.php';

    $opcion = $_POST['opcion'];

    if($opcion == 'create'){
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      store($nombre,$email,$password);
    }

    if ($opcion == 'editar') {
      $id = $_POST['id'];
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      edit($id, $nombre,$email,$password);
    }

    if($opcion == 'eliminar'){
      $id = $_POST['id'];
    }
  }

  function index_usuario(){
  	$usuarios = new Usuario();
  	$listadoUsuarios = $usuarios->index_usuario();

  	foreach($listadoUsuarios as $usuario){
  		echo "<tr>";
      echo "<td>".$usuario['id']."</td>";
      echo "<td>".utf8_encode($usuario['nombre_usuario'])."</td>";
  		echo "<td>".$usuario['email']."</td>";
  		echo "<td>
  				<a class='btn btn-primary' href='show.php'><i class='fa fa-search'></i> Ver</a>
  				<a class='btn btn-warning' href='edit.php'><i class='fa fa-edit'></i> Editar</a>
  				<a class='btn btn-danger' href='delete.php'><i class='fa fa-trash'></i> Eliminar</a>
  			</td>";
  		echo "</tr>";
  	}
  }

  function show(){

  }

  function edit($id, $nombre,$email,$password){
    $usuario = NEW Usuario();
    $resultado = $usuario->update($id,$nombre,$email,$password);
    echo "<div class='alert alert-success'><p>".$resultado."</p>
  	<p><a href='../Vistas/Usuarios/index.php'>Listar Usuarios</a></p>
  	</div>";
  }

  function store($nombre, $email, $password){
    $usuario = NEW Usuario();
    $resultado = $usuario->store($nombre, $email, $password);
    echo "<div class='alert alert-success'><p>".$resultado."</p>
  	<p><a href='../Vistas/Usuarios/create.php'>Crear nuevo registro</a></p>
  	<p><a href='../Vistas/Usuarios/index.php'>Listar Usuarios</a></p>
  	</div>";
  }

  function delete($id){
    $usuario = NEW Usuario();
    $resultado = $usuario->delete($id);
    echo "<div class='alert alert-success'><p>".$resultado."</p>
    <p><a href='../Vistas/Usuarios/index.php'>Listar Usuarios</a></p>
    </div>";
  }

 ?>
