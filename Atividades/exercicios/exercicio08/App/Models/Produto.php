<?php

namespace App\Models;

class Produto implements ModelInterfaceProduto{

    private  $nome, $um;

    public function __construct($nome, $um)
    {
        
        $this->nome = $nome;
        $this->um = $um;    
        
    }
    public function getAll(){

    }

    public function get($id){

    }


}