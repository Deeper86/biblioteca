<?php

require("../db/conexion.php");


$id_categoria = $_POST['clave'];
$nombre = $_POST['nombre'];
$observaciones = $_POST['observaciones'];
$status = $_POST['status'];


$modifica = $mysqli->query("UPDATE tbl_categorias SET nombre = '$nombre', observaciones = '$observaciones', status = '$status' WHERE id_categoria = '$id_categoria'");

if($modifica){
	echo '<script>alert("Categoría modificada")</script> ';
	echo "<script>location.href='../index.php'</script>";
}
else{
	echo '<script>alert("Error, problemas al guardar")</script> ';
	echo "<script>location.href='../index.php'</script>";
}

?>