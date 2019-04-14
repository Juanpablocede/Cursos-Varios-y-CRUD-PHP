<?php
	echo "paso por aqui";
	$mysqli = new mysqli("localhost","root","","agenda");
	
	$salida = ""
	$query = "SELECT * FROM registros ORDER BY nombres";

	if(isset($POST['consulta'])){
		$q = $mysqli->real_escape_string($_POST['consulta']);
		$query = "SELECT id_telefono, nombres, correo FROM registros WHERE id_telefono LIKE '%".$q."%' OR 
		nombres LIKE '%".$q."%' OR correo LIKE '%".$q."%'";
	}
	$resultado = $mysqli->query($query);

	if($resultado->num_rows > 0){
			$salida.="<table class='tabla_datos'>
						<thead>
							<tr>
								<td>id_telefono</td>
								<td>nombres</td>
								<td>correo</td>
							</tr>
						</thead>
						<tbody>";
			while($fila = $resultado->fetch_assoc()){
				$salida.="<tr>
							<td>".$fila['id_telefono'].">/td>
							<td>".$fila['nombres'].">/td>
							<td>".$fila['correo'].">/td>
						</tr>";
			}
			$salida.="</tbody></table>";
	} else {
			$salida.="no hay datos: (";
	}

	echo $salida;

	$mysqli->close();

?>