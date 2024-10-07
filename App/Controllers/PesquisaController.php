<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Dao\MySQL\mfsdevsystemManagerStore\PesquisaDao;


final class PesquisaController
{
    public function getPesquisas(Request $request, Response $response, array $args): Response
    {
       
     
       // $storeDao = new StoreDao();
       // $storeDao->testDB();

        $response = $response->withJson([
            "message" => "getPesquisas: Hello Pesquisas!"
        ]);
        
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
        $response = $response->withJson([
            "message" => "Post! insertPesquisa"
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