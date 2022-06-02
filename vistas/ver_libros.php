<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Libros</title>

</head>
<body>
	
<form method="POST" action="vistas/modifica_libros.php" enctype="multipart/form-data">

	<div class="container">
			<h1>MODIFICAR LIBROS</h1>

<?php
    $id_libro = $_POST['codigo'];
    require("../db/conexion.php");

    $busca = $mysqli->query("SELECT l.id_libro, l.titulo, l.autor, l.portada, l.status, c.id_categoria, c.nombre FROM tbl_libros l INNER JOIN tbl_categorias c WHERE c.id_categoria = l.id_categoria and l.id_libro = '$id_libro'");

    while($datos = mysqli_fetch_array($busca)){

?>

<div class="row">
  <div class="col-md-2">
  </div>

  <div class="col-md-4">
    <label for="validationTooltip01" class="form-label"><i class="material-icons">list</i>Nombre del Libro</label>
    <input type="text" class="form-control" name="titulo" value="<?php echo $datos[1] ?>">
     <input type="hidden" class="form-control" name="id_libro" value="<?php echo $datos[0] ?>">
  </div>

 <div class="col-md-4">
    <label for="validationTooltip01" class="form-label"><i class="material-icons">menu_book</i>Autor</label>
    <input type="text" class="form-control" name="autor" value="<?php echo $datos[2] ?>">
  </div>
</div>

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-4">
    <label for="validationTooltip01" class="form-label"><i class="material-icons">import_contacts</i>Portada</label>
   <img src="portadas/<?php echo $datos[3];?>" class="img-fluid" width="150px" height="150px">
  
  </div>

 <div class="col-md-4">
    <label for="validationTooltip01" class="form-label"><i class="material-icons">list</i>Nombre de la Categoría</label>
    <select class="form-control" name="id_categoria">
      <option value="<?php echo $datos[5] ?>"><?php echo $datos[6] ?></option>
      <option>--------------</option>
      <?php
        require("../db/conexion.php");

        $cat = $mysqli->query("SELECT * FROM tbl_categorias WHERE status = '1'");

        while($row = mysqli_fetch_array($cat)){

      ?>
      
      <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>

       <?php   }    ?>
    </select>
  
<label for="validationTooltip01" class="form-label"><i class="material-icons">list</i>Estatus</label>
    <select name="status" class="form-control">
      <?php
        if($datos[4]=='1'){ ?>
          <option value="<?php echo $datos[4] ?>"><?php echo "ACTIVO" ?></option>
    <?php    }  
        if($datos[4]=='0'){  ?>
          <option value="<?php echo $datos[4] ?>"><?php echo "INACTIVO" ?></option>
   <?php     }
      ?>
    <option>---------------</option>   
    <option value="1">ACTIVO</option>   
     <option value="0">INACTIVO</option>
    </select>
  
  </div>
  <?php
     }
  ?>
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