<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editando Datos</title>
	<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
<div class="edit">
<br>
<form action="PersonasControlador.php" method="post" name="registro">
<div class="edit">
<table align="center">
	<tr>
		<td colspan="2">Editar Datos:</td>
	</tr>
	<tr>
		<td>Nombre del licor:</td><td><input type="text" name="nombre" id="nombre" placeholder="Ej: Linaje" title="Ingrese nombre del producto" value="<?=$data[1]?>"></td>
	</tr>
	<tr>
		<td>Tipo de licor</td><td><input type="text" name="tipo" id="tipo" placeholder="Ej: Rox extra anejo" title="Ingrese el tipo" value="<?=$data[2]?>"></td>
	</tr>
	<tr>
		<td>Grado alcoholico:</td><td><input type="number" min="0" name="grado_alcohol" id="grado_alcohol" placeholder="Ej: 40 " title="Ingrese el grado alcoholico" value="<?=$data[3]?>"></td>
	</tr>
	<tr>
		<td>Marca del producto:</td><td><input type="text" name="marca" id="marca" placeholder="Ej: Santa Teresa " title="Ingrese la marca" value="<?=$data[4]?>"></td>
	</tr>
	<tr>
		<td>
		<input type="hidden" name="id_licores" value="<?=$data[0]?>">
		<input type="hidden" name="operacion" value="actualizar">
		<input type="submit" name="enviar" value="Enviar"></td>
	</tr>
	</div>
</table>
</form>
</div>
</body>
</html>