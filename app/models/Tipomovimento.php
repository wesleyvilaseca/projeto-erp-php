<?php

namespace app\models;

use app\core\Model;

class Tipomovimento extends Model {

    public function lista($inicio = null, $lpp = null) {
        $sql = "SELECT * FROM tipo_movimento";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getTipoMovimento($id_tipo_movimento) {
        $sql = "SELECT * FROM tipo_movimento WHERE id_tipo_movimento =:tipo_movimento";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":tipo_movimento", $id_tipo_movimento);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

}
