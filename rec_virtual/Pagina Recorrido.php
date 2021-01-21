<?php include 'main/conecta.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/fontello.css">
     <link rel="stylesheet" type="text/css" href="css/preloader.css">
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <script src="js/jquery-3.5.1.min.js"></script>
     <title> Recorrido Virtual</title>
  </head>
  <body>
    <!-- inicia preloader de la pagina web -->
     <div id="loader">
       <div class="dot"></div>
       <div class="dot"></div>
       <div class="dot"></div>
     </div>
     <!-- termina el preloader de la pagina web -->
    <!-- inicia el contenido de la web -->
     <div id="contenido">
         <?php include '../menu.php' ?>
<!-- inicia slider -->
<div id="carouselExampleCaptions" class="carousel slide slider" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active">
  </li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/tres.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h2 class="text-center slider">¡BIENVENID@ AL RECORRIDO VIRTUAL!</h2>
            <p>"CONOCE TU INSTITUCIÓN"</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/map2.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-center slider">¡BIENVENID@ AL RECORRIDO VIRTUAL!</h2>
          <p>"CONOCE TU INSTITUCIÓN"</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/map3.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-center slider">¡BIENVENID@ AL RECORRIDO VIRTUAL!</h2>
          <p>"CONOCE TU INSTITUCIÓN"</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/map4.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-center slider">¡BIENVENID@ AL RECORRIDO VIRTUAL!</h2>
          <p>"CONOCE TU INSTITUCIÓN"</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- flechas de slider -->
  </div>
<!-- termina slider -->
<!--
<div style="background : #73c2fb;width: 18rem;" class="card" >
  <img src="img/tres.jpg" class="card-img-top">
  <div  class="card-body">
    <p class="card-text"> en este recorrido podras conocer nuestro plantel de manera virtual.</p>
  </div>
</div>

  <h1 align="center">¿En que consiste?</h1>
     <h3>En este recorrido virtual se pretende que cel usuario conozca el plantel sin la necesidad de exponerse ante la enfermedad provocada por el virus del covid-19.</h3>
</div>
     </div>
     <h5>Plantel</h5>
     <p>El plantel a pesar de ser uno pequeño a comparacion de otros cuenta con los lavoratorios para que los alumnos realizen sus practicas al igual de tomar sus clases.</p>.00000
  </div>-->
  <!--  <h5>Plantel</h5>
    <p>En el pantel naucalpan I contamos con bastantes actividades.</p>
    <h5>Nuestro sistema</h5>
    <p>En nuestro sistema contamos con muchas oportunidades para los nuevos y pequeños emprendedores.</p>-->
  <div class="container py-3">
    <div class="row">
      <div class="col aling-middle">
<!--inicia tarjeta de servicios-->
  <div class="card shadow py-3 mb-5 bgcard rounded" style="width: 18rem;">
    <div class="card-header bg-header-card text-center">
       Recorrido Virtual Parque.
    </div>
    <a href="https://goo.gl/maps/Hj88WNvXFmf514C58"><img src="img/img1.png" class="card-img-top " alt="Recorrido virtual"></a>
   <div class="card-body">
     <p class="card-text text-justify">Conoce los alrededores cerca del plantel.</p>
  </div>
  </div>
  <!--termina primera card-->
  </div>
  <div class="col aling-middle">
<!--inicia tarjeta de servicios-->
<div class="card shadow py-3 mb-5 bgcard rounded" style="width: 18rem;">
<div class="card-header bg-header-card text-center">
   Recorrido Virtual.
</div>
<a href="../REGISTRO/Registro.php"><img src="../img/recVirtual.png" class="card-img-top" alt="Recorrido virtual2"></a>
<div class="card-body">
 <p class="card-text text-justify">Registrate para seguir recorriendo más tour virtuales.</p>
</div>
</div>
<!--termina segunda card-->
  </div>
  <div class="col aling-middle">
<!--inicia tarjeta de servicios-->
<div class="card shadow py-3 mb-5 bgcard rounded" style="width: 18rem;">
<div class="card-header bg-header-card text-center">
   Conocenos.
</div>
<a href="#"><img src="../img/desarrollo.png" class="card-img-top" alt="Recorrido virtual3"></a>
<div class="card-body">
 <p class="card-text text-justify">Conoce el porque de este proyecto.</p>
</div>
</div>
<!--termina tercera card-->
</div>
</div>
<!--INICIA RECORRIDO-->
<div class="container">
  <h2 class="py-3">Tour Virtual</h2>
  <div class="col aling-middle">
<iframe src="https://www.google.com/maps/embed?pb=!4v1608289626267!6m8!1m7!1sCAoSLEFGMVFpcE0xb1Znc2psQkNqNFZXQkpYSC1ZRjZjMGE4RTFueFBjelNFWHZh!2m2!1d19.4480552!2d-99.26927909999999!3f19.57!4f30.040000000000006!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>
<!--Termina recorrido-->
<!--termina seccion servicios-->
    <!-- termina el contenido de la web -->
     <script src="js/bootstrap.min.js"></script>
     <script src="js/preloader.js"></script>
     <script src="js/main.js"></script>
  </body>
</html>
