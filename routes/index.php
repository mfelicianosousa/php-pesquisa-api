<?php

use function src\{
    slimConfiguration,
    basicAuth
};

use App\Controllers\ExceptionController;
use App\Controllers\StoreController;
use App\Controllers\ProductController;
use App\Controllers\PesquisaController;

$app = new \Slim\App(slimConfiguration());
//=========================================
$app->get('/', function () {
    echo 'Bem vindo! PHP RESTAPI - Requisição ';
});

$app->group('/v1',function() use ($app){
  $app->get('/test-with-version',function(){return "oi v1";});
});

$app->group('/v2',function() use ($app){
    $app->get('/test-with-version',function(){return "Oi v2";});
  });

$app->get('/exception-test',ExceptionController::class.':test');


    // rota de loja
    $app->get('/loja', StoreController::class . ':getLojas');
    $app->post('/loja', StoreController::class . ':insertLoja');
    $app->put('/loja', StoreController::class . ':updateLoja');
    $app->delete('/loja', StoreController::class . ':deleteLoja');
    // rota de produto
    $app->get('/produto', ProductController::class . ':getProducts');
    $app->post('/produto', ProductController::class . ':insertProduto');
    $app->put('/produto', ProductController::class . ':updateProduto');
    $app->delete('/produto', ProductController::class . ':deleteProduto');
    // rota de pesquisa
    $app->get('/pesquisa', PesquisaController::class . ':getPesquisas');
    $app->post('/pesquisa', PesquisaController::class . ':insertPesquisa');   
    //$app->put('/pesquisa', PesquisaController::class . ':updatePesquisa');
    $app->put('/pesquisa/{id}', \App\Controllers\PesquisaController::class . ':updatePesquisa');
    $app->delete('/pesquisa', PesquisaController::class . ':deletePesquisa');
$app->group('',function() use ($app){    
})->add(basicAuth());

//=========================================
$app->run();