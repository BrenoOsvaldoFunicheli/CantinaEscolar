<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VendaDAO
 *
 * @author osval
 */
include_once 'AbstractFunctionDAO.php';
include_once 'Conexao.php';

class VendaDAO implements AbstractFunctionDAO {

    //put your code here
    private $venda;
    private $db;

    function __construct($venda = '') {
        $this->venda = $venda;
        $con = new Conexao();
        $this->db = $con->getConnection();
    }

    public function delete() {
        
    }

    public function getAll() {
        $sql = "SELECT * FROM tb_aluno";

        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }

    public function insert() {

        global $ultimoId;

        $v1 = new VendaDAO($this->venda);

        $v1->insertInVenda();

        $ultimoId = $v1->ultimoId();
        
        $v1->insertInVendaProdutos($ultimoId);
    }

    public function search() {
        
    }

    public function update() {
        
    }

    public function getAllByRa() {
        $sql = "SELECT * "
                . "FROM tb_venda "
                . "INNER JOIN tb_venda_produto ON tb_venda.cod_venda = tb_venda_produto.cod_venda "
                . "INNER join tb_produtos ON tb_produtos.cod = tb_venda_produto.cod_prod "
                . "WHERE tb_venda.RA= :ra";

        $stmt = $this->db->prepare($sql);

        $value = $this->venda->getAluno()->getRA();

        $stmt->bindValue(":ra", $value[0][0]);

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }

    public function getAllByRa2() {

//        $sql = "SELECT * "
//                . "FROM tb_venda INNER JOIN "
//                . "tb_produtos ON tb_venda.cod_prod = tb_produtos.cod"
//                . " WHERE tb_venda.RA=  :ra";

        $sql = "SELECT * "
                . "FROM tb_venda "
                . "INNER JOIN tb_venda_produto ON tb_venda.cod_venda = tb_venda_produto.cod_venda "
                . "INNER join tb_produtos ON tb_produtos.cod = tb_venda_produto.cod_prod "
                . "INNER JOIN tb_aluno on tb_aluno.RA =tb_venda.RA WHERE tb_venda.RA= :ra";

        $stmt = $this->db->prepare($sql);

        $value = $this->venda->getAluno()->getRA();

        $stmt->bindValue(":ra", $value);

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }

    public function getAllAlunoWithDate($dataI = '', $dateF = '') {

       $sql = "SELECT * "
                . "FROM tb_venda "
                . "INNER JOIN tb_venda_produto ON tb_venda.cod_venda = tb_venda_produto.cod_venda "
                . "INNER join tb_produtos ON tb_produtos.cod = tb_venda_produto.cod_prod "
                . "INNER JOIN tb_aluno on tb_aluno.RA =tb_venda.RA"
                . " WHERE tb_venda.RA= :ra "
                . "AND tb_venda.data_vend >= :datainicial "
                . "And tb_venda.data_vend <= :datafinal";

        $stmt = $this->db->prepare($sql);

        $value = $this->venda->getAluno()->getRA();
//        echo $dataI;
        $stmt->bindValue(":ra", $value[0][0]);
        $stmt->bindValue(":datainicial", $dataI);
        $stmt->bindValue(":datafinal", $dateF);

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }

    public function ultimoId() {
        $sqlQuery = "SELECT cod_venda FROM tb_venda ORDER BY tb_venda.cod_venda DESC LIMIT 1";

        $stmtb = $this->db->prepare($sqlQuery);

        $stmtb->execute();

        return $stmtb->fetchAll()[0][0];
    }

    public function insertInVendaProdutos($ultimoId) {
        $sql2 = "INSERT INTO tb_venda_produto(cod_venda, cod_prod, qtd_prod) VALUES (?,?,?)";

        $stmtc = $this->db->prepare($sql2);

        $total = count($_POST['produtos']);

        for ($i = 0; $i < $total; $i++) {
            $prod = $_POST['produtos'][$i];
            $qtd = $_POST['qtds'][$i];

            $stmtc->bindParam(1, $ultimoId);
            $stmtc->bindParam(2, $prod);
            $stmtc->bindParam(3, $qtd);

            $stmtc->execute();
        }
    }

    public function insertInVenda() {
//echo'sa';
        $sql = "INSERT INTO tb_venda(RA, data_vend, pendencia) VALUES(?,?,?)";

        $stmta = $this->db->prepare($sql);

        $values1 = $this->venda->getAluno()->getRa();
        $values2 = $this->venda->getData();
        
        $pendencia = $_POST['pendencia'];
        if ($pendencia == 1) {
            $pedencia = 'PAGO';
        } else {
            $pedencia = 'PENDENTE';
        }
//        echo$pendencia;
        
        $stmta->bindParam(1, $values1);

        $stmta->bindParam(2, $values2);

        $stmta->bindParam(3, $pendencia);
        
        $stmta->execute();
    }

}
