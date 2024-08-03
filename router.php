<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $routes = [
        '/' => 'controllers/index.php',
        '/contact' => 'controllers/contact.php',
        '/about' => 'controllers/about.php',
        '/notes' => 'controllers/notes.php',
        '/note' => 'controllers/note.php'
    ];
    function abort($error = 404){
        http_response_code($error);
        require "views/{$error}.php";
        die();
    }
    function routetoController($uri,$routes){
        if(array_key_exists($uri,$routes)){
            require $routes[$uri];
        }
        else{
            abort();
        }
    }
    routetoController($uri,$routes);

?>