<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Empresa;
use app\models\Estado;
use app\models\Cidade;

class EmpresaController extends Controller {

    public function index() {
        $objEmpresa = new Empresa;
        $objEstado  = new Estado;
        $objCidade  = new Cidade;
        
        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objEmpresa->getTotal();
        $lpp = 5;
        $inicio = $pg * $lpp;

        $empresas = $objEmpresa->listar($inicio, $lpp);
        $dados["cidades"]     = $objCidade->listar();
        $dados["estados"]     = $objEstado->listar();
        
        $dados["total"]     = $total;
        $dados["empresas"]  = $empresas;
        $dados["pg"]        = $pg;
        $dados["paginas"]   = ceil($total / $lpp - 1);
        $dados["url"]       = URL_BASE . "empresa/?";
        $dados["view"]      = "empresa/Index";
        $this->load("template", $dados);
    }

    public function create() {
        $objEstado  = new Estado;
        $objCidade  = new Cidade;
        $dados["cidades"]     = $objCidade->listar();
        $dados["estados"]     = $objEstado->listar();
        $dados["view"] = "empresa/Create-Edit";
        $this->load("template", $dados);
    }

    public function edit($id_empresa = null) {
        $objEmpresa = new Empresa;
        $objEstado  = new Estado;
        $objCidade  = new Cidade;
        
        
        if (!$id_empresa) {
            header("location: " . URL_BASE . "empresa");
        } else {
            $empresa = $objEmpresa->getEmpresa($id_empresa);
        }

        if (!$empresa) {
            header("location: " . URL_BASE . "empresa");
        }
        
        $dados["cidades"]     = $objCidade->listar();
        $dados["estados"]     = $objEstado->listar();
        $dados["empresa"] = $empresa;
        $dados["view"] = "empresa/Create-Edit";
        $this->load("template", $dados);
    }

    public function delete($id_empresa = null) {
        $objEmpresa = new Empresa();
        if (!$id_empresa) {
            header("location: " . URL_BASE . "empresa");
        } else {
            $empresa = $objEmpresa->getEmpresa($id_empresa);
        }

        if (!$empresa) {
            header("location: " . URL_BASE . "empresa");
        }

        $dados["empresa"] = $empresa;
        $dados["view"] = "empresa/Delete";
        $this->load("template", $dados);
    }

    public function salvar() {
        $objEmpresa     = new Empresa();
        //o strip_tags e o filter input estão sendo usados para impedir o sql injection
        
        $id_empresa     = isset($_POST["id_empresa"]) ? strip_tags(filter_input(INPUT_POST, "id_empresa")) : NULL;
        
        $valores        = (object) array(
            "id_empresa"            => $id_empresa,
            "razao_social"          => isset($_POST["razao_social"]) ? strip_tags(filter_input(INPUT_POST, "razao_social")) : NULL,
            "nome_fantasia"         => isset($_POST["nome_fantasia"]) ? strip_tags(filter_input(INPUT_POST, "nome_fantasia")) : NULL,
            "cnpj"                  => isset($_POST["cnpj"]) ? strip_tags(filter_input(INPUT_POST, "cnpj")) : NULL,
            "ie"                    => isset($_POST["ie"]) ? strip_tags(filter_input(INPUT_POST, "ie")) : NULL,
            "im"                    => isset($_POST["im"]) ? strip_tags(filter_input(INPUT_POST, "im")) : NULL,
            "ddd"                   => isset($_POST["ddd"]) ? strip_tags(filter_input(INPUT_POST, "ddd")) : NULL,
            "fone"                  => isset($_POST["fone"]) ? strip_tags(filter_input(INPUT_POST, "fone")) : NULL,
            "celular"               => isset($_POST["celular"]) ? strip_tags(filter_input(INPUT_POST, "celular")) : NULL,
            "email"                 => isset($_POST["email"]) ? strip_tags(filter_input(INPUT_POST, "email")) : NULL,
            "email_secundario"      => isset($_POST["email_secundario"]) ? strip_tags(filter_input(INPUT_POST, "email_secundario")) : NULL,
            "email_contabilidade"   => isset($_POST["email_contabilidade"]) ? strip_tags(filter_input(INPUT_POST, "email_contabilidade")) : NULL,
            "cep"                   => isset($_POST["cep"]) ? strip_tags(filter_input(INPUT_POST, "cep")) : NULL,
            "endereco"              => isset($_POST["endereco"]) ? strip_tags(filter_input(INPUT_POST, "endereco")) : NULL,
            //"ativo"           => isset($_POST["ativo"]) ? strip_tags(filter_input(INPUT_POST, "ativo")) : NULL,
            "numero"                => isset($_POST["numero"]) ? strip_tags(filter_input(INPUT_POST, "numero")) : NULL,
            "id_estado"             => isset($_POST["id_estado"]) ? strip_tags(filter_input(INPUT_POST, "id_estado")) : NULL,
            "complemento"           => isset($_POST["complemento"]) ? strip_tags(filter_input(INPUT_POST, "complemento")) : NULL,
            "bairro"                => isset($_POST["bairro"]) ? strip_tags(filter_input(INPUT_POST, "bairro")) : NULL,
            "id_cidade"             => isset($_POST["id_cidade"]) ? strip_tags(filter_input(INPUT_POST, "id_cidade")) : NULL,
            "cnae"                  => isset($_POST["cnae"]) ? strip_tags(filter_input(INPUT_POST, "cnae")) : NULL,
            "regime_tributario"     => isset($_POST["regime_tributario"]) ? strip_tags(filter_input(INPUT_POST, "regime_tributario")) : NULL,
            
        );
        if ($id_empresa) {
            $objEmpresa->editar($valores);
        } else {
            $foi = $objEmpresa->inserir($valores);
        }

        header("location:" . URL_BASE . "empresa");
    }

    public function excluir($id_empresa = null) {
        $objEmpresa = new Empresa();
        if (!$id_empresa) {
            header("location: " . URL_BASE . "empresa");
        } else {
            $empresa = $objEmpresa->getEmpresa($id_empresa);
        }

        if (!$empresa) {
            header("location: " . URL_BASE . "empresa");
        }

        $objEmpresa->delete($id_empresa);
        header("location: " . URL_BASE . "empresa");
    }

    public function filtro() {
        $objEmpresa = new Empresa;
        $q = isset($_GET["q"]) ? strip_tags(filter_input(INPUT_GET, "q")) : NULL;
        if (!$q) {
            header("location:" . URL_BASE . "empresa");
        }

        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objEmpresa->getTotal($q);
        $lpp = 5;
        $inicio = $pg * $lpp;

        $empresas = $objEmpresa->filtro($q, $inicio, $lpp);
        
        $dados["total"] = $total;
        $dados["empresas"] = $empresas;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);

        $dados["q"] = $q;
        $dados["url"] = URL_BASE . "empresa/filtro/?q=" . $q;
        $dados["view"] = "empresa/Index";
        $this->load("template", $dados);
    }

}
