<?php 
    use Core\Validator;
    use Core\Database;
    require base_path('Core/Validator.php');
    $config = require base_path('config.php');
    $db = new Database($config['database']);
    $heading = "Create your Note";
    if($_SERVER['REQUEST_METHOD']==='POST'){
        
    $errors = [];
    $validator = new Validator;
    if(! $validator->string($_POST['body'],1,1000)){
        $errors['body'] = 'A body is required, which is less than 1000 char';
    }
    if(empty($errors)){
        $db->query('INSERT INTO notes (body, user_id) VALUES(:body, :user_id)',[
            'body'=>$_POST['body'],
            'user_id'=>1
            ]);
    }
}
    require view("notes/create.view.php");
?>