<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Categorías</title>

</head>
<body>
	
<form method="POST" action="vistas/guarda_categorias.php">

	<div class="container">
			<h1>REGISTRO DE CATEGORÍAS</h1>

<div class="row">
  <div class="col-md-2">
  </div>

  <div class="col-md-4">
    <label for="validationTooltip01" class="form-label"><i class="material-icons">list</i>Nombre de la Categoría</label>
    <input type="text" class="form-control" name="nombre" required>
  </div>

  <div class="col-md-4">
    <label for="validationTooltip02" class="form-label"><i class="material-icons">edit</i>Observaciones</label>
    <textarea type="text" class="form-control" name="observaciones" rows="1" required></textarea>
  </div>
</div> 

<br>	
<div class="row">
  <div class="col-md-12">
    <input type="submit" class="btn btn-success" value="GUARDAR">
  </div>
</div>
<!-- Cierre del container -->
	
	</div>

</form>

</body>
</html>