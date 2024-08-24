<?php

use Core\Validator;
use Core\Database;
require base_path('Core/Validator.php');
//require base_path('Core/Database.php');
$email = $_POST['email'];
$password = $_POST['password'];
$config = require base_path('config.php');
$db = new Database($config['database']);
$errors = [];
if(!Validator::email($email)){
    $errors['email'] = 'please provide a valid email address';
}

if(!Validator::string($password,7,255)){
    $errors['password'] = 'please provide a valid password atlest 7 charecters';
}
if(!empty($errors)){
    return view('registration/create.view.php');
}
$user = $db->query('select * from users where email = :email',[
    'email' => $email
])->find();

if($user){
    header('location: /contact');
    exit();
}
else{
    $db->query('insert into users(email,password) values(:email,:password)',[
        'email'=>$email,
        'password'=>$password
    ]);
    $_SESSION['user'] =[
        'email'=>$email
    ];
    header('location: /home');
    exit();
}