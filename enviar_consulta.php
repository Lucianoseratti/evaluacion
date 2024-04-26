<?php
$nombre_form = $_POST['nombre'];
$contacto_form = $_POST['contacto'];
$email_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];


$cuerpo_mail =
    "Nombre: " . $nombre_form . "\r\n" .
    "contacto: " . $contacto_form . "\r\n" .
    "Email: " . $email_form . "\r\n" .
    "Mensaje: " . $mensaje_form;

    //Admin123%

//$conexion = mysqli_connect("localhost", "root", "", "desarrollo_php_wp") or exit("no se pudo conectar a la base de datos");

$conexion = mysqli_connect("localhost", "id21970197_luciano", "Admin123%", "id21970197_php_wordpress") or exit("no se pudo conectar a la base de datos");

mysqli_query($conexion, " INSERT INTO consultas VALUES (DEFAULT, '$nombre_form','$contacto_form','$email_form','$mensaje_form')");

mysqli_close($conexion);
header("Location:contacto.php?ok");
