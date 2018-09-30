<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProdutoModel
 *
 * @author osval
 */
class ProdutoModel {
    //put your code here
    private $nome;
    private $preco;
    
    function __construct($nome='', $preco='') {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    function getNome() {
        return $this->nome;
    }

    function getPreco() {
        return $this->preco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }


    
}
