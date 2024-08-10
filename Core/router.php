<?php


require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    function abort($error = 404){
        http_response_code($error);
        require base_path("views/{$error}.php");
        die();
    }
    function routetoController($uri,$routes){
        if(array_key_exists($uri,$routes)){
            require base_path($routes[$uri]);
        }
        else{
            abort();
        }
    }
    routetoController($uri,$routes);

?>