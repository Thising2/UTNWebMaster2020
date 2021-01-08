<?php

/*Conexion a MySQL*/

//Conexion >>
    //mysqli_connect(servidorMySQL,usuarioMySQL,password)
    //En PhpMyAdmin está en la parte "cuentas de usuarios"
    /* Para servidor local de mi pc, con XAMPP... */
    /*
    $servidor="localhost"; localhost
    $user="root"; id15440808_root
    $password=""; Polopolo.8152947
    $bd="test"; id15440808_utnwebmaster2020
    */

    /* Para servidor local de 000WEBHOST... */
/*
    $servidor="localhost";
    $user="id15440808_root";
    $password="Polopolo.8152947";
    $bd="id15440808_utnwebmaster2020";
*/

    /* Para servidor local de mi PC... */
    $servidor="localhost";
    $user="root";
    $password='';
    $bd="test";

    //@ antes de la funcion, oculta el mensaje de error por default de PHP.
    $conexion=mysqli_connect($servidor,$user,$password,$bd) or die("Hubo un error en la conexion con la BD".mysqli_error());

?>