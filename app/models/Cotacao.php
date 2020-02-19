<?php

namespace app\models;

use app\core\Model;

class Cotacao extends Model {

    public function getTotal($pesquisa = null) {
        $complemento = "";
        $sql = "select count(*) as total from cotacao c, status_cotacao s where"
                . " c.id_status_cotacao = s.id_status_cotacao";
        if ($pesquisa->data_inicial) {
            if ($pesquisa->data_final) {
                $complemento .= " and data_abertura >= '" . $pesquisa->data_inicial . "' and data_abertura<= '" . $pesquisa->data_final . "'";
            } else {
                $complemento .= " and data_abertura = '" . $pesquisa->data_inicial . "'";
            }
        }
        if ($pesquisa->id_status) {
            $complemento .= " and c.id_status_cotacao = " . $pesquisa->id_status;
        }
        //$sql .= $complemento . " limit $inicio, $lpp";
        $qry = $this->db->query($sql . $complemento);
        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }

    public function filtro($pesquisa, $inicio, $lpp) {
        $complemento = "";
        $sql = "select * from cotacao c, status_cotacao s"
                . " where c.id_status_cotacao = s.id_status_cotacao";

        if ($pesquisa->data_inicial) {
            if ($pesquisa->data_final) {
                $complemento .= " and data_abertura >= '" . $pesquisa->data_inicial . "' and data_abertura<= '" . $pesquisa->data_final . "'";
            } else {
                $complemento .= " and data_abertura = '" . $pesquisa->data_inicial . "'";
            }
        }
        if ($pesquisa->id_status) {
            $complemento .= " and c.id_status_cotacao = " . $pesquisa->id_status;
        }
        $sql .= $complemento . " limit $inicio, $lpp";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function inserir($cotacao) {
        $sql = "insert into cotacao set"
                . " id_produto              = :id_produto,"
                . " id_status_cotacao   = :id_status_cotacao,"
                . " id_ordem_producao       = :id_ordem_producao,"
                . " qtd                     = :qtd,"
                . " data_cotacao        = :data_cotacao,"
                . " data_entrega            = :data_entrega";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_produto", $cotacao->id_produto);
        $qry->bindValue(":id_status_cotacao", $cotacao->id_status_cotacao);
        $qry->bindValue(":id_ordem_producao", $cotacao->id_ordem_producao);
        $qry->bindValue(":qtd", $cotacao->qtd);
        $qry->bindValue(":data_cotacao", $cotacao->data_cotacao);
        $qry->bindValue(":data_entrega", $cotacao->data_entrega);

        $qry->execute();

        /* if (!$qry->execute()) {
          print '<pre>';
          print_r($qry->errorInfo());
          print '</pre>';
          } */

        //return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function novaCotacao() {
        $sql = "insert into cotacao set"
                . " data_abertura       = :data_abertura,"
                . " finalizado          = 'N',"
                . " id_status_cotacao   = 1";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":data_abertura", date("Y-m-d"));
        $qry->execute();
        return $this->db->lastInsertId();
    }

    public function getCotacao($id_cotacao) {
        $sql = "select * from cotacao where id_cotacao = :id_cotacao";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cotacao", $id_cotacao);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    
    public function mudaStatus($id_cotacao, $id_status){
        $sql = "update cotacao set "
                . "id_status_cotacao = :id_status_cotacao "
                . "where id_cotacao = :id_cotacao";
        
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_status_cotacao", $id_status);
        $qry->bindValue(":id_cotacao", $id_cotacao);
        $qry->execute();
    }

    public function getCotacaoNaoFinalizada() {
        $sql = "select * from cotacao where finalizado = 'N'";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function finalizarCotacao($id) {
        $sql = "update cotacao set finalizado = 'S'"
                . ", id_status_cotacao = 2"
                . " where id_cotacao =:id_cotacao";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cotacao", $id);
        $qry->execute();
    }

}
