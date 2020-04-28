<?php
extract($_REQUEST);
$data=unserialize($data);
 ?><!DOCTYPE html>
 <html>
 <head>
	<title>Lista de licores registrados</title>
	<link rel="stylesheet" type="text/css" href="ediciones.css">

<script type="text/javascript">
	function eliminar(id){
		if (confirm("Seguro desea eliminar el registro?")) {
			window.location="PersonasControlador.php?operacion=eliminar&id_licores="+id;
		}
	}
</script>
</head>
<body>

<table align="center">
<a href="index.php">Inicio</a>
<br><a href="registro.html">Registrar</a>
	<tr><th>Nro</th><th>Nombre </th><th>Tipo</th><th>Grado alcoholico</th><th>Marca </th><th>Opciones</th></tr>
	<?php $num=1;
		for ($i=0; $i<$filas; $i++) {
			echo "<tr>";
	?>
<td><?=$num?></td>
	<?php for ($j=1; $j<$campos; $j++) { ?>
		<td><?=$data[$i][$j]?></td>
<?php } ?>
<td><a href="PersonasControlador.php?operacion=modificar&id_licores=<?=$data[$i][0]?>">Modificar</a>
<a href="javascript:eliminar(<?=$data[$i][0]?>)">Eliminar</a>
</td>
<?php 
	$num++;
	}	?>
	
</table>
</div>
</body>
</html>
	