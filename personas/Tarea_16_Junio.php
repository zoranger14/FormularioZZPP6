<?php

echo "<h2>Probando Modificadores</h2>";
echo "<b>Nombre de Licores</b><br>";

//Ejemplo Public
class Licor 
{
	public $nombre='-Ron<br>';

	public function tipo()
	{
		return $this->nombre;
	}
}

$obj= new Licor();
echo $obj->tipo('');


//ejemplo Protected

class Licor2
{
	protected $nombre2='-Vodka<br>';

	protected function tipo2()
	{
		return $this->nombre2;
	}
}

class marca extends Licor2 
{
	public function nuevo()
	{
		echo $this->tipo2();
	}
}

$obj= new marca();
$obj->nuevo();



//ejemplo Private

class Licor3
{
	private $nombre3='-Tequila<br>';

	private function tipo3()
	{
		return $this->nombre3;
	}

	public function tipo4()
	{
		return $this->tipo3();
	}
}

class marca3 extends Licor3
{
	public function nuevo3()
	{
		echo $this->tipo4();
	}

	public function nuevo4()
	{
		echo $this->tipo3();
	}
}

$obj= new marca3();

$obj->nuevo3();

//Ejemplo final 

class licor4
{
	public $nombre4='-Champan<br>';

	final public function tipo4()
	{
		return $this->nombre4;
	}
}

class marca4 extends Licor4
{
	public function nuevo4()
	{
		echo $this->tipo4();
	}
}

$obj= new marca4();
$obj->nuevo4();

//ejemplo Abstract

abstract class licor5
{
	public $nombre5='-Cerveza';

	public function tipo5()
	{
		return $this->nombre5;
	}

	abstract public function nuevo5();
}

class marca5 extends licor5
{

	public function nuevo5()
	{
		echo $this->tipo5();
	}
}
//$nom= new marca5;
//$obj= $marca5->empresa();
$obj=new marca5();
$obj->tipo5();





?>


