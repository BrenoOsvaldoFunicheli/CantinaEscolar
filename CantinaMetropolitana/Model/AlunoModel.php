<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'DAO/Conexao.php';


/**
 * Description of Aluno
 *
 * @author osval
 */
class AlunoModel {
    //put your code here
    private $nome;
    private $ra;
    private $senha;
    private $nomeResp;
    private $telResp;
    private $emailResp;
      
    function __construct($nome='', $ra='', $senha='', $nomeResp='', $telResp='', $emailResp='') {
        $this->nome = $nome;
        $this->ra = $ra;
        $this->senha = $senha;
        $this->nomeResp = $nomeResp;
        $this->telResp = $telResp;
        $this->emailResp = $emailResp;
    }

    function getNome() {
        return $this->nome;
    }

    function getRa() {
        return $this->ra;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNomeResp() {
        return $this->nomeResp;
    }

    function getTelResp() {
        return $this->telResp;
    }

    function getEmailResp() {
        return $this->emailResp;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setRa($ra) {
        $this->ra = $ra;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNomeResp($nomeResp) {
        $this->nomeResp = $nomeResp;
    }

    function setTelResp($telResp) {
        $this->telResp = $telResp;
    }

    function setEmailResp($emailResp) {
        $this->emailResp = $emailResp;
    }


}
