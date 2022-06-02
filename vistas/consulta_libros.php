<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta</title>


<script type="text/javascript">
   $(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Clave</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Portada</th>
                <th>Categoría</th>
                <th>Estatus</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
<?php 

require("../db/conexion.php");

$busca = $mysqli->query("SELECT l.id_libro, l.titulo, l.autor, l.portada, l.status, c.id_categoria, c.nombre FROM tbl_libros l INNER JOIN tbl_categorias c WHERE c.id_categoria = l.id_categoria");

while($datos=mysqli_fetch_array($busca)){
    ?>

            <tr>

                 <td><?php echo $datos[0];?></td>
                <td><?php echo $datos[1];?></td>
                <td><?php echo $datos[2];?></td>
                <td><img src="portadas/<?php echo $datos[3];?>" class="img-fluid" width="50px" height="50px"></td>
                <td><?php echo $datos[6];?></td>
                <td><?php 
                	if($datos[4]=='1'){
                        echo "Activo";
                    }
                    if($datos[4]=='0'){
                        echo "Inactivo";
                    } 
                   ?></td>
             
            <td><a class="btn btn-primary btn-sm" onclick="ModificaLibro(<?php echo $datos[0]; ?>)"><i class="material-icons">edit</i></a></td>
            <td><a class="btn btn-danger" href="vistas/borrar_libros.php?id_libro=<?php echo $datos[0]; ?>" onclick="return confirm('¿Realmente desea eliminar?')"><i class="material-icons">delete</i></a></td>
                
            </tr>
          
<?php } ?> 
        </tbody>
        <tfoot>
            <tr>
                <th>Clave</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Portada</th>
                <th>Categoría</th>
                <th>Estatus</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
    </table>

		</div>
	</div>
</div>
</body>
</html>