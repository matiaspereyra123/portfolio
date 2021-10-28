<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico"/>


    <title>Document</title>
</head>
<body id="contacto">
    <header>
    <nav class="navbar navbar-expand-md mb-4">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link px-4 py-1" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-1" href="sobre-mi.php">Sobre mí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-1 active" href="contacto.php">Contacto</a>
                </li>
            </ul>
            <div class="d-inline">
                <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
            </div>
        </div>
        </div>
      </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Contacto</h1>
            </div>
        </div>  
        <div class="row">
            <div class="col-sm-6 col-12">
                Te invito a que me contactes enviadome un mensaje por whatsapp
            </div>
            <div class="col-sm-6 col-12">
                    <form action="" method="post">
                        <div class="mb-3">
                            <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" class="form-control shadow border-white"> 
                        </div>
                        <div class="mb-3">
                            <input type="text" id="txtCorreo" name="txtCorreo" placeholder="Correo" class="form-control shadow border-white">
                        </div>
                        <div class="mb-3">
                            <input type="text" id="txtTelefono" name="txtTelefono" placeholder="Telefono/Whatsapp"class="form-control shadow border-white">
                        </div>
                        <div class="mb-3">
                            <textarea id="txtMensaje" name="txtMensaje" placeholder="Escribe aqui tu mensaje..."class="form-control shadow border-white"></textarea>
                        </div>
                        <div>
                            <button id="btnEnviar" name="btnEnviar" class="btn px-4">ENVIAR</button>
                        </div>
                        
                    </form>
            </div>
        </div>
    </main>
    <footer class="container">
      <div class="row mt-5">
        <div class="col-12 col-sm-3 text-center text-sm-start">
          <a href="http://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/raulmatiaspereyra/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
          Sponsor <a href="http://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
        </div>
        <div class="col-12 col-sm-3 text-sm-start pt-2 p-sm-0">
          <a href="maito:raulmatiaspereyra@gmail.com">raulmatiaspereyra@gmail.com</a>
        </div>
      </div>
    </footer>
      <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541164033027" target="_blank"
        title="Enviar mensaje directo Whatsapp"><i class="fab fa-whatsapp"></i></a>
      </div>
  

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>