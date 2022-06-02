<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Libros</title>

</head>
<body>
	
<form method="POST" action="vistas/guarda_libros.php" enctype="multipart/form-data">

	<div class="container">
			<h1>REGISTRO DE LIBROS</h1>

<div class="row">
  <div class="col-md-2">
  </div>

  <div class="col-md-4">
    <label for="validationTooltip01" class="form-label"><i class="material-icons">list</i>Nombre del Libro</label>
    <input type="text" class="form-control" name="titulo" required>
  </div>

 <div class="col-md-4">
    <label for="validationTooltip01" class="form-label"><i class="material-icons">menu_book</i>Autor</label>
    <input type="text" class="form-control" name="autor" required>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-4">
    <label for="validationTooltip01" class="form-label"><i class="material-icons">import_contacts</i>Portada</label>
    <input type="file" class="form-control" name="ticket_nota" required>
  </div>

 <div class="col-md-4">
    <label for="validationTooltip01" class="form-label"><i class="material-icons">list</i>Nombre de la Categoría</label>
    <select class="form-control" name="id_categoria" required>
      <option readonly>SELECCIONE UNA CATEGORÍA:</option>
      <?php
        require("../db/conexion.php");

        $cat = $mysqli->query("SELECT * FROM tbl_categorias WHERE status = '1'");

        while($row = mysqli_fetch_array($cat)){

      ?>
      
      <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>

       <?php   }    ?>
    </select>
  
    </div>

<div class="col-md-12">
  <br>
    <input type="submit" class="btn btn-success" value="GUARDAR">
  </div>
</div>
<!-- Cierre del container -->
	
	</div>

</form>

</body>
</html>