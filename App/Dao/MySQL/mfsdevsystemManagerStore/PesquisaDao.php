<?php

namespace App\Dao\MySQL\mfsdevsystemManagerStore;
use App\Models\PesquisaModel;

class PesquisaDao extends Connection {

    private $pesquisaDAO;

    public function __construct()
    {
        parent:: __construct();
    }
    
    public function getAllPesquisas():array
    {
       $pesquisas = $this->pdo
           ->query("SELECT * FROM pesquisa_atendimento;")
           ->fetchAll(\PDO::FETCH_ASSOC);

       return $pesquisas;
    }

   
    public function insertPesquisa(PesquisaModel $pesquisa): void
    {
       // echo "<pre>
       // var_dump($store);
       // die;

        $statement = $this->pdo
           ->prepare("INSERT INTO pesquisa_atendimento VALUES (
              null,
              :nome,
              :telefone,
              :endereco,
              :isdeleted
           );");
           $statement->execute([
            'nome' => $store->getNome(),
            'telefone' => $store->getTelefone(),
            'endereco' => $store->getEndereco(),
            'isdeleted' => 0
           ]);

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