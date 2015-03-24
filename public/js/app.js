jQuery(document).ready(function() {
	//Al iniciar mandamos consultar todos los paises que se mantienen en nuestra base de datos atravez de la ruta paises
	$.getJSON('paises', function( pais ){
		$('#pais').html('');
		$('#pais').append($('<option></option>').text('Seleccione un pais').val(''));
		$.each(pais, function(i) {
			$('#pais').append("<option value=\""+pais[i].id+"\">"+pais[i].pais+"<\/option>");
		});
		$('#pais').select2();
	});

    //El metodo Change nos permite realizar una acción al momento que estamos interactuando con el elemento con ID pais
	$("#pais").change( function(event) {
		$.ajax({
			url: 'estados',
			type: 'POST',
			data: 'pais=' + $("#pais option:selected").val(),
		}).done(function ( estado ){
			$('#estado').html('');
			$('#estado').append($('<option></option>').text('Seleccione un estado').val('')); 
			$.each(estado, function(i) {
				$('#estado').append("<option value=\""+estado[i].id+"\">"+estado[i].estados+"<\/option>");
			});
			$('#estado').select2();
		});
	});
});