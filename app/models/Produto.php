<?php

namespace app\models;

use app\core\Model;

class Produto extends Model {

    public function getTotal($q = null) {
        if ($q) {
            $sql = "SELECT count(*) as total FROM produto WHERE produto LIKE '%$q%'";
        } else {
            $sql = "SELECT count(*) as total FROM produto";
        }
        $qry = $this->db->query($sql);

        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }

    public function listaInsumo() {
        $sql = "select * from produto where eh_insumo = 'S'";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function lista($inicio = null, $lpp = null) {
        if ($inicio || $lpp) {
            $sql = "SELECT * FROM produto LIMIT $inicio, $lpp";
        } else {
            $sql = "SELECT * FROM produto";
        }

        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getProduto($id_produto) {
        $sql = "SELECT * FROM produto WHERE id_produto = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_produto);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    
    public function getEstoque($id_produto) {
        $sql = "SELECT * FROM produto WHERE id_produto = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_produto);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ)->estoque_atual;
    }

    public function produtoPorNome($descricao) {
        $sql = "select * from `produto` where produto like :descricao";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":descricao", '%' . $descricao . '%');
        $qry->execute();

        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function atualizarEstoque($id_produto, $qtd) {
        $sql = "update produto set "
                . "estoque_atual    = estoque_atual + ($qtd) "
                . "where id_produto = $id_produto";
        $qry = $this->db->query($sql);
    }

    public function editar($valores) {
        $sql = "UPDATE produto SET"
                . " id_categoria    =:id_categoria,"
                . " id_unidade      =:id_unidade,"
                . " produto         =:produto,"
                . " imagem          =:imagem,"
                . " sku             =:sku,"
                . " preco_alto      =:preco_alto,"
                . " preco           =:preco_atual,"
                . " ativo           =:ativo "
                . "WHERE id_produto =:id_produto";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_categoria", $valores->id_categoria);
        $qry->bindValue(":id_unidade", $valores->id_unidade);
        $qry->bindValue(":produto", $valores->produto);
        $qry->bindValue(":imagem", $valores->imagem);
        $qry->bindValue(":sku", $valores->sku);
        $qry->bindValue(":preco_alto", $valores->preco_alto);
        $qry->bindValue(":preco_atual", $valores->preco);
        $qry->bindValue(":ativo", $valores->ativo);
        $qry->bindValue(":id_produto", $valores->id_produto);
        $qry->execute();

        return $this->db->lastInsertId();
    }

    public function salvar($valores) {
        $sql = "INSERT INTO produto SET"
                . " id_categoria    =:id_categoria,"
                . " id_unidade      =:id_unidade,"
                . " produto         =:produto,"
                . " imagem          =:imagem,"
                . " sku             =:sku,"
                . " preco_alto      =:preco_alto,"
                . " preco           =:preco_atual,"
                . " ativo           =:ativo";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_categoria", $valores->id_categoria);
        $qry->bindValue(":id_unidade", $valores->id_unidade);
        $qry->bindValue(":produto", $valores->produto);
        $qry->bindValue(":imagem", $valores->imagem);
        $qry->bindValue(":sku", $valores->sku);
        $qry->bindValue(":preco_alto", $valores->preco_alto);
        $qry->bindValue(":preco_atual", $valores->preco);
        $qry->bindValue(":ativo", $valores->ativo);
        $qry->execute();

        return $this->db->lastInsertId();
    }

    public function delete($id_produto) {
        $sql = "DELETE FROM produto WHERE id_produto =:id_produto";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_produto", $id_produto);
        $qry->execute();
    }

}
