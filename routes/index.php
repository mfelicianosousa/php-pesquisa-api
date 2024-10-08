<?php

use function src\slimConfiguration;

use App\Controllers\StoreController;
use App\Controllers\ProductController;
use App\Controllers\PesquisaController;


$app = new \Slim\App(slimConfiguration());
//=========================================
$app->get('/', function () {
    echo 'Bem vindo! PHP RESTAPI - Requisição ';
});
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
$app->put('/pesquisa', PesquisaController::class . ':updatePesquisa');
$app->delete('/pesquisa', PesquisaController::class . ':deletePesquisa');


//=========================================
$app->run();