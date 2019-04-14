$(document).ready(function()
{

	$(".action").click((e) => {
		e.preventDefault();
		const parserAction = {
			"eliminar": "../php/eliminar_cuentas.php",
			"salir": "../php/listar_cuentas.php",
			"guardar": "../php/actualizar_cuentas.php"
		};
		const action = $(e.currentTarget).data("action");
		const form = $("#formulario");
		form.attr('action', parserAction[action] || "../php/listar_cuentas.php");
		form.submit();
	});

	$('#ListarData').DataTable();

	$.fn.ListarData.isDataTable (),
	$('#ListarData').DataTable( {
	    paging: true,
	    searching: true,
			//dataTables_length: "Mostrar",
			//ListarData_length: "Mostrar",
	} );

	/*$(document).ready(function(){
			$('#employee_data').DataTable();
	});*/

	const Tabla = $("#ListarData").DataTable({
				"info": false,
				"lengthChange": false,
				"dataTables_empty": "No existen registros que mostrar...",
				"odd": "",
				language:
				{
							"sProcessing":     "Procesando...",
					    "sLengthMenu":     "Mostrar _MENU_ registros",
					    "sZeroRecords":    "No se encontraron resultados",
					    "sEmptyTable":     "Ningún dato disponible en esta tabla",
					    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
					    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
					    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
					    "sInfoPostFix":    "",
					    "sSearch":         "Buscar:",
					    "sUrl":            "",
					    "sInfoThousands":  ",",
					    "sLoadingRecords": "Cargando...",
					    "oPaginate":
							{
					        "sFirst":    "Primero",
					        "sLast":     "Último",
					        "sNext":     "Siguiente",
					        "sPrevious": "Anterior"
					    },
					    "oAria":
							{
					        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
					    }
	  		}
		});


		$("#buscar-tabla").keyup(function() {
			Tabla.search($(this).val()).draw();
	  });

		/*var table = $('#DataTablesClientes').DataTable({
		    language: {
		        "decimal": "",
		        "emptyTable": "No hay información",
		        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
		        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
		        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
		        "infoPostFix": "",
		        "thousands": ",",
		        "lengthMenu": "Mostrar _MENU_ Entradas",
		        "loadingRecords": "Cargando...",
		        "processing": "Procesando...",
		        "search": "Buscar:",
		        "zeroRecords": "Sin resultados encontrados",
		        "paginate": {
		            "first": "Primero",
		            "last": "Ultimo",
		            "next": "Siguiente",
		            "previous": "Anterior"
		        }
		    },
		    ....
		});*/


	$('#resultado').prop('disabled', true);
	var fecha = new Date();
	var ano = fecha.getFullYear();

	var select = $('#ano');
	for(var i=1900;i<=ano;i++)
	{
		select.append('<option id="any" value="'+i+'" >'+i+'</option>');
 	}

	$("#formulario").validate({
		  rules:
			{
		    id_plancuenta:
				{
		      required: true,
					number: true,
		      maxlength: 9,
					minlength: 9,
		    },
				nombre_cuenta:
				{
					required: true,
					number: false ,
					maxlength: 500,
					minlength: 1,
				}
		  },
		  messages:
			{
		    id_plancuenta:
				{
		      required: "Es necesario suministrar el codigo de la cuenta presupuestaria",
					number: "Solo se permiten valores numericos",
					maxlength: jQuery.validator.format("El codigo de la cuenta debe contener como maximo {0} caracteres"),
		      minlength: jQuery.validator.format("El codigo de la cuenta debe contener como minimo {0} caracteres"),
		    },
				nombre_cuenta:
				{
					required: "Es necesario suministrar el nombre de la cuenta presupuestaria",
					number: "No se permiten valor numerico",
					maxlength: jQuery.validator.format("El nombre de la cuenta debe contener como maximo {0} caracteres"),
					minlength: jQuery.validator.format("El nombre de la cuenta debe contener como minimo {0} caracteres"),
				}
		  }
	});

	//Validando el primer apellido
	/* $('#id_plancuenta').change(function()
	{
		if ($('#id_plancuenta').val().trim() === '')
		{
			alert('El codigo plan de cuenta es requerido');
		} else
		{
			if(($('#id_plancuenta').val().trim()).length > 9)
			{
				alert('La longitud del codigo plan de cuenta no puede ser mayor de 9 caracteres');
			}
		}
	});*/

});


//Rutina para agregar opciones a un <select> Año
function cargar_ano(domElement)
{
	var fecha = new Date();
	var ano = fecha.getFullYear();
	disable.text = 'Año';
	var select = document.getElementsByName(domElement)[0];
	for(var i=1900;i<=ano;i++)
	{
		var option = document.createElement("option");
		option.text = i;
		select.add(option);
	}
}

function cargar_dias()
{
	//var month = document.getElementById('mes').value;

	var month = $('#mes').val();

	switch(month)
	{
		case 'enero':
		case 'marzo':
		case 'mayor':
		case 'julio':
		case 'agosto':
		case 'octubre':
		case 'diciembre':
			var valormes = 31;
			break;
		case 'febrero':
			var valormes = 28;
			break;
		case 'abril':
		case 'junio':
		case 'septiembre':
		case 'noviembre':
			valormes = 30;
			break;
		default:
			alert('El mes no esta definido '+month);
	}

	var select = $('#diasmes');
	for(var i=1;i<=valormes;i++)
	{
		select.append('<option id="diasmes" value="'+i+'" >'+i+'</option>');
 	}
}
