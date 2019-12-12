<?php

class Conexion{
	public function get_conexion(){
		$user = "root";
		$pass = "102030";
		$host = "localhost";
		$db = "dbagenda";
		//creamos una variable y una instancia de PDO. Nos conectamos a una BD mysql. 
		$conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
		//devolvemos la conexion
		return $conexion;
	}
}
?>