<?php
//primero la clase conexion y despues consulta
require_once('../Modelo/clase_conexion.php');
require_once('../Modelo/clase_consulta.php');

//recojemos los datos obtenidos en el formulario
$mensaje=null;
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];

//las condiciones para ver si los campos han sido rellenados. 
//Con la funcion strlen sabemos la longuitud de las cadenas
if(strlen($nombre)>0 && strlen($telefono)>0){
	//creamos una variable que sera un nuevo objeto de la clase Consultas
	$consultas = new Consultas();
	// llamamos al metodo insertarProducto, que requiere 4 argumentos
	// como el metodo insertarProducto, nos devuelve una cadena de caracteres, 
	// el mensaje lo almacenamos en $mensaje
	$mensaje = $consultas->insertarContacto($nombre, $telefono);
	
}else{
	echo "Por favor, compelta todos los campos";


}
echo $mensaje;
echo "<br><br><a href='../Vista/InsertaContacto.html'>Nuevo Producto</a>";

?>