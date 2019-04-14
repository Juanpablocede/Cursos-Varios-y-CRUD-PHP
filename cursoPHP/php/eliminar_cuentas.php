<?php
		 session_start();

		 include("conexion.php");

		 $id_plancuenta   = 	$_GET['id_cuenta'];

		 $conexion = $conn;

		 eliminarRegistro($id_plancuenta);

		 function eliminarRegistro($id_plancuenta)
		 {
				global $conexion, $id_plancuenta;
				$sql = "SELECT id_cuenta FROM sfp_plancuentas WHERE id_cuenta='".$id_plancuenta."'";
				$result = pg_query($conexion,$sql);
				$existe = pg_num_rows($result);
				if ($existe==0)
				{
			    	echo "La cuenta, ".$id_plancuenta." no existe";
				}
				if ($existe==1)
				{
						$sql = "DELETE FROM sfp_plancuentas WHERE id_cuenta='".$id_plancuenta."'";
						$result = pg_query($conexion,$sql);
			  	  echo ("La cuenta, ". $id_plancuenta." fue eliminada con exito");
				}
		 	}
			pg_close($conexion);
?>
