<?php
	function cargar(){
		//creamos una instancia de nuestras Consultas
		$consultas = new Consultas();
		// $filas recibe el array que le da el metodo cargarProductos
		$filas = $consultas->cargarProductos();

		//ahora recorro todas las filas y la meto en una tabla
		echo "<table border='1'>
				<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Categorias</th>
				<th>Precio</th>
				</tr>";

				foreach ($filas as $fila) {
					echo "<tr>";
					echo "<td>".$fila['id_producto']."</td>";
					echo "<td>".$fila['nombre']."</td>";
					echo "<td>".$fila['descripcion']."</td>";
					echo "<td>".$fila['categoria']."</td>";
					echo "<td>".$fila['precio']."</td>";
					echo "</tr>";
				}
				echo "</table>";
	}
?>