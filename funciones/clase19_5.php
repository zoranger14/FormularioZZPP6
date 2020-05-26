<?php
class ZorangerPaez
{
	//propiedades
	public $nombre='zoranger';
	public $apellido='paez';
	public $cedula;
	public $edad;
	//metodo constructor
	function __construct ZorangerPaez($nombre,$apellido,$cedula,$edad)
	{

		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->cedula=$cedula;
		$this->edad=$edad
	}

}//fin de la clase

?>

<?php

function suma($a,$b,$procedimiento) //donde $a, $b y $procedimiento son los parámetros o la información que pasaremos a la funcion.
	{
	echo "instruccion"; //donde se especifica una serie de instrucciones los cuales se ejecutaran con los parámetros ya establecidos 
	}
 suma(); //se llama a la funcion.
?>