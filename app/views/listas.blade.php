<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tutorial Listas Dependientes</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/select2.min.css') }}
</head>
<body>
	<div class="container">
		<div class="col-xs-5 col-xs-offset-4">
			<h4>Tutorial listas dependientes</h4>
			<p>Selecciona el primer campo para ver la funcionalidad, la información obtenida para la segunda lista probiene desde la base de datos.</p>
			<form>
				<div class="form-group">
					<label for="Pais">Pa&iacute;s</label>
	        		<select class="form-control" id="pais" name="pais"></select>
				</div>
				<div class="form-group">
					<label for="Estado">Estado</label>
			        <select  class="form-control" id="estado" name="estado">
			        	<option value="">Es necesario seleccionar un pa&iacute;s</option>
			        </select>
				</div>
        		<a href="http://hugochanocua.com"><p>© Hugo Chanocua.com</p></a>    		
			</form>
		</div>
    </div>

    {{ HTML::script('js/jquery-2.0.3.min.js') }}
    {{ HTML::script('js/select2/select2.min.js') }}
    {{ HTML::script('js/app.js') }}
</body>
</html>
