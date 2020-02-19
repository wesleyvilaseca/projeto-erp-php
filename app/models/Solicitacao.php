<?php

namespace app\models;

use app\core\Model;

class Solicitacao extends Model {

    public function getTotal($pesquisa = null) {
        $complemento = "";
        $sql = "select count(*) as total from solicitacao s, produto p, status_solicitacao ss"
                . " where s.id_produto = p.id_produto and"
                . " s.id_status_solicitacao = ss.id_status_solicitacao";

        if ($pesquisa->data_inicial) {
            if ($pesquisa->data_final) {
                $complemento .= " and s.data_solicitacao >= '" . $pesquisa->data_inicial . "' and "
                        . "s.data_solicitacao <= '" . $pesquisa->data_final . "'";
            } else {
                $complemento .= " and s.data_solicitacao >= '" . $pesquisa->data_inicial . "'";
            }
        }

        if ($pesquisa->id_produto) {
            $complemento .= " and s.id_produto = " . $pesquisa->id_produto;
        }

        if ($pesquisa->id_status) {
            $complemento .= " and s.id_status_solicitacao = " . $pesquisa->id_status;
        }

        $qry = $this->db->query($sql . $complemento);
        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }

    public function filtro($pesquisa, $inicio, $lpp) {
        $complemento = "";
        $sql = "select * from solicitacao s, produto p, status_solicitacao ss"
                . " where s.id_produto = p.id_produto and"
                . " s.id_status_solicitacao = ss.id_status_solicitacao";

        if ($pesquisa->data_inicial) {
            if ($pesquisa->data_final) {
                $complemento .= " and s.data_solicitacao >= '" . $pesquisa->data_inicial . "' and "
                        . "s.data_solicitacao <= '" . $pesquisa->data_final . "'";
            } else {
                $complemento .= " and s.data_solicitacao >= '" . $pesquisa->data_inicial . "'";
            }
        }

        if ($pesquisa->id_produto) {
            $complemento .= " and s.id_produto = " . $pesquisa->id_produto;
        }

        if ($pesquisa->id_status) {
            $complemento .= " and s.id_status_solicitacao = " . $pesquisa->id_status;
        }

        $qry = $this->db->query($sql . $complemento . " LIMIT $inicio, $lpp ");
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function inserir($solicitacao) {       
        $sql = "insert into solicitacao set"
                . " id_produto              = :id_produto,"
                . " id_status_solicitacao   = :id_status_solicitacao,"
                . " id_ordem_producao       = :id_ordem_producao,"
                . " qtd                     = :qtd,"
                . " data_solicitacao        = :data_solicitacao,"
                . " data_entrega            = :data_entrega";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_produto", $solicitacao->id_produto);
        $qry->bindValue(":id_status_solicitacao", $solicitacao->id_status_solicitacao);
        $qry->bindValue(":id_ordem_producao", $solicitacao->id_ordem_producao);
        $qry->bindValue(":qtd", $solicitacao->qtd);
        $qry->bindValue(":data_solicitacao", $solicitacao->data_solicitacao);
        $qry->bindValue(":data_entrega", $solicitacao->data_entrega);

        $qry->execute();

        /* if (!$qry->execute()) {
          print '<pre>';
          print_r($qry->errorInfo());
          print '</pre>';
          } */

        //return $qry->fetch(\PDO::FETCH_OBJ);
    }
    
    public function abertas(){
        $sql = "select * from solicitacao s, produto p, status_solicitacao st"
                . " where p.id_produto = s.id_produto"
                . " and s.id_status_solicitacao = st.id_status_solicitacao"
                . " and s.id_status_solicitacao = 1";
        
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
        }
        
        public function emCotacao(){
        $sql = "select * from solicitacao s, produto p, status_solicitacao st"
                . " where p.id_produto = s.id_produto"
                . " and s.id_status_solicitacao = st.id_status_solicitacao"
                . " and s.id_status_solicitacao = 2";
        
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
        }
    
    public function mudarStatus($id_solicitacao, $id_status){
        $sql = "update solicitacao set"
                . " id_status_solicitacao =:id_status_solicitacao"
                . " where id_solicitacao =:id_solicitacao";
        
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_solicitacao", $id_solicitacao);
        $qry->bindValue(":id_status_solicitacao", $id_status);
        $qry->execute();
    }
    
    public function listarPorIdCotacao($id_cotacao){
        $sql = "select * from solicitacao_cotacao ss, solicitacao s, produto p, status_solicitacao st where"
                . " ss.id_solicitacao = s.id_solicitacao and"
                . " p.id_produto = s.id_produto and"
                . " s.id_status_solicitacao = st.id_status_solicitacao"
                . " and ss.id_cotacao = $id_cotacao";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    
    public function aprovarCotacao($id_solicitacao, $id_ordem_compra, $id_fornecedor){
        $sql = "update solicitacao set "
                . "id_ordem_compra  =:id_ordem_compra, "
                . "id_fornecedor    =:id_fornecedor where "
                . " id_solicitacao  =:id_solicitacao";
        
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_ordem_compra", $id_ordem_compra);
        $qry->bindValue(":id_fornecedor", $id_fornecedor);
        $qry->bindValue(":id_solicitacao", $id_solicitacao);
        $qry->execute();
    }

}
