<?php

namespace app\models;

use app\core\Model;

class Historicomovimento extends Model {

    public function inserir($valores) {
        $sql = "INSERT INTO historico_movimento set "
                . "id_produto           =:id_produto, "
                . "id_tipo_movimento    =:id_tipo_movimento, "
                . "id_ordem_de_compra   =:id_ordem_de_compra, "
                . "entrada_saida        =:entrada_saida, "
                . "data_movimento       =:data_movimento, "
                . "documento            =:documento, "
                . "descricao_movimento  =:descricao_movimento, "
                . "qtd_movimento        =:qtd_movimento, "
                . "valor_movimento      =:valor_movimento, "
                . "subtotal_movimento   =:subtotal_movimento";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_produto",              $valores->id_produto);
        $qry->bindValue(":id_tipo_movimento",       $valores->id_tipo_movimento);
        $qry->bindValue(":id_ordem_de_compra",      $valores->id_ordem_compra);
        $qry->bindValue(":entrada_saida",           $valores->entrada_saida);
        $qry->bindValue(":data_movimento",          $valores->data_movimento);
        $qry->bindValue(":documento",               $valores->documento);
        $qry->bindValue(":descricao_movimento",     $valores->descricao_movimento);
        $qry->bindValue(":qtd_movimento",           $valores->qtd_movimento);
        $qry->bindValue(":valor_movimento",         $valores->valor_movimento);
        $qry->bindValue(":subtotal_movimento",      $valores->subtotal_movimento);
        $qry->execute();
        return $this->db->lastInsertId();
    }

    public function delete($id_unidade) {
        $sql = "DELETE FROM unidade WHERE id_unidade =:id_unidade";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_unidade", $id_unidade);
        $qry->execute();
    }

}
