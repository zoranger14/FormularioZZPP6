<?php
include('conexion.php');
extract($_REQUEST);
$db=new conexion();
$conex=$db->conectar();

$sql="CREATE TABLE inmuebles (id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, idem varchar(50) NOT NULL, estacionamiento enum('Si','No'), status enum('Ocupado','Desocupado','Mantenimiento'), tipo enum('Casa','Apartamento','Chalet','Quinta','Otro'), cod_postal varchar(5))";

//echo $sql;

$result=mysqli_query($conex,$sql);

if($result)
{
	echo "Tabla creada con exito</br>";
	$sql="ALTER TABLE inmuebles ADD UNIQUE (idem)";
	$result=mysqli_query($conex,$sql);
	if($result)
	{
		echo " y se logro asingar el atributo UNIQUE al campo idem";
	}

	else
	{
		echo " aunque no se logro asingar el atributo UNIQUE al campo idem";
	}
}

else
{
	echo "<center>la tabla no pudo ser creada</center>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inmuebles</title>
</head>
<body>
	<br><a href="generar.php">Ingresar registros</a><br>
		<table width="70%" bgcolor="DEF8FF" align="center">
			<tr align="center">
				<th colspan="6" bgcolor="80D6ED"><h2>Datos registrados</h2></th>
			</tr>
				<tr align="center">
					<td><b>ID</b></td>
					<td><b>Identificacion</b></td>
					<td><b>Estacionamiento</b></td>
					<td><b>Estado</b></td>
					<td><b>Tipo</b></td>
					<td><b>Cod. Postal</b></td>
				</tr>

				<?php 
		 			$sql="SELECT * FROM inmuebles";
		 			$res=mysqli_query($conex,$sql);
		 			while($reg=mysqli_fetch_array($res))
		 			{
		 		?>

			 		<tr align="center">
				 		<td bgcolor="5EE0C6"><?php echo $reg['id']; ?></td>
				 		<td><?php echo $reg['idem']; ?></td>
				 		<td><?php echo $reg['estacionamiento']; ?></td>
				 		<td><?php echo $reg['status']; ?></td>
				 		<td><?php echo $reg['tipo']; ?></td>
				 		<td><?php echo $reg['cod_postal']; ?></td>
			 		</tr>
	 			<?php } ?>
	 	</table>

	 			</br><table width="70%" bgcolor="DEF8FF" align="center">
					<tr align="center">
						<th colspan="6" bgcolor="80D6ED"><h2>Inmuebles con estacionamiento y desocupados</h2></th>
					</tr>
						<tr align="center">
							<td><b>ID</b></td>
							<td><b>Identificacion</b></td>
							<td><b>Estacionamiento</b></td>
							<td><b>Estado</b></td>
							<td><b>Tipo</b></td>
							<td><b>Cod. Postal</b></td>
						</tr>

					<?php 
		 			$sql="SELECT * FROM inmuebles WHERE estacionamiento='Si' AND status='Desocupado'";
		 			$res=mysqli_query($conex,$sql);

		 			while($reg=mysqli_fetch_array($res))
		 			{
		 		?>
				 		<tr align="center">
					 		<td bgcolor="5EE0C6"><?php echo $reg['id']; ?></td>
					 		<td><?php echo $reg['idem']; ?></td>
					 		<td><?php echo $reg['estacionamiento']; ?></td>
					 		<td><?php echo $reg['status']; ?></td>
					 		<td><?php echo $reg['tipo']; ?></td>
					 		<td><?php echo $reg['cod_postal']; ?></td>
				 		</tr>
	 			<?php } ?>
				</table>

	 			</br><table width="70%" bgcolor="DEF8FF" align="center">
					<tr align="center">
						<th colspan="6" bgcolor="80D6ED"><h2>Inmuebles que estan desocupadas y no tienen estacionamiento</h2></th>
					</tr>
						<tr align="center">
							<td><b>ID</b></td>
							<td><b>Identificacion</b></td>
							<td><b>Estacionamiento</b></td>
							<td><b>Estado</b></td>
							<td><b>Tipo</b></td>
							<td><b>Cod. Postal</b></td>
						</tr>

					<?php 
		 			$sql="SELECT * FROM inmuebles WHERE estacionamiento='No' AND status='Desocupado'";
		 			$res=mysqli_query($conex,$sql);

		 			while($reg=mysqli_fetch_array($res))
		 			{
		 		?>
				 		<tr align="center">
					 		<td bgcolor="5EE0C6"><?php echo $reg['id']; ?></td>
					 		<td><?php echo $reg['idem']; ?></td>
					 		<td><?php echo $reg['estacionamiento']; ?></td>
					 		<td><?php echo $reg['status']; ?></td>
					 		<td><?php echo $reg['tipo']; ?></td>
					 		<td><?php echo $reg['cod_postal']; ?></td>
				 		</tr>
	 			<?php } ?>
				</table>

				</br><table  bgcolor="DEF8FF" align="center">
					<tr align="center">
						<th colspan="6" bgcolor="80D6ED"><h2>Contar inmuebles</h2></th>
					</tr>
						<tr align="center">
							<td><b>Con estacionamiento</b></td>
							<td><b>Sin estacionamiento</b></td>
							<td><b>Ocupados</b></td>
							<td><b>Desocupados</b></td>
						</tr>

					<?php 
		 			$sql= "SELECT
		 			count(case when estacionamiento='Si' then 1 end),
		 			count(case when estacionamiento='no' then 1 end),
		 			count(case when status='Ocupado' then 1 end),
		 			count(case when status='Desocupado' then 1 end)
		 			FROM inmuebles";
		 			$res=$conex->query($sql);

		 			$reg= $res->fetch_array();
		 			{
		 		?>
				 		<tr align="center">
					 		<td><?php echo $reg['0']; ?></td>
					 		<td><?php echo $reg['1']; ?></td>
					 		<td><?php echo $reg['2']; ?></td>
					 		<td><?php echo $reg['3']; ?></td>
					 		
				 		</tr>
	 			<?php } ?>
				</table>

</body>
</html>