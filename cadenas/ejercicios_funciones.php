<?php
echo "<b><h2>-----Ejercicios de la funcion 'round()'-----</b></h2>";

	echo"<b>Primer ejemplo</b></br>";

		echo "a) El numero 0.60 redondeado es = " . 
		round(0.60) . "</br>";
		echo "b) El numero 2.70 redondeado es = " . round(2.70) . "</br>";
		echo "c) El numero 141.075 redondeado es = " . round(141.075) . "</br>";

	echo"</br><b>Segundo ejemplo</b></br>";
	
		$a=3/4;
		echo"la fraccion de 3/4 redondeado a dos decimales es = " . (round($a, 2) . "</br>");

	echo"</br><b>Tercer ejemplo</b></br>";

		$a=.9;
		$b=.8;
		$c=.1;
		$d=.2;
		$e=$a-$b;
		$f=$d-$c;
		$g= round($e,2);

		echo"la resta de 0.9 - 0.8 es = " . $f;
		if($g==$f)
		{
			echo"</br> La resta entre 0.1 y 0.2 es = " . $g;
		}

echo "<b><h2>-----Ejercicios de la funcion 'floor()'-----</b></h2>";

	echo"<b>Primer ejemplo</b></br>";

		echo "a) la fraccion 23.3 redondeada hacia abajo es = " . floor(23.3) . "</br>";
		echo "b) la fraccion 9.1 redondeada hacia abajo es = " . floor(9.1) . "</br>";
		echo "c) la fraccion -3.14 redondeada hacia abajo es = " . floor(-3.14) . "</br>";

	echo"</br><b>Segundo ejemplo</b></br>";

		echo "La multiplicacion de 2.3 x 100 es = " . (2.3 * 100) . "</br>";
		echo " Y el resultado redondeado hacia abajo es = " . floor(2.3 * 100) . "</br>";

	echo"</br><b>Tercer ejemplo</b></br>";

		$precio = 79.99;
		echo "EL precio de una pera es de $precio </br>";
		echo " Ese precio multiplicado a 4^2 es = " . 79.99*pow(4,2) . "</br>";
		echo "Y redondeado hacia abajo es=" . floor(79.99*pow(4,2));

echo "<b><h2>-----Ejercicios de la funcion 'ceil()'-----</b></h2>";

	echo"<b>Primer ejemplo</b></br>";
		echo "La fraccion 23.3 redondeada hacia arriba es = " . ceil(23.3) . "</br>";
		echo "b) la fraccion 9.1 redondeada hacia abajo es = " . ceil(9.1) . "</br>";
		echo "c) la fraccion -3.14 redondeada hacia abajo es = " . ceil(-3.14) . "</br>";

	echo"</br><b>Segundo ejemplo</b></br>";
		$res = (1 - 0.5) * 10;

	ceil($res);
		$test2 = ceil($res * 2);

		echo "La respuesta de (1 - 0.5) x 10 es = " . ceil($res) . "</br>";
		echo ceil($res) . " multiplicado por 2 es = " .ceil($res * 2) . "</br>";

	echo"</br><b>Tercer ejemplo</b></br>";

		$a = 102.1568;
		$resul = $a / 100;
		echo "la division de 102.1568 / 100 es = $resul" . " y su redondeo hacia arriba es = " . ceil($resul);

echo "</br><b><h2>-----Ejercicios de la funcion 'rand()'-----</b></h2>";

	echo"<b>Primer ejemplo</b></br>";
		echo "Utilizando la funcion <b>rand()</b> da como resultado = " . rand() . "</br>";

	echo"</br><b>Segundo ejemplo</b></br>";
		echo "Un numero aleataorio entre 5 y 100 = " . rand(5, 100) . "</br>";

	echo"</br><b>Tercer ejemplo</b></br>";
		echo "ciclo aleatorio</br>";
		$a = array(0, 1, 2, 3, 4, 5);
		for ($i=0 ; $i<100; $i++)
		{
			$b = rand(0, 100);
			if ($b<=5)
			{
				$a[$b]++;
			}
		}
		print_r($a) . "</br>";

echo "</br><b><h2>-----Ejercicios de la funcion 'strtoupper()'-----</b></h2>";
		
	echo"<b>Primer ejemplo</b></br>";
		echo strtoupper("Bienvenidos al ejemplo</br>");

	echo"</br><b>Segundo ejemplo</b></br>";
		$frase = "John Tiene MUCHOS Amigos";
		$frase2 = strtoupper($frase);
		echo "Frase original:  $frase </br>";
		echo "Frase con funcion: $frase2 </br>";

	echo"</br><b>tercer ejemplo</b></br>";
		$frase3= "John Tiene MUCHISIMOS MAS Amigos QUE antes";
		$cortar= substr($frase3, 4,-10);
		$frase4= strtoupper($cortar);
		echo "Frase original:  $frase3 </br>";
		echo "Frase con funcion cortada: $frase4 </br>";

echo "</br><b><h2>-----Ejercicios de la funcion 'strtolower()'-----</b></h2>";
	
	echo"<b>Primer ejemplo</b></br>";
		echo strtolower("UN PLACER VERTE DE NUEVO</br>");

	echo"</br><b>Segundo ejemplo</b></br>";
		$frase = "DAVE SE ENCUENTRA HACIENDO MUSICA";
		$frase2 = strtolower($frase);
		echo "Frase original:  $frase </br>";
		echo "Frase con funcion: $frase2 </br>";

	echo"</br><b>tercer ejemplo</b></br>";
		$frase3= "DAVE SE ENCUENTRA CANSADO DE HACER MUSICA";

		echo "Frase original:  $frase3 </br>";
		echo "Frase con funcion:" . strtolower($frase3) . "</br>";

echo "</br><b><h2>-----Ejercicios de la funcion 'ucfirst()'-----</b></h2>";

	echo"<b>Primer ejemplo</b></br>";
		echo ucfirst("es de mi agrado encontrarte de nuevo</br>");

	echo"</br><b>Segundo ejemplo</b></br>";
		$frase = "hola";
		$frase2 = ucfirst($frase);
		echo "Frase original:  $frase </br>";
		echo "Frase con funcion: $frase2 </br>";

	echo"</br><b>tercer ejemplo</b></br>";
		$frase5= " y su fatidico dia termino por empeorar";
		$cortar= substr($frase5, 10,-12);
		$frase6= ucfirst($cortar);
		echo "Frase original:  $frase5 </br>";
		echo "Frase con funcion cortada: $frase6 </br>";

echo "</br><b><h2>-----Ejercicios de la funcion 'ucwords()'-----</b></h2>";

	echo"<b>Primer ejemplo</b></br>";
		echo ucwords("Ejemplo de la funcion directa</br>");

	echo"</br><b>Segundo ejemplo</b></br>";
		$frase = "Kanaya: Como has estado, Rose?";
		$frase_ = "Rose: Muy bien!</br>";
		$frase_2= "Rose: Por que escribes asi?</br>";
		$frase2 = ucwords($frase);
		echo "Frase original:  $frase </br> $frase_ </br>";
		echo "Frase con funcion: $frase2 </br> $frase_2";

		echo"</br><b>tercer ejemplo</b></br>";
		$frase5= "no me siento algo mal";
		$cortar= substr($frase5, 0,-3);
		echo "Frase original:  $frase5 </br>";
		echo "Frase con funcion cortada: " . ucwords($cortar) . "</br>";
 
 echo "</br><b><h2>-----Ejercicios de la funcion 'strlen()'-----</b></h2>";

 	echo"<b>Primer ejemplo</b></br>";
		echo "Los bytes en la frase 'Ejemplo de la funcion directa' son =" . strlen("Ejemplo de la funcion directa") . "</br>";

	echo"</br><b>Segundo ejemplo</b></br>";
		$palabra='abcdefg';
		echo "La Cantidad de bytes en $palabra es de = " . strlen($palabra) . "</br>";

	echo"</br><b>Tercer ejemplo</b></br>";
		$palabra2= "hola a todos!";
		$cortar= substr($palabra2, 0,-3);
		$a= strlen($palabra2);
		$b= strlen($cortar);
		echo "la frase <b>$palabra2</b> tiene $a bytes y la frase cortada <b>$cortar</b> tiene $b </br>";

 echo "</br><b><h2>-----Ejercicios de la funcion 'var_dump()'-----</b></h2>";

 	echo"<b>Primer ejemplo</b></br>";
 		$valor = 20;
 		echo "EL numero $valor se ve así con la funcion -> ";
 		var_dump($valor);

 	echo"</br><b>Segundo ejemplo</b></br>";
 		$arreglo = array(1, 2, 3, 'cuatro');
 		var_dump($arreglo);

 	echo"</br><b>Tercer ejemplo</b></br>";
 		$a = 3.14;
 		$b = true;
 		var_dump($a, $b);
		 
 echo "</br><b><h2>-----Ejercicios de la funcion 'count()'-----</b></h2>";
 
 	echo"<b>Primer ejemplo</b></br>";
 		$val = array(1, 2, 3);
 		var_dump(count($val));

 	echo"</br><b>Segundo ejemplo</b></br>";
 		$libro = array('cuentos');
 		echo "la cantidad de objetos que hay es = " . count($libro);

 	echo"</br><b>Tercer ejemplo</b></br>";
 		$array = [1, 2, 'tres'];
 			for($i = 0, $a =count($array); $i < $a; $i++)
 			{
 				var_dump($array[$i]);
 			}

echo "</br><b><h2>-----Ejercicios de la funcion 'explode()'-----</b></h2>";

  	echo"<b>Primer ejemplo</b></br>";
  		$entrada = "hola";
		var_dump(explode(' ', $entrada));

	 echo"</br><b>Segundo ejemplo</b></br>";
	 	$peras = "una1 dos2 tre3";
	 	$cant = explode(" ", $peras);

	 	echo "Cantidad de peras = " . $cant[0] . "</br>";
	 	echo  " cantidad de peras = " . $cant[1] . "</br>";

	 echo"</br><b>Tercer ejemplo</b></br>";
	 	$a = 'uno-dos-tres';
	 	print_r(explode(' - ', $a, 2));

echo "</br><b><h2>-----Ejercicios de la funcion 'explode()'-----</b></h2>";

  	echo"<b>Primer ejemplo</b></br>";
  		$array = array('nombre', 'apellido');
  		$separador = implode(",", $array);
  		echo $separador . "</br>";

	echo"</br><b>Segundo ejemplo</b></br>";
		$primero = array("1","2","3");
		$segundo = array("a","b","c");
		echo "primera parte: " . implode(",", $primero) . "</br>";
		echo "Segunda parte: " . implode(",", $segundo) . "</br>";

	 echo"</br><b>Tercer ejemplo</b></br>";
	 	$a = array("5","6","7");
		$b = array("ocho","nueve","diez");

		echo implode(',', $a), '/', implode(',', $b);