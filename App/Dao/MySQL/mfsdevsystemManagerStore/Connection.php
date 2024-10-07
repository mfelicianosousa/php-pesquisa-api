<?php

namespace App\Dao\MySQL\mfsdevsystemManagerStore;

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

        $host = getenv('DB_MANAGER_STORE_MYSQL_HOST');
        $port = getenv('DB_MANAGER_STORE_MYSQL_PORT');
        $user = getenv('DB_MANAGER_STORE_MYSQL_USER');
        $pass = getenv('DB_MANAGER_STORE_MYSQL_PASSWORD');
        $dbname = getenv('DB_MANAGER_STORE_MYSQL_DBNAME');

        $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";

        $this->pdo = new \PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
       
    }
}