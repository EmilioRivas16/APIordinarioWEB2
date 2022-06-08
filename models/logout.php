<?php

    include_once '../classes/api_abarrotes.php';

    $api = new ApiAbarrotes();

    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        $api->logout(); 
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
    <title>Create</title>
</head>
<br><br><br><br><br>
<body>
        <a href="../index">Regresar al index</a>
</body>
</html>