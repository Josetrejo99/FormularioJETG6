<?php
    include("conexion.php");
    extract($_REQUEST);
    $db=new conexion();
    $conex=$db->conectar();

    $sql="SELECT * FROM dinosaurios";
        
    $res=mysqli_query($conex,$sql);
    $columnas=mysqli_num_fields($res);
    $filas=mysqli_num_rows($res);
    $i=0;
    $datos[]=array();

    while($data=mysqli_fetch_array($res))
        {
            for($j=0;$j<$columnas;$j++)
            {
                $datos[$i][$j]=$data[$j];
            }
            $i++;
        }
    mysqli_close($conex);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Historial prehistorico</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="mode_regis.css">
<script type="text/javascript">
    function eliminar(id) 
    {
        if (confirm("Seguro desea eliminar el registro?")) 
            {window.location="funciones.php?operacion=eliminar&id_dino="+id;}
    }
</script>
<meta charset="utf-8">
</head>
<body>

<br>
<center>
    <div class="color">
        <img src="images.jpeg" width="70%" style="height: 40%;">
    </div>
<table align="center"  style="">
    <tr>
    	<th colspan="8">Animales prehist&oacutericos</th>
    </tr>
    <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Alimentaci&oacuten</th>
        <th>Habitat</th>
        <th  align="left">Ubicaci&oacuten</th>
        <th  style="background-color: #CEF771;"></th>
        <th style="background-color: #CEF771;"></th>
        
    </tr>
    <?php $num=1;
        for ($i=0; $i< $filas;$i++) {
            echo "<tr>";
    ?>
<td><?=$num?></td>
    <?php for ($j=1;$j <$columnas; $j++) { ?>
        <td><?=$datos[$i][$j]?></td>
<?php } ?>
<td>
   <a href="funciones.php?operacion=modificar&id_dino=<?=$datos[$i][0]?>"><input type="button" value="Modificar" class="modi" ></a>
   </td><br>
   <td>
   <a href="javascript:eliminar(<?=$datos[$i][0]?>)"><input type="button" value="Eliminar"  class="elimi"></a>
</td>
<?php
    $num++;
    }   ?>
<br>

</table>
<div>
<a href="index.php"><input type="button" value="Volver" style="font-size: 25px;" ></a>
</div>
</center>
</body>
</html> 