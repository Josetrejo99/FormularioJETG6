<?php

class Dinosaurios{

public $nombre;
public $alimentacion;
public $habitat;
public $ubicacion;

	public function __construct($id,$nombre,$alimentacion,$habitat,$ubicacion){

		$this->id=$id;
		$this->nombre=$nombre;
		$this->alimentacion=$alimentacion;
		$this->habitat=$habitat;
		$this->ubicacion=$ubicacion;

	}

	public function Estatura_Dino($altura){


		return $altura;
	}






	
}

class Tiranosaurio extends Dinosaurios{

public $peso;
public $estatura;
public function __construct($peso,$altura_dino){

	$this->peso=$peso;
	$this->altura=$altura_dino;

}
}



?>