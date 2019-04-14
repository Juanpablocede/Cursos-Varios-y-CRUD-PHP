<?php
		 session_start();

		 include("conexion.php");

		 $id_plancuenta   = 	$_GET['id_plancuenta'];
		 $nombre_cuenta	  = 	$_GET['nombre_cuenta'];

		 //include("conexion.php");
		 $conexion = $conn;

		 buscarRegistro($id_plancuenta);

		 function buscarRegistro($id_plancuenta)
		 {
			  global $conexion, $id_plancuenta , $nombre_cuenta;
				$sql = "SELECT id_cuenta FROM sfp_plancuentas WHERE id_cuenta='".$id_plancuenta."'";
				$result = pg_query($conexion,$sql);
				//$existe = pg_affected_rows($result);
				$existe = pg_num_rows($result);
				if ($existe==0)
				{
			    	$sql = "INSERT INTO sfp_plancuentas VALUES('".$id_plancuenta."','".$nombre_cuenta."')";
			    	$rs = pg_query( $conexion, $sql );
						echo "<script type=\"text/javascript\">alert('La cuenta fue ingresada con exito');</script>";
						//echo "La cuenta fue ingresada con exito";
				}
				if ($existe==1)
				{
						$sql = 	"UPDATE sfp_plancuentas SET ".
						"nombre_cuenta='".$nombre_cuenta."' ".
						"WHERE id_cuenta='".$id_plancuenta."'";
						$result = pg_query($conexion,$sql);
						echo "<script type=\"text/javascript\">alert('La cuenta fue modificada con exito');</script>";
			  	  //echo "La cuenta fue modificada con exito";
				}
		 	}
			pg_close($conexion);
?>
