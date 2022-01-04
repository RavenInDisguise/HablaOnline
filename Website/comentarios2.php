<?php
	require("conectar2.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena,$db_nombre);
	$consulta="SELECT * FROM comentarios";
	$resultados=mysqli_query($conexion,$consulta);
	if($resultados){
		while($datos=mysqli_fetch_assoc($resultados)){
			echo $datos['nombre']."<br/>";
			echo $datos['comentario']."<br/>"."<br/>";
			echo "<hr>";
		}
	}
?>
