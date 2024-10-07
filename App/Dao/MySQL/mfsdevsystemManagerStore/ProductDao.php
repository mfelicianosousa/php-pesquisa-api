<?php

namespace App\Dao\MySQL\mfsdevsystemManagerStore;

class ProductDao extends Connection {

    private $productDAO;

    public function __construct()
    {
        parent:: __construct();
    }
    
    public function testDB()
    {
        $produtos = $this->pdo->query("SELECT * FROM produtos;")
        ->fetchAll(\PDO::FETCH_ASSOC);
       echo "<pre>";
        foreach($produtos as $produto) {
          var_dump($produto);
       }
       die;

    }

}