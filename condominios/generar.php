<?php
include('conexion.php');
extract($_REQUEST);
$db=new conexion();
$conex=$db->conectar();

for($i=1;$i<=20;$i++)
{
	/*------ID-----*/
	$id=rand(1,1000);

	/*------Estacionamiento-------*/
	$parking=rand(1,2);
		if($parking==1)
			{
				$parking='Si';
			}
		else
			{
				$parking='No';
			}

	/*------------Estatus-----------------*/
	$estado=rand(1,3);
		if($estado==1)
			{
				$estado='Ocupado';
			}
		else if($estado==2)
			{
				$estado='Desocupado';
			}
		else if($estado==3)
			{
				$estado='Mantenimiento';
			}

	/*------------Tipo-----------------*/
	$tipo=rand(1,5);
		if($tipo==1)
			{
				$tipo='Casa';
			}
		else if($tipo==2)
			{
				$tipo='Apartamento';
			}
		else if($tipo==3)
			{
				$tipo='Chalet';
			}
		else if($tipo==4)
			{
				$tipo='Quinta';
			}
		else if($tipo==5)
			{
				$tipo='Otro';
			}
			
	$cod_postal=rand(1000,9999);

	$sql="INSERT INTO inmuebles (id,idem,estacionamiento,status,tipo,cod_postal) VALUES (NULL,'COND$id','$parking','$estado','$tipo','$cod_postal')";

	$result=mysqli_query($conex,$sql);
		 if($result)
		{	
			echo $i.' registro ingresado exitosamente<br>';
		}

		else
		{
			echo $i.' error al ingresar registros<br>';
		}
}
echo '<a href="index.php">Volver</a>';
