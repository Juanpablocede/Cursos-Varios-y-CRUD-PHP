<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Editar Plan de Cuentas</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilos_proyecto.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	</head>
	<body>
	<form action="../php/actualizar_cuentas.php" method=GET" id="formulario" name="formulario">
  <div class="row w-100 justify-content-center">
    <div class="col-md-8 card card-content">
			<div class="row">
				<div class="col-4 pl-0 mb-1">
					<h4>
						Editar Plan de Cuentas <i class="fa text-primary fa-briefcase" aria-hidden="true"></i>
					</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-12 p1-0 mb-1">
				</div>
				<div class="col-12 p1-0 mb-1">
				</div>
			</div>
      <div class="row">
        <div class="p-1 col-md-4">
          <label class=" text-secondary" for="id_plancuenta">Código</label>
          <input class="form-control required" value="<?php echo $_GET['id_cuenta'] ?>" readonly type="text" name="id_plancuenta" id="id_plancuenta" placeholder="código plan cuenta">
        </div>
        <div class="p-1 col-md-8">
          <label class=" text-secondary" for="nombre_cuenta">Nombre Plan de Cuenta</label>
          <input class="form-control required" type="text" value="<?php echo $_GET['nombre_cuenta'] ?>" name="nombre_cuenta" id="nombre_cuenta" placeholder="nombre plan de cuenta">
        </div>

        <div class="col-md-6">
            <button class="form-control btn btn-primary" type="submit" name="guardar" id="guardar" >Guardar
              <i class="fas fa-save"></i>
            </button>
        </div>
        <div class="col-md-6">
            <a href="../php/listar_cuentas.php" class="form-control btn btn-primary" name="salir"  id="salir">Salir
              <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
      </div>
    </div>
  </div>
</form>
		<!--<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>!-->
  	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../js/manejodatos.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
		<script src="messages_es.js" type="text/javascript"></script>
		<script>
		  $.validate({
		    lang: 'es'
		  });
		</script>
	</body>
</html>
