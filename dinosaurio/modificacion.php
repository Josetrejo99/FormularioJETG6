<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
<title>Registro de Dinnosaurios
</title>
<link rel="stylesheet" type="text/css" href="modiseño.css">
<meta charset="utf-8">

</head>
<body>

<br><br><br><center>
    <form method="post" action="funciones.php">
        <table style="height: 500px;transform: translate(0%,-140%);">

 <tr>
    <img src="dinosauri.jpeg" width="80%" height="5%" style="opacity: 85%;border-radius: 15px;">
                <th> Registro de Dinosaurios</th>
            </tr>
            <tr>
                <td>
                    <input type="text" title="Nombre del dinosaurio" id="nombre" required placeholder="Nombre del Dinosaurio" name="nombre" value="<?=$data[1]?>" >
                </td>
            </tr>
            <tr>
                <td>
                   <select name="alimentacion" title="Alimentación" id="alimentacion">
                   	
   <option selected value="<?=$data[2]="Campo sin completar"?>">
	--Seleccionar--
</option>
<option value="<?=$data[2]="Carnívoro"?>" >
	Carn&iacutevoro
</option>
<option value="<?=$data[2]="Hervívoro"?>">
	Herv&iacutevoro
</option>

<option value="<?=$data[2]="Omnívoro"?>">
	Omn&iacutevoro
</option>

                   </select>
                </td>
            </tr>
            <tr>
                <td>
                    <select name="habitat" title="Habitat" id="habitat">
                   	
  	<option selected value="<?=$data[3]="Campo sin completar"?>">
	--Seleccionar--
</option>
<option value="<?=$data[3]="Terrestre"?>">
	Terrestre
</option>
<option value="<?=$data[3]="Acuático"?>">
	Acu&aacutetico
</option>

<option value="<?=$data[3]="Anfibio"?>">
	Anfibio
</option>

                   </select>
                </td>
            </tr>
            <tr>
                <td>
                   <input type="text" title="ubicación de su habitat" placeholder="Ubicacion geográfica del habitat" name="ubicacion" id="ubicacion" required>
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="hidden" name="id_dino"value="<?=$data[0]?>">
                    <input type="hidden" name="operacion"value="actualizar">
                    <input type="submit" name="enviar" value="Modificar" class="boton" >
                </td>
            </tr>







        </table>

    </form>

    <a href="index.php"><input type="button" value="Volver" title="Volver al menú principal" class="buton2" ></a>
</center>
</body>
</html>