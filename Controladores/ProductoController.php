<?php


if(isset($_POST['opcion'])){
	require_once '../Modelos/Conexion.php';
	require_once '../Modelos/Producto.php';

	$opcion = $_POST['opcion'];

	if($opcion == 'create'){
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$valor = $_POST['valor'];
		store($nombre,$descripcion,$valor);
	}
}


function index(){
	$productos = new Producto();
	$listadoProductos = $productos->index();

	foreach($listadoProductos as $producto){
		echo "<tr>";
		echo "<td>".$producto['id']."</td>";
		echo "<td>".$producto['nombre_producto']."</td>";
		echo "<td>".$producto['descripcion_producto']."</td>";
		echo "<td>".$producto['valor']."</td>";
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

function edit(){

}

function store($nombre, $descripcion, $valor){
	$productos = new Producto();
	$resultado = $productos->store($nombre,$descripcion,$valor);
	echo "<div class='alert alert-success'><p>".$resultado."</p>
	<p><a href='../Vistas/Productos/create.php'>Crear nuevo registro</a></p>
	<p><a href='../Vistas/Productos/index.php'>Listar Productos</a></p>
	</div>";
}

function delete(){

}
