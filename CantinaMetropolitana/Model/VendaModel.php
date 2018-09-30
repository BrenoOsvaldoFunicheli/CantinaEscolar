<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VendaModel
 *
 * @author osval
 */
include_once 'AlunoModel.php';
include_once 'ProdutoModel.php';

class VendaModel {
    //put your code here
    private $aluno;
    private $data;
    private $produto;
    
    function __construct($aluno='', $data='', $produto='') {
        $this->aluno = $aluno;
        $this->data = $data;
        $this->produto = $produto;
    }
    
    function getAluno() {
        return $this->aluno;
    }

    function getData() {
        return $this->data;
    }

    function getProduto() {
        return $this->produto;
    }

    function setAluno($aluno) {
        $this->aluno = $aluno;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setProduto($produto) {
        $this->produto = $produto;
    }


 
}
