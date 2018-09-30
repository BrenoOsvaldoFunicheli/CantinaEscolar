<?php

include_once 'AbstractFunctionDAO.php';
include_once 'Conexao.php';

class FuncionarioDAO implements AbstractFunctionDAO{
  
    private $funcionario;
    private $db;
    
    function __construct($funcionario) {
        $this->funcionario = $funcionario;
        $con = new Conexao();
        $this->db = $con->getConnection();
    }
    
    public function delete() {
        
    }

    public function getAll() {
        
    }

    public function insert() {
        $sql="INSERT INTO tb_funcionario(nome, cpf, senha)"
           . " VALUES (?,?,?)";
        
        $stmt=$this->db->prepare($sql);
        
        $values1 = $this->funcionario->getNome();
        $values2 = $this->funcionario->getCpf();
        $values3 = $this->funcionario->getSenha();
        
        $stmt->bindParam(1, $values1);
        $stmt->bindParam(2, $values2);
        $stmt->bindParam(3, $values3);
        
        $stmt->execute();
           
    }

    public function search() {
//         $sql="SELECT * FROM tb_funcionario WHERE senha= :senha AND cpf= :cpf";
         $sql="SELECT * FROM tb_funcionario WHERE cpf= :cpf";
        
        $stmt= $this->db->prepare($sql);
        
        $stmt->bindValue(":cpf", $this->funcionario->getCpf());
//        $stmt->bindValue(":senha", $this->funcionario->getSenha());
        
        $stmt->execute();
        
        $result = $stmt->fetchAll();
        
        return $result;
    }

    public function update() {
        
    }

}