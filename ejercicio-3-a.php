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
        
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="css/CSS/bootstrap.min.css" rel="stylesheet">
        <link href="css/CSS/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/CSS/style.css">
        <link href="css/CSS/custom.min.css" rel="stylesheet">

    </head>
    <body>
       <header class="header" id="HOME">
                 <!-- Navigation -->
            
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                        
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#loso-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.html">
                                    <!-- small size logo -->
                                    <img src="images/logoPM.png" alt="logo" style="max-width: 150px; max-height: 150px;">
                                </a>
                            </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="loso-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href=".vistas/niveles.php" class="nav-item">INICIO</a></li>
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
                                <li><a href="salir.php" class="nav-item">CERRAR SESIÓN</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
           </nav>
       </header>
 
       <section id="ClASE">
          
           <div class="section-about">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 wow bounceIn">
                          <h2 class="section-title">3- Restar</h2>
                          <p class="under-heading">A. Aprender a Restar</p>
                      </div>
                  </div>
              </div>
              
        <section>
            <div>
                <!-- page content -->
                <div class="">
                  <div class="" id="CAJA">
                    <div class="clearfix"></div>
          
                    <div class="row caja2" id="">
          
                      <div class="col-md-12 caja2 col-sm-12 col-xs-12">
                        <div class="x_panel caja2">
                          <div class="x_title caja2">
                           
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Settings 1</a>
                                  </li>
                                  <li><a href="#">Settings 2</a>
                                  </li>
                                </ul>
                              </li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
          
          
                            <!-- Smart Wizard -->
                           
                            <div id="wizard" class="form_wizard wizard_horizontal">
                              <ul class="wizard_steps">
                                <li>
                                  <a href="#step-1">
                                    <span class="step_no">1</span>
                                    <span class="step_descr">
                                                      Ejercicio 1<br />
                                                      <small>Restar</small>
                                                  </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="#step-2">
                                    <span class="step_no">2</span>
                                    <span class="step_descr">
                                                      Ejercicio 2<br />
                                                      <small>Descripcion</small>
                                                  </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="#step-3">
                                    <span class="step_no">3</span>
                                    <span class="step_descr">
                                                      Ejercicio 3<br />
                                                      <small>Descripcion</small>
                                                  </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="#step-4">
                                    <span class="step_no">4</span>
                                    <span class="step_descr">
                                                      Ejercicio 4<br />
                                                      <small>Descripcion</small>
                                                  </span>
                                  </a>
                                </li>
                              </ul>
                              <div id="step-1">
                               
          
                                  <!--poner el ejercicios aca-->
                                  <section id="ejercicio-srmd">
                                    <h1 class="StepTitle">Restar los globos</h1>

                                        <div id="img1"></div>
                                        <p style="font-size: 44px;">-</p>
                                        <div id="img2"></div>

                                    <input type="text" id="res" placeholder="Escriba la cantidad.." class="form-control input-lg"> 

                                    <button onclick="enviar()" id="enviar" class="btn btn-success btn-en btn-a btn-re">Enviar</button>
                                    <p id="mensaje"></p>
                              
                                   </section>
                              </div>
                              <div id="step-2">
                                <h2 class="StepTitle">Ejercicio 2</h2>

                                 <!--poner el ejercicios aca-->
                                 <section id="ejercicio-marco">
                                    
                                </section>
                                    

                              </div>
                              <div id="step-3">
                                <h2 class="StepTitle">Ejercicio 3</h2>

                                  <!--poner el ejercicios aca-->

                              </div>
                              <div id="step-4">
                                <h2 class="StepTitle">Ejercicio 3</h2>
                                 <!--poner el ejercicios aca-->
                              </div>
          
                            </div>
                            <!-- End SmartWizard Content -->
                           

                           


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section> 
    
        
        
        
       <section id="footer">
        <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="footer-text" >Primmat <span class="copyright"> &copy;</span>2020</p>
                    </div>
                    <div class="col-md-4">
                        <img src="images/logoPM1.png" class="logoimg" style="max-height: 100px; max-width: 80px;" />
                    </div>
                    <div class="col-md-4">
                        <p class="footer-text">Educación y TIC</p>
                    </div>
                </div>
            </div>
        </div>
       </section>
    
       
       
       
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>

        
        <!-- jQuery -->
        <script src="js/JS/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/JS/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="js/JS/fastclick.js"></script>
        <!-- NProgress -->
        <script src="js/JS/nprogress.js"></script>
        <!-- jQuery Smart Wizard -->
        <script src="js/JS/jquery.smartWizard.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="js/JS/custom.min.js"></script>
        
         <!--Restar-->
                   
    <script>

        do {
            num1 = Math.floor(Math.random() * 10);
        } while (num1 < 1);
            
        do {
            num2 = Math.floor(Math.random() * 10);
        } while (num2 < 1 || num2 > num1)

        var respuesta = num1 - num2;
        
        for (i = 0; i < num1; i++) {
            var x = document.createElement ("IMG");
            x.setAttribute ("src", "images/globo.svg");
            document.getElementById("img1").appendChild(x);
        }
        for (i = 0; i < num2; i++) {
            var x = document.createElement ("IMG");
            x.setAttribute ("src", "images/globo.svg");
            document.getElementById("img2").appendChild(x);
        }
        
        
        function enviar() {
            if (respuesta == document.getElementById("res").value) {
               document.getElementById("mensaje").innerHTML = "Respuesta Correcta";
               document.getElementById("mensaje").style.color = "green";
               document.getElementById("enviar").disabled = true;
               document.getElementById("res").disabled = true;
            } else {
               document.getElementById("mensaje").innerHTML = "Respuesta Incorrecta";
               document.getElementById("mensaje").style.color = "red";
               document.getElementById("enviar").disabled = true;
               document.getElementById("res").disabled = true;
            }
        }
    </script>
         
         <!--Restar-->
      
     

    </body>
</html>