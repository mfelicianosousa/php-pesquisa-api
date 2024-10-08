<?php

namespace App\Model;


final class ProductModel
{
    /**
     * Identificador único do produto
     * @var [int]
     */
    private $id;

    /**
     * Identificador da loja no produto
     * @var [int]
     */
    private $loja_id;

    /**
     * Nome do produto
     * @var [string]
     */
    private $name;
    /**
     * Preço do produto
     * @var [float]
    */
    private $preco;

    /**
     * Quantidade
     * @var [int]
    */
    private $quantidade;

    /**
     * @return int
     */
    public function getId():int
    {
        return $this->id;
    }

     /**
     * @return int
     */
    public function getLojaId():int
    {
        return $this->loja_id;
    }

    /**
    * @return String
    */
    public function getName():string
    {
        return $this->name;
    }
    /**
     * @param float $valor
     * @return float
     */
    public function getValor():float
    {
        return $this->valor;
    }
     /**
     * @param int $loja_id
     * @return ProductModel;
     */
    public function setLojaId(int $loja_id): ProductModel
    {
        $this-> $loja_id;
    }

    /**
     * @param string $name
     * @return ProductModel
     */
    public function setName(string $name): ProductModel
    {
        $this-> $name;
    }



    /**
     * 
     * @param float $valor
     * @return ProductModel
     */
    public function setValor(int $valor): ProductModel
    {
        $this-> $valor;
    }

    /**
     * @param int $quantidade
     * 
     */
    public function getQuantidade():int
    {
        return $this->quantidade;
    }

    /**
     * @param int $quantidade
     * @return ProductModel
     */
    public function setQuantidade(int $quantidade): ProductModel
    {
        $this-> $quantidade;
    }


   
}