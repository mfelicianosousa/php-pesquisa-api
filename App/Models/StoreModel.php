<?php

namespace App\Models;

final class StoreModel
{
    /**
     * Identificador
     *
     * @var [int]
     */
    private $id;
    /**
     * Nome da loja
     *
     * @var [string]
     */
    private $nome;
    /**
     * Telefone da loja
     * 
     * @var [string]
     * 
    */
    private $telefone;
    /**
     * Endereço da loja
     * @var [string]
     * 
    */
    private $endereco;

    /**
     * @return int
     */
    public function getId():int
    {
        return $this->id;
    }

    public function setId(int $id): StoreModel
    {
        $this->id = $id;
        return $this;
    }

    
    /**
     * @return String
     */
    public function getNome():string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return StoreModel
     */
    public function setNome(string $nome): StoreModel
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @param string $telefone
     * @return String
     */
    public function getTelefone():string
    {
        return $this->telefone;
    }

    /**
     * 
     * @param string $telefone
     * @return StoreModel
     */
    public function setTelefone(string $telefone): StoreModel
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }
    /**
     * @param string $endereco
     * @return LojaModel
     */
    public function setEndereco(string $endereco): StoreModel
    {
        $this->endereco = $endereco;
        return $this;
    }
}