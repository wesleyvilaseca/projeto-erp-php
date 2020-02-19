<?php

namespace app\models;

use app\core\Model;

class Unidade extends Model {

    public function listar($inicio = null, $lpp = null) {
        if($inicio){
            $sql = "SELECT * FROM unidade LIMIT $inicio, $lpp";
        }else{
            $sql = "SELECT * FROM unidade";
        }
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getTotal($q = null) {
        if ($q) {
            $sql = "SELECT count(*) as total FROM unidade WHERE unidade LIKE '%$q%'";
        } else {
            $sql = "SELECT count(*) as total FROM unidade";
        }
        $qry = $this->db->query($sql);

        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }

    public function filtro($q, $inicio, $lpp) {
        $sql = "SELECT * FROM unidade WHERE unidade LIKE :q LIMIT $inicio, $lpp";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":q", '%' . $q . '%');
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getUnidade($id_unidade) {
        $sql = "SELECT * FROM unidade WHERE id_unidade =:id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_unidade);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function inserir($unidade, $abrev) {
        $sql = "INSERT INTO unidade set unidade =:unidade, abrev =:ativo";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":unidade", $unidade);
        $qry->bindValue(":ativo", $abrev);
        $qry->execute();
        return $this->db->lastInsertId();
    }

    public function editar($id_unidade, $unidade, $abrev) {
        $sql = "UPDATE unidade SET unidade =:unidade, abrev =:abrev WHERE id_unidade =:id_unidade";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":unidade", $unidade);
        $qry->bindValue(":abrev", $abrev);
        $qry->bindValue(":id_unidade", $id_unidade);
        $qry->execute();
    }

    public function delete($id_unidade) {
        $sql = "DELETE FROM unidade WHERE id_unidade =:id_unidade";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_unidade", $id_unidade);
        $qry->execute();
    }

}
