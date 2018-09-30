<?php

include_once 'AbstractFunctionDAO.php';
include_once 'Conexao.php';

class AlunoDAO implements AbstractFunctionDAO {

    private $aluno;
    private $db;

    function __construct($Aluno='') {
        $this->aluno = $Aluno;
        $con = new Conexao();
        $this->db = $con->getConnection();
    }

    public function insert() {

        $sql = "INSERT INTO tb_aluno"
                . "(RA, nome, senha, NomeResp, emailResp, telResp)"
                . " VALUES (?,?,?,?,?,?)";

        $stmt = $this->db->prepare($sql);

        $values1 = $this->aluno->getRa();
        $values2 = $this->aluno->getNome();
        $values3 = $this->aluno->getSenha();
        $values4 = $this->aluno->getNomeResp();
        $values5 = $this->aluno->getEmailResp();
        $values6 = $this->aluno->getTelResp();

        $stmt->bindParam(1, $values1);
        $stmt->bindParam(2, $values2);
        $stmt->bindParam(3, $values3);
        $stmt->bindParam(4, $values4);
        $stmt->bindParam(5, $values5);
        $stmt->bindParam(6, $values6);

        $stmt->execute();
    }

    public function search() {

//        $sql = "SELECT * FROM tb_aluno WHERE emailResp= :email AND senha= :senha";
        $sql = "SELECT * FROM tb_aluno WHERE emailResp= :email";

        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(":email", $this->aluno->getEmailResp());
//        $stmt->bindValue(":senha", $this->aluno->getSenha());
        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }

    public function delete() {
        
    }

    public function update() {
        
    }

    public function getAll($aluno = '') {

        $sql = "SELECT * FROM tb_aluno WHERE nome = :nome";

        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(":nome", $this->aluno->getNome());

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }

    public function getRa() {

        $sql = "SELECT RA FROM tb_aluno WHERE emailResp= :email ";

        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(":email", $this->aluno->getEmailResp());

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }

    public function getRaByNome() {

        $sql = "SELECT RA FROM tb_aluno "
                . "WHERE Nome LIKE :nome";

        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(":nome", "%" . $this->aluno->getNome() . "%");

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }

    public function getNomeByAlias() {
        $sql = "SELECT Nome FROM tb_aluno WHERE Nome LIKE :nome";

        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(":nome", "%" . $this->aluno->getNome() . "%");

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }

    public function isExist($ra, $senha) {
        $sql = "SELECT * FROM tb_aluno WHERE RA = :ra ";

        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(":ra", $ra);
//        $stmt->bindValue(":senha", $senha);

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }

}
