<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--AOS Scroll-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="jquery.fancybox.min.css">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts: 'Alegreya' -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@500&display=swap" rel="stylesheet">

        <!-- Google Fonts: 'Titillium Web' -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet"> 

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <title>Method POST :: UTN Webmaster_2020</title>
</head>

<body>
    <!--Barra Navegacion-->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #e3f2fd;">
        <p class="titulo">
            <strong>UTN Project Template - 2020</strong>
        </p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link alegreya-nav-1" href="index.php">Inicio</a>
                <a class="nav-link alegreya-nav-2 disabled" href="users_page.php">Algunos Clientes</a>
                <a class="nav-link alegreya-nav-2 disabled" href="#about">Nuestro Alcance</a>
                <a class="nav-link alegreya-nav-2 disabled" href="#valores">Nuestra Trayectoria</a>
                <a class="nav-link alegreya-nav-2 disabled" href="#abonos">Abonos</a>
                <a class="nav-link alegreya-nav-2 disabled" href="#portfolio">Portfolio</a>
                <a class="nav-link alegreya-nav-2 disabled" href="#formulario">Contacto</a>
                <a class="nav-link alegreya-nav-2" href="formlogin.php">Iniciar Sesion</a>
                <a class="nav-link alegreya-nav-3" href="registrarse.php">Registrarse</a>
            </div>
        </div>
    </nav>

    <!--Confirmacion de envìo al usuario-->
    <section id="confirmacion">
        <div class="container bg-light">
            <div class="container-fluid">
               <h2>Genial!!</h2>
               <?php 
            // Mostrar la cantidad de datos que se enviaron:
               $cantDatos = count($_REQUEST);
               echo "Hemos recibido los ".$cantDatos." datos que has enviado en el formulario.<h6> Los presentamos a continuación para que los verifiques: </h6> <hr>";

            // Los datos llegan en un array, lo mostramos con un foreach:
               foreach ($_REQUEST as $datos) {
                echo $datos."<br>";
               }

            // Vuelco los datos llegados en variables que voy creando:
               $nombre = $_REQUEST['nombre'];
               $apellido = $_REQUEST['apellido'];
               $provincia = $_REQUEST['provincia'];
               $ciudad = $_REQUEST['ciudad'];
               $codpostal = $_REQUEST['codigopostal'];
               $email = $_REQUEST['email'];
               $textarea = $_REQUEST['texto'];
               $date = date("d/m/Y h:m");

            // Armamos el correo que me llega a mí por cada persona registrada:
                $destino = 'tomaas.-14@hotmail.com';
                $asunto = 'Desean contactarse contigo desde el sitio UTN_WEB';
                $mensaje = '<html>
                <head>
                    <title>Titulo HTML</title>
                </head>

                <body>
                    <strong>Mensaje de Prueba con HTML</strong>

                    <p>Bienvenido a nuestra Plataforma. Gracias por Registrarse.</p>
                    
                    <h2>Contenido de su Formulario:</h2>
                    <hr>
                    <p>Nombre: '.$nombre.'.</p><p>Apellido: '.$apellido.'.</p><p>Provincia: '.$provincia.'.</p><p>Ciudad: '.$ciudad.'.</p><p>Codigo Postal: '.$codpostal.'.</p><p>Mensaje: '.$textarea.'.</p><p>Enviado el: '.$date.'.</p>
                </body>
                </html>'
                ;

               // Cabeceras para el envio del formato HTML:
                $cabecera  = 'MIME-Version: 1.0' . "\r\n";
                $cabecera.="Content-type:text/html;charset=UTF-8"; // Esto hace que el correo sea leído con el formato HTML. Para enviar un correo HTML, debe establecerse la cabecera Content-type
                
                // Cabeceras del correo que recibe el desarrollador
                $cabecera.= 'To: '.$nombre.'\r\n'.'<'.'From: '.'<'.$email.'>'.'\r\n';
                    /*$encabezado .= $nombre.'<'.$email.'>' . "\r\n";
                    $encabezado .= 'Cc: birthdayarchive@example.com' . "\r\n";
                    $encabezado .= 'Bcc: birthdaycheck@example.com' . "\r\n"; */

            // Ahora si enviamos los datos por correo al desarrollador, con la función PHP:
               @$envioDesarollador = mail($destino,$asunto,$mensaje,$cabecera);
               // $envio es una variable que devuelve PHP con true/false si el correo se acepto o no para el envío.

               if ($envioDesarollador === true) {
                   echo "<h2>Gracias ".$nombre." por contactarnos </h2><p>Nos contactaremos contigo cuanto antes.</p><p>Tu mensaje es muy importante para nosotros</p>";

            // Armamos el correo que me llega a mí por cada persona registrada:
                $asuntoClienteOk = 'Equipo WebMaster - Gracias por escribirnos';
                $mensajeClienteOK = '<html>
                <head>
                    <title>Titulo HTML</title>
                </head>

                <body>
                    <strong>Gracias '.$nombre.' por contactarnos!</strong>

                    <p>Bienvenido/a a nuestra Plataforma, estamos a gusto de recibirle.</p>

                    <h3>Su mensaje es importante para nosotros, nos comunicaremos a la brevedad con usted.</h3>

                    <h4>Adjuntamos su información:</h4>
                    <hr>
                    <p>Nombre: '.$nombre.'.</p><p>Apellido: '.$apellido.'.</p><p>Provincia: '.$provincia.'.</p><p>Ciudad: '.$ciudad.'.</p><p>Codigo Postal: '.$codpostal.'.</p><p>Mensaje: '.$textarea.'.</p><p>Enviado el: '.$date.'.</p>
                </body>
                </html>'
                ;

                 // Cabeceras para el envio del formato HTML:
                    $cabeceraClienteOK  = 'MIME-Version: 1.0' . "\r\n";
                    $cabeceraClienteOK.="Content-type:text/html;charset=UTF-8"; // Esto hace que el correo sea leído con el formato HTML. Para enviar un correo HTML, debe establecerse la cabecera Content-type
                    
                    // Cabeceras del correo que recibe el Cliente felicitado
                    $cabeceraClienteOK.="From: Tomás Ángel Coscarelli <".$destino.">";
                        /*$encabezado .= $nombre.'<'.$email.'>' . "\r\n";
                        $encabezado .= 'Cc: birthdayarchive@example.com' . "\r\n";
                        $encabezado .= 'Bcc: birthdaycheck@example.com' . "\r\n"; */
                   // Luego enviamos acuso de recepción por correo al cliente:
                   $envioClienteOK = mail($email,$asuntoClienteOk,$mensajeClienteOK,$cabeceraClienteOK);

                }else{
                   echo "<p>Estimado/a ".$nombre.", "."al parecer hubo un error al procesar el envío de tu mensaje.</p><h5>Inténtalo nuevamente por favor.</h5><h6>También puedes escribirnos a alguna de las siguientes direcciones de correo:</h6><a href='mailto:".$destino."'>".$destino."</a>";
             
            // Armamos el correo que me llega a mí por cada persona registrada:
                $asuntoClienteErr = 'Equipo WebMaster - No se procesó la solicitud';
                $mensajeClienteErr = '<html>
                <head>
                    <title>Titulo HTML</title>
                </head>

                <body>
                    <strong>Gracias '.$nombre.' por contactarnos!</strong>

                    <p>Lamentamos el inconveniente al registrarte, al parecer hubo un error</p>

                    <h3>Inténtalo nuevamente, no olvide que su mensaje es importante.</h3>
                    <h6>También puedes escribirnos a alguna de las siguientes direcciones de correo:</h6>
                </body>
                </html>'
                ;

                // Cabeceras para el envio del formato HTML:
                $cabeceraClienteErr  = 'MIME-Version: 1.0' . "\r\n";
                $cabeceraClienteErr.="Content-type:text/html;charset=UTF-8"; // Esto hace que el correo sea leído con el formato HTML. Para enviar un correo HTML, debe establecerse la cabecera Content-type
                
                // Cabeceras del correo que recibe el Cliente en concepto de error
                $cabeceraClienteErr.= 'From: Tomás Ángel Coscarelli'.'<'.$destino.'>';
                    /*$encabezado .= $nombre.'<'.$email.'>' . "\r\n";
                    $encabezado .= 'Cc: birthdayarchive@example.com' . "\r\n";
                    $encabezado .= 'Bcc: birthdaycheck@example.com' . "\r\n"; */
                // Luego enviamos acuso de recepción por correo al cliente:
                $envioClienteErr = mail($email,$asuntoClienteErr,$mensajeClienteErr,$cabeceraClienteErr);
                
                /* UTILIZO FUNCION INCLUDE PARA INCLUIR DOCUMENTO PHP QUE CONTIENE EL BLOQUE DE CODIGO QUE SE CONECTA CON EL SERVIDOR */

                    
                include 'conexionServerOnline-Local.php';


                //Consulta a MySQL:
                //Procurar que esté en el mismo orden en el que están creadas las columnas en la tabla.
                $query1="INSERT INTO formwebmaster VALUES('','$nombre','$apellido','$provincia','$ciudad','$codpostal','$email','$textarea','$date')";
            
                $consulta1=mysqli_query($conexion,$query1) or die('Hubo un error en la consulta a la BD');

                //Verificacion de la consulta
                if($consulta1===true){
                    echo "<p>Usuario Cargado Correctamente</p>";
                }else{
                    echo "<p>Error en la carga del Usuario</p>";
                }
                // Cerrar la Conexion
                mysqli_close($conexion);
            }
            ?>
            </div>
        </div>

        <!--Volver al Inicio-->
            <div class="container d-flex justify-content-center">
                <button type="button" class="btn btn-primary w-25"><a class="text-white" href="index.php">Volver al Inicio</a></button>
                <button type="button" class="btn btn-primary w-25"><a class="text-white" href="usuariosRegistrados.php">Mostrar Usuarios</a></button>
            </div>
            <br>
            <hr>

        </section>


    <!-- Footer -->
    <section id="footer">
        <footer class="bg-info">
            <div class="row flex-container">
                <div class="col-6 col-md flex-item">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-light" href="#">Cool stuff</a></li>
                        <li><a class="text-light" href="#">Random feature</a></li>
                        <li><a class="text-light" href="#">Team feature</a></li>
                        <li><a class="text-light" href="#">Stuff for developers</a></li>
                        <li><a class="text-light" href="#">Another one</a></li>
                        <li><a class="text-light" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md flex-item">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-light" href="#">Resource</a></li>
                        <li><a class="text-light" href="#">Resource name</a></li>
                        <li><a class="text-light" href="#">Another resource</a></li>
                        <li><a class="text-light" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md flex-item">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-light" href="#">Team</a></li>
                        <li><a class="text-light" href="#">Locations</a></li>
                        <li><a class="text-light" href="#">Privacy</a></li>
                        <li><a class="text-light" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <footer class="bg-secondary">
            <div class="flex-item">
                <h5 class="copyright">© Copyright <strong>Tomás Ángel Coscarelli. </strong>Todos los derechos reservados</h5>
            </div>
            <div class="flex-item">
                Diseñado con
                <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </footer>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!--AOS Scroll JS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Counter UP -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="jquery.counterup.min.js"></script>
    <!-- FancyBox JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="jquery.fancybox.min.js"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript">
        $('.center').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }]
        });
    </script>

</body>

</html>