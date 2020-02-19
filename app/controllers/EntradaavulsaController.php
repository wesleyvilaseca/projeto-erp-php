<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Entradaavulsa;
use app\models\Produto;

class EntradaavulsaController extends Controller {

    public function index() {
        $objEntradaAvulsa = new Entradaavulsa;
        $objProduto = new Produto;

        $pesquisa = new \stdClass();

        $pesquisa->data_inicial = NULL;
        $pesquisa->data_final = NULL;
        $pesquisa->id_produto = NULL;

        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objEntradaAvulsa->getTotal($pesquisa);
        $lpp = 5;
        $inicio = $pg * $lpp;

        $dados["total"] = $total;
        $dados["ordens"] = $objEntradaAvulsa->filtro($pesquisa, $inicio, $lpp);
        $dados["entradas"] = $objEntradaAvulsa->listaEntrada();
        $dados["produtos"] = $objProduto->lista();
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["url"] = URL_BASE . "entradaavulsa/?";
        $dados["view"] = "entrada/avulsa/create";
        $this->load("template", $dados);
    }

    public function filtro() {
        $objOrdemcompra = new Ordemcompra;
        $objStatusordemcompra = new Statusordemcompra;

        $pesquisa = new \stdClass();
        $pesquisa->data_inicial = isset($_GET["data_inicial"]) ? strip_tags(filter_input(INPUT_GET, "data_inicial")) : null;
        $pesquisa->data_final = isset($_GET["data_final"]) ? strip_tags(filter_input(INPUT_GET, "data_final")) : null;
        $pesquisa->id_produto = isset($_GET["id_produto"]) ? strip_tags(filter_input(INPUT_GET, "id_produto")) : null;

        //$q = isset($_GET["q"]) ? strip_tags(filter_input(INPUT_GET, "q")) : NULL;
        /* if (!$q) {
          header("location:" . URL_BASE . "categoria");
          } */

        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objOrdemcompra->getTotal($pesquisa);
        $lpp = 5;
        $inicio = $pg * $lpp;

        //$categorias = $objCategoria->filtro($q, $inicio, $lpp);

        $dados["ordens"] = $objOrdemcompra->filtro($pesquisa, $inicio, $lpp);
        $dados["status"] = $objStatusordemcompra->listar();
        $dados["total"] = $total;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["url"] = URL_BASE . "entradaavulsa/filtro/?data_inicial=" . $pesquisa->data_inicial . "&data_final" . $pesquisa->data_final . "&id_status=" . $pesquisa->id_status . "";
        $dados["view"] = "entrada/avulsa/Create";
        $this->load("template", $dados);
    }

    public function inserir() {
        $objEntradaAvulso = new Entradaavulsa;
        
        $produto = new \stdClass();
        $produto->id_produto = isset($_POST["id_produto"]) ? strip_tags(filter_input(INPUT_POST, "id_produto")) : null;
        $produto->qtd = isset($_POST["qtd"]) ? strip_tags(filter_input(INPUT_POST, "qtd")) : null;
        $produto->preco = isset($_POST["preco"]) ? strip_tags(filter_input(INPUT_POST, "preco")) : null;
        
        $objEntradaAvulso->inserir($produto);
        $itens = $objEntradaAvulso->listaEntrada();
        
        echo json_encode($itens);
    }

}
