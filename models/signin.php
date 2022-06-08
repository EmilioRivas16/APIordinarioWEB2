<?php
    include_once '../classes/api_abarrotes.php';

    $api = new ApiAbarrotes();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['nombre']) && isset($_POST['username']) && isset($_POST['password'])){
            $nombre = $_POST['nombre'];
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            $api->crearCuenta($nombre, $username, $password);    
        }
    }else{
        $api->error('Metodo HTTP incorrecto');
    } 
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
</head>
<br><br><br><br><br>
<body>
        <a href="../crearcuenta">Reintentar crear cuenta</a>
        <br><br><br><br><br>
        <a href="../formulario">Ir al formulario</a>
</body>
</html>









