<?php
//error_reporting(0);
session_start();
include 'conecta.php';
include 'configreg.php';
// validando usuario
$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
   header("location:../session.php");
}

// consulta para extraer todos los campo de el usuario en la sesion
$con = "SELECT * FROM alumnos WHERE Usuario = '".$usuario."'";
$consulta = $conecta->query($con);
$mperfil = $consulta->fetch_array();
if ($mperfil > 0) {
  $usu1 = $mperfil;
}

//extraer los datos de el perfil
$id = $_GET['Id_Alumno'];
$m = "SELECT * FROM alumnos WHERE Id_Alumno = '$id'";
$modificar = $conecta->query($m);
$row = $modificar->fetch_array(MYSQLI_ASSOC);

//consulta para modificar los datos del Perfil
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $email = $conecta->real_escape_string($_POST['email']);
  $userac = $conecta->real_escape_string($_POST['user1']);
  $pass = md5($_POST['pass']);
  $sql = "UPDATE alumnos SET Correo_U = '$email', Usuario = '$userac', Password = '$pass' WHERE Id_Alumno = '$id'";
  $resultado = $conecta->query($sql);
    header("location:perfil1.php");
}

$conecta->close();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <!-- meta tipos de caracteres especiales en la web -->
    <meta charset="utf-8">
    <!-- optimizar el sitio para moviles -->
    <meta name="MobileOptimizer" content="width"/>
    <!-- optimizacion para cualquier dispositivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- descripción del sitio web -->
    <meta name="description" content="Sistema online para ayuda y guía de estudiantes y futuros estudiantes, gestión del plantel a través de módulos como son:
    registro de alumnos, reporte de alumnos, Recorrido Virtual de las áreas que conforman al plantel, Desarrollo de Juego Interactivos para el aprendizaje de las distintas carreras que ofrece la institución">
    <!-- palabras claves para el seo -->
    <meta name="keywords" content="Sistema Online, Perfil de Usuario, Reportes de Asistencia, Recorrido Virtual, Juegos Interactivos, Guía de estudiantes, Conalep Naucalpan 1, Gestión de planteles, Carreras Técnicas">
   <!-- meta para el autor del sitio  -->
    <meta name="autor" content="Borderline">
    <!-- el de la marca --->
    <meta name="copyright" content="Borderline & Conactive">
    <meta name="robots" content="index/">
    <link rel="stylesheet" type="text/css" href="../css/fontello.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!-- mandamos llamar jquery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Modificar Perfil</title>
  </head>
  <body>
    <div class="container py-5">
             <div class="row py-3">
                  <div class="container">
                    <div class="card">
                      <div class="card-header">
                        <h2 class="text-center"><b>MODIFICA TUS DATOS</b></h2>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Nombre:&nbsp;<?php echo $usu1['Nombre_A']; echo "&nbsp;".$usu1['ApellidoP_A'];
                         echo "&nbsp;".$usu1['ApellidoM_A']; ?> </h5>
                        <!--Inicia formulario-->
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                            <div class="form">
                              <input type="hidden" name="id" id="id" value="<?php echo $row['Id_Alumno'];?>">
                          <div class="form-group">
                            <label for="correo">Cambiar correo electrónico:</label>
                            <input type="email" name="email" class="form-control" id="correo" value="<?php echo $row['Correo_U'];?>">
                          </div> <br>
                          <div class="form-group">
                            <label for="pass">Cambiar contraseña:</label>
                              <input type="password" name="pass" class="form-control" id="pass" value="<?php echo $row['Password'];?>">
                          </div><br>
                          <div class="form-group">
                            <label for="user1">Cambiar nombre de usuario:</label>
                              <input type="text" name="user1" class="form-control" id="user1" value="<?php echo $row['Usuario'];?>">
                          </div>
                            <input type="submit" name="submit" value="Modificar" class="btn btn-outline-danger">
                        </div>
                      </form>
                        <!--Termina formulario-->
                      </div>
                    </div>
                  </div>
              </div>
      </div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
