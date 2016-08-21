<?php
class Database
{
    private $connection;

    public function setConnectionAdapter(Connection $con)
    {
        $this->connection = $con;
    }

    public function getConnection()
    {
        return $this->connection->connect("localhost","php","root","1234");
    }
}
