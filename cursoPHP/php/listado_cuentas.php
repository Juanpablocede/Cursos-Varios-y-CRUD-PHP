<?php
      session_start();
      include("conexion.php");
      $conexion = $conn;
      $sql = "SELECT id_cuenta,nombre_cuenta FROM sfp_plancuentas ORDER BY id_cuenta";
      $ok = true;
      // Ejecutar la consulta:
      $result = pg_query($conexion,$sql);
      if($result)
      {
          // Obtener el número de filas:
         if(pg_num_rows($result) > 0)
         {
              echo '<table border="2" class="table table-hover">
            			  <thead>
            			    <tr>
            			    	<th scope="col">Codigo</th>
            					  <th scope="col">Descripcion</th>
            			    </tr>
            			  </thead></table>';
               // Recorrer el resource y mostrar los datos:
               while($obj = pg_fetch_object($result))
               {
                   echo '<tr><td>'.$obj->id_cuenta.'</td>';
                   echo '<td>'.$obj->nombre_cuenta.'</td></tr><br/>';
               }
               //echo '</table>';
        }
        else
        {
              echo "No se encontraron registros";
        }
      }
      else
      {
          $ok = false;
          return $ok;
      }
      pg_close($conexion);
?>
