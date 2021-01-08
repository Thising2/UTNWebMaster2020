<?php

session_start();

//Elimino todas las $_SESSION
session_destroy();

//Delay en Segundos de la ejecución del script.
sleep(2);

//redirecciono a otro lado

header('Location:users_page.php');
?>