<?php

class conexion{


	private $db;

	public  function conectar(){

		$this->db= new mysqli("localhost","root","","programacion") or die("No se pudo establecer la conexion");
		return $this->db;
	}
}
?>