<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sitio web para terapia de lenguaje en l&iacute;nea">
    <meta name="author" content="Monica A, Mariana H, Adrian R"/>
    <title>HablaOnline</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet" />
    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />

      <link href="ihover.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
	#img-expo{
		width:400px;
	}
	.cajas{
		font-size: 15px;
		font-family:'Open Sans', sans-serif;
		height:45px;
		width:50%;
		padding: 10px;
		border: none;
		border-bottom: solid 2px #c9c9c9;
		transition: border 0.3s;
	}
	table{
		margin-left:0;
		width:100%;
	}
	tr{
		width:100%;
	}
	td{
		margin-right:0;
		width:25%;
		padding:10px;
		padding-right:0;
		color:black;
	}
	.inicial{
		margin-top:50%;
		width:60px;
		height:60px;
		border-radius:15px;
	}
	#foto{
		width:3%;
		padding:0;
	}
	.tiempo{
		margin-left:93%;
		font-style:italic;
	}
	.padre{
		font-weight:bold;
	}
	p{
		font-size:16px;
	}
	hr{
		display:none;
	}
	.separador{
		display:block;
	}
	#letras{
		width:47%;
		padding:0;
	}
	#Enviar{
		margin-left:45%;
		background-color:#0f5382;
		color:white;
		border:none;
		height:30px;
		width:5%;
		border-radius:4px;
	}
	@media screen and (max-width:348px){
		#img-expo{
			width:280px;
		}
		.cajas{
			font-size: 15px;
			font-family:'Open Sans', sans-serif;
			height:45px;
			width:98%;
			padding: 10px;
			border: none;
			border-bottom: solid 2px #c9c9c9;
			transition: border 0.3s;
		}
		#Enviar{
			margin-left:74%;
			background-color:#0f5382;
			color:white;
			border:none;
			height:30px;
			width:20%;
			border-radius:4px;
		}
		table{
			margin-left:8%;
			width:84%;
		}
		tr{
			width:100%;
		}
		td{
			margin-right:0;
			width:25%;
			padding:10px;
			padding-right:0;
			color:black;
		}
		.inicial{
			display:none;
		}
		.tiempo{
			display:none;
		}
		.padre{
			padding:3%;
			border-radius:2px;
			background-color:#f1940e;
			opacity:0.9;
			font-weight:normal;
			color:white;
		}
		p{
			font-size:15px;
		}
		hr{
			display:block;
		}
		#letras{
			width:47%;
			padding:0;
		}
	}
</style>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="littleScr" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="logoEXPO" href="EXPO.html"> <img src="img/logoOZY.png" width="100px"> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"> <span class="fa fa-info-circle fa-lg"></span> Informaci&oacute;n <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="MISION.html"> Misi&oacute;n </a>
                            </li>
                            <li>
                                <a href="quienes_somos.html"> ¿Quiénes somos? </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=""> <span class="fa fa-user-md fa-lg"></span> Terapeutas</a>
                    </li>
                    <li>
                        <a href="padres.html"> <span class="fa fa-user fa-lg"></span> Padres </a>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="fa fa-font fa-lg"></span> Terapias <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="tesoro_resp.html">Semántica</a>
                            </li>
                            <li>
                                <a href="#">Pragmática</a>
                            </li>
                            <li>
                                <a href="#">Fonética</a>
                            </li>
                            <li>
                                <a href="cual_resp.html">Morfosintaxis</a>
                            </li>
                            <li>
                                <a href="#">Fonología</a>
                            </li>
                        </ul>
                    </li>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="slider" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/ca0.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Bienvenido a HablaOnline</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/ca2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Entiende, Aprende, Expresa</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/ca3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Conozca nuestro portal</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#slider" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#slider" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->

        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">
                    Comentarios
                </h1>
            </div>
            <div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <form class="form" method="post" id="form">
                        <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="input-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <input type="text" name="nombre" id="nombre" class="cajas" placeholder="Nombre" value="">
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="input-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <textarea id="comentario" class="cajas" name="comentario" placeholder="A&ntilde;ade un comentario" style="height:45px;"></textarea>
                            </div>
                        </div>
                            <input type="submit" name="Enviar" id="Enviar" value="Enviar">
                    </form>
                </div>
			</div>
            <br>
        </div>
		
		<?php
			if(isset($_POST["Enviar"])){
				$nombre=$_POST["nombre"];
				$comentario=$_POST["comentario"];

				require("conectar2.php");
				$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena,$db_nombre);
				$consulta="INSERT INTO comenta (nombre,comentario) VALUES ('$nombre','$comentario')";
				$resultados=mysqli_query($conexion,$consulta);
			}
		?>
		
		
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<?php
					require("conectar2.php");
					$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasena,$db_nombre);
					$consulta="SELECT * FROM comenta";
					$resultados=mysqli_query($conexion,$consulta);
					if($resultados){
						while($datos=mysqli_fetch_assoc($resultados)){
							$cad = $datos['nombre'];
							$letra = 1;
							$resp=$cad{$letra-1};
							$fecha= date ("j/n/Y");
							if($resp=="A"||$resp=="a"){
								$img="<img src='img/letras/A.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="B"||$resp=="b"){
								$img="<img src='img/letras/B.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="C"||$resp=="c"){
								$img="<img src='img/letras/C.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="D"||$resp=="d"){
								$img="<img src='img/letras/D.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="E"||$resp=="e"){
								$img="<img src='img/letras/E.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="F"||$resp=="f"){
								$img="<img src='img/letras/F.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="G"||$resp=="g"){
								$img="<img src='img/letras/G.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="H"||$resp=="h"){
								$img="<img src='img/letras/H.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="I"||$resp=="i"){
								$img="<img src='img/letras/I.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="J"||$resp=="j"){
								$img="<img src='img/letras/J.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="K"||$resp=="k"){
								$img="<img src='img/letras/K.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="L"||$resp=="l"){
								$img="<img src='img/letras/L.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="M"||$resp=="m"){
								$img="<img src='img/letras/M.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="N"||$resp=="n"){
								$img="<img src='img/letras/N.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="O"||$resp=="o"){
								$img="<img src='img/letras/O.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="P"||$resp=="p"){
								$img="<img src='img/letras/P.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="R"||$resp=="r"){
								$img="<img src='img/letras/R.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="S"||$resp=="s"){
								$img="<img src='img/letras/S.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="T"||$resp=="t"){
								$img="<img src='img/letras/T.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="U"||$resp=="u"){
								$img="<img src='img/letras/U.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="V"||$resp=="v"){
								$img="<img src='img/letras/V.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="W"||$resp=="w"){
								$img="<img src='img/letras/W.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="X"||$resp=="x"){
								$img="<img src='img/letras/X.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="Y"||$resp=="y"){
								$img="<img src='img/letras/Y.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
							if($resp=="Z"||$resp=="z"){
								$img="<img src='img/letras/Z.png' class='inicial'>"; 
								echo "<table border='0' align='center'>"; 
								echo "<tr><td id='foto'>".$img."</td><td id='letras'><br/><br/><br/><p class='tiempo'>".$fecha."</p><p class='padre'>".$datos['nombre']
								."</p><hr><p>".$datos['comentario']."</p><br/><br/></td></tr>";
								echo "<hr class='separador'>";
								echo "</table>";
							}
						}
					}
				?>
			</div>	
		</div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <p>Copyright &copy; CEDES <span id="dated">DATE</span></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right">
                  <ul class="list-inline pull-right social-icons">
                    <li><a href=""><span class="fa fa-facebook-square fa-2x"></span></a>
                    <li><a href=""><span class="fa fa-twitter-square fa-2x"></span></a>
                    <li><a href=""><span class="fa fa-instagram fa-2x" ></span></a>
                    <li><a href=""><span class="fa fa-pinterest-square fa-2x"></span></a>
                    <li><a href=""><span class="fa fa-tumblr-square fa-2x"></span></a>
                  </ul>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>

    <!-- Script to Activate the Carousel -->
    <script type="text/javascript" src="js/attrib.js"></script>
    <script type="text/javascript">
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
