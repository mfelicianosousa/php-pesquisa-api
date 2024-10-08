<?php

namespace App\Dao\MySQL\mfsdevsystemManagerStore;

use App\Models\StoreModel;

class StoreDao extends Connection {

    private $lojasDAO;

    public function __construct()
    {
        parent:: __construct();
    }
    
    public function getAllLojas():array
    {
       $lojas = $this->pdo
           ->query("SELECT id, nome, telefone, endereco
                      FROM lojas 
                      WHERE isdeleted = 0;")
           ->fetchAll(\PDO::FETCH_ASSOC);

       return $lojas;
    }

    public function insertLoja(StoreModel $store): void
    {
       // echo "<pre>";
       //var_dump($store);
      // die;

        $statement = $this->pdo
           ->prepare("INSERT INTO lojas VALUES (
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

    public function updateLoja(StoreModel $store): void
    {
        $statement = $this->pdo
            ->prepare('UPDATE lojas SET
                    nome = :nome,
                    telefone = :telefone,
                    endereco = :endereco
                WHERE
                    id = :id
            ;');
        $statement->execute([
            'nome' => $store->getNome(),
            'telefone' => $store->getTelefone(),
            'endereco' => $store->getEndereco(),
            'id' => $store->getId()
        ]);
    }

    public function deleteLoja(int $id): void
    {
        
        $statement = $this->pdo
           ->prepare("UPDATE lojas 
               SET isdeleted = 1 
               WHERE :id
           );");
           $statement->execute([
            'id' => $id
           ]);

           // Desabilita todos os produtos pertencentes a loja
           $statement = $this->pdo
           ->prepare("UPDATE produtos 
               SET isdeleted = 1 
               WHERE loja_id = :id
           );");
           $statement->execute([
            'id' => $id
           ]);

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