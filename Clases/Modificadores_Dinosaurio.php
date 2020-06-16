<?php

abstract class Dinosaurios{
	 
	  protected $organizacion="NASA U.S.A";

protected $present_dinos="Bienvenido al registro de rasgos de seres prehistóricos";

	private static $llamar_dino="El dinosaurio ";
	public function Presentar_dinos($dino1,$dino2,$dino3){

      $this->recolectar= array(1=>$dino1,$dino2,$dino3,NULL);
      return $this->recolectar;

	}
	public static function llamado_dino(){

		return Dinosaurios::$llamar_dino;
	}
	public function Mostrar_present(){

		return $this->present_dinos;
		
	}
	
abstract public function Contar_dinos($dino1,$dino2,$dino3);
}



final class Prehistoria{
	private $ext="registro de extincion:";


final public function extincion_dinosaurio($dino,$extincion,$tiempo){
	echo "<br>".$this->ext."<br>";

	echo "<br>El ".$dino." se extinguio hace ".$extincion."  ".$tiempo." de años a.c.<br>";
}





}




class rasgos_dinosaurios extends Dinosaurios{
	
private $doc="134-RHTF";
 public function Contar_dinos($dino1,$dino2,$dino3){

$this->array= array($dino1,$dino2,$dino3);
	return count($this->array);

}

public function  datos_reg(){

	echo "<br>Id del documento: ".$this->doc." ------------- "."Organización encargada: ".$this->organizacion."<br><br>";
}


}
$obj=new rasgos_dinosaurios;

echo "<br>".$obj->Mostrar_present()."<br><br>";

$obj->datos_reg();

$arreglo=$obj->Presentar_dinos("Triceratop","Tiranosaurio","Velociraptor");

$i=1;
while($arreglo[$i]!=NULL){
	echo "<br>".$obj::llamado_dino().$i." ingresado es un ".$arreglo[$i]."<br>";
	
	$i++;
	
}


echo "<br> El numero de registros es de ".$obj->Contar_dinos("Mamus","tortugas","alamosaurios")." hervivoros prehistóricos<br><br>";



$obj2=new Prehistoria;
$obj2->extincion_dinosaurio("Tiranosaurio",65,"millones");



?>