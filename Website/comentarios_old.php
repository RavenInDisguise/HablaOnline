<?php
    include_once("auto.php");
?>
<!DOCTYPE html>
<meta charset="utf-8">
<html>
	<?php
		include("sections/head.php");
	?>
	<body>
		<div id="titulo" style="background-color:#0f5382;color:white;height:70px;border-radius:8px;line-height:70px;text-align:center;font-size:24px;">

			<?php
				if(session_verify() !== false):
			?>

			<table>
			<tr>
			<td><a href="EXPO.php"><img src="img/logoOZY.png" style="margin-left:10%;margin-top:8%;"></a></td>
			<td style="width:100%;"><p id="coment" style="color:white;font-size:30px;line-height:0;">Comentarios</p></td>
			</tr>
			</table>
		</div>

		<div id="principal" style="margin:15%; margin-top:0;">
		<div id="comentarios_1" style="margin-left:30%;">
		<form action="#" method="post" name="coment" id="coment">
			<input type="text" name="nombre" id="nombre" class="cajas" placeholder="Nombre" value="">
			<br>
			<br>
			<textarea id="comentario" class="cajas" name="comentario" placeholder="Añade un comentario"></textarea>
			<br>
			<br>
			<input type="submit" name="Enviar" id="Enviar" value="Enviar" style="border:2px solid #0f5382;font-family:'Open Sans', sans-serif;
			background-color:white;height:30px;border-radius:2px; color:#0f5382;">
		</form>
		</div>

		<?php
            else:
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">No usuario encontrado</div>
                    <div class="panel-body">Para poder jugar a nuestros juegos primero debe iniciar sección</div>
                    <div class="panel-footer">
                        <button type="button" class="btn btn-primary"> 
                            <a href="EXPO.php" style="text-decoration: none; color: white;"> Volver a la página principal </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php
            endif;
        ?>

		<?php
			if(isset($_POST["Enviar"])){
				$nombre=$_POST["nombre"];
				$comentario=$_POST["comentario"];

				require("conectar2.php");
				$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena,$db_nombre);
				$consulta="INSERT INTO comentarios (nombre,comentario) VALUES ('$nombre','$comentario')";
				$resultados=mysqli_query($conexion,$consulta);

				include "comentarios2.php";
			}
		?>
		</div>
		<link rel="stylesheet" type="text/css" href="estilo_comentario.css">
	</body>
</html>




