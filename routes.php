<?php
 
/*$routes = [
    '/home' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/about' => 'controllers/about.php',
    '/register' => 'controllers/registration/create.php',
    '/notes' => 'controllers/notes/index.php',
    '/note' => 'controllers/notes/show.php',
    '/notes/create'=> 'controllers/notes/create.php',
    '/register-store'=>'controllers/registration/store.php'
];
?>*/

$router->get('/home','controllers/index.php');
$router->get('/contact','controllers/contact.php');
$router->get('/about','controllers/about.php');
$router->get('/note','controllers/notes/show.php');
$router->get('/notes','controllers/notes/index.php')->only('auth');
$router->get('/notes/create','controllers/notes/create.php');
$router->get('/register','controllers/registration/create.php')->only('guest');
$router->post('/register','controllers/registration/store.php');
$router->get('/login','controllers/sessions/create.php')->only('guest');
$router->post('/login','controllers/sessions/store.php')->only('guest');
$router->post('/logout','controllers/sessions/destroy.php')->only('auth');



