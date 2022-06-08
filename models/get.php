<?php

    //$_SERVER['REQUEST_METHOD']

    include_once '../classes/api_abarrotes.php';

    $api = new ApiAbarrotes();

    if ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
    
            if(is_numeric($id)){
                $api->getById($id);
            }else{
                $api->error('El id es incorrecto');
            }
        }else{
            $api->getAll();
            
        }
    }else{
        $api->error('Metodo HTTP incorrecto');
    }
    
?>
