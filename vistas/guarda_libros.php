<?php

//$id_libro = $_POST['id_libro'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ticket_nota = $_POST['ticket_nota'];
$id_categoria = $_POST['id_categoria'];


$dirprueba= '\ ';
$fichero_subido2 = basename($_FILES['ticket_nota']['name']);

$dir_subida = '../portadas/';
$fichero_subido = $dir_subida . basename($_FILES['ticket_nota']['name']);

move_uploaded_file($_FILES['ticket_nota']['tmp_name'], $fichero_subido);
/*
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo 'Más información de depuración:';
print_r($_FILES);

print "</pre>";
*/

	require("../db/conexion.php");
	
$guarda = $mysqli->query("INSERT INTO tbl_libros VALUES('','$id_categoria','$titulo','$autor','$fichero_subido2','1')");

if($guarda){
	echo '<script>alert("Libro guardado")</script> ';
	echo "<script>location.href='../index.php'</script>";
}
else{
	echo '<script>alert("Error, problemas al guardar")</script> ';
	echo "<script>location.href='../index.php'</script>";
}

?>