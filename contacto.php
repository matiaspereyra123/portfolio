<? php $contacto; ?>

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
<?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
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
    <?php include_once("footer.php"); ?>
  

</body>

</html>