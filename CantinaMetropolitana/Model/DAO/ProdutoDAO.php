<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProdutoDAO
 *
 * @author osval
 */
include_once 'AbstractFunctionDAO.php';
include_once 'Conexao.php';

class ProdutoDAO implements AbstractFunctionDAO {

    //put your code here
    private $produto;
    private $db;

    function __construct($produto='') {
        $this->produto = $produto;
        $con = new Conexao();
        $this->db = $con->getConnection();
    }

    public function delete() {
        
    }

    public function getAll() {
        $sql = "SELECT * FROM tb_vendas";

        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }

    public function insert() {
        $sql = "INSERT INTO tb_produtos (nome, preco) VALUES (?, ?)";


        $stmt = $this->db->prepare($sql);

        $values1 = $this->produto->getNome();
        $values2 = $this->produto->getPreco();

        $stmt->bindParam(1, $values1);
        $stmt->bindParam(2, $values2);

        $stmt->execute();
    }

    public function search() {
        
    }

    public function update() {
        
    }
    public function searchWith($palavra){
        $sql = "SELECT * FROM tb_produtos WHERE tb_produtos.nome like :nome";

        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(":nome", "%".$palavra."%");
        
        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }
}
