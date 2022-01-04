<?php
	include_once("auto.php");
	
	if(isset($_POST["Enviar"])){
		$user = session_verify();
		$user_id = $user["id"];
		$comentario = $_POST["comentario"];
		
		$comentar = "INSERT INTO comments (user_id,comment) VALUES ('$user_id','$comentario')";
		$res = mysqli_query(conexion(),$comentar);
		header("Location:?send");
	}

?>

<!DOCTYPE html>
<html lang="es">
	<?php
		include("sections/head.php");
		echo "<link href='css/comments.css' rel='stylesheet' type='text/css' />";
	?>
	<body>
    	<?php
			include("sections/top_page.php");
		?>
		<div class="container">
			<div class="row">
				<ol class="breadcrumb">
                    <li class="active"><a href="comentarios.php">Comentarios</a>
                    </li>
                    <li> <a href="graf.php">Gráfica de juego</a> </li>
                </ol>
				<div class="col-xs-12">
					<h1 class="page-header">Comentarios</h1>
				</div>

				<?php
                	if(session_verify() !== false):
            	?>

				<div class="row">
					<div class="col-xs-12">
						<form class="form" method="post" id="form">
							<div class="col-xs-12">
								<div class="input-group col-xs-12">
									<textarea id="comentario" class="cajas" name="comentario" placeholder="A&ntilde;ade un comentario" style="height:45px;"></textarea>
								</div>
							</div>
								<input type="submit" name="Enviar" id="Enviar" value="Enviar">
						</form>
					</div>
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
			</div>
		
		<div class="row">
			<div class="col-xs-12">
				<?php

					$query = "SELECT com.*, u.* FROM comments AS com LEFT JOIN users AS u ON u.id = com.user_id ORDER BY com.dated DESC";
					$res = mysqli_query( conexion() ,$query);
					if($res){
						while($datos=mysqli_fetch_assoc($res)){


							$cad = $datos['username'];
							$letra = 1;
							$resp = $cad{$letra-1};
							$fecha = date("j/n/Y");
							if($resp=="A"||$resp=="a"){
								$img="<img src='img/letras/A.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="B"||$resp=="b"){
								$img="<img src='img/letras/B.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="C"||$resp=="c"){
								$img="<img src='img/letras/C.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="D"||$resp=="d"){
								$img="<img src='img/letras/D.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="E"||$resp=="e"){
								$img="<img src='img/letras/E.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="F"||$resp=="f"){
								$img="<img src='img/letras/F.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="G"||$resp=="g"){
								$img="<img src='img/letras/G.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="H"||$resp=="h"){
								$img="<img src='img/letras/H.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="I"||$resp=="i"){
								$img="<img src='img/letras/I.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="J"||$resp=="j"){
								$img="<img src='img/letras/J.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="K"||$resp=="k"){
								$img="<img src='img/letras/K.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="L"||$resp=="l"){
								$img="<img src='img/letras/L.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="M"||$resp=="m"){
								$img="<img src='img/letras/M.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="N"||$resp=="n"){
								$img="<img src='img/letras/N.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="O"||$resp=="o"){
								$img="<img src='img/letras/O.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="P"||$resp=="p"){
								$img="<img src='img/letras/P.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="R"||$resp=="r"){
								$img="<img src='img/letras/R.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="S"||$resp=="s"){
								$img="<img src='img/letras/S.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="T"||$resp=="t"){
								$img="<img src='img/letras/T.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="U"||$resp=="u"){
								$img="<img src='img/letras/U.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="V"||$resp=="v"){
								$img="<img src='img/letras/V.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="W"||$resp=="w"){
								$img="<img src='img/letras/W.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="X"||$resp=="x"){
								$img="<img src='img/letras/X.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="Y"||$resp=="y"){
								$img="<img src='img/letras/Y.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
							if($resp=="Z"||$resp=="z"){
								$img="<img src='img/letras/Z.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['username']
								."</p><hr><p>".$datos['comment']."</p><br/><br/></td></tr>";
								echo "<hr>";
								echo "</table>";
							}
						}
					}
				?>
			</div>	
		</div>

        <hr>

        <!-- Footer -->
        <?php
			include("sections/footer.php");
		?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <?php
    	include("sections/js.php");
    ?>

</body>

</html>
