<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Ordemcompra;
use app\models\Statusordemcompra;

class OrdemcompraController extends Controller {

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
        $dados["url"] = URL_BASE . "compra/ordemcompra/?";
        $dados["view"] = "compra/ordemcompra/Index";
        $this->load("template", $dados);
    }

    public function filtro() {
        $objOrdemcompra = new Ordemcompra;
        $objStatusordemcompra = new Statusordemcompra;
        
        $pesquisa = new \stdClass();
        $pesquisa->data_inicial = isset($_GET["data_inicial"]) ? strip_tags(filter_input(INPUT_GET,"data_inicial")) : null;
        $pesquisa->data_final = isset($_GET["data_final"]) ? strip_tags(filter_input(INPUT_GET,"data_final")) : null;
        $pesquisa->id_status = isset($_GET["id_status"]) ? strip_tags(filter_input(INPUT_GET,"id_status")) : null;
        
        //$q = isset($_GET["q"]) ? strip_tags(filter_input(INPUT_GET, "q")) : NULL;
        /*if (!$q) {
            header("location:" . URL_BASE . "categoria");
        }*/

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
        $dados["url"] = URL_BASE . "ordemcompra/filtro/?data_inicial=" . $pesquisa->data_inicial ."&data_final" . $pesquisa->data_final. "&id_status=" . $pesquisa->id_status . "";
        $dados["view"] = "compra/ordemcompra/Index";
        $this->load("template", $dados);
    }

}
