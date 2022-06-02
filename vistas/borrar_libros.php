<?php

require("../db/conexion.php");


$id_libro = $_GET['id_libro'];

$elimina = $mysqli->query("DELETE FROM tbl_libros WHERE id_libro = '$id_libro'");

if($elimina){
	echo '<script>alert("Libro eliminado")</script> ';
	echo "<script>location.href='../index.php'</script>";
}
else{
	echo '<script>alert("Error, problemas al eliminar")</script> ';
	echo "<script>location.href='../index.php'</script>";
}

?>