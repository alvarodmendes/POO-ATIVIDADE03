<?php

class Fabricante{
    private $nome;
    private $endereco;
    private $documento;
        
    function __construct()
    {
        $this->nome = "Black Eagle!";
        $this->preco = 25;
        $this->documento = " 70045898647 ";
    
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($end){
        $this->endereco = $end;
    }

    public function getDocumento(){
        return $this->documento;
    }
    public function setDocumento($doc){
        $this->documento = $doc;
    }
    
}