<?
	class clasedb{
		private $db;
		public funtion conectar(){
			$this->db= new mysqli("localhost","root","","programacion") or die ("No se pudo conectar con msql");

			return $tis->db;
		}


	}

	?>