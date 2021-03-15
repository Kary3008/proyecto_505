
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main2.css">
    <link rel="stylesheet" type="text/css" href="../css/fontello.css">
    <title>Perfil de Usuario</title>
  </head>
  <body>
    <!--Inicia Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to left, #333333 ,#9933ff, #66ccff )">
          <a href="#"><img src="../img/img1.png" alt="LogoE" style="width: 80px; height: 60px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-md-auto">
              <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="background-color: rgb(255, 255, 255); opacity: 0.3;">
            <li class="breadcrumb-item"><a href="../principal.php">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perfil de Usuario</li>
          </ol>
        </nav>
        </div>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" style="color: #ddd" href="../principal.php">Inicio <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color: #ddd" href="#">Conocenos</a>
                      </li>
                      <li class="nav-item active" style="list-style: none">
                        <a class="nav-link disabled" style="color: #ddd"  href="#" tabindex="-1" aria-disabled="true">Bienvenid@</a>
                      </li>
                      <!--Inicia lista despegable-->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-white" href="#" id="opciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../img/dino.png" alt="Perfil" style="width: 30px; height:30px; border-radius:50%; ">
                          </a>
                          <div class="dropdown-menu" aria-labelledby="opciones">
                            <a class="dropdown-item" href="#"><span class="icon-cog"></span>Perfil</a>
                            <a class="dropdown-item" href="#">Ayuda</a>
                            <a class="dropdown-item" href="cerrar.php">Cerrar sesión</a>
                          </div>
                        </li>
                      <!--Termina lista despegable-->
                </ul>
              </div>
            </nav>
      <!--Termina navbar-->
<br>
<br>
        <h1 class="text-center">Perfil de Usuario</h1>
        <!---->
        <!--Inicia contenido-->
        <div class="container" style="margin-top: 50px; background: #ccccff" >
        <div class="container">
        	<h4 align= center>Usuario</h4>
        	<div class="card"> <br>
            <div class="row py-2 text-center">
                <div class="col-sm-10 col-md-10 col-lg-12">
                  <img src="../img/dino.png" alt="Imagen perfil de usuario" style="width:250px; background: #3366ff" class="rounded-circle shadow-lg p-2 mb-3 rounded">
                </div>
            </div><hr>
            <!--Foto de perfil-->
            <!--Inicia Datos del usuario-->
            <h3 class="text-center">Nombre, ApellidoP, ApellidoM</h3>
            <div class="card">
              <div class="container">
                <div class="container">
            <div class="row py-4">
                <div class="col col-sm-7 col-md-7 col-lg-7">
                    <div class="card shadow-lg p-3 mb-5 rounded">
                          <div class="card-header text-light" style="background: #6666ff;"><span class="icon-tags"></span> Datos de Perfil</div>
                          <div class="card-body">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><b><span class="icon-user"></span>Correo</li>
                              <li class="list-group-item"><b><span class="#"></span> Fecha de Nacimiento:</li>
                              <li class="list-group-item"><b><span class="icon"></span> Genero:</li>
                              <li class="list-group-item"><b><span class="icon-sitemap"></span> Tipo de Usuario:</li>
                              <li class="list-group-item"><b><span class="icon-map-signs"></span> Plantel:</li>
                              <li class="list-group-item"><b><span class="icon-map-o"></span> Grupo:</li>
                              <li class="list-group-item"><b><span class="icon-envelope"></span> Carrera:</li>
                            </ul>
                          </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-lg p-3 mb-5 rounded">
                        <div class="card-header text-light" style="background: #6666ff;"><span class="icon-cogs"></span>¿Qué desea modificar?</div>
                        <div class="card-body">
                           <h5 class="text-muted text-center">Nombre de Usuario : </h5><hr>
                           <a href="#" class="btn btn-outline-dark btn-sm btn-block"><span class="icon-pencil"></span> Cambiar foto de perfil</a>
                           <a href="#" class="btn btn-outline-dark btn-sm btn-block"><span class="icon-pencil"></span> Cambiar nombre de usuario</a>
                           <a href="#" class="btn btn-outline-dark btn-sm btn-block"><span class="icon-pencil"></span> Cambiar correo electrónico</a>
                           <a href="#" class="btn btn-outline-dark btn-sm btn-block"><span class="icon-pencil"></span> Cambiar la contraseña</a>
                           <a href="#" class="btn btn-outline-info btn-sm btn-block" onclick="imprimir('perfil');"><span class="icon-print"></span> Imprimir Perfil</a>
                            <hr><br>

                      </div>
                    </div>
                </div>
            </div>
            <!--Termina Datos de perfil-->
            </div>

          </div>
        </div>
        	</div>
        </div>
        <!--Termina contenido-->
        		<div class="container">
        				<p class="text-center py-2">
        					<span class="icon-copyright"></span><img src="../img/logo.png" alt="Logotipo Borderline" class="logo" style="width: 105px;
        					height: 40px">
        				</p>
        </div>
        </div>
        <!---->
  </body>
</html>
