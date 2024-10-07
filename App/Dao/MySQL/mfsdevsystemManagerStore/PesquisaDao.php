<?php

namespace App\Dao\MySQL\mfsdevsystemManagerStore;

class PesquisaDao extends Connection {

    private $pesquisaDAO;

    public function __construct()
    {
        parent:: __construct();
    }
    
    public function testDB()
    {
        $pesquisas = $this->pdo->query("SELECT * FROM pesquisa_atendimento;")
        ->fetchAll(\PDO::FETCH_ASSOC);
       echo "<pre>";
        foreach($pesquisas as $pesquisa) {
          var_dump($pesquisa);
       }
       die;

    }

}