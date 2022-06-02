<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Categorías</title>

</head>
<body>
	
<form method="POST" action="vistas/modifica_categorias.php">

	<div class="container">
			<h1>MODIFICAR CATEGORÍAS</h1>

<?php
    $id_categoria = $_POST['codigo'];
    require("../db/conexion.php");

    $ver = $mysqli->query("SELECT * FROM tbl_categorias WHERE id_categoria = '$id_categoria'");

    while($datos = mysqli_fetch_array($ver)){

?>
<div class="row">
<div class="col-md-2">
  </div>
  <div class="col-md-4">
    <label for="validationTooltip01" class="form-label"><i class="material-icons">pin</i>Clave de la Categoría</label>
    <input type="text" class="form-control" name="clave" value="<?php echo $datos[0] ?>" readonly>
  </div>

  <div class="col-md-4">
    <label for="validationTooltip01" class="form-label"><i class="material-icons">list</i>Nombre de la Categoría</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $datos[1] ?>">
  </div>
</div>

<div class="row">
  <div class="col-md-2">
  </div>

  <div class="col-md-4">
    <label for="validationTooltip02" class="form-label"><i class="material-icons">edit</i>Observaciones</label>
    <textarea type="text" class="form-control" name="observaciones" rows='1'><?php echo $datos[2] ?></textarea>
  </div>

  <div class="col-md-4">
    <label for="validationTooltip01" class="form-label"><i class="material-icons">info</i>Estatus</label>
    <select name="status" class="form-control">
      <?php
        if($datos[3]=='1'){ ?>
          <option value="<?php echo $datos[3] ?>"><?php echo "ACTIVO" ?></option>
    <?php    }  
        if($datos[3]=='0'){  ?>
          <option value="<?php echo $datos[3] ?>"><?php echo "INACTIVO" ?></option>
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