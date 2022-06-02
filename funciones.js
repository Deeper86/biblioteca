function NuevaCategoria(){
		$.ajax({
			url: 'vistas/categorias.php',
			
		})

		.done(function(res){
			$('#respuesta').html(res);
		})
	}

function ConsultaCategoria(){
		$.ajax({
			url: 'vistas/consulta_categorias.php',
			
		})

		.done(function(res){
			$('#respuesta').html(res);
		})
	}

function ModificaCategoria(codigo){
	var parametro = {"codigo" : codigo,}

$.ajax({
			url: 'vistas/ver_categorias.php',
			type: 'POST',
			data: parametro,
			
		})

		.done(function(res){
			$('#respuesta').html(res);
		})
	}

function EliminaCategoria(codigo){
	var parametro = {"codigo" : codigo,}

$.ajax({
			url: 'vistas/borrar_categorias.php',
			type: 'POST',
			data: parametro,
			
		})

		.done(function(res){
			$('#respuesta').html(res);
		})
	}

function NuevoLibro(){
		$.ajax({
			url: 'vistas/libros.php',
			
		})

		.done(function(res){
			$('#respuesta').html(res);
		})
	}

	function ConsultaLibro(){
		$.ajax({
			url: 'vistas/consulta_libros.php',
			
		})

		.done(function(res){
			$('#respuesta').html(res);
		})
	}

	function ModificaLibro(codigo){
	var parametro = {"codigo" : codigo,}

$.ajax({
			url: 'vistas/ver_libros.php',
			type: 'POST',
			data: parametro,
			
		})

		.done(function(res){
			$('#respuesta').html(res);
		})
	}

	function EliminaLibro(codigo){
	var parametro = {"codigo" : codigo,}

$.ajax({
			url: 'vistas/borrar_libros.php',
			type: 'POST',
			data: parametro,
			
		})

		.done(function(res){
			$('#respuesta').html(res);
		})
	}