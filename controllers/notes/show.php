<?php 
    use Core\Database;
    $config = require base_path('config.php');
    $db = new Database($config['database']);
    $id = $_GET['id'];
    $note = $db->query('select * from notes where id = :id',[
        'id'=>$id
        ])->findORfail();
    
    authorize($note['user_id'] === 1);

    $heading = "Note";
    require view("notes/show.view.php");
?>