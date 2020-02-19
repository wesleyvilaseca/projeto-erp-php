<?php

namespace app\models;

use app\core\Model;

class Solicitacaocotacao extends Model {

    public function inserir($id_solicitacao, $id_cotacao) {
        $sql = "insert into solicitacao_cotacao set"
                . " id_cotacao              = :id_cotacao,"
                . " id_solicitacao          = :id_solicitacao";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cotacao", $id_cotacao);
        $qry->bindValue(":id_solicitacao", $id_solicitacao);
        $qry->execute();
        return $this->db->lastInsertId();
    }

    public function listaPorCotacao($id_cotacao) {
        $sql = "select * from solicitacao_cotacao sc, solicitacao s, produto p, status_solicitacao st"
                . " where sc.id_solicitacao = s.id_solicitacao and"
                . " p.id_produto = s.id_produto and"
                . " s.id_status_solicitacao = st.id_status_solicitacao and"
                . " sc.id_cotacao = $id_cotacao";
        
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getSolicitacaoCotacao($id_solicitacao, $id_cotacao) {
        $sql = "select * from solicitacao_cotacao where"
                . " id_solicitacao  = :id_solicitacao and"
                . " id_cotacao      = :id_cotacao";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cotacao", $id_cotacao);
        $qry->bindValue(":id_solicitacao", $id_solicitacao);
        $qry->execute();

        /* if (!$qry->execute()) {
          print '<pre>';
          print_r($qry->errorInfo());
          print '</pre>';
          } */

        return $this->db->lastInsertId();
    }
    
    public function excluir($id){
        $sql = "delete from solicitacao_cotacao where id_solicitacao_cotacao = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();
    }

}
