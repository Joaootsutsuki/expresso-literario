<?php

function controller($matchedUri)
{
    [$controller, $method] = explode('@',array_values($matchedUri)[0]);
    $controllerPath = CONTROLLER_PATH.$controller;
    
    if(!class_exists($controllerPath)){
        throw new Exception("A classe {$controller} não existe.");
    }
    
    $controllerInstance = new $controllerPath;

    if(!method_exists($controllerInstance, $method)){
        throw new Exception("O metodo {$method} não existe no controller {$controller}");
    }
    
    $controller  = $controllerInstance->$method();

    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        die();
    }

    return $controller;
}