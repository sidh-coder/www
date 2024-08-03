<?php
class Database{
    public $connection;
    public function __construct($config){
        
        $dsn = 'mysql:'.(http_build_query($config,'',';'));
        $username = 'root';
        $password = 'sidh2017';
        $this->connection = new PDO($dsn, $username, $password);
    }
    public function query($query,$params = []){

        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }
}
