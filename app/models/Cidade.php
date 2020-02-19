<?php

namespace app\models;

use app\core\Model;

class Cidade extends Model {

    public function listar() {
        $sql = "SELECT * FROM cidade";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getCidade($id_cidade) {
        $sql = "SELECT * FROM cidade WHERE id_cidade = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_cidade);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
}
