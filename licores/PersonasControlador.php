<link rel="stylesheet" type="text/css" href="menu.css">

<?php
include("clasedb.php");
extract($_REQUEST);

class PersonasControlador
{

//---------------------------Registro------------------------------------//
public function registro()
{

	extract($_REQUEST);

	$db=new clasedb();
	$con=$db->conectar();
	$sql="INSERT INTO licores VALUES(NULL,'".$nombre."','".$tipo."','".$grado_alcohol."','".$marca."')";
	$resultado=mysqli_query($con,$sql);
	if ($resultado) {
		?>
	<div class="alert1"><b>Registro ingresado ---> <a href="index.php">Volver</a></b></div>
	<?php
	}else{
	?>
	<div class="alert2"><b>Registro no ingresado ---> <a href="index.php">Volver</a></b></div>
	<?php
	}

}

//---------------------------Modificar-----------------------------------//
public function modificar()
{
	extract($_REQUEST);
	$db=new clasedb();
	$conex=$db->conectar();

	$sql="SELECT * FROM licores WHERE id=".$id_licores."";
	$res=mysqli_query($conex,$sql);
	$data=mysqli_fetch_array($res);

	header("Location:editar_datos.php?data=".serialize($data));
}

//---------------------------Actualizar-----------------------------------//
 public function actualizar(){
	extract($_REQUEST);
	$db=new clasedb();
	$conex=$db->conectar();

$sql="UPDATE licores set nombre='$nombre', tipo='$tipo', grado_alcohol='$grado_alcohol', marca='$marca' WHERE id=$id_licores";
		$res=mysqli_query($conex,$sql);
			if ($res){
				?>
				<script type="text/javascript">
						alert("EXITO AL MODIFICAR");
						window.location="PersonasControlador.php?operacion=index";
						</script>
					<?php
			}else{
				?>
					<script type="text/javascript">
						alert("ERROR AL MODIFICAR REGISTRO");
						window.location="PersonasControlador.php?operacion=index";
					</script>
				<?php
				}
	
}


//---------------------------Consulta-----------------------------------//
	public function index(){
		$db=new clasedb();
		$conex=$db->conectar();
		
		$sql="SELECT * FROM licores";
		
		$res=mysqli_query($conex,$sql);
		$campos=mysqli_num_fields($res);
		$filas=mysqli_num_rows($res);
		$i=0;
		$datos[]=array();
		
		while($data=mysqli_fetch_array($res)){
			for ($j=0; $j < $campos ; $j++){
				$datos[$i][$j]=$data[$j];
			}
			$i++;
		} 
		mysqli_close($conex);
			header("Location:consulta.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}

//---------------------------Eliminar-----------------------------------//
public function eliminar()
{
	extract($_REQUEST);
	$db=new clasedb();
	$conex=$db->conectar();

	$sql="DELETE FROM licores WHERE id=".$id_licores;

		$res=mysqli_query($conex,$sql);
		if ($res) {
			?>
				<script type="text/javascript">
					alert("REGISTRO ELIMINADO");
					window.location="PersonasControlador.php?operacion=index";
				</script>
			<?php 
		} else{
			?>
				<script type="text/javascript">
					alert("REGISTRO NO ELIMINADO");
					window.location="PersonasControlador.php?operacion=index";
				</script>
			<?php
		}
}

//---------------------------Funciones-----------------------------------//
	static function controlador($operacion){
		$licores=new PersonasControlador();
	switch($operacion){
		case 'index':
			$licores->index();
			break;
		case 'registro':
			$licores->registro();
			break;
		case 'modificar':
			$licores->modificar();
			break;
		case 'actualizar':
			$licores->actualizar();
			break;
		case 'eliminar':
			$licores->eliminar();
			break;
		default:
			?>
				<script type="text/javascript">
					alert("No existe la ruta");
					window.location="PersonasControlador.php?operacion=index";
				</script>
			<?php
			break;
		}
	}
}

PersonasControlador::controlador($operacion);
	
?>
