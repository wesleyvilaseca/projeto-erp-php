<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Unidade;

class UnidadeController extends Controller {

    public function index() {
        $objUnidade = new Unidade();
        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objUnidade->getTotal();
        $lpp = 5;
        $inicio = $pg * $lpp;

        $unidades = $objUnidade->listar($inicio, $lpp);
        
        $dados["total"] = $total;
        $dados["unidades"] = $unidades;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["url"] = URL_BASE . "unidade/?";
        $dados["view"] = "unidade/Index";
        $this->load("template", $dados);
    }

    public function create() {
        $dados["view"] = "unidade/Create-Edit";
        $this->load("template", $dados);
    }

    public function edit($id_unidade = null) {
        $objUnidade = new Unidade();
        if (!$id_unidade) {
            header("location: " . URL_BASE . "unidade");
        } else {
            $unidade = $objUnidade->getUnidade($id_unidade);
        }

        if (!$unidade) {
            header("location: " . URL_BASE . "unidade");
        }

        $dados["unidade"] = $unidade;
        $dados["view"] = "unidade/Create-Edit";
        $this->load("template", $dados);
    }

    public function delete($id_unidade = null) {
        $objUnidade = new Unidade();
        if (!$id_unidade) {
            header("location: " . URL_BASE . "unidade");
        } else {
            $unidade = $objUnidade->getUnidade($id_unidade);
        }

        if (!$unidade) {
            header("location: " . URL_BASE . "unidade");
        }

        $dados["unidade"] = $unidade;
        $dados["view"] = "unidade/Delete";
        $this->load("template", $dados);
    }

    public function salvar() {
        $objUnidade = new Unidade();
        //o strip_tags e o filter input estão sendo usados para impedir o sql injection
        $id_unidade = isset($_POST["id_unidade"]) ? strip_tags(filter_input(INPUT_POST, "id_unidade")) : NULL;
        $unidade = isset($_POST["unidade"]) ? strip_tags(filter_input(INPUT_POST, "unidade")) : NULL;
        $abrev = isset($_POST["abrev"]) ? strip_tags(filter_input(INPUT_POST, "abrev")) : NULL;


        if ($id_unidade) {
            $objUnidade->editar($id_unidade, $unidade, $abrev);
        } else {
            $foi = $objUnidade->inserir($unidade, $abrev);
        }

        header("location:" . URL_BASE . "unidade");
    }

    public function excluir($id_unidade = null) {
        $objUnidade = new Unidade();
        if (!$id_unidade) {
            header("location: " . URL_BASE . "unidade");
        } else {
            $unidade = $objUnidade->getUnidade($id_unidade);
        }

        if (!$unidade) {
            header("location: " . URL_BASE . "unidade");
        }

        $objUnidade->delete($id_unidade);
        header("location: " . URL_BASE . "unidade");
    }

    public function filtro() {
        $objUnidade = new Unidade;
        $q = isset($_GET["q"]) ? strip_tags(filter_input(INPUT_GET, "q")) : NULL;
        if (!$q) {
            header("location:" . URL_BASE . "unidade");
        }

        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objUnidade->getTotal($q);
        $lpp = 5;
        $inicio = $pg * $lpp;

        $unidades = $objUnidade->filtro($q, $inicio, $lpp);
        
        $dados["total"] = $total;
        $dados["unidades"] = $unidades;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);

        $dados["q"] = $q;
        $dados["url"] = URL_BASE . "unidade/filtro/?q=" . $q;
        $dados["view"] = "unidade/Index";
        $this->load("template", $dados);
    }

}
