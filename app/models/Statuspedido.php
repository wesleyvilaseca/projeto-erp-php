<?php

namespace app\models;

use app\core\Model;

class Statuspedido extends Model {

    public function listar() {
        $sql = "SELECT * FROM status_pedido";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

}
