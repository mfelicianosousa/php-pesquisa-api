<?php

namespace App\Dao\MySQL\mfsdevsystemManagerStore;

class StoreDao extends Connection {

    private $lojasDAO;

    public function __construct()
    {
        parent:: __construct();
    }
    
    public function testDB()
    {
        $lojas = $this->pdo->query("SELECT * FROM lojas;")
        ->fetchAll(\PDO::FETCH_ASSOC);
       echo "<pre>";
        foreach($lojas as $loja) {
          var_dump($loja);
       }
       die;

    }

}