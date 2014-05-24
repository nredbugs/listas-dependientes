<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tutorial Listas Dependientes</title>
	{{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-responsive.min.css') }}
</head>
<body>
	<div class="container">
		<div class="span5 offset3">
	    <h3 class="form-signin-heading center">Listas Dependientes en Laravel 4</h3>
	        <select class="span4" id="pais" name="pais"></select>
	        <select  class="span4" id="estado" name="estado">
	        	<option value="">Es necesario seleccionar un pa&iacute;s</option>
	        </select>
		</div>
    </div>

    {{ HTML::script('js/jquery-2.0.3.min.js') }}
    <script "type/javascript">

    jQuery(document).ready(function() {

    	//Al iniciar mandamos consultar todos los paises que se mantienen en nuestra base de datos atravez de la ruta paises
	    $.ajax({
			url: 'paises',
			type: 'GET',
			dataType: 'json',
			success: function(pais){
				$('select#pais').html('');
				$('select#pais').append($('<option></option>').text('Seleccione un pais').val(''));
				//recorremos con el metodo each el objeto
				$.each(pais, function(i) {
					//Con los parametros que recibimos en nuestro objeto pais creamos las opciones
					$('select#pais').append("<option value=\""+pais[i].id+"\">"+pais[i].pais+"<\/option>");
				});
			}
		})

	    //El metodo Change nos permite realizar una acción al momento que estamos interactuando con el elemento
		$("#pais").change(function(event) {
			var id_pais = $("#pais option:selected").val();  //obtenemos el id del pais que se mantiene seleccionado
			
			//Por medio de AJAX consultamos la ruta creada en laravel llamada estados la cual recibe el id del país
			$.ajax({
				url: 'estados',
				type: 'POST',
				data: 'pais='+id_pais, //enviamos el id
				dataType: 'json',
				success: function(estado){
					$('select#estado').html('');
					$('select#estado').append($('<option></option>').text('Seleccione un estado').val('')); 
					//recorremos con el metodo each el objeto
					$.each(estado, function(i) {
						//Con los parametros que recibimos en nuestro objeto estado creamos las opciones
						$('select#estado').append("<option value=\""+estado[i].id+"\">"+estado[i].estados+"<\/option>");
						// estado[i].id = Contiene el id del estado
						// estado[i].estados = Contiene el nombre del estado
					});
				}
			})
		});
	});
    </script>
</body>
</html>
