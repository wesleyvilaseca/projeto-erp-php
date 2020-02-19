<?php

namespace app\models;

use app\core\Model;

class Fornecedorcotacao extends Model {

    public function inserir($id_fornecedor, $id_cotacao) {
        $sql = "insert into fornecedor_cotacao set"
                . " id_cotacao              = :id_cotacao,"
                . " id_fornecedor          = :id_fornecedor";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cotacao", $id_cotacao);
        $qry->bindValue(":id_fornecedor", $id_fornecedor);
        $qry->execute();

        return $this->db->lastInsertId();
    }

    public function listaPorCotacao($id_cotacao) {
        $sql = "select * from fornecedor_cotacao sc, contato c"
                . " where sc.id_fornecedor = c.id_contato and"
                . " sc.id_cotacao = $id_cotacao";
        
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getFornecedorCotacao($id_fornecedor, $id_cotacao) {
        $sql = "select * from fornecedor_cotacao where"
                . " id_fornecedor  = :id_fornecedor and"
                . " id_cotacao      = :id_cotacao";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cotacao", $id_cotacao);
        $qry->bindValue(":id_fornecedor", $id_fornecedor);
        $qry->execute();

        /* if (!$qry->execute()) {
          print '<pre>';
          print_r($qry->errorInfo());
          print '</pre>';
          } */

        return $this->db->lastInsertId();
    }
    
    public function excluir($id){
        $sql = "delete from fornecedor_cotacao where id_fornecedor_cotacao = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();
    }


}
