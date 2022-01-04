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
                <a class="navbar-brand" id="logoEXPO" href="EXPO.php"> <img src="img/Logo889.png" width="100px"> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="about.php" data-toggle="dropdown"> <span class="fa fa-info-circle fa-lg"></span> Informaci&oacute;n <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="MISION.php"> Misi&oacute;n </a>
                            </li>
                            <li>
                                <a href="SOMOS.php"> ¿Quiénes somos? </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="TERAPEUTAS.php"> <span class="fa fa-user-md fa-lg"></span> Terapeutas</a>
                    </li>
                    <li>
                        <a href="comentarios.php"> <span class="fa fa-users fa-lg"></span> Padres </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="fa fa-font fa-lg"></span> Terapias <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="SEMANTICA.php"> <i class="fa fa-fw fa-flag"></i> Buscatesoros</a>
                            </li>
                            <li>
                                <a href="PRAGMATICA.php"> <i class="fa fa-fw fa-book"></i> ¿Es así la historia?</a>
                            </li>
                            <li>
                                <a href="MORFOSINTAXIS.php"> <i class="fa fa-fw fa-question-circle"></i> ¿Cu&aacute;l...?</a>
                            </li>
                            <li>
                                <a href="FONETICA.php"> <i class="fa fa-fw fa-exclamation-circle"></i> No te confundas</a>
                            </li>
                            <li>
                                <a href="FONOLOGIA.php"> <i class="fa fa-fw fa-sort-alpha-asc"></i> A-E-I-O-U</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                    <?php
                        if(session_verify() !== false):
                    ?>
                        <a href="?close_session"> <span class="fa fa-user fa-lg"></span> (<?php echo session_verify()["user"] ?>)  Cerrar sesi&oacute;n </a>
                    <?php
                    else:
                    ?>
                        <a href="" data-toggle="modal" data-target="#formulario"> <span class="fa fa-user fa-lg"></span>  Iniciar sesi&oacute;n </a>

                    <?php
                    endif;
                    ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">
        <!--
        <h2>Modal Example</h2>
         Trigger the modal with a button
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
        -->
        <!-- Modal -->
        <div class="modal fade" id="formulario" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Informaci&oacute;n de usuario</h4>
                </div>
                <div class="modal-body">

                <form action="?iniciando" method="post">
                    <div class="form-group">
                        <label for="email">Correo Electr&oacute;nico:</label>
                        <input type="email" class="form-control" id="usuario" placeholder="Digite el correo electr&oacute;nico" name="mail">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Contraseña:</label>
                        <input type="password" class="form-control" id="pwd" placeholder=" Digite la contraseña" name="pwd">
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar sesi&oacute;n</button>
                </form>

                </div>
                <!--
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                -->
            </div>
            
            </div>
        </div>
        
        </div>
