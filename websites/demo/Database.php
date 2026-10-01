<?php

//Connect to the database, and execute a query

class Database
{
    public $connection;
    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1;port=3306;dbname=php_videos;charset=utf8mb4";

        $this->connection = new PDO($dsn, 'root', '1234');
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}