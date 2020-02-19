<?php

namespace app\models;

use app\core\Model;

class Statusordemcompra extends Model {

    public function listar() {
        $sql = "SELECT * FROM status_ordem_compra";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);

    }

}
