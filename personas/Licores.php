<?php

class Licores
{
	public $nombre;
	public $tipo;
	public $grado;
	public $marca;
	public $empresa;

	function __construct($nombre,$tipo,$grado,$marca)
	{
		$this->nombre=$nombre;
		$this->tipo=$tipo;
		$this->grado=$grado;
		$this->marca=$marca;
	}

	public function Distribuidor($empresa)
		{
			echo "Santa Teresa" .$empresa;
			return $empresa;
		}

}
	class Ron extends Licores
	{
		public $marca;
		public $precio;

		function __construct($marca, $precio)
		{
			$this->marca=$marca;
			$this->precio=$precio;
		}
	}


?>