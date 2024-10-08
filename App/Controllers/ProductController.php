<?php

namespace App\Controllers;


use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Dao\MySQL\mfsdevsystemManagerStore\ProductDao;

final class ProductController
{
    public function getProducts(Request $request, Response $response, array $args): Response
    {
       
        $productsDao = new ProductDao();
        $products =$productsDao->getAllProducts();


        $response = $response->withJson($products);
        
        return $response;

    }


    public function getById(Request $request, Response $response, array $args): Response
    {
       
     
        //$storesDao = new StoreDao();
        //$storesDao->testDB();
        
        $response = $response->withJson([
            "message" => "Hello Stores!"
        ]);
        return $response;
    }

    public function insertProduto(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            "message" => "Post Stores! Insert Produto "
        ]);

        return $response;
    }
    public function updateProduto(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            "message" => "Put Store! updateProduto"
        ]);

        return $response;
    }

    public function deleteProduto(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
            "message" => "Delete Store! delete Produto"
        ]);

        return $response;
    }


}