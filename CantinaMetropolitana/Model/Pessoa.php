<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author osval
 */
class Pessoa {
    //put your code here
    private $nome;
    private $senha;
    
    function __construct($nome='', $senha='') {
        $this->nome = $nome;
        $this->senha = $senha;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }



}
