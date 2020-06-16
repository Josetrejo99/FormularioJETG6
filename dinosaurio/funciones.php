<?php
include("conexion.php");
extract($_REQUEST);

class funciones
{
	public function guardar()
	{
	extract($_REQUEST);
	$db=new conexion();
	$con=$db->conectar();
	$sql="INSERT INTO dinosaurios VALUES(NULL,'".$nombre."','".$alimentacion."','".$habitat."','".$ubicacion."')";
	$resultado=mysqli_query($con,$sql);
	if ($resultado)
		 {
			?>
			<script type="text/javascript">
				alert("Dinosaurio Registrado");
				window.location="index.php";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("Error al registrar el Dinosaurio");
				window.location="index.php";
			</script>
			<?php
			}
	}

	public function modificar()
	{
		extract($_REQUEST);
        $db=new conexion();
        $conex=$db->conectar();
        $sql="SELECT * FROM dinosaurios WHERE id=".$id_dino."";
		$res=mysqli_query($conex,$sql);
        $data=mysqli_fetch_array($res);

        header("Location: modificacion.php?data=".serialize($data));
	}

	public function actualizar(){
        extract($_REQUEST);
        $db=new conexion();
        $conex=$db->conectar();

        $sql="UPDATE dinosaurios SET nombre='$nombre', alimentacion='$alimentacion', habitat='$habitat', ubicacion='$ubicacion'  WHERE id=$id_dino";
       	$res=mysqli_query($conex,$sql);
        	if ($res) {
        		?>
        		<script>
        			alert("REGISTRO MODIFICADO");
        			window.location="Verregis.php";
        		</script>
        		<?php
        	}else{
        		?>
        		<script>
        			alert("ERROR AL MODIFICAR REGISTRO");
        			window.location="Verregis.php";
        		</script>
        		<?php
        	}
    }


	public function eliminar()
	{
		extract($_REQUEST);
		$db=new conexion();
		$conex=$db->conectar();

		$sql="DELETE FROM dinosaurios WHERE id=".$id_dino;
		$res=mysqli_query($conex,$sql);
		if($res)
		{
			?>
			<script type="text/javascript">
				alert("Registro de Dinosaurio Eliminado");
				window.location="Verregis.php";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("Error al eliminar Registro");
				window.location="Verregis.php";
			</script>
			<?php

			} 

		}



	static function controlador($operacion){
		$dino=new funciones();
		switch ($operacion) {
			case 'guardar':
				$dino->guardar();
				break;
			case 'modificar':
				$dino->modificar();
				break;
			case 'actualizar':
				$dino->actualizar();
				break;
			case 'eliminar':
				$dino->eliminar();
				break;
			default:
				?>
					<script>
						alert("No existe la ruta");
						window.location="funciones.php?operacion=index.php";
					</script>
				<?php
				break;
		}//switch
	}//funcion controlador
}//class
funciones::controlador($operacion);
?>