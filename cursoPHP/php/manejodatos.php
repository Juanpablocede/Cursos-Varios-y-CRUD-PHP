<?php

class manejodatos
{
	echo 'paso por aqui';die();
	 //https://informaticapc.com/tutorial-php/bases-de-datos-postgresql.php
	 $primer_nombre      = 	$_POST['primernombre'];
	 $segundo_nombre     = 	$_POST['segundonombre'];
	 $primer_apellido    = 	$_POST['primerapellido'];
	 $segundo_apellido   = 	$_POST['segundoapellido'];
	 $correo             =  $_POST['email'];
	 $diasmes            =  $_POST['diasmes'];
	 $mes                =  $_POST['mes'];
	 $ano                =  $_POST['ano'];

	 echo $primer_nombre;

	 include("conexion.php");
	 $conexion = $conn;

	 buscarRegistro($correo);

	 function buscarRegistro($correo)
	 {
		global $conexion, $primer_nombre, $segundo_nombre, $primer_apellido;
		global $segundo_apellido, $correo, $diasmes, $mes, $ano, $io_mensajes;
		$sql = "SELECT correo FROM usuarios WHERE correo='".$correo."'";
		$result = pg_query($conexion,$sql);
		//$existe = pg_affected_rows($result);
		$existe = pg_num_rows($result);
		if ($existe==0)
		{
		    $sql = "INSERT INTO usuarios VALUES('".$primer_nombre."','".$segundo_nombre."','".$primer_apellido."','".$segundo_apellido."','".$correo."','".$diasmes."','".$mes."',".$ano.")";
		    $rs = pg_query( $conexion, $sql );
		    $this->io_mensajes->message("Registro ingresado con exito");
		}
		if ($existe==1)
		{
			$sql = 	"UPDATE usuarios SET ".
					"primer_nombre='".$primer_nombre."', ".
					"segundo_nombre='".$segundo_nombre."', ".
					"primer_apellido='".$primer_apellido."', ".
					"segundo_apellido='".$segundo_apellido."', ".
					"dia_nacimiento='".$diasmes."', ".
					"mes_nacimiento='".$mes."', ".
					"ano_nacimiento='".$ano."' ".
					"WHERE correo='".$correo."'";
			$rs = pg_query( $conexion, $sql );
		   $this->io_mensajes->message("Registro modificado con exito");
		}
	 }
}
?>
