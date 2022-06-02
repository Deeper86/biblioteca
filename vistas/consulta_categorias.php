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
                <th>Nombre</th>
                <th>Observaciones</th>
                <th>Estatus</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
<?php 

require("../db/conexion.php");

$busca = $mysqli->query("SELECT * FROM tbl_categorias");

while($datos=mysqli_fetch_array($busca)){
    ?>

            <tr>

                <td><?php echo $datos['id_categoria'];?></td>
                <td><?php echo $datos['nombre'];?></td>
                <td><?php echo $datos['observaciones'];?></td>
                <td><?php 
                	if($datos['status']=='1'){
                        echo "Activo";
                    }
                    if($datos['status']=='0'){
                        echo "Inactivo";
                    } 
                   ?></td>
             
            <td><a class="btn btn-primary btn-sm" onclick="ModificaCategoria(<?php echo $datos['id_categoria']; ?>)"><i class="material-icons">edit</i></a></td>
            <td><a class="btn btn-danger" href="vistas/borrar_categorias.php?id_categoria=<?php echo $datos['id_categoria']; ?>" onclick="return confirm('¿Realmente desea eliminar?')"><i class="material-icons">delete</i></a></td>
                
            </tr>
          
<?php } ?> 
        </tbody>
        <tfoot>
            <tr>
               <th>Clave</th>
                <th>Nombre</th>
                <th>Observaciones</th>
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