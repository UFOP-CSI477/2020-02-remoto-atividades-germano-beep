<?php

use App\Models\ModelInterfaceProdutos;

class Produtos implements ModelInterfaceProdutos{

    private $id, $nome, $um;

    public function __construct($id, $nome, $um)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->um = $um;    
        
    }
    public function getAll(){

    }

    public function get($id){

    }


}