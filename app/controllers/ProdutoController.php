<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Produto;
use app\models\Categoria;
use app\models\Unidade;

class ProdutoController extends Controller {

    public function index() {
        $objProduto = new Produto;
        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;

        $lpp = 5;
        $total = $objProduto->getTotal();
        $inicio = $pg * $lpp;
        $dados["total"] = $total;

        $dados["produtos"] = $objProduto->lista($inicio, $lpp);
        $dados["url"] = URL_BASE . "produto/?";
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["view"] = "produto/Index";
        $this->load("template", $dados);
    }

    public function create() {
        $objCategoria = new Categoria;
        $objUnidade = new Unidade;

        $dados["unidades"] = $objUnidade->listar();
        $dados["categorias"] = $objCategoria->listar();
        $dados["view"] = "produto/Create-Edit";
        $this->load("template", $dados);
    }

    public function edit($id_produto = null) {
        $objProduto = new Produto;
        $objCategoria = new Categoria;
        $objUnidade = new Unidade;

        if (!$id_produto) {
            header("location: " . URL_BASE . "produto");
        } else {
            $produto = $objProduto->getProduto($id_produto);
        }

        if (!$produto) {
            header("location: " . URL_BASE . "produto");
        }

        $dados["produto"] = $objProduto->getProduto($id_produto);
        $dados["unidades"] = $objUnidade->listar();
        $dados["categorias"] = $objCategoria->listar();

        $dados["view"] = "produto/Create-Edit";
        $this->load("template", $dados);
    }

    public function delete($id_produto = null) {
        $objProduto = new Produto;
        $objCategoria = new Categoria;
        $objUnidade = new Unidade;

        if (!$id_produto) {
            header("location: " . URL_BASE . "produto");
        } else {
            $produto = $objProduto->getProduto($id_produto);
        }

        if (!$produto) {
            header("location: " . URL_BASE . "produto");
        }

        $dados["produto"] = $objProduto->getProduto($id_produto);
        $dados["unidades"] = $objUnidade->listar();
        $dados["categorias"] = $objCategoria->listar();

        $dados["view"] = "produto/Delete";
        $this->load("template", $dados);
    }

    public function salvar() {
        global $config_upload;

        $objProduto = new Produto;
        $id_produto = isset($_POST["id_produto"]) ? strip_tags(filter_input(INPUT_POST, "id_produto")) : null;
        $path_imagem = isset($_POST["imagem"]) ? strip_tags(filter_input(INPUT_POST, "imagem")) : null;

        if (!empty($_FILES["arquivo"][name])) {
            $subiu = upload($_FILES["arquivo"], $config_upload);
            if ($subiu["erro"] == 0) {
                $path_imagem = $subiu["nome"];
            } else {
                echo $subiu["erro"];
                exit;
            }
        }

        $valores = (object) array(
                    "id_produto" => $id_produto,
                    "id_categoria" => isset($_POST["id_categoria"]) ? strip_tags(filter_input(INPUT_POST, "id_categoria")) : null,
                    "produto" => isset($_POST["produto"]) ? strip_tags(filter_input(INPUT_POST, "produto")) : null,
                    "imagem" => $path_imagem,
                    "sku" => isset($_POST["sku"]) ? strip_tags(filter_input(INPUT_POST, "sku")) : null,
                    "id_unidade" => isset($_POST["id_unidade"]) ? strip_tags(filter_input(INPUT_POST, "id_unidade")) : null,
                    "preco_alto" => isset($_POST["preco_alto"]) ? strip_tags(filter_input(INPUT_POST, "preco_alto")) : null,
                    "preco" => isset($_POST["preco"]) ? strip_tags(filter_input(INPUT_POST, "preco")) : null,
                    "ativo" => isset($_POST["ativo"]) ? strip_tags(filter_input(INPUT_POST, "ativo")) : null
        );

        if ($id_produto) {
            $objProduto->editar($valores);
        } else {
            $objProduto->salvar($valores);
        }
        header("location: " . URL_BASE . "produto");
    }

    public function excluir($id_produto = null) {
        $objProduto = new Produto;
        if (!$id_produto) {
            header("location: " . URL_BASE . "produto");
        } else {
            $produto = $objProduto->getProduto($id_produto);
        }

        if (!$produto) {
            header("location: " . URL_BASE . "produto");
        }

        $objProduto->delete($id_produto);
        header("location: " . URL_BASE . "produto");
    }

    public function pesquisa() {
        $objProduto = new Produto;
        $q = $_POST["q"];
        if ($q == null) {
            echo json_encode("");
        } else {
            $produtos = $objProduto->produtoPorNome($q);
            echo json_encode($produtos);
        }
    }

}
