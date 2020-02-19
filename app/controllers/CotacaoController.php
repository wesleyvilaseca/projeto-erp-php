<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Cotacao;
use app\models\Solicitacaocotacao;
use app\models\Solicitacao;
use app\models\Fornecedor;
use app\models\Fornecedorcotacao;
use app\models\Itemcotacao;
use app\models\Statuscotacao;

//use app\models\Produto;

class CotacaoController extends Controller {

    public function index($status = null) {
        $objCotacao = new Cotacao;
        $objStatusCotacao = new Statuscotacao;
        //$objProduto = new Produto;

        $pesquisa = new \stdClass();
        $pesquisa->data_inicial = /* date("Y-m-d") */ null;
        $pesquisa->data_final = date("Y-m-d");
        $pesquisa->id_produto = null;
        $pesquisa->id_status = null;


        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objCotacao->getTotal($pesquisa);
        $lpp = 5;
        $inicio = $pg * $lpp;

        $dados["pesquisa"] = $pesquisa;
        $dados["status"] = $objStatusCotacao->listar();
        //$dados["produtos"] = $objProduto->listaInsumo();
        $dados["cotacoes"] = $objCotacao->filtro($pesquisa, $inicio, $lpp);
        $dados["total"] = $total;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["url"] = URL_BASE . "cotacao/?";
        $dados["view"] = "compra/cotacao/Index";
        $this->load("template", $dados);
    }

    public function filtro() {
        $objCotacao = new Cotacao;
        $objStatuscotacao = new Statuscotacao;
        //$objProduto = new Produto;

        $pesquisa = new \stdClass;

        $pesquisa->data_inicial = isset($_GET["data_inicial"]) ? strip_tags(filter_input(INPUT_GET, "data_inicial")) : null;
        $pesquisa->data_final = isset($_GET["data_final"]) ? strip_tags(filter_input(INPUT_GET, "data_final")) : null;
        //$pesquisa->id_produto = isset($_GET["id_produto"]) ? strip_tags(filter_input(INPUT_GET, "id_produto")) : null;
        $pesquisa->id_status = isset($_GET["id_status"]) ? strip_tags(filter_input(INPUT_GET, "id_status")) : null;

        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objCotacao->getTotal($pesquisa);
        $lpp = 5;
        $inicio = $pg * $lpp;


        //$pedidos = $objPedido->filtro($q, $inicio, $lpp);

        $dados["cotacoes"] = $objCotacao->filtro($pesquisa, $inicio, $lpp);
        $dados["status"] = $objStatuscotacao->listar();
        //$dados["produtos"] = $objProduto->lista();
        $dados["pesquisa"] = $pesquisa;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["total"] = $total;
        $dados["url"] = URL_BASE . "cotacao/filtro/?data_inicial=" . $pesquisa->data_inicial . "&data_final=" . $pesquisa->data_final . "&id_status=" . $pesquisa->id_status . "";
        $dados["view"] = "compra/cotacao/Index";
        //$dados["pedidos"] = $pedidos;
        $this->load("template", $dados);
    }   


    public function create() {
        $objSolicitacao = new Solicitacao;
        $objSolicitacaoAbertas = $objSolicitacao->abertas();

        $objCotacao = new Cotacao;
        $objSolicitacaoCotacao = new Solicitacaocotacao;
        $objFornecedor = new Fornecedor;
        $objFornecedorCotacao = new Fornecedorcotacao;

        $cotacao = $objCotacao->getCotacaoNaoFinalizada();
        if (!$cotacao) {
            if ($objSolicitacaoAbertas) {
                $id_cotacao = $objCotacao->novaCotacao();
                $cotacao = $objCotacao->getCotacao($id_cotacao);
            }
        }
        if (isset($_POST["idSolicitacao"])) {
            $this->inserirCotacaoEmMassa($cotacao->id_cotacao, $_POST["idSolicitacao"]);
        }

        $dados["cotacao"] = $cotacao;
        $dados["solicitacoes"] = isset($cotacao->id_cotacao) ? $objSolicitacaoCotacao->listaPorCotacao($cotacao->id_cotacao) : header("Location:" . URL_BASE . "solicitacao");
        $dados["abertas"] = $objSolicitacaoAbertas;
        $dados["fornecedores"] = $objFornecedor->listar();
        $dados["lstFornecedores"] = $objFornecedorCotacao->listaPorCotacao($cotacao->id_cotacao);
        $dados["view"] = "compra/cotacao/Create";
        $this->load("template", $dados);
    }

    public function inserirCotacaoEmMassa($id_cotacao, $solicitacoes) {
        $objSolicitacao = new Solicitacao;
        $objSolicitacaoCotacao = new Solicitacaocotacao;

//verifica solicitacoes em aberto
        for ($i = 0; $i < count($solicitacoes); $i++) {
            //verifica o id das solicitacoes
            $id_solicitacao = $solicitacoes[$i];
            $exist = $objSolicitacaoCotacao->getSolicitacaoCotacao($id_solicitacao, $id_cotacao);
            if (!$exist) {
                $id = $objSolicitacaoCotacao->inserir($id_solicitacao, $id_cotacao);
                if ($id) {
                    $objSolicitacao->mudarStatus($id_solicitacao, 2);
                }
            }
        }
    }

    public function inserirSolicitacao() {
        $objSolicitacaoCotacao = new Solicitacaocotacao;
        $objSolicitacao = new Solicitacao;
        $id_solicitacao = $_POST["id_solicitacao"];
        $id_cotacao = $_POST["id_cotacao"];


        $exist = $objSolicitacaoCotacao->getSolicitacaoCotacao($id_solicitacao, $id_cotacao);
        if (!$exist) {
            $id = $objSolicitacaoCotacao->inserir($id_solicitacao, $id_cotacao);
            if ($id) {
                $objSolicitacao->mudarStatus($id_solicitacao, 2);
            }
        }
        header("Location:" . URL_BASE . "cotacao/create");
    }

    public function inserirFornecedor() {
        $objFornecedorCotacao = new Fornecedorcotacao;
        $id_fornecedor = $_POST["id_fornecedor"];
        $id_cotacao = $_POST["idCotacao"];

        $exist = $objFornecedorCotacao->getFornecedorCotacao($id_fornecedor, $id_cotacao);
        if (!$exist) {
            $id = $objFornecedorCotacao->inserir($id_fornecedor, $id_cotacao);
        }

        header("Location:" . URL_BASE . "cotacao/create");
    }

    public function excluirSolicitacaoCotacao($id, $id_solicitacao) {
        $objSolicitacaocotacao = new Solicitacaocotacao;
        $objSolicitacao = new Solicitacao;
        $objSolicitacaocotacao->excluir($id);
        $objSolicitacao->mudarStatus($id_solicitacao, 1);
        header("Location:" . URL_BASE . "cotacao/create");
    }


    public function excluirFornecedorCotacao($id) {
        $objFornecedorCotacao = new Fornecedorcotacao;
        $objFornecedorCotacao->excluir($id);
        header("Location:" . URL_BASE . "cotacao/create");
    }

    public function finalizarCotacao($id) {
        $objCotacao = new Cotacao;
        $objSolicitacao = new Solicitacao;
        $objSolicitacaoCotacao = new Solicitacaocotacao;
        $objFornecedorCotacao = new Fornecedorcotacao;
        $objItemCotacao = new Itemcotacao;

        $fornecedores = $objFornecedorCotacao->listaPorCotacao($id);
        $solicitacoes = $objSolicitacaoCotacao->listaPorCotacao($id);
        $cotacao = $objCotacao->getCotacao($id);

        foreach ($fornecedores as $fornecedor) {

            foreach ($solicitacoes as $solicitacao) {
                $item = new \stdClass();
                $item->id_cotacao = $id;
                $item->id_fornecedor = $fornecedor->id_contato;
                $item->id_solicitacao = $solicitacao->id_solicitacao;
                $item->status = 1;
                $item->id_produto = $solicitacao->id_produto;
                $item->qtd = $solicitacao->qtd;
                $item->limite_entrega = $solicitacao->data_entrega;

                $exist = $objItemCotacao->exist($id, $solicitacao->id_solicitacao, $fornecedor->id_contato);
                if (!$exist) {
                    $objItemCotacao->inserir($item);
                }
            }
        }

        $objCotacao->finalizarCotacao($id);
        /*

         * agora precisa enviar o  email para os fornecedores
         * 
         *              */

        header("Location:" . URL_BASE . "cotacao");
    }

    public function compararPreco($id_cotacao) {
        $objCotacao = new Cotacao;
        $objItemCotacao = new Itemcotacao;

        if (!$id_cotacao) {
            header("Location: " . URL_BASE . "cotacao");
        } else {
            $cotacao = $objCotacao->getCotacao($id_cotacao);
        }

        if (!$cotacao) {
            header("Location: " . URL_BASE . "cotacao");
        }

        $dados["cotacao"] = $cotacao;
        $dados["itens"] = $itens = $objItemCotacao->listaComparativaPrecos($id_cotacao);
        $dados["view"] = "compra/cotacao/Comparar";
        $this->load("template_alternativo", $dados);
    }

}
