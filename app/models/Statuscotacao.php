<?php

namespace app\models;

use app\core\Model;

class Statuscotacao extends Model {

    public function listar() {
        $sql = "SELECT * FROM status_cotacao";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);

    }

    public function getStatus($id_status) {
        $sql = "SELECT * from status_cotacao where id_status_solicitacao = :id_status";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_status", $id_status);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }

}
