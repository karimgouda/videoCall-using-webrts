<?php

namespace MyApp;

class DB
{
    public function connect()
    {
        try {
            $db = new \PDO("mysql:host=127.0.0.1;dbname=vchat", "root", "");
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}