<?php

namespace app\models;

use app\core\Model;

class Item extends Model {

    public function listaIdPedido($id_pedido) {
            $sql = "select * from item i, produto p"
                    . " where i.id_produto = p.id_produto"
                    . " and id_pedido = $id_pedido ";

        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    
}
