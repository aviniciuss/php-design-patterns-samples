<?php
class Connection
{
    private $host = "localhost";
    private $dsn = "mysql:host";
    private $dbname = "php";
    private $user = "root";
    private $password = "1234";
    private static $instance = null;

    private function __construct() {}

    public static function getInstance()
    {
        if(is_null($instance)) return new Connection();
        return $this->instance;
    }

    public function connect()
    {
        echo "connect database";
    }
}
