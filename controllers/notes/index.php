<?php 
    use Core\Database;
    $config = require base_path('config.php');
    $db = new Database($config['database']);
    $notes = $db->query('select * from notes where user_id = 1',)->get();
    //dd($notes);

    $heading = "My Notes";
    require view("notes/index.view.php");
?>
