<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Dao\MySQL\mfsdevsystemManagerStore\StoreDao;
use App\Models\StoreModel;

final class StoreController
{
    public function getLojas(Request $request, Response $response, array $args): Response
    {
           
        $storeDao = new StoreDao();
        $stores =$storeDao->getAllLojas();


        $response = $response->withJson($stores);
        
        return $response;

    }

    public function getById(Request $request, Response $response, array $args): Response
    {
       

        $response = $response->withJson([
            "message" => "Hello Stores!"
        ]);
        return $response;
    }

    public function insertLoja(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

       

        $storeDAO = new StoreDAO();
        $store = new StoreModel();
        $store->setNome($data['nome'])
              ->setTelefone($data['telefone'])
              ->setEndereco($data['endereco']);
       // echo "<pre>";
       // var_dump($store);
       // die;
        $storeDAO->insertLoja($store);

        $response = $response->withJson([
            "message" => "Loja inserida com sucesso"
        ]);
        
        return $response;
    }
    public function updateLoja(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $storeDAO = new StoreDAO();
        $store = new StoreModel();
        $store->setId((int)$data['id'])
            ->setNome($data['nome'])
            ->setEndereco($data['endereco'])
            ->setTelefone($data['telefone']);
        $storeDAO->updateLoja($store);

        $response = $response->withJson([
            'message' => 'Loja alterada com sucesso!'
        ]);

        return $response;
    }

    public function deleteLoja(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getQueryParams();

        $storeDAO = new StoreDAO();
        $id = (int)$queryParams['id'];
        $storeDAO->deleteLoja($id);

        $response = $response->withJson([
            'message' => 'Loja excluída com sucesso!'
        ]);

        return $response;
    }


}