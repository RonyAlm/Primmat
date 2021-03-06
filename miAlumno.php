 <?php
    require_once ('.clases/class.conexion.php');
    require_once ('.clases/class.consultas.php');
    require_once ('.controladores/mostrar/mostrar_alumno.php');
    require_once ('.controladores/select/select_tema.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Primmat
        </title>
        <meta charset="utf-8">
        <!--************************************************************************************************-->
        <!-- DataTables CSS -->
        <link href="tabladinamica/js/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link href="tabladinamica/js/datatables-responsive/dataTables.responsive.css" rel="stylesheet"> 
        <!--************************************************************************************************-->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
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
                                    <li><a href="#" class="nav-item">MIS ALUMNOS</a></li>
                                    <li><a href="#" class="nav-item">CREAR EVALUACIÓN</a></li>
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
                          <h4 class="section-title">Alumnos</h4>

                      </div>
                  </div>
              </div>
              
            <section>
             <div>
              <?php
              
              Mostrar_alumno(); 

              ?> 
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
        <!--************************************************************************************************-->
        <!-- js placed at the end of the document so the pages load faster -->
        <script class="include" type="text/javascript" src="tabladinamica/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="tabladinamica/js/jquery.scrollTo.min.js"></script>
        <!-- DataTables JavaScript -->
        <script src="tabladinamica/js/datatables/js/jquery.dataTables.min.js"></script>
        <script src="tabladinamica/js/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="tabladinamica/js/datatables-responsive/dataTables.responsive.js"></script>
        <script>
            $(document).ready(function() {
            $('#dataTables-example').DataTable({
            responsive: true
            });
            });
        </script>
        <!--************************************************************************************************-->
        </body>
</html>