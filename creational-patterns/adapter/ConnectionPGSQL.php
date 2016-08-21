<?php
class ConnectionPGSQL implements Connection
{
    public function connect($dsn, $database, $user, $password, $options = null)
    {
        echo "<br>connected PGSQL database {$database}";
    }
}
