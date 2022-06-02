<?php

require("../db/conexion.php");


$id_categoria = $_GET['id_categoria'];

$elimina = $mysqli->query("DELETE FROM tbl_categorias WHERE id_categoria = '$id_categoria'");

if($elimina){
	echo '<script>alert("Categoría eliminada")</script> ';
	echo "<script>location.href='../index.php'</script>";
}
else{
	echo '<script>alert("Error, No se puede eliminar una categoría asignada")</script> ';
	echo "<script>location.href='../index.php'</script>";
}

?>