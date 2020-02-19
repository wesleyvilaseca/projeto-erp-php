<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Pedido;
use app\models\Item;
use app\models\Contato;
use app\models\Statuspedido;

class PedidoController extends Controller {

    public function index($status = null) {
        $objPedido = new Pedido();
        $pesquisa = new \stdClass();
        $pesquisa->data_inicial = null;
        $pesquisa->data_final = null;
        $pesquisa->id_contato = null;
        
        isset($status) ?  $pesquisa->id_status = $status :  $pesquisa->id_status = null;
        /*if ($status) {
            $pesquisa->id_status = $status;
        }*/


        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;

        $lpp = 5;
        $inicio = $pg * $lpp;

        $pedidos = $objPedido->listar($inicio, $lpp, $pesquisa->id_status);
        $total = $objPedido->getTotal($pesquisa, $inicio, $lpp);

        $dados["total"] = $total;
        $dados["pedidos"] = $pedidos;
        $dados["status"] = $pedidos;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["url"] = URL_BASE . "pedido/?";
        $dados["view"] = "pedido/Index";
        $this->load("template", $dados);
    }

    public function filtro() {
        $objPedido = new Pedido;
        $objStatuscotacao = new Statuspedido;

        $pesquisa = new \stdClass;

        $pesquisa->data_inicial = isset($_GET["data_inicial"]) ? strip_tags(filter_input(INPUT_GET, "data_inicial")) : null;
        $pesquisa->data_final = isset($_GET["data_final"]) ? strip_tags(filter_input(INPUT_GET, "data_final")) : null;
        $pesquisa->id_status = isset($_GET["id_status"]) ? strip_tags(filter_input(INPUT_GET, "id_status")) : null;

        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $lpp = 5;
        $inicio = $pg * $lpp;

        $total = $objPedido->getTotal($pesquisa, $inicio, $lpp);

        $dados["pedidos"] = $objPedido->filtro($pesquisa, $inicio, $lpp);
        $dados["status"] = $objPedido->listar();
        $dados["pesquisa"] = $pesquisa;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["total"] = $total;
        $dados["url"] = URL_BASE . "pedido/filtro/?data_inicial=" . $pesquisa->data_inicial . "&data_final=" . $pesquisa->data_final . "&id_status=" . $pesquisa->id_status . "";
        $dados["view"] = "pedido/Index";
        $this->load("template", $dados);
    }

    public function atender($id_pedido = null) {
        $objPedido = new Pedido;
        $objItem = new Item;

        if (!$id_pedido) {
            header("Location: " . URL_BASE . "pedido");
        } else {
            $pedido = $objPedido->getPedido($id_pedido);
        }

        if (!$pedido) {
            header("Location: " . URL_BASE . "pedido");
        }

        $dados["pedido"] = $pedido;
        $dados["itens"] = $objItem->listaIdPedido($id_pedido);
        $dados["view"] = "pedido/Atender";
        $this->load("template", $dados);
    }

    public function detalhe($id_pedido = null) {
        $objPedido = new Pedido;
        $objItem = new Item;

        if (!$id_pedido) {
            header("Location: " . URL_BASE . "pedido");
        } else {
            $pedido = $objPedido->getPedido($id_pedido);
        }

        if (!$pedido) {
            header("Location: " . URL_BASE . "pedido");
        }

        $dados["pedido"] = $pedido;
        $dados["itens"] = $objItem->listaIdPedido($id_pedido);
        $dados["view"] = "pedido/Show";
        $this->load("template", $dados);
    }

    public function recusar($id_pedido = null) {
        $objPedido = new Pedido;

        if (!$id_pedido) {
            header("Location: " . URL_BASE . "pedido");
        } else {
            $pedido = $objPedido->getPedido($id_pedido);
        }

        if (!$pedido) {
            header("Location: " . URL_BASE . "pedido");
        }

        $objPedido->recusar($id_pedido);
        header("Location: " . URL_BASE . "pedido");
    }

    public function excluir($id_pedido = null) {
        $objPedido = new Pedido();
        if (!$id_pedido) {
            header("location: " . URL_BASE . "pedido");
        } else {
            $pedido = $objPedido->getPedido($id_pedido);
        }

        if (!$pedido) {
            header("location: " . URL_BASE . "pedido");
        }

        $objPedido->delete($id_pedido);
        header("location: " . URL_BASE . "pedido");
    }

    public function liberar() {
        $objPedido = new Pedido;
        $id_pedido = isset($_POST["id_pedido"]) ? strip_tags(filter_input(INPUT_POST, "id_pedido")) : NULL;
        $pedido = isset($_POST["pedido"]) ? strip_tags(filter_input(INPUT_POST, "pedido")) : NULL;
        $frete = isset($_POST["frete"]) ? strip_tags(filter_input(INPUT_POST, "frete")) : NULL;
        $seguro = isset($_POST["seguro"]) ? strip_tags(filter_input(INPUT_POST, "seguro")) : NULL;
        $desconto = isset($_POST["desconto"]) ? strip_tags(filter_input(INPUT_POST, "desconto")) : NULL;
        $despesa = isset($_POST["despesa"]) ? strip_tags(filter_input(INPUT_POST, "despesa")) : NULL;

        if (!$id_pedido) {
            header("location: " . URL_BASE . "pedido");
        } else {
            $pedido = $objPedido->getPedido($id_pedido);
        }

        if (!$pedido) {
            header("location: " . URL_BASE . "pedido");
        }

        $objPedido->liberar($id_pedido, $frete, $seguro, $desconto, $despesa);
        header("location: " . URL_BASE . "pedido");
    }

    public function filtroe() {
        $objPedido = new Pedido;
        $q = isset($_GET["q"]) ? strip_tags(filter_input(INPUT_GET, "q")) : NULL;
        if (!$q) {
            header("location:" . URL_BASE . "pedido");
        }

        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $total = $objPedido->getTotal($q);
        $lpp = 5;
        $inicio = $pg * $lpp;

        $pedidos = $objPedido->filtro($q, $inicio, $lpp);

        $dados["total"] = $total;
        $dados["pedidos"] = $pedidos;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);

        $dados["q"] = $q;
        $dados["url"] = URL_BASE . "pedido/filtro/?q=" . $q;
        $dados["view"] = "pedido/Index";
        $this->load("template", $dados);
    }

}
