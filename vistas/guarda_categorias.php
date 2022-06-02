<?php

require("../db/conexion.php");

$nombre = $_POST['nombre'];
$observaciones = $_POST['observaciones'];


$guarda = $mysqli->query("INSERT INTO tbl_categorias VALUES('', '$nombre', '$observaciones', '1')");

if($guarda){
	echo '<script>alert("Categoría guardada")</script> ';
	echo "<script>location.href='../index.php'</script>";
}
else{
	echo '<script>alert("Error, problemas al guardar")</script> ';
	echo "<script>location.href='../index.php'</script>";
}

?>