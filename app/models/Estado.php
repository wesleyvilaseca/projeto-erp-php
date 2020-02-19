<?php

namespace app\models;

use app\core\Model;

class Estado extends Model {

    public function listar() {
        $sql = "SELECT * FROM estado";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getEstado($id_estado) {
        $sql = "SELECT * FROM estado WHERE id_estado = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_estado);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
}
