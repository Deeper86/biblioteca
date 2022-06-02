<?php

$id_libro = $_POST['id_libro'];
$id_categoria = $_POST['id_categoria'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$status = $_POST['status'];

	require("../db/conexion.php");

$modifica = $mysqli->query("UPDATE tbl_libros SET titulo = '$titulo', autor = '$autor', status = '$status' WHERE id_libro = '$id_libro'");

if($modifica){
	echo '<script>alert("Libro modificada")</script> ';
	echo "<script>location.href='../index.php'</script>";
}
else{
	echo '<script>alert("Error, problemas al guardar")</script> ';
	echo "<script>location.href='../index.php'</script>";
}

?>