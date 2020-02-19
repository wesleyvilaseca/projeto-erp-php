<?php

namespace app\models;

use app\core\Model;

class Itemcotacao extends Model {
    
    public function getItemCotacao($id_item_cotacao){
        $sql = "select * from item_cotacao co, contato c, status_item_cotacao sc, produto p where"
                . " co.id_fornecedor            = c.id_contato and"
                . " co.id_status_item_cotacao   = sc.id_status_item_cotacao and"
                . " co.id_produto               = p.id_produto and"
                . " id_item_cotacao             = $id_item_cotacao";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function inserir($item) {
        $sql = "insert into item_cotacao set"
                . " id_cotacao              = :id_cotacao,"
                . " id_fornecedor           = :id_fornecedor,"
                . " id_solicitacao          = :id_solicitacao,"
                . " id_status_item_cotacao  = :id_status_item_cotacao,"
                . " id_produto              = :id_produto,"
                . " qtd                     =:qtd,"
                . " limite_entrega          = :limite_entrega";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cotacao", $item->id_cotacao);
        $qry->bindValue(":id_fornecedor", $item->id_fornecedor);
        $qry->bindValue(":id_solicitacao", $item->id_solicitacao);
        $qry->bindValue(":id_status_item_cotacao", $item->status);
        $qry->bindValue(":id_produto", $item->id_produto);
        $qry->bindValue(":qtd", $item->qtd);
        $qry->bindValue(":limite_entrega", $item->limite_entrega);
        $qry->execute();

        /* if (!$qry->execute()) {
          print '<pre>';
          print_r($qry->errorInfo());
          print '</pre>';
          } */

        return $this->db->lastInsertId();
    }

    public function exist($id, $id_solicitacao, $id_fornecedor) {
        $sql = "select * from item_cotacao where"
                . " id_cotacao      =:id_cotacao and"
                . " id_fornecedor   =:id_fornecedor and "
                . " id_solicitacao  =:id_solicitacao";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cotacao", $id);
        $qry->bindValue(":id_fornecedor", $id_fornecedor);
        $qry->bindValue(":id_solicitacao", $id_solicitacao);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function listaFornecedorSolicitacaoCotacao($id_cotacao, $id_solicitacao) {
        $sql = "select * from item_cotacao co, contato c, status_item_cotacao sc, produto p where"
                . " co.id_fornecedor            = c.id_contato and"
                . " co.id_status_item_cotacao   = sc.id_status_item_cotacao and"
                . " co.id_produto               = p.id_produto and"
                . " id_solicitacao              = $id_solicitacao and"
                . " id_cotacao                  = $id_cotacao";

        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function agrupaMenorPreco($id_cotacao) {
        $sql = "select id_solicitacao, min(valor_cotacao) as menor from `item_cotacao` where"
                . " valor_cotacao > 0 and id_cotacao = $id_cotacao"
                . " group by id_solicitacao";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getMenorPreco($id_cotacao, $id_solicitacao, $preco) {
        $sql = "select * from item_cotacao co, contato c, status_item_cotacao sc, produto p where"
                . " co.id_fornecedor            = c.id_contato and"
                . " co.id_status_item_cotacao   = sc.id_status_item_cotacao and"
                . " co.id_produto               = p.id_produto and"
                . " id_solicitacao              = $id_solicitacao and"
                . " id_cotacao                  = $id_cotacao and"
                . " valor_cotacao               = $preco"
                . " limit 1";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    
    public function getVencedor($id_solicitacao){
        $sql = "select * from item_cotacao co, contato c where"
                . " co.id_fornecedor    = c.id_contato and"
                . " id_solicitacao      = $id_solicitacao"
                . " limit 1";
        
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function listaComparativaPrecos($id_cotacao) {
        $objSolicitacao = new Solicitacao;
        $objFornecedor = new Fornecedor;

        $menores = $this->agrupaMenorPreco($id_cotacao);
        foreach ($menores as $m) {
            $menor[$m->id_solicitacao] = $m->menor;
        }
        /* print '<pre>';
          print_r($menor);
          exit; */
        $solicitacoes = $objSolicitacao->listarPorIdCotacao($id_cotacao);
        foreach ($solicitacoes as $solicitacao) {
            $fornecedores = $this->listaFornecedorSolicitacaoCotacao($id_cotacao, $solicitacao->id_solicitacao);
            if (!$solicitacao->id_fornecedor) {
                $menor_preco = $this->getMenorPreco($id_cotacao, $solicitacao->id_solicitacao, $menor[$solicitacao->id_solicitacao]);
            }else{
                $menor_preco = $this->getVencedor($solicitacao->id_solicitacao);
            }
            $lista[] = (object) array(
                        "solicitacao"   => $solicitacao,
                        "fornecedores"  => $fornecedores,
                        "menor_preco"   => $menor_preco
            );
        }
        return $lista;
    }
    
    public function aprovar($item){
        $sql = "update item_cotacao set id_ordem_compra = {$item->id_ordem_compra},"
        . " id_status_item_cotacao = {$item->id_aprovado}"
        . " where id_item_cotacao = {$item->id_item_cotacao}";
        $qry = $this->db->query($sql);
        
        $sql = "update item_cotacao set id_ordem_compra =-1, "
                . "id_status_item_cotacao = {$item->id_rejeitado}"
                . " where id_solicitacao = {$item->id_solicitacao} and"
                . " id_item_cotacao != {$item->id_item_cotacao}";
        $qry = $this->db->query($sql);
    }
    
    public function getTodosCotados($id_cotacao){
        $sql = "select count(*) as total from item_cotacao where"
                . " id_ordem_compra is null and "
                . "id_cotacao = $id_cotacao";
        
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }

}
