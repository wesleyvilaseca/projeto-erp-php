<?php

namespace app\models;

use app\core\Model;

class Categoria extends Model {

    public function listar($inicio = null, $lpp = null) {
        if($inicio || $lpp) {
            $sql = "SELECT * FROM categoria LIMIT $inicio, $lpp";
        }else{
            $sql = "SELECT * FROM categoria";
        }
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getTotal($q = null) {
        if ($q) {
            $sql = "SELECT count(*) as total FROM categoria WHERE categoria LIKE '%$q%'";
        } else {
            $sql = "SELECT count(*) as total FROM categoria";
        }
        $qry = $this->db->query($sql);

        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }

    public function filtro($q, $inicio, $lpp) {
        $sql = "SELECT * FROM categoria WHERE categoria LIKE :q LIMIT $inicio, $lpp";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":q", '%' . $q . '%');
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getCategoria($id_categoria) {
        $sql = "SELECT * FROM categoria WHERE id_categoria = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_categoria);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function inserir($categoria, $ativo) {
        $sql = "INSERT INTO categoria set categoria =:categoria, ativo_categoria =:ativo";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":categoria", $categoria);
        $qry->bindValue(":ativo", $ativo);
        $qry->execute();
        return $this->db->lastInsertId();
    }

    public function editar($id_categoria, $categoria, $ativo) {
        $sql = "UPDATE categoria SET categoria =:categoria, ativo_categoria =:ativo WHERE id_categoria =:id_categoria";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":categoria", $categoria);
        $qry->bindValue(":ativo", $ativo);
        $qry->bindValue(":id_categoria", $id_categoria);
        $qry->execute();
    }

    public function delete($id_categoria) {
        $sql = "DELETE FROM categoria WHERE id_categoria =:id_categoria";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_categoria", $id_categoria);
        $qry->execute();
    }

}
