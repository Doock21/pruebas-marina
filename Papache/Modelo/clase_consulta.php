<?php

class Consultas{
	//esta clase requiere 4 argumentos. El ID no, por que es autoincrementable.
	public function insertarContacto($nombre,$telefono){
		//Creamos un objeto de mi clase conexion.
		$modelo = new Conexion();
		// creamos la variable conexion, aqui guardo la conexión a la BD
		$conexion = $modelo->get_conexion();
		// creo la consulta. Para evitar la inyeccion de codigo SQL, coloco :nombre,...
		$sql = "INSERT INTO agenda (nombre, telefono) values (:nombre, :telefono)";
		// preparo la consulta. Creo una variable. Llamo al metodo prepare(). No la ejecuto.
		$statement = $conexion->prepare($sql);
		//Ahora le paso cada uno de los parametros a la consulta, con la funcion bindParam
		// Lo que le digo es que en :nombre esté lo que haya en el argumento $minombre.
		$statement->bindParam(':nombre', $nombre); 
		$statement->bindParam(':telefono', $telefono);
		// Si el statement no tiene nada, es porque ha habido un error.
		if(!$statement){
			return "Error al crear el registro";
		}else{
		// en caso contrario, ejecutamos la consulta. Ahora si que ejecuto la consulta SQL.
			$statement->execute();
			return "Registro creado correctamente";
		}
	}

	//creamos otra funcion que sirva para cargar los productos. No requiere ningun argumento.
	public function cargarProductos(){
	//creamos una variable inicializada a null
		$filas = null;
		$modelo = new Conexion();
		$conexion = $modelo->get_conexion();
		$sql = "SELECT * FROM productos";
		$statement = $conexion->prepare($sql);
		$statement ->execute();
		//ahora recoremos los datos que hemos obtenido
		while ($resultado=$statement->fetch()){
			$filas[] = $resultado;
		}
		return $filas;
	}
}

?>