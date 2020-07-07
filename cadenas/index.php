/* <b>Crear el algoritmo de una suma de dos números</b></br> 

printf("\n Coloque el primer valor");</br>
scanf("%f",&num1);</br>
printf("\n Coloque el segundo valor");</br>
scanf("%f",&num2);</br>
result=num1+num2;</br>
printf("La suma de %.0f + %.0f es = %.0f",num1, num2, result);*/</br>



<?php
echo "</br><b>Concatenar los valores de dos variables formando un string nuevo que separa a dichos valores con un guión</b></br>";

$var1='Buenas';
$var2='noches';
$var3=47;
$string= $var1."-".$var2."-".$var3;
echo "$string </br>";
?>


<?php
echo "</br><b>Muestren una cadena mayor a 20 caracteres, quitandole los 3 primeros caracteres y los ultimos 5</b></br>";

$cadena= "Buenas noches,como has estado?";
$cortar= substr($cadena, 3,-5);

echo "palabra original: $cadena </br>";
echo "palabra cortada: $cortar</br>";
?>

<?php
echo "</br><b>Muestren los ultimos 10 caracteres de la cadena</b></br>";
$cadena= "Buenas noches,como has estado?";
$cortar= substr($cadena,-10);

echo "palabra original: $cadena </br>";
echo "palabra cortada: $cortar</br>";
?>

<?php
echo "</br><b>Muestren ahora solo los 10 caracteres restantes despues de quitarles los primeros 5 de la cadena</b></br>";
$cadena= "Buenas noches,como has estado?";
$cortar= substr($cadena, 5,10);

echo "palabra original: $cadena </br>";
echo "palabra cortada: $cortar";
?>
