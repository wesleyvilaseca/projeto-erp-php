<?php

namespace app\models;

use app\core\Model;

class Pedido extends Model {

    public function listar($inicio = null, $lpp = null, $status=null) {
        $complemento = "";
        if($status){
            $complemento = " and p.id_status = '$status'";
        }
        if($inicio || $lpp) {
            $sql = "select * from pedido p, contato c, status_pedido s"
                    . " where p.id_contato = c.id_contato"
                    . " and p.id_status = s.id_status $complemento LIMIT $inicio, $lpp";
        }else{
            $sql = "select * from pedido p, contato c, status_pedido s"
                    . " where p.id_contato = c.id_contato"
                    . " and p.id_status = s.id_status $complemento";
        }
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    
     public function filtro($pesquisa, $inicio, $lpp) {
        $complemento = "";
        $sql = "select * from pedido o, contato c, status_pedido s"
                . " where o.id_status = s.id_status and"
                . " o.id_contato = c.id_contato ";

        if ($pesquisa->data_inicial) {
            if ($pesquisa->data_final) {
                $complemento .= " and data_pedido >= '" . $pesquisa->data_inicial . "' and data_pedido<= '" . $pesquisa->data_final . "' ";
            } else {
                $complemento .= " and data_pedido = '" . $pesquisa->data_inicial . "' ";
            }
        }
        /*if ($pesquisa->id_contato) {
            $complemento .= " and o.id_contato = " . $pesquisa->id_contato;
        }*/
        
        if ($pesquisa->id_status) {
            $complemento .= " and o.id_status = " . $pesquisa->id_status;
        }
        $sql .= $complemento . " limit $inicio, $lpp";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    
     public function getTotal($pesquisa, $inicio, $lpp) {
        $complemento = "";
        $sql = "select count(*) as total from pedido o, contato c, status_pedido s"
                . " where o.id_status = s.id_status and"
                . " o.id_contato = c.id_contato ";

        if ($pesquisa->data_inicial) {
            if ($pesquisa->data_final) {
                $complemento .= " and data_pedido >= '" . $pesquisa->data_inicial . "' and data_pedido<= '" . $pesquisa->data_final . "' ";
            } else {
                $complemento .= " and data_pedido = '" . $pesquisa->data_inicial . "' ";
            }
        }
        /*if ($pesquisa->id_contato) {
            $complemento .= " and o.id_contato = " . $pesquisa->id_contato;
        }*/
        
        if ($pesquisa->id_status) {
            $complemento .= " and o.id_status = " . $pesquisa->id_status;
        }
        $sql .= $complemento . " limit $inicio, $lpp";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }

    public function getPedido($id_pedido) {
        $sql = "select * from pedido p, contato c, status_pedido s"
                . " where p.id_contato = c.id_contato"
                . " and p.id_status = s.id_status"
                . " and id_pedido = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_pedido);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    
    public function recusar($id_pedido) {
        $sql = "UPDATE pedido SET id_status =4 where id_pedido = :id_pedido";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_pedido", $id_pedido);
        $qry->execute();
    }
    
    
    public function liberar($id_pedido, $frete, $seguro, $desconto, $despesa) {
        $sql = "UPDATE pedido SET "
                . "id_status        = 3, "
                . "total_frete      =:frete, "
                . "total_seguro     =:seguro, "
                . "total_desconto   =:desconto, "
                . "total_despesa    =:despesa "
                . "where            id_pedido = :id_pedido";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_pedido",   $id_pedido);
        $qry->bindValue(":frete",       $frete);
        $qry->bindValue(":seguro",      $seguro);
        $qry->bindValue(":desconto",    $desconto);
        $qry->bindValue(":despesa",     $despesa);
        $qry->execute();
    }

    public function inserir($pedido, $ativo) {
        $sql = "INSERT INTO pedido set pedido =:pedido, ativo_pedido =:ativo";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":pedido", $pedido);
        $qry->bindValue(":ativo", $ativo);
        $qry->execute();
        return $this->db->lastInsertId();
    }

    public function editar($id_pedido, $pedido, $ativo) {
        $sql = "UPDATE pedido SET pedido =:pedido, ativo_pedido =:ativo WHERE id_pedido =:id_pedido";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":pedido", $pedido);
        $qry->bindValue(":ativo", $ativo);
        $qry->bindValue(":id_pedido", $id_pedido);
        $qry->execute();
    }

    public function delete($id_pedido) {
        $sql2 = "DELETE FROM item WHERE id_pedido =:id_pedido";
        $qry = $this->db->prepare($sql2);
        $qry->bindValue(":id_pedido", $id_pedido);
        $qry->execute();
        
        $sql = "DELETE FROM pedido WHERE id_pedido =:id_pedido";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_pedido", $id_pedido);
        $qry->execute();
    }

}
