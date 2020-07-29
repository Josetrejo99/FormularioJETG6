<?php


include '../clasedb.php';
$db=new clasedb;
$conex=$db->conectar();





?>
<!DOCTYPE html>
<html>

<head>
	<title>Registros de los Inmuebles</title>
	<meta charset="utf-8">
	</head>
	<body>
		<div style="margin-bottom: 5%;"> 
<center>
	<h1>Registros completos</h1>
</center>
</div>
<div  style="margin-bottom: 20%;">
<center>
<table width="100%" align="center" style="border:solid skyblue;">
	<tr style="text-align: center;font-size: 18px;font-family: arial,cursive;">
		
		<td style="border:solid skyblue;background-color: skyblue;">
			<b>ID</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Identificación</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Estacionamiento</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Estatus</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Tipo</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Codigo Postal</b>
		</td>
	</tr>

<?php

$Registros="SELECT * FROM inmuebles";
$result=mysqli_query($conex,$Registros);

while($filas=mysqli_fetch_array($result)){

?>
<tr style="text-align: center;font-size: 18px;font-family: arial,cursive;">
	<td style="border:solid skyblue;">
		<?=$filas['id']?>
	</td>
	
	<td style="border:solid skyblue;">
				<?=$filas['idem']?>

	</td>
	<td style="border:solid skyblue;">
				<?=$filas['estacionamiento']?>

	</td>
	<td style="border:solid skyblue;">
				<?=$filas['status']?>

	</td>

	<td style="border:solid skyblue;">
				<?=$filas['tipo']?>

	</td>

<td style="border:solid skyblue;">
				<?=$filas['cod_postal']?>

	</td>

<?php

}

?>


</table>
</center>
</div>


<div style="margin-bottom: 5%">
	
<h1>
	<center>
	Registros de Inmuebles con estacionamientos y disponibles
</center>
</h1>
</div>



<div  style="margin-bottom: 20% ;">
<center>
<table width="100%" align="center" style="border:solid skyblue;">
	<tr style="text-align: center;font-size: 18px;font-family: arial,cursive;">
		
		<td style="border:solid skyblue;background-color: skyblue;">
			<b>ID</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Identificación</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Estacionamiento</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Estatus</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Tipo</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Codigo Postal</b>
		</td>
	</tr>

<?php

$Registros="SELECT * FROM inmuebles WHERE estacionamiento='si' AND status='Desocupado'";
$result=mysqli_query($conex,$Registros);

while($filas=mysqli_fetch_array($result)){

?>
<tr style="text-align: center;font-size: 18px;font-family: arial,cursive;">
	<td style="border:solid skyblue;">
		<?=$filas['id']?>
	</td>
	
	<td style="border:solid skyblue;">
				<?=$filas['idem']?>

	</td>
	<td style="border:solid skyblue;">
				<?=$filas['estacionamiento']?>

	</td>
	<td style="border:solid skyblue;">
				<?=$filas['status']?>

	</td>

	<td style="border:solid skyblue;">
				<?=$filas['tipo']?>

	</td>

<td style="border:solid skyblue;">
				<?=$filas['cod_postal']?>

	</td>
</tr>

<?php

}

?>


</table>
</center>
</div>


<div style="margin-bottom: 5%;">
	
<h1>
	<center>
	Registros de Inmuebles con casas desocupadas y sin estacionamiento
</center>
</h1>


<div  style="margin-bottom: 20%;">
<center>
<table width="100%" align="center" style="border:solid skyblue;">
	<tr style="text-align: center;font-size: 18px;font-family: arial,cursive;">
		
		<td style="border:solid skyblue;background-color: skyblue;">
			<b>ID</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Identificación</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Estacionamiento</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Estatus</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Tipo</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Codigo Postal</b>
		</td>
	</tr>

<?php

$Registros="SELECT * FROM inmuebles WHERE tipo='Casa' AND status='Desocupado' AND estacionamiento='no'";
$result=mysqli_query($conex,$Registros);

while($filas=mysqli_fetch_array($result)){

?>
<tr style="text-align: center;font-size: 18px;font-family: arial,cursive;">
	<td style="border:solid skyblue;">
		<?=$filas['id']?>
	</td>
	
	<td style="border:solid skyblue;">
				<?=$filas['idem']?>

	</td>
	<td  style="border:solid skyblue;">
				<?=$filas['estacionamiento']?>

	</td>
	<td style="border:solid skyblue;">
				<?=$filas['status']?>

	</td>

	<td style="border:solid skyblue;">
				<?=$filas['tipo']?>

	</td>

<td style="border:solid skyblue;">
				<?=$filas['cod_postal']?>

	</td>
</tr>

<?php

}

?>


</table>
</center>
</div>


<div style="margin-bottom: 5%;">
	
<h1>
	<center>
	 Total de inmuebles por estatus y por estacionamiento
</center>
</h1>


<div  style="margin-bottom: 20%;">
<center>
<table width="100%" align="center" style="border:solid skyblue;">
	<tr style="text-align: center;font-size: 18px;font-family: arial,cursive;">
		
		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Sin Estacionamiento</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Con Estacionamiento </b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Desocupados</b>
		</td>

		<td style="border:solid skyblue;background-color: skyblue;">
			<b>Ocupados</b>
		</td>

		
	</tr>

<?php

$Registros_contados="SELECT count(case WHEN (estacionamiento='no') THEN 1 END), count(case WHEN (estacionamiento='si') THEN 1 END),count(case WHEN (status='Desocupado') THEN 1 END), count(case WHEN (status='Ocupado') THEN 1 END) FROM inmuebles";
$result=mysqli_query($conex,$Registros_contados);

$conteo=mysqli_fetch_array($result);

?>
<tr style="text-align: center;font-size: 18px;font-family: arial,cursive;">
	<td style="border:solid skyblue;">
		<?=$conteo[0]?>
	</td>
	
	<td style="border:solid skyblue;">
				<?=$conteo[1]?>

	</td>
	<td style="border:solid skyblue;">
				<?=$conteo[2]?>

	</td>
	<td style="border:solid skyblue;">
				<?=$conteo[3]?>

	</td>

	

</tr>



</table>
</center>
</div>


<div>
	<center>
		<a href="index.php"> Regresar</a>
	</center>
</div>
</body>
</html>


<?php

mysqli_close($conex);

?>