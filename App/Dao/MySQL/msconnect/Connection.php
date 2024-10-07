<?php

namespace App\Dao\MySQL\msconnect;

abstract class Connection
{
    /**
     * Connection Database
     *
     * @var \PDO
     */
    protected $pdo;


    public function __construct()
    {
        $driver = getenv('DB_MSGESTOR_MYSQL_DRIVER'); 
        $host   = getenv('DB_MSGESTOR_MYSQL_HOST');
        $port   = getenv('DB_MSGESTOR_MYSQL_PORT');
        $user   = getenv('DB_MSGESTOR_MYSQL_USERNAME');
        $pass   = getenv('DB_MSGESTOR_MYSQL_PASSWORD');
        $dbname = getenv('DB_MSGESTOR_MYSQL_DB_NAME');

        $dsn = "{$driver}:host={$host};dbname={$dbname};port={$port}";

        $this->pdo = new \PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
           \PDO::ATTR_ERRMODE,
           \PDO::ERRMODE_EXCEPTION
        );  
    }
}