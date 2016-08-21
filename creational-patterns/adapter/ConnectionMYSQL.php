<?php
class ConnectionMYSQL implements Connection
{
    public function connect($dsn, $database, $user, $password, $options = null)
    {
        echo "<br>connected MYSQL database {$database}";
    }
}
