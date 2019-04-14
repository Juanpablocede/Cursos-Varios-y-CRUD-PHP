<?php
	echo "paso por aqui.......buscar.php";
	
	$mysqli = pg_connect("host=localhost port=5432 dbname=agenda user=postgres password=admin") or die("Error de conexion "+pg_last_error());
	
	$salida = "";
	$query = "SELECT * FROM registros ORDER BY nombres";

	if(isset($POST['consulta'])){
		$q = $mysqli->real_escape_string($_POST['consulta']);
		$query = "SELECT id_telefono, nombres, correo FROM registros WHERE id_telefono LIKE '%".$q."%' OR 
		nombres LIKE '%".$q."%' OR correo LIKE '%".$q."%'";
	}
	
	$resultado = pg_query($mysqli, $query);

	$numReg = pg_num_rows($resultado);

	if($numReg>0){
			$salida.="<table class='tabla_datos' border='1' align='center'>
						<thead>
							<tr bgcolor='skyblue'>
								<td>id_telefono</td>
								<td>nombres</td>
								<td>correo</td>
							</tr>
						</thead>
						<tbody>";
			while($fila = pg_fetch_array($resultado)){
				$salida.="<tr>
							<td>".$fila['id_telefono']."</td>
							<td>".$fila['nombres']."</td>
							<td>".$fila['correo']."</td>
						</tr>";
			}
			$salida.="</tbody></table>";
	} else {
			$salida.="no hay datos: (";
	}

	echo $salida;

	pg_close($mysqli);

?>