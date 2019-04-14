<?php
	echo "conectar.php";
	$user 		= "postgres";
	$password 	= "admin";
	$dbname		= "agenda";
	$postgres 	= "5432";
	$host 		= "localhost";

	$cadenaConexion = "host=localhost port=5432 dbname=agenda user=postgres password=admin";

	$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
	
	echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";

	$query = "select id_telefono, nombres, correo from registros";

	$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");

	$numReg = pg_num_rows($resultado);

	if($numReg>0){
	echo "<table border='1' align='center'>
	<tr bgcolor='skyblue'>
	<th>ID</th>
	<th>Usuario</th>
	<th>Contrasena</th></tr>";
	while ($fila=pg_fetch_array($resultado)) {
	echo "<tr><td>".$fila['id_telefono']."</td>";
	echo "<td>".$fila['nombres']."</td>";
	echo "<td>".$fila['correo']."</td></tr>";
	}
	                echo "</table>";
	}else{
	                echo "No hay Registros";
	}

	pg_close($conexion);

?>