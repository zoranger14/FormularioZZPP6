<?php
include("../clasedb.php");
extract($_REQUEST);

class PersonasControlador
{


public function modificar(){
	extract($_REQUEST);
	$db=new clasedb();
	$conex=$db->conectar();

	$sql="SELECT * FROM datos_personales WHERE id=".$id_persona."";
	$res=mysqli_query($conex,$sql);
	$data=mysqli_fetch_array($res);

	header("Location: editar.php?data=".serialize($data));
}

 public function actualizar(){
	extract($_REQUEST);
	$db=new clasedb();
	$conex=$db->conectar();

	$sql="SELECT * FROM datos_personales WHERE cedula=".$cedula." AND id<>".$id_persona;

$res=mysqli_query($conex,$sql);
$cant=mysqli_num_rows($res);
		if($cant>0)
		{
			?>
					<script type="text/javascript">
						alert("CEDULA REGISTRADA");
						window.location="PersonasControlador.php?operacion=index";
					</script>
				<?php
		}else{
		$sql="UPDATE datos_personales SET nombres='".$nombres."',apellidos='".$apellidos."', cedula=".$cedula." WHERE id=".$id_persona;
		$res=mysqli_query($conex,$sql);
			if ($res){
				?>
				<script type="text/javascript">
						alert("ERROR AL MODIFICAR");
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
	
}



	public function index(){
		$db=new clasedb();
		$conex=$db->conectar();
		
		$sql="SELECT * FROM datos_personales";
		
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
			header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}


	static function controlador($operacion){
		$persona=new PersonasControlador();
	switch($operacion){
		case 'index':
			$persona->index();
			break;
		case 'registra':
			$persona->registrar();
			break;
		case 'guardar':
			$persona->guardar();
			break;
		case 'modificar':
			$persona->modificar();
			break;
		case 'actualizar':
			$persona->actualizar();
			break;
		case 'eliminar':
			//$persona->eliminar();
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