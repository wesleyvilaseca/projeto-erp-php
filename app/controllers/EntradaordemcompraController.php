<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ordemcompra;
use app\models\Statusordemcompra;
use app\models\Itemordemcompra;
use app\models\Historicomovimento;
use app\models\Produto;

class EntradaordemcompraController extends Controller {

    public function index() {
        $objOrdemCompra = new Ordemcompra;
        $objStatusordemcompra = new Statusordemcompra;

        $pesquisa = new \stdClass();

        $pesquisa->data_inicial = NULL;
        $pesquisa->data_final = NULL;
        $pesquisa->id_status = 1;

        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objOrdemCompra->getTotal($pesquisa);
        $lpp = 5;
        $inicio = $pg * $lpp;

        $dados["total"] = $total;
        $dados["ordens"] = $objOrdemCompra->filtro($pesquisa, $inicio, $lpp);
        $dados["status"] = $objStatusordemcompra->listar();
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["url"] = URL_BASE . "entradaordemcompra/?";
        $dados["view"] = "entrada/ordem/Index";
        $this->load("template", $dados);
    }

    public function filtro() {
        $objOrdemcompra = new Ordemcompra;
        $objStatusordemcompra = new Statusordemcompra;

        $pesquisa = new \stdClass();
        $pesquisa->data_inicial = isset($_GET["data_inicial"]) ? strip_tags(filter_input(INPUT_GET, "data_inicial")) : null;
        $pesquisa->data_final = isset($_GET["data_final"]) ? strip_tags(filter_input(INPUT_GET, "data_final")) : null;
        $pesquisa->id_status = isset($_GET["id_status"]) ? strip_tags(filter_input(INPUT_GET, "id_status")) : null;

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
        $dados["url"] = URL_BASE . "entradaordemcompra/filtro/?data_inicial=" . $pesquisa->data_inicial . "&data_final" . $pesquisa->data_final . "&id_status=" . $pesquisa->id_status . "";
        $dados["view"] = "entrada/ordem/Index";
        $this->load("template", $dados);
    }

    public function atender($id_ordem) {
        $objOrdemcompra = new Ordemcompra;
        $objItemOrdemCompra = new Itemordemcompra;
        $objHistoricoMovimento = new Historicomovimento;
        
        if (!$id_ordem) {
            header("location:" . URL_BASE . "entradaordemcompra");
        } else {
            $ordemcompra = $objOrdemcompra->getOrdemCompra($id_ordem);
        }

        if (!$ordemcompra) {
            header("location:" . URL_BASE . "entradaordemcompra");
        }


        $dados["ordemcompra"] = $ordemcompra;
        $dados["itens"] = $objItemOrdemCompra->listaItensOrdemCompra($id_ordem);
        $dados["view"] = "entrada/ordem/Atender";
        $this->load("template", $dados);
    }

    public function entradaPorOrdemDeCompra($id_ordem) {
        $objOrdemcompra = new Ordemcompra;
        $objItemOrdemCompra = new Itemordemcompra;
        $objHistoricoMovimento = new Historicomovimento;
        $objProduto = new Produto;
        
        
        if (!$id_ordem) {
            header("location:" . URL_BASE . "entradaordemcompra");
        } else {
            $ordemcompra = $objOrdemcompra->getOrdemCompra($id_ordem);
        }

        if (!$ordemcompra) {
            header("location:" . URL_BASE . "entradaordemcompra");
        }

        $itens = $objItemOrdemCompra->listaItensOrdemCompra($id_ordem);

        $tipo_movimento = 1;

        foreach ($itens as $item) {
            $historico = new \stdClass();
            $historico->id_produto = $item->id_produto;
            $historico->id_tipo_movimento = $tipo_movimento;
            $historico->id_ordem_compra = $id_ordem;
            $historico->entrada_saida = "E";
            $historico->data_movimento = date("Y-m-d");
            $historico->documento = $item->id_item_ordem_compra;
            $historico->descricao_movimento = "Entrada ref a ordem de compra: " . $id_ordem;
            $historico->qtd_movimento = $item->qtd;
            $historico->valor_movimento = $item->valor;
            $historico->subtotal_movimento = $item->qtd * $item->valor;
            
            $id = $objHistoricoMovimento->inserir($historico);
            
            if($id){
                $objProduto->atualizarEstoque($historico->id_produto, $historico->qtd_movimento);
            }
        }
        
        $objOrdemcompra->marcarComoFinalizado($id_ordem);
        header("location:" . URL_BASE . "entradaordemcompra");
        
        /*print '<pre>';
        print_r($historico);
        print '</pre>';*/
        
        /*$dados["ordemcompra"] = $ordemcompra;
        $dados["itens"] = $objItemOrdemCompra->listaItensOrdemCompra($id_ordem);
        $dados["view"] = "entrada/ordem/Atender";
        $this->load("template", $dados);*/
    }

}
