<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Solicitacao;
use app\models\Statussolicitacao;
use app\models\Produto;

class SolicitacaoController extends Controller {

    public function index($status = null) {
        $objSolicitacao = new Solicitacao;
        $objStatusSolicitacao = new Statussolicitacao;
        $objProduto = new Produto;

        $pesquisa = new \stdClass();
        $pesquisa->data_inicial = /*date("Y-m-d")*/ null;
        $pesquisa->data_final = date("Y-m-d");
        $pesquisa->id_produto = null;
        $pesquisa->id_status = null;


        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objSolicitacao->getTotal($pesquisa);
        $lpp = 5;
        $inicio = $pg * $lpp;

        $dados["pesquisa"] = $pesquisa;
        $dados["status"] = $objStatusSolicitacao->listar();
        $dados["produtos"] = $objProduto->listaInsumo();
        $dados["solicitacoes"] = $objSolicitacao->filtro($pesquisa, $inicio, $lpp);
        $dados["total"] = $total;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["url"] = URL_BASE . "solicitacao/?";
        $dados["view"] = "compra/solicitacao/Index";
        $this->load("template", $dados);
    }

    public function filtro() {
        $objSolicitacao = new Solicitacao;
        $objStatussolicitacao = new Statussolicitacao;
        $objProduto = new Produto;

        $pesquisa = new \stdClass;

        $pesquisa->data_inicial = isset($_GET["data_inicial"]) ? strip_tags(filter_input(INPUT_GET, "data_inicial")) : null;
        $pesquisa->data_final = isset($_GET["data_final"]) ? strip_tags(filter_input(INPUT_GET, "data_final")) : null;
        $pesquisa->id_produto = isset($_GET["id_produto"]) ? strip_tags(filter_input(INPUT_GET, "id_produto")) : null;
        $pesquisa->id_status = isset($_GET["id_status"]) ? strip_tags(filter_input(INPUT_GET, "id_status")) : null;

        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objSolicitacao->getTotal($pesquisa);
        $lpp = 5;
        $inicio = $pg * $lpp;


        //$pedidos = $objPedido->filtro($q, $inicio, $lpp);

        $dados["solicitacoes"] = $objSolicitacao->filtro($pesquisa, $inicio, $lpp);
        $dados["status"] = $objStatussolicitacao->listar();
        $dados["produtos"] = $objProduto->lista();
        $dados["pesquisa"] = $pesquisa;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["total"] = $total;
        $dados["url"] = URL_BASE . "solicitacao/filtro/?data_inicial=" . $pesquisa->data_inicial . "&data_final=" . $pesquisa->data_final . "&id_produto=" . $pesquisa->id_produto . "&id_status=" . $pesquisa->id_status . "";
        $dados["view"] = "compra/solicitacao/Index";
        //$dados["pedidos"] = $pedidos;
        $this->load("template", $dados);
    }

    public function inserir() {
        $objSolicitacao = new Solicitacao;

        $solicitacao = new \stdClass();
        $solicitacao->data_solicitacao          = isset($_POST["data_solicitacao"]) ? strip_tags(filter_input(INPUT_POST, "data_solicitacao")) : date("Y-m-d");
        $solicitacao->data_entrega              = isset($_POST["data_entrega"]) ? strip_tags(filter_input(INPUT_POST, "data_entrega")) : null;
        $solicitacao->id_status_solicitacao     = isset($_POST["id_status_solicitacao"]) ? strip_tags(filter_input(INPUT_POST, "id_status_solicitacao")) : 1;
        $solicitacao->id_produto                = isset($_POST["id_produto"]) ? strip_tags(filter_input(INPUT_POST, "id_produto")) : null;

        $solicitacao->qtd                       = isset($_POST["qtd"]) ? strip_tags(filter_input(INPUT_POST, "qtd")) : null;
        $solicitacao->id_ordem_producao         = null;

        $objSolicitacao->inserir($solicitacao);

        header("Location: " . URL_BASE . "solicitacao");
    }
    


}
