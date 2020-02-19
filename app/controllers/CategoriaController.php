<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Categoria;

class CategoriaController extends Controller {

    public function index() {
        $objCategoria = new Categoria();
        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objCategoria->getTotal();
        $lpp = 5;
        $inicio = $pg * $lpp;

        $categorias = $objCategoria->listar($inicio, $lpp);
        
        $dados["total"] = $total;
        $dados["categorias"] = $categorias;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["url"] = URL_BASE . "categoria/?";
        $dados["view"] = "categoria/Index";
        $this->load("template", $dados);
    }

    public function create() {
        $dados["view"] = "categoria/Create-Edit";
        $this->load("template", $dados);
    }

    public function edit($id_categoria = null) {
        $objCategoria = new Categoria();
        if (!$id_categoria) {
            header("location: " . URL_BASE . "categoria");
        } else {
            $categoria = $objCategoria->getCategoria($id_categoria);
        }

        if (!$categoria) {
            header("location: " . URL_BASE . "categoria");
        }

        $dados["categoria"] = $categoria;
        $dados["view"] = "categoria/Create-Edit";
        $this->load("template", $dados);
    }

    public function delete($id_categoria = null) {
        $objCategoria = new Categoria();
        if (!$id_categoria) {
            header("location: " . URL_BASE . "categoria");
        } else {
            $categoria = $objCategoria->getCategoria($id_categoria);
        }

        if (!$categoria) {
            header("location: " . URL_BASE . "categoria");
        }

        $dados["categoria"] = $categoria;
        $dados["view"] = "categoria/Delete";
        $this->load("template", $dados);
    }

    public function salvar() {
        $objCategoria = new Categoria();
        //o strip_tags e o filter input estão sendo usados para impedir o sql injection
        $id_categoria = isset($_POST["id_categoria"]) ? strip_tags(filter_input(INPUT_POST, "id_categoria")) : NULL;
        $categoria = isset($_POST["categoria"]) ? strip_tags(filter_input(INPUT_POST, "categoria")) : NULL;
        $ativo_categoria = isset($_POST["ativo_categoria"]) ? strip_tags(filter_input(INPUT_POST, "ativo_categoria")) : NULL;


        if ($id_categoria) {
            $objCategoria->editar($id_categoria, $categoria, $ativo_categoria);
        } else {
            $foi = $objCategoria->inserir($categoria, $ativo_categoria);
        }

        header("location:" . URL_BASE . "categoria");
    }

    public function excluir($id_categoria = null) {
        $objCategoria = new Categoria();
        if (!$id_categoria) {
            header("location: " . URL_BASE . "categoria");
        } else {
            $categoria = $objCategoria->getCategoria($id_categoria);
        }

        if (!$categoria) {
            header("location: " . URL_BASE . "categoria");
        }

        $objCategoria->delete($id_categoria);
        header("location: " . URL_BASE . "categoria");
    }

    public function filtro() {
        $objCategoria = new Categoria;
        $q = isset($_GET["q"]) ? strip_tags(filter_input(INPUT_GET, "q")) : NULL;
        if (!$q) {
            header("location:" . URL_BASE . "categoria");
        }

        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objCategoria->getTotal($q);
        $lpp = 5;
        $inicio = $pg * $lpp;

        $categorias = $objCategoria->filtro($q, $inicio, $lpp);
        
        $dados["total"] = $total;
        $dados["categorias"] = $categorias;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);

        $dados["q"] = $q;
        $dados["url"] = URL_BASE . "categoria/filtro/?q=" . $q;
        $dados["view"] = "categoria/Index";
        $this->load("template", $dados);
    }

}
