<?php

namespace app\models;

use app\core\Model;

class Itemordemcompra extends Model {
    
    public function inserir($id_ordem_compra, $id_produto, $qtd, $valor_cotacao){
        $sql = "insert into item_ordem_compra set "
                . "id_ordem_compra  =:id_ordem_compra, "
                . "id_produto       =:id_produto, "
                . "qtd              =:qtd, "
                . "valor            =:valor, "
                . "subtotal         =:subtotal";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_ordem_compra", $id_ordem_compra);
        $qry->bindValue(":id_produto", $id_produto);
        $qry->bindValue(":qtd", $qtd);
        $qry->bindValue(":valor", $valor_cotacao);
        $qry->bindValue(":subtotal", $qtd * $valor_cotacao);
        $qry->execute();
        
        $id = $this->db->lastInsertId();
        if($id){
            $soma = $this->somaItensOrdemCompra($id_ordem_compra);
            //atualiza a soma da ordem de compra;
            $sql = "update ordem_compra set valor_total = {$soma} where"
            . " id_ordem_compra = {$id_ordem_compra}";
            $qry = $this->db->query($sql);
        }
        return $id;
    }
    
    public function listaItensOrdemCompra($id_ordem){
        $sql = "select * from item_ordem_compra co, produto p where "
                . "co.id_produto    = p.id_produto and "
                . "id_ordem_compra  = $id_ordem";
        
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    
    public function somaItensOrdemCompra($id_ordem_compra){
        $sql = "select sum(qtd * valor) as soma from item_ordem_compra where id_ordem_compra = $id_ordem_compra";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ)->soma;
    }
    
    public function exist($id_ordem_compra, $id_produto){
        $sql = "select * from item_ordem_compra where "
                . "id_ordem_compra  = $id_ordem_compra and "
                . "id_produto       = $id_produto";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
}
