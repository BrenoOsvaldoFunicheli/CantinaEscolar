<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FuncionarioModel
 *
 * @author osval
 */
class FuncionarioModel {
    //put your code here
    private $nome;
    private $cpf;
    private $senha;
    
    function __construct($nome='', $cpf='', $senha='') {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->senha = $senha;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    
    function getSenha() {
        return $this->senha;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }




}
