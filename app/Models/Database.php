<?php

namespace App\Models;

use \PDO;
use \PDOException;

class Database
{
    private PDO $db;

    public function __construct(private string $dbName = "mydb")
    {
        $this->db = new PDO('sqlite:'.$this->dbName.'.sqlite3');
    }

}
