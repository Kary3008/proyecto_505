<?php
  //creamos una variable de sesion
  session_start();
  include 'conecta.php';
  $usuario = $_POST['usuario'];
  $password = md5($_POST['password']);
  //consulta para ingresar al sistema y determinar la variable de sesión.
  $q = "SELECT * FROM alumnos WHERE Usuario = '$usuario' and Password = '$password'";
  if ($resultado = $conecta->query($q)) {
    while ($row = $resultado->fetch_array()) {//revisar una linea
      $userok = $row['Usuario'];
      $passwordok = $row['Password'];
    }
    $resultado->close();
  }
   //limpiar cualquier caracter especial real_escape_string
  //  $usuario = $conecta->real_escape_string($_POST['usuario']); //dos variables que guarde el usuario
    //$password = $conecta->real_escape_string(md5($_POST['password']));
    //consulta para extraer la base de datos del alumno
  /*  $consulta = "SELECT * FROM alumnos WHERE Usuario = '$usuario' and Password = '$password'";
    if ($resultado = $conecta->query($consulta)) {
      while ($row = $resultado->fetch_array()) {//revisar una linea
        $userok = $row['Usuario'];
        $passwordok = $row['Password'];
      }
      $resultado->close();
    }
    $conecta->close();
    if (isset($usuario) && isset($password)) {
      if ($usuario == $userok && $password == $passwordok) {
          $_SESSION['login']= TRUE;
          $_SESSION['Usuario']= $usuario;
          header("location:../principal.php");
      }
      else {
        header("location:../session.php");
      }
    }
    else {
      header("location:../session.php");
    }
*/
 ?>
