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
    <title>Panel de Usuarios :: UTN Webmaster_2020</title>
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
                <a class="nav-link alegreya-nav-1 " href="index.php">Inicio</a>
                <a class="nav-link alegreya-nav-2 disabled" href="users_page.php">Algunos Clientes</a>
                <a class="nav-link alegreya-nav-2 disabled" href="#about">Nuestro Alcance</a>
                <a class="nav-link alegreya-nav-2 disabled" href="#valores">Nuestra Trayectoria</a>
                <a class="nav-link alegreya-nav-2 disabled" href="#abonos">Abonos</a>
                <a class="nav-link alegreya-nav-2 disabled" href="#portfolio">Portfolio</a>
                <a class="nav-link alegreya-nav-2 disabled" href="#formulario">Contacto</a>
            </div>
        </div>
    </nav>

    <!--Confirmacion de envìo al usuario-->
    <section id="confirmacion">
        <div class="container bg-light">
            <div class="container-fluid"> 

               <?php 
            session_start();
            echo count ($_SESSION);

           /* echo count($_session);*/
/*
            $nombre=null; // No esta seteada.
            $nombre="Tomas"; // Esta seteada.

            if (isset($nombre) ) {
                echo "Esta seteada con un valor";
            }else {
            echo "No está seteada con ningun valor";
        }
*/
            if (isset ($_SESSION['nombre']) && isset($_SESSION['usuario'])) {

                echo "<div class='dataUser bg-dark text-white'>";
                echo "<p class='text-right'>";
                echo "Hola, ".$_SESSION['usuario']." / <a href='cerrar_sesion.php'>cerrar sesión</a></p></div>";
             
                echo "<h2 class='text-success'>Te mostramos algunos de nuestros clientes ya registrados en nuestro sitio</h2>";
                //Para que esta página con los usuarios, sólo puedan veerla quienes están logueados y registrados en el sistema, se necesitará lo siguiente:

                //Session -> nombreUsuario, password, email.


            include 'conexionServerOnline-Local.php';

                //Consulta a MySQL con SELECT:

            $query="SELECT nombre,apellido,email FROM altausuarios";
              
            $consulta=mysqli_query($conexion,$query) or die('Error de consulta con la Base de Datos');

                // Evaluar la cantidad de resultados:
            $cantidad=mysqli_num_rows($consulta);
            echo "<hr><h4 class='text-danger'>".$cantidad." de nuestros clientes ya disfrutan de nuestros servicios:</h4><br>";

            if($cantidad==0){
                echo "No hay Usuarios Registrados.";
            }else{
                /* Procesar los datos recibidos con array
                mysqli_fetch_rows() -> devuelve array numerico 
                mysqli_fetch_assoc() -> devuelve array asociativo
                mysqli_fetch_array() -> devuelve mezcla de ambos */
                
            // EJEMPLO CON for:

             /*   for ($i=0; $i < $cantidad ; $i++) { 
                    //Ahora $datos es un array... entonces:
                    $datos = mysqli_fetch_array($consulta);
                    echo $datos[0].' ';
                    echo $datos[1].' ';
                    echo $datos[2].' ';
                    echo $datos[3].' <hr>';
                } */

            // EJEMPLO CON while:

                while ( $datos = mysqli_fetch_array($consulta)) {
                    echo $datos[0].' ';
                    echo $datos[1].' ';
                    echo $datos[2].' <hr>';
                }
            }
                // Cerrar la Conexion
                mysqli_close($conexion);
            
            }else{

                //Cuando la sesion no están seteadas... (no iniciamos sesión)
                echo "<p class='text-info'>El contenido de esta sección sólo está disponible cuando inicies sesión.";
                echo "<p><a class='btn btn-warning' href='form_login.php'>Login</a></p>";
                echo "<p><a class='btn btn-danger' href='form_register.php'>Haz click aquí si aún no estás registrado</a></p>";
            }
            
            
            ?>

            <h3 class="text-success mb-20">Gracias por sumarte a nosotros!!</h3>

            </div>
        </div>

        <!--Volver al Inicio-->
            <div class="container d-flex justify-content-center">
            <button type="button" class="btn btn-primary w-50"><a class="text-white" href="index.php">Volver al Inicio</a></button>
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