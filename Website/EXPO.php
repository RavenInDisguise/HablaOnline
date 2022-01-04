<?php
    include_once("auto.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php
    include("sections/head.php");
?>
<body>
    <?php
        include("sections/top_page.php");
    ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->

        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">
                    ¿Qu&eacute; es terapia de lenguaje?
                </h1>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <span></span>
                <p>Es la especialidad dentro del campo de la rehabilitación que se encarga de la prevención, evaluación, diagnóstico, estudio y tratamiento de las alteraciones en voz, audición, habla, lenguaje, aprendizaje. Además, los aspectos de la motricidad oral que afectan la comprensión, comunicación y expresión del lenguaje oral y escrito, durante el desarrollo del niño.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    Nuestras din&aacute;micas
                </h2>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-flag"></i> Buscatesoros</h4>
                    </div>
                    <div class="panel-body">
                        <p>Este juego aportará al área de la semántica, mediante el reconocimiento de elementos que pertenecen a un mismo campo semántico.</p>

                        <p id='buscatesorosOculto' class="collapse">Semántica: Es la dimensión que abarca el contenido del lenguaje y representa el estudio de las relaciones de unos significados con otros y los cambios de significación que experimentan las palabras; trata del significado de las palabras y de las oraciones.</p>
                        <div class="text-center">
                          <a target="#buscatesorosOculto" href="javascript:void(0);" class="colapsableButton btn btn-primary ">Leer m&aacute;s</a>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-book"></i> ¿Es as&iacute; la historia?</h4>
                    </div>
                    <div class="panel-body">
                        <p>Juego que consiste en la organización de historias que estimulan la memoria del infante y el área de la pragmática.</p>

                        <p id="historyEvent"  class="collapse">Pragmática: Se ocupa de las intenciones comunicativas del hablante y de la utilización que hace del lenguaje para realizar esas intenciones. </p>
                        
                        <div class="text-center">
                          <a target="#historyEvent" href="javascript:void(0);" class="colapsableButton btn btn-primary ">Leer m&aacute;s</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-question-circle"></i> ¿Cu&aacute;l...? </h4>
                    </div>
                    <div class="panel-body">
                        <p>Dinámica que incentiva al mejoramiento de la morfosintaxis a través del acomodo de oraciones dependiendo del género, número, artículo, etc.</p>
                        <p id="whoEvent"  class="collapse">Morfosintáxis: es una parte del área de la lingüística que estudia el conjunto de las reglas y los elementos que hacen de la oración un elemento con sentido y carente de ambigüedad.</p>
                        <div class="text-center">
                          <a target="#whoEvent" href="javascript:void(0);" class="colapsableButton btn btn-primary ">Leer m&aacute;s</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-exclamation-circle"></i> No te confundas </h4>
                    </div>
                    <div class="panel-body">
                        <p>A partir de un grupo de palabras el niño identifica el nombre correcto que corresponde a la imagen que se presenta, esto estimulando la pragmática.</p>
                        <p id="confucioEvent"  class="collapse">Pragmática: Se ocupa de las intenciones comunicativas del hablante y de la utilización que hace del lenguaje para realizar esas intenciones.</p>
                        <div class="text-center">
                          <a target="#confucioEvent" href="javascript:void(0);" class="colapsableButton btn btn-primary ">Leer m&aacute;s</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-sort-alpha-asc"></i> A-E-I-O-U </h4>
                    </div>
                    <div class="panel-body">
                        <p>El infante debe escoger la vocal adecuada para completar una palabra según lo que se muestra en una imagen, promoviendo la mejora en la fonología.</p>

                        <p id="aeiouEvent" class="collapse">Fonología: Es la disciplina que estudia las reglas que gobiernan la estructura, la distribución y la secuencia de los sonidos del habla y la configuración de las sílabas; es el estudio del material sonoro, de los fonemas</p>
                        <div class="text-center">
                          <a href="javascript:void(0);" target="#aeiouEvent" class="colapsableButton btn btn-primary ">Leer m&aacute;s</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="keepContainerHeight hideOn992" style="background-image:url('img/ca1.jpg'); background-size: cover;">
                            &nbsp;
                </div>
            </div>
        </div>
            <?php
                if(session_verify() !== false):
            ?>
            <?php
                else:
            ?>
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="page-header"> ¿Por qu&eacute; unirse a nuestro sitio? </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <p class="text-justify">
                        Al unirte a HablaOnline, tendr&aacute;s a disposici&oacute;n una herramienta para poder brindar ejercicios que ayudan a tus hijos para desarrollar un mejoramiento en los problemas del habla que puedan presentarse. Nuestras din&aacute;micas comprenden los elementos de: sem&aacute;ntica, pragm&aacute;tica, morfosint&aacute;xis, fon&eacute;tica y fonolog&iacute;a, dando un estimulo escencial para sus hijos y lograr dejar atr&aacute;s problemas que puedan convertirse en situaciones graves en un futuro.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <!--
                    <h2 class="page-header hideOn992"> &nbsp; </h2>
                    -->
                    <form class="form" action="?registro_usuario" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Correo Electr&oacute;nico" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                <input type="text" class="form-control" placeholder="Nombre de Usuario" id="user" name="user">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" class="form-control" placeholder="Contraseña" id="pass" name="pass">
                            </div>
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-primary"><span class="fa fa-send"></span> Registrarse </button>
                        </div>
                    </form>
                </div>
            </div>
            <?php
                endif;
            ?>
        <hr>
        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="clo-xs-12 col-md-8">
                    <p><b>Este proyecto fue realizado para la feria de ciencia, tecnolog&iacute;a y arte: EXPOTEC 2017, del instituto CEDES Don Bosco en Concepci&oacute;n de Alajuelita, San Jos&eacute;, Costa Rica.
                        </b>
                    </p>
                </div>
                <div class="clo-xs-12 col-md-4 CEDESlogo">
                    <img src="img/logocedes.png" width="200px" class=""/>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <?php
            include("sections/footer.php");
        ?>

    </div>
    <!-- /.container -->
    <?php
    include("sections/js.php");
    ?>
</body>

</html>
