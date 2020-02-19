<?php

namespace app\models;

use app\core\Model;

class Ordemcompra extends Model {

    public function getTotal($pesquisa = null) {
        $complemento = "";
        $sql = "select count(*) as total from ordem_compra o, contato c, status_ordem_compra s where"
                . " o.id_status_ordem_compra = s.id_status_ordem_compra and"
                . " o.id_fornecedor = c.id_contato";

        if ($pesquisa) {
            if ($pesquisa->data_inicial) {
                if ($pesquisa->data_final) {
                    $complemento .= " and data_emissao >= '" . $pesquisa->data_inicial . "' and data_emissao<= '" . $pesquisa->data_final . "' ";
                } else {
                    $complemento .= " and data_emissao = '" . $pesquisa->data_inicial . "' ";
                }
            }
            if ($pesquisa->id_status) {
                $complemento .= " and o.id_status_ordem_compra = " . $pesquisa->id_status;
            }
        }

        //$sql .= $complemento . " limit $inicio, $lpp";
        $qry = $this->db->query($sql . $complemento);
        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }

    public function filtro($pesquisa, $inicio, $lpp) {
        $complemento = "";
        $sql = "select * from ordem_compra o, contato c, status_ordem_compra s"
                . " where o.id_status_ordem_compra = s.id_status_ordem_compra and"
                . " o.id_fornecedor = c.id_contato ";

        if ($pesquisa->data_inicial) {
            if ($pesquisa->data_final) {
                $complemento .= " and data_emissao >= '" . $pesquisa->data_inicial . "' and data_emissao<= '" . $pesquisa->data_final . "' ";
            } else {
                $complemento .= " and data_emissao = '" . $pesquisa->data_inicial . "' ";
            }
        }
        if ($pesquisa->id_status) {
            $complemento .= " and o.id_status_ordem_compra = " . $pesquisa->id_status;
        }
        $sql .= $complemento . " limit $inicio, $lpp";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getOrdemCompra($id_ordem_compra) {
        $sql = "select * from ordem_compra o, contato c, status_ordem_compra s where"
                . " o.id_fornecedor             = c.id_contato and"
                . " s.id_status_ordem_compra    = o.id_status_ordem_compra and"
                . " id_ordem_compra             = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_ordem_compra);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function marcarComoFinalizado($id_ordem) {
        $sql = "update ordem_compra set "
                . "id_status_ordem_compra  = 3, "
                . "data_entrada = :data_entrada "
                . "where id_ordem_compra = :id_ordem_compra";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":data_entrada" , date("Y-m-d"));
        $qry->bindValue(":id_ordem_compra" , $id_ordem);
        $qry->execute();
    }

    public function exist($id_cotacao, $id_fornecedor) {
        $sql = "select * from ordem_compra where"
                . " id_cotacao = :id_cotacao and"
                . " id_fornecedor = :id_fornecedor ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cotacao", $id_cotacao);
        $qry->bindValue(":id_fornecedor", $id_fornecedor);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function novaOrdemCompra($id_cotacao, $id_fornecedor) {
        $sql = "insert into ordem_compra set"
                . " id_cotacao      = :id_cotacao,"
                . " id_fornecedor   = :id_fornecedor,"
                . " data_emissao    = :data_emissao";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cotacao", $id_cotacao);
        $qry->bindValue(":id_fornecedor", $id_fornecedor);
        $qry->bindValue(":data_emissao", date("Y-m-d"));
        $qry->execute();
        return $this->db->lastInsertId();
    }

}
