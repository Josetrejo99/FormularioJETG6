<?php

class calculadora{

 
public function Mostrar_operaciones($num1,$num2){

   echo "El resultado de la suma es: ".$this->sumar($num1,$num2)."<br>";
   echo "El resultado de la resta es: ".$this->restar($num1,$num2)."<br>";
}



protected function sumar($num1,$num2){


	
	return $num1+$num2;
}


private function restar($num1,$num2){
	


return $num1-$num2;

}



}



class palabras{



 static function Imprimir_detalles($palabra1,$palabra2){

 	

echo "<br>";
echo "Comparacion de las dos palabras: ".palabras::comparador($palabra1,$palabra2)."<br>";
   echo "Cantidad de palabras introducidas: ".palabras::verificador($palabra1,$palabra2)."<br>";


 }



 private static function comparador($palabra1,$palabra2){


 if($palabra1==$palabra2 && $palabra1!="" && $palabra2!=""){


 		return "Las dos palabras son iguales";
 }elseif($palabra1!=$palabra2 && $palabra1!="" && $palabra2!=""){


 		return "Las dos palabras son diferentes";
 	}

 	if($palabra1=="" && $palabra2==""){

 		return "No se introdujo palabras";
 	}

if($palabra1!="" && $palabra2=="" || $palabra1=="" && $palabra2!=""){

 		return "Una sola palabra introducida";
 	}

 }

 protected static function verificador($palabra1,$palabra2){
 
if($palabra1!="" && $palabra2!=""){

 return "Dos palabras introducidas";

}elseif($palabra1=="" && $palabra2!="" || $palabra1!="" && $palabra2==""){

	return "Una sola palabra introducida";
}elseif($palabra1=="" && $palabra2==""){

	return "No se introdujo ninguna palabra";
}

}


}




 class circunferencia{

private const PI=3.14;

protected function resultado($radio){

	return $this->area($radio);
}

private function area($radio){

	$this->area=circunferencia::PI*circunferencia::radio($radio);
	return $this->area;
} 

public static function radio($radio){

	return $radio*$radio;
}


}











?>