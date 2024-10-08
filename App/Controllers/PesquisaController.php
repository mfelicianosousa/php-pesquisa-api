<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Dao\MySQL\mfsdevsystemManagerStore\PesquisaDao;
use App\Models\PesquisaModel;

final class PesquisaController
{ public function getPesquisas(Request $request, Response $response, array $args): Response
    {
       
    
        $pesquisaDao = new PesquisaDao();
        $pesquisas =$pesquisaDao->getAllPesquisas();


        $response = $response->withJson($pesquisas);
        
        return $response;

    }


    public function getById(Request $request, Response $response, array $args): Response
    {
       

        $response = $response->withJson([
            "message" => "Hello Pesquisas!"
        ]);
        return $response;
    }

    public function insertPesquisa(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

       

        $PesquisaDAO = new PesquisaDAO();
        $pesquisa = new PesquisaModel();
        $pesquisa->setHasBandaLarga($data['hasBandaLarga'])
              ->setTelefone($data['telefone'])
              ->setEndereco($data['endereco']);
       // echo "<pre>";
       // var_dump($store);
       // die;
        $PesquisaDAO->insertPesquisa($pesquisa);

        $response = $response->withJson([
            "message" => "Loja inserida com sucesso"
        ]);
        
        return $response;
    }
    public function updatePesquisa(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            "message" => "Put! updatePesquisa"
        ]);

        return $response;
    }

    public function deletePesquisa(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            "message" => "Delete! Delete Pesquisa."
        ]);

        return $response;
    }
}