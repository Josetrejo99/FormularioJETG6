<?php


include '../clasedb.php';
$db=new clasedb;
$conex=$db->conectar();


$cad='yetr647IAS';


function Gene_cade($cad){

$pal='';
$mi=0;

for($j=0;$j<strlen($cad);$j++){
	
	$pal.=$cad[mt_rand(0,strlen($cad)-1)];
	if(strlen($cad)%2==0){
if($j+1==strlen($cad)/2){

	$pal.="-";
}
}

if(strlen($cad)%2!=0){
$mi=strlen($cad)-1;
if($j==$mi/2){

	$pal.="-";
}

}

	}
	return $pal;

}

function cod_post(){

	$cod='';

	for ($ind=1; $ind <=4 ; $ind++) { 
	   
	   $cod.=rand(1,2);
	}

	return $cod;
}
$i=0;
$array=array();
$sta=array('Ocupado','Desocupado','Mantenimiento');
$tip=array('Casa','Apartamento','Chalet','Quinta','Otro');
$est=array('si','no');
while($i<20) { 
	$cont=0;



if(count($array)==NULL){
$array[$i]=Gene_cade($cad);
	$i++;
	

}else{
		$cad_gen=Gene_cade($cad);

	for ($j=0; $j < count($array); $j++) { 
		
if($array[$j]!=$cad_gen){
			$cont++;
		}

	}

if($cont==count($array)){

	
	$array[$i]=$cad_gen;
	$i++;


}

}


}

$cont=0;
for ($i=0; $i < count($array) ; $i++) { 

$registros="INSERT INTO inmuebles (idem,estacionamiento,status,tipo,cod_postal) VALUES ('".$array[$i]."','".$est[rand(0,count($est)-1)]."','".$sta[rand(0,count($sta)-1)]."','".$tip[rand(0,count($tip)-1)]."','".cod_post()."')";
	$result=mysqli_query($conex,$registros);

	if($result){
$cont++;

	}

}

if($cont==count($array)){

	echo "<br><br>".$cont." registros ingresados con exito<br><br>";
}else{

	echo "<br>No se pudieron ingresar los  registros<br>";
}



?>
<center>
	
	<a href="index.php">Regresar</a>
</center>


<?php






?>