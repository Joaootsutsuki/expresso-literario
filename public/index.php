<?php

session_start();
require dirname(__FILE__, 2)."/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();

try{

    $data = router();
    
    if(!file_exists(VIEWS.$data['view'])){
        throw new Exception("A view {$data['view']} não existe.");
    }
    if(!isset($data['view'])){
        throw new Exception('O índice view está faltando.');
    }
    if(!isset($data['data'])){
        throw new Exception('O índice data está faltando.');
    }

    extract($data['data']);

    //Varialvel $view com o nome do arquivo a ser renderizado
    $view = $data['view'];
    
    require VIEWS.'master.php';

}catch(Exception $e){
    var_dump($e->getMessage()); 
}


    