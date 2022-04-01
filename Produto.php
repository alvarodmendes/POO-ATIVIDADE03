<?php

class Produto{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
 
    function __construct()
    {
        $this->estoque = 122;
        $this->preco = 25;
        $this->descricao = "o melhor teclado do Brasil, presente em todas as casas gamers";
    
    }
    public function AumentarEstoque(int $num1){
        // função utilizada para determinar o limite máximo do estoque. 
        if(($this->estoque+$num1 > 250)){
            echo ("Algo deu errado! O valor informado é muito alto! ");
        }else{
            $this->estoque += $num1;
        }
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descr){
        $this->descricao = $descr;
    }
    
    public function getFabricante(){
        return $this->fabricante;
    }

    public function setFabricante($fabri){
        $this->fabricante = $fabri;

    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function setEstoque($est){
        $this->estoque = $est;
    }

    public function getPreco(){
        return $this->preco;
    }
    
    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function DiminuirEstoque($num2){
        // função utilizada para não ter estoque negativo.
        if ($num2 <= 0){
            echo ("Algo deu errado! Não é permitido diminuir o estoque com o valor 0. ");
        }
        elseif ($num2 > $this->estoque){
            echo("Algo deu errado! Não é permitido diminuir o estoque além da quantidade já existente! ");
        }else{
            $this->estoque -= $num2;
        }
    }

    public function ReajustarPreco($num3){
        // função utilizada para não haver reajuste de preço menor ou igual a 0 e maior que 150%
        if($num3 <= 0){
            echo("Algo deu errado! Não é permitido reajustar o valor desejado a 0.");
        }elseif ($num3 >= 100){
            echo("Algo deu errado! Não é permitido reajustar o valor em mais de 100% ");
        }else{
        $this->preco += ($num3*$this->preco)/100;
        }
    }

}   
