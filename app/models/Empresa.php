<?php

namespace app\models;

use app\core\Model;

class Empresa extends Model {

    public function listar($inicio = null, $lpp = null) {
        if ($inicio || $lpp) {
            $sql = "SELECT * FROM empresa LIMIT $inicio, $lpp";
        } else {
            $sql = "SELECT * FROM empresa";
        }
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getTotal($q = null) {
        if ($q) {
            $sql = "SELECT count(*) as total FROM empresa WHERE empresa LIKE '%$q%'";
        } else {
            $sql = "SELECT count(*) as total FROM empresa";
        }
        $qry = $this->db->query($sql);

        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }

    public function filtro($q, $inicio, $lpp) {
        $sql = "SELECT * FROM empresa WHERE empresa LIKE :q LIMIT $inicio, $lpp";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":q", '%' . $q . '%');
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getEmpresa($id_empresa) {
        $sql = "SELECT * FROM empresa WHERE id_empresa = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_empresa);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function inserir($valores) {
        /*print "<pre>";
        print_r($valores);
        print "</pre>";
        exit();*/
        $sql = "INSERT INTO empresa SET"
                . " razao_social          =:razao_social,"
                . " nome_fantasia         =:nome_fantasia,"
                . " cnpj                  =:cnpj,"
                . " ie                    =:ie,"
                . " im                    =:im,"
                . " ddd                   =:ddd,"
                . " fone                  =:fone,"
                . " celular               =:celular,"
                . " email                 =:email,"
                . " email_secundario      =:email_secundario,"
                . " email_contabilidade   =:email_contabilidade,"
                . " cep                   =:cep,"
                . " endereco              =:endereco,"
                . " numero                =:numero,"
                . " id_estado             =:id_estado,"
                . " complemento           =:complemento,"
                . " bairro                =:bairro,"
                . " id_cidade             =:id_cidade,"
                . " cnae                  =:cnae,"
                . " regime_tributario     =:regime_tributario";
                

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":razao_social"         , $valores->razao_social);
        $qry->bindValue(":nome_fantasia"        , $valores->nome_fantasia);
        $qry->bindValue(":cnpj"                 , $valores->cnpj);
        $qry->bindValue(":ie"                   , $valores->ie);
        $qry->bindValue(":im"                   , $valores->im);
        $qry->bindValue(":ddd"                  , $valores->ddd);
        $qry->bindValue(":fone"                 , $valores->fone);
        $qry->bindValue(":celular"              , $valores->celular);
        $qry->bindValue(":email"                , $valores->email);
        $qry->bindValue(":email_secundario"     , $valores->email_secundario);
        $qry->bindValue(":email_contabilidade"  , $valores->email_contabilidade);
        $qry->bindValue(":cep"                  , $valores->cep);
        $qry->bindValue(":endereco"             , $valores->endereco);
        $qry->bindValue(":numero"               , $valores->numero);
        $qry->bindValue(":id_estado"            , $valores->id_estado);
        $qry->bindValue(":complemento"          , $valores->complemento);
        $qry->bindValue(":bairro"               , $valores->bairro);
        $qry->bindValue(":id_cidade"            , $valores->id_cidade);
        $qry->bindValue(":cnae"                 , $valores->cnae);
        $qry->bindValue(":regime_tributario"    , $valores->regime_tributario);
        $qry->execute();
        return $this->db->lastInsertId();
    }

    public function editar($valores) {
        $sql = "UPDATE empresa SET"
                . " razao_social          =:razao_social,"
                . " nome_fantasia         =:nome_fantasia,"
                . " cnpj                  =:cnpj,"
                . " ie                    =:ie,"
                . " im                    =:im,"
                . " ddd                   =:ddd,"
                . " fone                  =:fone,"
                . " celular               =:celular,"
                . " email                 =:email,"
                . " email_secundario      =:email_secundario,"
                . " email_contabilidade   =:email_contabilidade,"
                . " cep                   =:cep,"
                . " endereco              =:endereco,"
                . " numero                =:numero,"
                . " id_estado             =:id_estado,"
                . " complemento           =:complemento,"
                . " bairro                =:bairro,"
                . " id_cidade             =:id_cidade,"
                . " cnae                  =:cnae,"
                . " regime_tributario     =:regime_tributario"
                . " WHERE id_empresa      =:id_empresa";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_empresa"           , $valores->id_empresa);
        $qry->bindValue(":razao_social"         , $valores->razao_social);
        $qry->bindValue(":nome_fantasia"        , $valores->nome_fantasia);
        $qry->bindValue(":cnpj"                 , $valores->cnpj);
        $qry->bindValue(":ie"                   , $valores->ie);
        $qry->bindValue(":im"                   , $valores->im);
        $qry->bindValue(":ddd"                  , $valores->ddd);
        $qry->bindValue(":fone"                 , $valores->fone);
        $qry->bindValue(":celular"              , $valores->celular);
        $qry->bindValue(":email"                , $valores->email);
        $qry->bindValue(":email_secundario"     , $valores->email_secundario);
        $qry->bindValue(":email_contabilidade"  , $valores->email_contabilidade);
        $qry->bindValue(":cep"                  , $valores->cep);
        $qry->bindValue(":endereco"             , $valores->endereco);
        $qry->bindValue(":numero"               , $valores->numero);
        $qry->bindValue(":id_estado"            , $valores->id_estado);
        $qry->bindValue(":complemento"          , $valores->complemento);
        $qry->bindValue(":bairro"               , $valores->bairro);
        $qry->bindValue(":id_cidade"            , $valores->id_cidade);
        $qry->bindValue(":cnae"                 , $valores->cnae);
        $qry->bindValue(":regime_tributario"    , $valores->regime_tributario);
        $qry->execute();
        return $this->db->lastInsertId();
    }

    public function delete($id_empresa) {
        $sql = "DELETE FROM empresa WHERE id_empresa =:id_empresa";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_empresa", $id_empresa);
        $qry->execute();
    }

}
