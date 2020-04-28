<?php
	include('clasedb.php');

	extract($_REQUEST);

	$db=new clasedb();
	$con=$db->conectar();
	$sql="INSERT INTO licores VALUES('".$nombre."','".$tipo."','".$grado_alcohol."','".$marca."')";
	$resultado=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>

	<?php if ($resultado) { 
	?>
	<div class="alert1"><b>Registro ingresado ---> <a href="index.php">Volver</a></b></div>
	<?php
	}else{
	?>
	<div class="alert2"><b>Registro no ingresado ---> <a href="index.php">Volver</a></b></div>
	<?php
	}
	?>

</body>
</html>