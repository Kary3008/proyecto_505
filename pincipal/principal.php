<?php include 'main/conecta.php';
session_start();
$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
 header("location:session.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main2.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <script src="includes/push/push.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Sistema | Conactive</title>
    <!--Inicia notificaciones-->
    <?php
      $notification= '<script>
          Push.create("Hola, bienvenid@.", {
                body: "Conoce el futuro proyecto de la empresa BorderLine",
                icon: "img/logo.png",
                timeout: 6000,
                onClick: function() {
                  window.location="project.php";
                  this.close();
                }
          });
        </script>';
          echo $notification;
          ?>
        <!--Termina notificaciones-->
  </head>
  <body>
    <!--Inicia Navbar y sidebar-->
     <?php include 'main/sidebar.php' ?>
     <div id="page-content-wrapper">
      <?php include 'main/navbar.php' ?>
      <!--Inicia contenido-->
       <div class="container py-5">
         <?php include 'main/contenido.php' ?>
         <h4 class="text-center py-3">Módulos Interactivos</h4>
          <div class="container py-3">
            <div class="row" data-aos="fade-down">
          <!-- inicia nuestra tarjeta de sevicios -->
              <div class="col aling-middle">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
                    <div class="card-header text-center" style="background: #9999ff; color: #333;">
                      Recorrido Virtual
                    </div>
                    <a href="#"><img src="img/recVirtual.png" class="card-img-top servicios-img" alt="Modulo1"></a>
                    <div class="card-body">
                      <p class="card-text text-justify">Vive la experiencia como si estuvieras ahí.</p>
                   </div>
              </div>
            </div><!-- termina primera card-->
            <!-- inicia nuestra tarjeta de sevicios -->
              <div class="col aling-middle">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
                  <div class="card-header text-center" style="background: #9999ff; color: #333;">
                    Juegos Interactivos
                  </div>
                    <a href="#"><img src="img/juego.jpg" class="card-img-top servicios-img" alt="Modulo2"></a>
                  <div class="card-body">
                     <p class="card-text text-justify">Diviertete en los juegos que tenemos para ti.</p>
                 </div>
              </div>
            </div><!-- termina segunda card-->
        <!-- inicia nuestra tarjeta de sevicios -->
            <div class="col aling-middle">
              <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
                <div class="card-header text-center" style="background: #9999ff; color: #333;">
                    Control de DIES
                </div>
                  <a href="#"><img src="img/controldies.jpg" class="card-img-top servicios-img" alt="Modulo3"></a>
                  <div class="card-body">
                    <p class="card-text text-justify">Mantén tu asistencia a las sesiones de manera segura.</p>
                  </div>
              </div>
            <!-- termina Tercera card-->
          </div>
        </div>
      </div>
  <!-- termina seccion modulos-->
       </div>
       <!--Termina contenido-->
      </div>
    <!--Termina Navbar y sidebar-->

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
