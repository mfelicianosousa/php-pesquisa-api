<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Dao\MySQL\mfsdevsystemManagerStore\StoreDao;


final class StoreController
{
    public function getLojas(Request $request, Response $response, array $args): Response
    {
       
     
       // $storeDao = new StoreDao();
       // $storeDao->testDB();

        $response = $response->withJson([
            "message" => "getLojas: Hello Store!"
        ]);
        
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
        $response = $response->withJson([
            "message" => "Post Stores! insertLojas"
        ]);

        return $response;
    }
    public function updateLoja(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            "message" => "Put Store! updateLoja"
        ]);

        return $response;
    }

    public function deleteLoja(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            "message" => "Delete Store! DeleteLoja."
        ]);

        return $response;
    }


}