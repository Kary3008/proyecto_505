  <!--Inicia Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to left, #333333 ,#9933ff, #66ccff )">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" style="color: #ddd" href="project.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="color: #ddd" href="#">Productos</a>
                    </li>
                    <li class="nav-item active" style="list-style: none">
                      <a class="nav-link disabled" style="color: #ddd"  href="#" tabindex="-1" aria-disabled="true">Bienvenid@: <?php echo $usuario; ?></a>
                    </li>
                    <!--Inicia lista despegable-->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="opciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img src="img/dino.png" alt="Imagen de Perfil" style="width: 30px; height:30px; border-radius:50%; ">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="opciones">
                          <a class="dropdown-item" href="main/perfil.php"><span class="icon-cog"></span>Perfil</a>
                          <a class="dropdown-item" href="#">Ayuda</a>
                          <a class="dropdown-item" href="main/cerrar.php">Cerrar sesión</a>
                        </div>
                      </li>
                    <!--Termina lista despegable-->
              </ul>
            </div>
          </nav>
    <!--Termina navbar-->
