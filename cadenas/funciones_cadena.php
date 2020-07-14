<?php



echo "Funcion round: <br><br>";

echo "Ejercicio 1: <br><br>";

echo "Sumar dos numeros decimales y mostrar el resultado por defecto, sin decimales.";echo "<br><br>";

$num1=3.5;
$num2=4.25;
function sumar($num1,$num2){

	return $num1+$num2;
}


echo "El resultado de la suma de ".$num1." + ".$num2."=".round(sumar($num1,$num2))."<br><br>";


echo "<br><br>Ejercicio 2: <br><br>";

echo "Elevar una determinada base decimal a un exponente entero y mostrar el resultado por defecto de la potencia con dos decimales mas, que el numero de decimales que tiene la base, y luego quitele un decimal al resultado de la potencia y muestre el resultado por pantalla.<br><br>";


$base=5.2;
$exponente=3;
$dec=3;

function potencia($base,$exponente){

return pow($base, $exponente);


}

echo "El resultado de la base ".$base." elevado al exponente ".$exponente." es igual a ".round(potencia($base,$exponente),$dec)."<br><br>"."Quitandole un decimal resultaria asi: ".round(potencia($base,$exponente),$dec-1)."<br><br>";



echo "<br><br>Ejercicio 3: <br><br>";

echo "Devolver el valor por defecto de un numero decimal, y mostrar si el valor es mayor o menor al numero decimal<br><br>";
$nume=9.25;

echo "Valor por defecto de ".$nume.": ".round($nume);

if((round($nume))>$nume){

	echo "<br><br>El valor es mayor al numero decimal<br><br>";
}elseif((round($nume))<$nume){

	echo "<br><br>El valor es menor al numero decimal<br><br>";
}

echo "Funcion floor: <br><br>";

echo "Ejercicio 1: <br><br>";

echo "Redondear un valor decimal al valor entero anterior mas proximo<br><br>";

$val=4.5;

echo "El valor entero anterior de ".$val." es ".floor($val)." <br><br>";

echo "Ejercicio 2: <br><br>";

echo "Redondear el resultado de una fraccion al valor entero anterior mas proximo<br><br>";

function fraccion($numerador,$denominador){

	return floor($numerador/$denominador);


}

echo "El valor entero anterior mas proximo de la fraccion es ".fraccion(14.89,5.68)." <br><br>";

echo "Ejercicio 3: <br><br>";

echo "Redondear el valor anterior mas proximo de dos numeros decimales negativos,compararlos, y mostrar cual de los dos es el valor superior,y cual es el valor anterior mas proximo del valor superior<br><br>";

$dec_1=-40.2;
$dec_2=-15.34;
function devol_num($dec_1,$dec_2){

	if(floor($dec_1)>floor($dec_2)){

		$arreglo= array(1=>$dec_1,floor($dec_1));
		return $arreglo;
	}elseif(floor($dec_1)<floor($dec_2)){
	$arreglo= array(1=>$dec_2,floor($dec_2));
		return $arreglo;

	}
}

echo "El valor superior es ".devol_num($dec_1,$dec_2)[1]." y el valor anterior mas proximo a este es ".devol_num($dec_1,$dec_2)[2]."<br><br>";

echo "Funcion ceil: <br><br>";

echo "Ejercicio 1: ";

echo "Redondear el producto de dos numeros decimales al valor entero superior mas proximo,y mostrar el resultado por pantalla<br><br>";


function multi($valor_1,$valor_2){

	return ceil($valor_1*$valor_2);
}

echo "El resultado del producto aproximado es: ".multi(13.26,4.56)."<br><br>";


echo "Ejercicio 2: <br><br>";


echo "Realizar la suma de tres numeros decimales,aproximar el resultado a un entero superior,y mostrar por pantalla si el resultado es par,primo o nulo<br><br>";

function resultado($var_1,$var_2,$var_3){

return ceil($var_1+$var_2+$var_3);

}

if(resultado(-4,-4,9)%2==0 && resultado(-4,-4,9)!=0){

	echo "El resultado es par<br><br>";
}elseif(resultado(-4,-4,9)%2!=0 && resultado(-4,-4,9)!=0){

	echo "El resultado es impar<br><br>";
}elseif(resultado(-4,-4,9)%2==0 && resultado(-4,-4,9)==0){

	echo "El resultado es nulo<br><br>";
}

echo "Ejercicio 3: <br><br>";

echo "Hallar el area de una circunferencia y aproximar el resultado aun entero superior.Y por ultimo mostrar el resultado por pantalla<br><br>";

function circunferencia($radio){

	return ceil(pow($radio,2)*3.14);
}

echo "El area de la circunferencia aproximado es igual a ".circunferencia(4)."<br><br>";


echo "Funcion rand <br><br>";

echo "Ejercicio 1: <br><br>";

echo "Generar una cadena aleatoria del 1 al 10, y mostrar por pantalla solo los numeros que entren del 5 al 10 <br><br>";
echo "Lista de numeros enteros aleatorios<br><br>";
for ($i=1; $i <=10 ; $i++) { 
	$alea=rand(1,10);
	if($alea>=5 && $alea<=10){

		echo $alea."<br><br>";
	}
}

echo "Ejercicio 2: <br><br>"; 

echo "Generar una cadena de numeros aleatorios del -10 al 10.Y mostrar por pantalla los numeros negativos que entraron,los positivos,y si entraron nulos mostrar la cantidad de veces que entraron<br><br>";

$cont_1=0;
$cont_2=0;
$cont_3=0;
for ($i=-10; $i <=10 ; $i++) { 
	$alm=rand(-10,10);
	if($alm>0){
$posi[$cont_1]=$alm;
$cont_1++;

	}

	if($alm<0){

$neg[$cont_2]=$alm;
$cont_2++;
	}

	if($alm==0){

$cont_3++;

	}
}

if($cont_1>0){
echo "Lista de numeros positivos:<br><br>";

for ($i=0; $i <$cont_1 ; $i++) { 
	
	echo $posi[$i]."<br><br>";
}
}else{

	echo "No entraron numeros positivos<br><br>";
}

if($cont_2>0){

echo "Lista de numeros negativos:<br><br>";

for ($i=0; $i < $cont_2 ; $i++) { 
	
echo $neg[$i]."<br><br>";
}
}else{

		echo "No entraron numeros negativos<br><br>";

}

if ($cont_3>0) {

echo "Veces que entraron nulos: ".$cont_3."<br><br>";
	
}else{

		echo "No entro numeros nulos<br><br>";

}

echo "Ejercicio 3:<br><br>";

$adicion=0;
echo "<br><br>Generar una cadena de numeros aleatorios entre el 1 al 3,sumarlos y mostrar el resultado por pantalla<br><br>";
for ($i=1; $i <=5 ; $i++) { 
	
	$ram=rand(1,3);

	echo $ram."<br><br>";

		$adicion+=$ram;
	
}

echo "El resultado de la suma es: ".$adicion."<br><br>";

echo "Funcion strtoupper:<br><br>";

echo "Ejercicio 1: <br><br>";

echo "Convertir una palabra completa en mayuscula<br><br>";

function palab($frase){

	return strtoupper($frase);
}

echo palab("programacion en php")."<br><br>";

echo "Ejercicio 2: <br><br>";

echo "Convertir en mayuscula las iniciales de un nombre<br><br>";

function nombre($i_1,$nom_1,$espac,$i_2,$nom_2){

$arreglo= array(1=>$i_1,$nom_1,$espac,$i_2,$nom_2);
	return $arreglo;
}


for ($i=1; $i <=5 ; $i++) { 
	if($i==1 || $i==4){

		echo strtoupper(nombre("j","ose"," ","e","nrique")[$i]);
	}else{

		echo nombre("j","ose"," ","e","nrique")[$i];
	}
}

echo "<br><br>";

echo "Ejercicio 3: <br><br>";
echo "Convertir en mayuscula la siguiente frase: blade 1,sin mostrar el dato numerico<br><br>";

function blade($blade,$espa,$uno){

	$array=array(1=>$blade,$espa,$uno);
	return $array;
}

for ($i=1; $i<=3 ; $i++) { 
	if(blade("blade"," ",1)[$i]==1){


	}else{

		echo strtoupper(blade("blade"," ",1)[$i]);
	}
}

echo "<br><br>";


echo "Funcion strtolower: <br><br>";
echo "Ejercicio 1: <br><br>";

echo "Convertir una palabra completa en minuscula<br><br>";

function minus($palab){

	return strtolower($palab);
}

echo minus("INTELIGENCIA");

echo "<br><br>";

echo "Ejercicio 2: <br><br>";
echo "Convertir en minuscula la primera letra de una frase<br><br>";

function letr($let,$frase){

	$array= array(1=>$let,$frase);
	return $array;
}

for ($i=1; $i<=2 ; $i++) { 
	
	if($i==1){

		echo strtolower(letr("C","olonia")[$i]);
	}else{

		echo  letr("C","olonia")[$i];
	}
}

echo "<br><br>";

echo "Ejercicio 3: <br><br>";

echo "Convertir una frase en minuscula y la otra dejarla en mayuscula,compararlas y mostrar por pantalla si son iguales o diferentes<br><br>";

$cade_1="UTOPIA";
$cade_2="utopia";

if($cade_1==$cade_2){

	echo "Las dos frases son iguales<br><br>";
}else{

	echo "Las dos frases son distintas.<br><br>";
}

echo "Funcion ucfirst: <br><br>";
echo "Ejercicio 1: <br><br>";

echo "Convertir la primera letra de una frase en mayuscula e imprimirlo por pantalla<br><br>";

function convertir($frase){

	return ucfirst($frase);
}

echo convertir("genética molecular");
echo "<br><br>";

echo "Ejercicio 2: <br><br>";

echo "Convertir la primera letra de un nombre y un apellido en mayuscula y mostrarlo por pantalla<br><br>";

function uc_1($nombre,$esp,$apel){

	$array= array(1=>ucfirst($nombre),$esp,ucfirst($apel));
	return $array;
}

for ($i=1; $i <=3 ; $i++) { 
	echo uc_1("jose"," ","trejo")[$i];
}

echo "<br><br>";

echo "Ejercicio 3: <br><br>";
echo "Mostrar si la primera letra de una frase es alfabetica o no.<br><br>";

$pal="área";
function alfa($pal){

return ucfirst($pal);	
}

if(alfa("área")==$pal){

	echo "La primera letra de la frase no es alfabetica<br><br>";
}else{

	echo "La primera letra de la frase es alfabetica<br><br> ";
}

echo "Fucion ucwords: <br><br>";

echo "Ejercicio 1: <br><br>";


echo "Convertir el DNI(Documento Nacional de Identidad) en un caracter en mayuscula separando con un guion el numero de cedula, e imprimirlo por pantalla<br><br>";

function ced($doc){

	return ucwords($doc);
}

echo ced("v-16789001");
echo "<br><br>";
echo "Ejercicio 2: <br><br>";

echo "Convertir las iniciales del nombre y apellido en mayuscula e imprimirlos por pantalla<br><br>";

function nom_ape($nomb_ape){

	return ucwords($nomb_ape);
}

echo nom_ape("miley cyrus");
echo "<br><br>";

echo 'Convertir el primero,tercero,septimo y noveno caracter de la frase "hola mundo" en mayuscula, y mostrarlo por pantalla<br><br>';

$ho="hola mundo";

echo ucwords($ho,"oa-mno");
echo "<br><br>";

echo "Funcion strlen: <br><br>";

echo "Ejercicio 1: <br><br>";

echo "Contar el numero de caracteres de una frase,mostrar la frase y el numero de caracteres por pantalla<br><br>";


$fra="atenas";
function cara($cadena){

	return strlen($cadena);


}


echo $fra." tiene  ".cara($fra)." caracteres<br><br>";

echo "Ejercicio 2: <br><br>";
echo "Comparar dos frases y mostrar por pantalla cual es la frase que contiene mas caracteres o si tienen el mismo numero de caracteres<br><br>";

function cade($fra_1,$fra_2){

	$frases=array(1=>$fra_1,$fra_2);
	return $frases;
}


if(strlen(cade("Darkness","Sunlight")[1])>strlen(cade("Darkness","Sunlight")[2])){

	echo cade("Darkness","Sunlight")[1]." tiene ".strlen(cade("Darkness","Sunlight")[1])." caracteres, y es la mayor.<br><br>" ;


}elseif(strlen(cade("Darkness","Sunlight")[1])>strlen(cade("Darkness","Sunlight")[2])){

echo cade("Darkness","Sunlight")[2]." tiene ".strlen(cade("Darkness","Sunlight")[2])." caracteres, y es la mayor.<br><br>" ;


}elseif(strlen(cade("Darkness","Sunlight")[1])==strlen(cade("Darkness","Sunlight")[2])){

echo cade("Darkness","Sunlight")[1]." y ".cade("Darkness","Sunlight")[2]." tienen el mismo numero de caracteres y es : ".strlen(cade("Darkness","Sunlight")[1]).".<br><br>";
}

echo "Ejercicio 3: <br><br>";

echo "Ingresar dos palabras por separado.Y mostrar el numero de caracteres que tienen las palabras juntas<br><br>";

function unir($pal_1,$pal_2){
$cad=$pal_1.$pal_2;
	return strlen($cad);
}

echo "La cantidad de caracteres de las dos palabras ingresadas es de ".unir("La victoria","Estado Aragua").".<br><br>";

echo "Funcion var_dump: <br><br>";

echo "Ejercicio 1:<br><br>";

echo "Almacenar en un array 5 numeros y mostrar el tipo de valor,el valor y la posicion que ocupan cada uno en dicho array<br><br>";

function alm_num($num1,$num2,$num3,$num4,$num5){

	$array=array(1=>$num1,$num2,$num3,$num4,$num5);
	return $array;
}

echo "Informacion de los numeros ingresados:<br><br>";
  var_dump(alm_num(3,6.7,2.10,0,12));

  echo "Ejercicio 2:<br><br>";

  echo "Almacenar en un arreglo 5 letras,mostrar cuantas vocales hay en ese arreglo,el valor,tipo de valor y la posicion que ocupa cada letra ingresada en el arreglo<br><br>";

  function alm_car($car1,$car2,$car3,$car4,$car5){

  	$arreglo= array(1=>$car1,$car2,$car3,$car4,$car5);
  	return $arreglo;
  }

$conta=0;
  for ($i=1; $i<=5 ; $i++) { 
  	
  	switch (alm_car('a','b','e','f','o')[$i]) {
  		case 'a':
  			$conta++;
  			break;
  		
  		case 'e':
  			
  			  			$conta++;

  			break;

  			case 'i':
  			
  			  			  			$conta++;

  			break;

  			case 'o':
  			
  			  			  			$conta++;

  			break;

  			case 'u':
  			
  			  			  			$conta++;

  			break;
  		default:
  			
  			break;
  	}
  }

echo "Hay ".$conta." vocales en el arreglo<br><br>";


echo "Informacion del arreglo: <br><br>";
var_dump(alm_car('a','b','e','f','o'));

echo "Ejercicio 3: <br><br>";
echo "Mostrar las visibilidades,variables y valores contenidos en un objeto<br><br>";


class valores{

	public $valor=4;
	private $correo="joseenriquetrejo99@gmail.com";
protected $decimal=56.78;
}

$obj=new valores;
var_dump($obj);

echo "Funcion count:<br><br>";
echo "Ejercicio 1:<br><br>";

echo "Calcular el promedio total de 5 notas e imprimirlo por pantalla<br><br>";

function prom($n1,$n2,$n3,$n4,$n5){

	$notas=array(1=>$n1,$n2,$n3,$n4,$n5);
	return $notas;
}

$t=0;
for ($i=1; $i<=count(prom(8.8,90.2,1.4,2,4)) ; $i++) { 
	
	$t+=prom(8.8,90.2,1.4,2,4)[$i];


}

$prom_final=$t/count(prom(8.8,90.2,1.4,2,4));


echo "El promedio final es igual a ".$prom_final." <br><br>";

echo "Ejercicio 2: <br><br>";

echo "Mostrar por pantalla cuantos numeros estan almacenados en un array<br><br>";

function valores($valo_1,$valo_2,$valo_3){

	$array= array(1=>$valo_1,$valo_2,$valo_3);
	return count($array);
}

echo "En el array se encuentra almacenado ".valores(3,5,7.89)." numeros<br><br>";


echo "Ejercicio 3: <br><br>";

echo "Mostrar la cantidad de veces que se tiene que multiplicar 2 ,por el mismo, para dar como resultado 8:<br><br>";
$vec=0;
function contenido(){
$num=8;
$alma=0;
$i=1;
	while($num!=1){
$alma=$num/2;

$vec[$i]=$alma;
$num=$alma;

if($num!=1){
$i++;
}
	}

	return count($vec);
}

echo "2 se tiene que multiplicar ".contenido()." veces para dar como resultado 8.<br><br>";

echo "Funcion explode: <br><br>";

echo "Ejercicio 1: <br><br> ";

echo "Mostrar por pantalla cada palabra de una oracion completa ingresada por un usuario<br><br>";

function oracion($oracion){

	$palabrs=explode(" ",$oracion);

	return $palabrs;
}



$n=1;
for ($i=0; $i < count(oracion("La inteligencia artificial de la robotica")) ; $i++) { 
echo "Palabra ".$n." :<br><br>";
echo oracion("La inteligencia artificial de la robotica")[$i]."<br><br>" ;

$n++;
}

echo "Ejercicio 2: <br><br>";
echo "Quitarle a una oracion completa la primera palabra, y mostrar las demas palabras restantes por pantalla<br><br>";

function limit_inf($frase){

	$pala=explode(" ",$frase,2);
	return $pala;
}

$n=1;
for ($i=0; $i <count(limit_inf("Diversidad ecologica mundial"));
  $i++) { 

echo "Palabra ".$n.":<br><br>";
echo limit_inf("Diversidad ecologica mundial")[$i]."<br><br>";
$n++;
}

echo "Ejercicio 3:<br><br>";

echo "Mostrar de una oracion completa solo la primera palabra que contenga<br><br>";

function lim_sup($oracion){


	$frac=explode(" ",$oracion,-2);
	return $frac;
}


for ($i=0; $i <count(lim_sup("Algoritmo mutante encriptado")) ; $i++) { 
echo "Palabra :<br><br>";
echo  lim_sup("Algoritmo mutante encriptado")[$i]."<br><br>";

}

echo "Funcion implode: <br><br>";

echo "Ejercicio 1: <br><br>";
echo "Unir tres palabras separadas espacios, y mostrarlo por pantalla<br><br>";

function concaten($f_1,$f_2,$f_3){
$array=array($f_1,$f_2,$f_3);
	return implode(" ", $array);
}

echo concaten("tengo ",21," años")."<br><br>";


echo "Ejercicio 2: <br><br>";
echo "Unir tres palabras separadas por guiones, y mostrarlo por pantalla<br><br>";

function devolve_gui($ca_1,$ca_2,$ca_3){

	$arreglo=array($ca_1,$ca_2,$ca_3);

	return implode("-", $arreglo);
}

echo devolve_gui("20","07","2020")."<br><br>";

echo "Ejercicio 3: <br><br>";
echo "Unir tres frases separadas por comas e imprimirlas por pantalla<br><br>";

function comas($c_1,$c_2,$c_3){

	$tabla=array($c_1,$c_2,$c_3);
	return implode(",",$tabla);
}

echo comas("nombre","apellido","cedula")."<br><br>";
?>