<?php
    include_once '../classes/api_abarrotes.php';

    $api = new ApiAbarrotes();

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            $api->login($username, $password);    
            
            //header('Location: formulario.php');
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
    <title>Login</title>
</head>
<br><br><br><br><br>
<body>
        <a href="../formulario">Ir al formulario</a>
        <br><br><br><br><br>
        <a href="../index">Reintentar inicio de sesión</a>
</body>
</html>
