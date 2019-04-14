<?php
      include("conexion.php");
      $conexion = $conn;
      alert $conn;
      $sql = "SELECT * FROM usuarios ORDER BY primer_nombre";
      $ok = true;
      // Ejecutar la consulta:
      $rs = pg_query( $conexion, $sql );
      if( $rs )
      {
          // Obtener el número de filas:
           if( pg_num_rows($rs) > 0 )
          {
              // Recorrer el resource y mostrar los datos:
               while( $obj = pg_fetch_object($rs) )
                   print_r $obj->primer_nombre." - ".$obj->primer_apellido."<br />";
          }
          else
              alert("No se encontraron personas";
      }
      else
      {
          $ok = false;
          return $ok;
      }
?>
