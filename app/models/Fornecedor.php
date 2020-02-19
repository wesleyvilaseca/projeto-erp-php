<?php

namespace app\models;

use app\core\Model;

class Fornecedor extends Model {

    public function listar() {
       $sql = "select * from contato c, cidade ci, estado e"
               . " where c.eh_cliente = 'S' and"
               . " c.id_cidade = ci.id_cidade and"
               . " c.id_estado = e.id_estado and"
               . " eh_fornecedor = 'S'";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getTotal($q = null) {
        if ($q) {
            $sql = "SELECT count(*) as total FROM contato WHERE contato LIKE '%$q%'";
        } else {
            $sql = "SELECT count(*) as total FROM contato";
        }
        $qry = $this->db->query($sql);

        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }

    public function filtro($q, $inicio, $lpp) {
        $sql = "SELECT * FROM contato WHERE contato LIKE :q LIMIT $inicio, $lpp";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":q", '%' . $q . '%');
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getContato($id_contato) {
        $sql = "SELECT * FROM contato WHERE id_contato = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_contato);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function inserir($valores) {
        $sql = "INSERT INTO contato SET"
                . " eh_cliente          =:eh_cliente,"
                . " eh_fornecedor       =:eh_fornecedor,"
                . " eh_transportador    =:eh_transportador,"
                . " nome                =:nome,"
                . " nome_fantasia       =:nome_fantasia,"
                . " cpf                 =:cpf,"
                . " cnpj                =:cnpj,"
                . " data_cadastro       =:data_cadastro,"
                . " email               =:email,"
                . " senha               =:senha,"
                . " ddd                 =:ddd,"
                . " telefone            =:telefone,"
                . " celular             =:celular,"
                . " cep                 =:cep,"
                . " logradouro          =:logradouro,"
                . " numero              =:numero,"
                . " complemento         =:complemento,"
                . " bairro              =:bairro,"
                . " id_estado           =:id_estado,"
                . " id_cidade           =:id_cidade,"
                . " ie                  =:ie,"
                . " im                  =:im,"
                . " suframa             =:suframa,"
                . " cod_estrangeiro     =:cod_estrangeiro,"
                . " ie_subst_trib       =:ie_subst_trib,"
                . " rg                  =:rg";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":eh_cliente"       , $valores->eh_cliente);
        $qry->bindValue(":eh_fornecedor"    , $valores->eh_fornecedor);
        $qry->bindValue(":eh_transportador" , $valores->eh_transportador);
        $qry->bindValue(":nome"             , $valores->nome);
        $qry->bindValue(":nome_fantasia"    , $valores->nome_fantasia);
        $qry->bindValue(":cpf"              , $valores->cpf);
        $qry->bindValue(":cnpj"             , $valores->cnpj);
        $qry->bindValue(":data_cadastro"    , $valores->data_cadastro);
        $qry->bindValue(":email"            , $valores->email);
        $qry->bindValue(":senha"            , $valores->senha);
        $qry->bindValue(":ddd"              , $valores->ddd);
        $qry->bindValue(":telefone"         , $valores->telefone);
        $qry->bindValue(":celular"          , $valores->celular);
        $qry->bindValue(":cep"              , $valores->cep);
        $qry->bindValue(":logradouro"       , $valores->logradouro);
        $qry->bindValue(":numero"           , $valores->numero);
        $qry->bindValue(":complemento"      , $valores->complemento);
        $qry->bindValue(":bairro"           , $valores->bairro);
        $qry->bindValue(":id_estado"        , $valores->id_estado);
        $qry->bindValue(":id_cidade"        , $valores->id_cidade);
        $qry->bindValue(":ie"               , $valores->ie);
        $qry->bindValue(":im"               , $valores->im);
        $qry->bindValue(":suframa"          , $valores->suframa);
        $qry->bindValue(":cod_estrangeiro"  , $valores->cod_estrangeiro);
        $qry->bindValue(":ie_subst_trib"    , $valores->ie_subst_trib);
        $qry->bindValue(":rg"               , $valores->rg);
        $qry->execute();
        return $this->db->lastInsertId();
    }

    public function editar($valores) {
        $sql = "UPDATE contato SET"
                . " eh_cliente          =:eh_cliente,"
                . " eh_fornecedor       =:eh_fornecedor,"
                . " eh_transportador    =:eh_transportador,"
                . " nome                =:nome,"
                . " nome_fantasia       =:nome_fantasia,"
                . " cpf                 =:cpf,"
                . " cnpj                =:cnpj,"
                . " data_cadastro       =:data_cadastro,"
                . " email               =:email,"
                . " senha               =:senha,"
                . " ddd                 =:ddd,"
                . " telefone            =:telefone,"
                . " celular             =:celular,"
                . " cep                 =:cep,"
                . " logradouro          =:logradouro,"
                . " numero              =:numero,"
                . " complemento         =:complemento,"
                . " bairro              =:bairro,"
                . " id_estado           =:id_estado,"
                . " id_cidade           =:id_cidade,"
                . " ie                  =:ie,"
                . " im                  =:im,"
                . " suframa             =:suframa,"
                . " cod_estrangeiro     =:cod_estrangeiro,"
                . " ie_subst_trib       =:ie_subst_trib,"
                . " rg                  =:rg"
                . " WHERE id_contato    =:id_contato";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_contato"       , $valores->id_contato);
        $qry->bindValue(":eh_cliente"       , $valores->eh_cliente);
        $qry->bindValue(":eh_fornecedor"    , $valores->eh_fornecedor);
        $qry->bindValue(":eh_transportador" , $valores->eh_transportador);
        $qry->bindValue(":nome"             , $valores->nome);
        $qry->bindValue(":nome_fantasia"    , $valores->nome_fantasia);
        $qry->bindValue(":cpf"              , $valores->cpf);
        $qry->bindValue(":cnpj"             , $valores->cnpj);
        $qry->bindValue(":data_cadastro"    , $valores->data_cadastro);
        $qry->bindValue(":email"            , $valores->email);
        $qry->bindValue(":senha"            , $valores->senha);
        $qry->bindValue(":ddd"              , $valores->ddd);
        $qry->bindValue(":telefone"         , $valores->telefone);
        $qry->bindValue(":celular"          , $valores->celular);
        $qry->bindValue(":cep"              , $valores->cep);
        $qry->bindValue(":logradouro"       , $valores->logradouro);
        $qry->bindValue(":numero"           , $valores->numero);
        $qry->bindValue(":complemento"      , $valores->complemento);
        $qry->bindValue(":bairro"           , $valores->bairro);
        $qry->bindValue(":id_estado"        , $valores->id_estado);
        $qry->bindValue(":id_cidade"        , $valores->id_cidade);
        $qry->bindValue(":ie"               , $valores->ie);
        $qry->bindValue(":im"               , $valores->im);
        $qry->bindValue(":suframa"          , $valores->suframa);
        $qry->bindValue(":cod_estrangeiro"  , $valores->cod_estrangeiro);
        $qry->bindValue(":ie_subst_trib"    , $valores->ie_subst_trib);
        $qry->bindValue(":rg"               , $valores->rg);
        $qry->execute();
        return $this->db->lastInsertId();
    }

    public function delete($id_contato) {
        $sql = "DELETE FROM contato WHERE id_contato =:id_contato";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_contato", $id_contato);
        $qry->execute();
    }

}
