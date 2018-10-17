<?php

  class Usuario{

    public function index_usuario(){
  		$rows = null;
  		$modelo = new Conexion();
  		$conexion = $modelo->getConexion();
  		$sql = "SELECT * FROM usuarios";
  		$statement = $conexion->prepare($sql);
  		$statement->execute();

  		while($resultado = $statement->fetch()){
  			$rows[] = $resultado;
  		}

  		return $rows;
  	}

    public function store($nombre,$email,$password){
      $modelo = NEW Conexion();
      $conexion = $modelo->getConexion();
      $sql = "INSERT INTO usuarios(nombre_usuario,email,password) VALUES(:nombre,:email,:password)";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(':nombre',$nombre);
      $statement->bindParam(':email',$email);
      $statement->bindParam(':password',$password);

      if(!$statement){
        return "Error al crear el Usuario";
      }else{
        $statement->execute();
        return "Usuario creado correctamente";
      }
    }

    public function update($id, $nombre,$email,$password){
      $modelo = NEW Conexion();
      $conexion = $modelo->getConexion();
      $sql = "UPDATE usuarios SET nombre_usuario = :nombre, email = :email, password = :password
              WHERE id = :id";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(':nombre',$nombre);
      $statement->bindParam(':email',$email);
      $statement->bindParam(':password',$password);
      $statement->bindParam(':id',$id);

      if(!$statement){
        return "Error al actualizar el Usuario";
      }else{
        $statement->execute();
        return "Usuario modificado correctamente";
      }
    }

    public function delete($id){
      $modelo = NEW Conexion();
      $conexion = $modelo->getConexion();
      $sql = "DELETE * FROM usuarios WHERE id = :id";
      $statement = $conexion->prepare($sql);
      $statement->bindParam(':id',$id);

      if(!$statement){
        return "Error al eliminar el Usuario";
      }else{
        $statement->execute();
        return "Usuario eliminado correctamente";
      }
    }

  }


 ?>
