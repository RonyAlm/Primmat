<?php

session_start();

$mensaje = null;

if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']['rela_tipo_usuario']=="2"){
        $mensaje = "Maestro";
    }else{
        $mensaje = "Alumno";
    }
}    

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Primmat
    </title>
    <meta charset="utf-8">
    <!--CSS-->

    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>

<body>
    <header class="header" id="HOME">
        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#loso-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <!-- small size logo -->
                        <img src="../images/logoPM.png" alt="logo" style="max-width: 150px; max-height: 150px;">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="loso-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href="niveles.php" class="nav-item">INICIO</a></li>
                        <?php
                            if (isset($_SESSION['usuario'])) {
                                if ($_SESSION['usuario']['rela_tipo_usuario']=="1") {
                                    echo '<li><a href="#" class="nav-item">MI HISTORIAL</a></li>';
                                    echo '<li><a href="#" class="nav-item">EVALUACIONES</a></li>';
                                }   
                            }      
                        ?>
                        <?php
                            if (isset($_SESSION['usuario'])) {
                                if ($_SESSION['usuario']['rela_tipo_usuario']=="2") {
                                    echo '<li><a href="../miAlumno.php" class="nav-item">MIS ALUMNOS</a></li>';
                                    echo '<li><a href="#" class="nav-item">CREAR EVALUACIÓN</a></li>';
                                }   
                            }      
                        ?>
                        <li><a href="../salir.php" class="nav-item">CERRAR SESIÓN</a></li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>

 <section class="why-us" id="timeline">
        <div class="section-timeline fondo-timeline">
            <div class="container" id="mat">
                <h2 class="heading"><span class="bold-green"> 1° Año </span></h2>
                <p class="lead under-heading text-center">Temas</p>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge"><span class="counteryear">1</span></div>
                        <div class="timeline-panal wow bounceIn">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">Números y contar</h3>
                                    <h4 class="timeline-title">Ejercicios:</h4>
                                </div>
                                <div class="timeline-body" id="ejercicios">
                                    
                                        <ul>
                                            <li><a href="../ejercicio-1-a.php">a. Aprender a contar. Contar globo </a></li>
                                            <li><a href="../ejercicio-1-b.php">b. Contar Marcos</a></li>
                                          
                                        </ul>
                                </div>
                                    
                        </div>
                        
                        <!--end of timeline panel-->
                    </li>

                    <li class="timeline-inverted">
                        <div class="timeline-badge"><span class="counteryear">2</span></div>
                        <div class="timeline-panal  wow bounceIn">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Sumar</h3>
                                <h4 class="timeline-title">Ejercicios:</h4>
                            </div>
                            <div class="timeline-body" id="ejercicios">
                                
                                    <ul>
                                        <li><a href="../ejercicio-2-a.php">a. Aprender a Sumar. Sumar</a></li>
                                        
                                      
                                    </ul>
                            </div>
                                
                        </div>
                        <!--end of timeline panel-->
                    </li>

                    <li>
                        <div class="timeline-badge"><span class="counteryear">3</span></div>
                        <div class="timeline-panal wow bounceIn">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Restar</h3>
                                <h4 class="timeline-title">Ejercicios:</h4>
                            </div>
                            <div class="timeline-body" id="ejercicios">
                                
                                    <ul>
                                        <li><a href="../ejercicio-3-a.php">a. Aprender a restar. Restar</a></li>
                                        
                                      
                                    </ul>
                            </div>
                                
                        </div>
                        <!--end of timeline panel-->
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge"><span class="counteryear">4</span></div>
                        <div class="timeline-panal wow bounceIn">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Multiplicar</h3>
                                <h4 class="timeline-title">Ejercicios:</h4>
                            </div>
                            <div class="timeline-body" id="ejercicios">
                                
                                    <ul>
                                        <li><a href="../ejercicio-4-a.php">a. Aprender a Multiplicar.</a></li>
                                        
                                    </ul>
                            </div>
                                
                        </div>
                        <!--end of timeline panel-->
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="counteryear">5</span></div>
                        <div class="timeline-panal wow bounceIn">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Dividir</h3>
                                <h4 class="timeline-title">Ejercicios:</h4>
                            </div>
                            <div class="timeline-body" id="ejercicios">
                                
                                    <ul>
                                        <li><a href="../ejercicio-5-a.php">a. Aprender a Dividir</a></li>
                                        
                                    </ul>
                            </div>
                                
                        </div>
                        <!--end of timeline panel-->
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge"><span class="counteryear">6</span></div>
                        <div class="timeline-panal wow bounceIn">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Comparar Números</h3>
                                <h4 class="timeline-title">Ejercicios:</h4>
                            </div>
                            <div class="timeline-body" id="ejercicios">
                                
                                    <ul>
                                        <li><a href="../ejercicio-6-a.php">a. Aprender a Comparar números.</a></li>
                                        
                                      
                                    </ul>
                            </div>
                                
                        </div>
                        <!--end of timeline panel-->
                    </li>

                </ul>


            </div>
        </div>

    </section>






    <section id="footer">
        <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="footer-text">Rony Almiron <span class="copyright"> &copy;</span>2020</p>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/logoPM1.png" class="logoimg" style="max-height: 100px; max-width: 80px;" />
                    </div>
                    <div class="col-md-4">
                        <p class="footer-text">Educación y TIC</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>