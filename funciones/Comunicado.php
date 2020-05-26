<?php
class Comunicacion
{
	public $saludo='Hola!';
	public $despedida='Hasta pronto';
	public $preguntar='puedo preguntarle algo?'

	function __construct Comunicacion($saludo,$despedida, $)
	{
		$this->saludar=$saludo;
		$this->despedirse=$despedida;
		$this->pregunta=$preguntar
	}//cierre funcion construct

	function saludar()
	{
	echo "$saludo, como ha ido todo?";
	}

	function despedida()
	{
		echo "$despedida, te escribo mañana";
	}

	function pregunta()
	{
		echo "Disculpe, $preguntar";
	}
}//cierre del class
?>