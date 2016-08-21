<?php
interface Connection
{
    public function connect($dsn, $database, $user, $password, $options = null);
}
