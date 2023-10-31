<?php

function router()
{       
    $request = $_SERVER["REQUEST_METHOD"];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $routes = routes()[$request];   
    $matchedUri = matchUriInRoutes($uri, $routes);
    $request = $_SERVER["REQUEST_METHOD"];
    
    if(!$matchedUri){
        $matchedUri = matchDynamicUriInRouters($uri, $routes);
    }   

    if($matchedUri){
        return controller($matchedUri);
        
    }

    throw new Exception("A rota {$uri} não foi encontrada");
}

// Pegar as URIs dinâmicas.
function matchDynamicUriInRouters($uri, $routes){
    return array_filter(
        $routes,
        function ($value) use($uri)
        {
            $regex = str_replace('/', '\/', ltrim($value, '/'));
            return preg_match("/^$regex$/", ltrim($uri, '/'));
        }, ARRAY_FILTER_USE_KEY);
}

// Pegar as URIs estáticas.
function matchUriInRoutes($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        return [$uri => $routes[$uri]];
    }
    return [];
}