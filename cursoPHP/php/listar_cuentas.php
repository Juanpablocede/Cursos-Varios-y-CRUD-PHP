<?php
  //https://www.youtube.com/watch?v=2RGlzZyS1_0 !-->
  include("conexion.php");
  $conexion = $conn;
  $sql = "SELECT id_cuenta,nombre_cuenta FROM sfp_plancuentas ORDER BY id_cuenta";
  $result = pg_query($conexion,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Listar Plan de Cuentas</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/estilos_proyecto.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    </head>
    <body>
        <br /><br />
        <div class="titulo_lista container card-table">
            <div class="row w-100">
                <div class="col-10">
                  <h1>Listar Plan de Cuentas</h1>
                </div>
                <div class="col-2 float-right">
                  <!--<div class="row justify-content-end">!-->
                    <!--<a class="btn btn-primary" href="../html/ingresar_cuentas.html" name="guardar" id="guardar">!-->
                    <a href="../html/ingresar_cuentas.html" name="guardar" id="guardar" class="glyphicon glyphicon-pencil btn btn-primary btn-xs update"></a>
                    <!--</a>!-->
                  <!--</div>!-->
                </div>
            </div>
        </div>
        <div class="container card-table">
            <br />
            <div class="table-responsive">
                <table id="ListarData" class="table table-striped table-bordered">
                    <thead>
                      <tr class="titulo_data_table">
                        <td>Cuenta</td>
                        <td>Descripción</td>
                        <td>Update</td>
                        <td>Delete</td>
                      </tr>
                    </thead>
                    <?php
                    while($obj = pg_fetch_object($result))
                    {
                        echo "<tr>";
                            echo "<td>".$obj->id_cuenta."</td>";
                            echo "<td>".$obj->nombre_cuenta."</td>";
                            echo '<td><a href="../html/actualizar_cuentas.php?id_cuenta='.$obj->id_cuenta.'&nombre_cuenta='.$obj->nombre_cuenta.'" name="update" id="update" class="glyphicon glyphicon-pencil btn btn-primary btn-xs update"></a></td>';
                            echo '<td><a href="../php/eliminar_cuentas.php?id_cuenta='.$obj->id_cuenta.'" nombre="delete" id="delete" class="glyphicon glyphicon-trash btn btn-danger btn-xs delete"></a></td>';
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="../js/manejodatos.js"></script>
</html>
<!--<script>
    $(document).ready(function(){
        $('#ListarData').DataTable();
    });
</script>!-->
