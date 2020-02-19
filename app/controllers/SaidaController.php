<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Saida;
use app\models\Contato;
use app\models\Statuspedido;
use app\models\Item;
use app\models\Produto;

class SaidaController extends Controller {

    public function index($status = null) {
        $objSaida = new Saida;
        $objContato = new Contato;
        $objStatusPedido = new Statuspedido;

        $pesquisa = new \stdClass();
        $pesquisa->data_inicial = null;
        $pesquisa->data_final = null;
        $pesquisa->id_contato = null;
        $pesquisa->id_status = null;

        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;

        $lpp = 5;
        $inicio = $pg * $lpp;

        $pedidos = $objSaida->listar($inicio, $lpp, $pesquisa->id_status);
        $total = $objSaida->getTotalE($pesquisa, $inicio, $lpp);

        $dados["total"] = $total;
        $dados["status"] = $objSaida->listar();
        $dados["saidas"] = $pedidos;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["url"] = URL_BASE . "saida/?";
        $dados["view"] = "saida/Index";
        $this->load("template", $dados);
    }

    public function filtro() {
        $objSaida = new Saida;
        $pesquisa = new \stdClass;

        $pesquisa->data_inicial = isset($_GET["data_inicial"]) ? strip_tags(filter_input(INPUT_GET, "data_inicial")) : null;
        $pesquisa->data_final = isset($_GET["data_final"]) ? strip_tags(filter_input(INPUT_GET, "data_final")) : null;
        $pesquisa->id_status = isset($_GET["id_status"]) ? strip_tags(filter_input(INPUT_GET, "id_status")) : null;

        if (!$pesquisa) {
            header("location:" . URL_BASE . "saida");
        }

        $pg = isset($_GET["pg"]) ? $_GET["pg"] : 0;
        $lpp = 5;
        $inicio = $pg * $lpp;

        $pedidos = $objSaida->filtroE($pesquisa, $inicio, $lpp);
        $total = $objSaida->getTotalE($pesquisa, $inicio, $lpp);


        $dados["status"] = $objSaida->listar();
        $dados["total"] = $total;
        $dados["saidas"] = $pedidos;
        $dados["pg"] = $pg;
        $dados["paginas"] = ceil($total / $lpp - 1);
        $dados["pesquisa"] = $pesquisa;
        $dados["url"] = URL_BASE . "saida/filtro/?data_inicial=" . $pesquisa->data_inicial . "&data_final=" . $pesquisa->data_final . "&id_status=" . $pesquisa->id_status . "";
        $dados["view"] = "saida/Index";
        $this->load("template", $dados);
    }

    public function fazer_atendimento() {
        $objSaida           = new Saida;
        $objProduto         = new Produto;
        $id_item            = isset($_POST["id_item"]) ? strip_tags(filter_input(INPUT_POST, "id_item")) : NULL;
        $id_produto         = isset($_POST["id_produto"]) ? strip_tags(filter_input(INPUT_POST, "id_produto")) : NULL;
        $qtd_solicitada     = isset($_POST["qtdSolicitada"]) ? strip_tags(filter_input(INPUT_POST, "qtdSolicitada")) : NULL;
        $id_pedido          = isset($_POST["id_pedido"]) ? strip_tags(filter_input(INPUT_POST, "id_pedido")) : NULL;
        $valor              = isset($_POST["valor"]) ? strip_tags(filter_input(INPUT_POST, "valor")) : NULL;
        $quant              = isset($_POST["quant"]) ? strip_tags(filter_input(INPUT_POST, "quant")) : NULL;

        $estoque = $objProduto->getEstoque($id_produto);
        if($estoque < $quant){
            echo json_encode(["erro" =>"1", "msg"=> "o estoque é menor que a quantidade solicitada"]);
            exit;
        }

        $objSaida->fazer_atendimento($id_item, $quant);
        
        /*observação sobre a atualização do estoque do produto
         * 
         * após a atualização do saída do produto que acontace atravez do médoto fazer_atendimento() na classe saida na tabela item
         * a inserção na tabela de historico_movimento da saida em questão e a atualização do estoque atual do produto
         * acontece atravéz de acinadores criado dentro da tabela item
         * 
         * então qualquer bug agora é por lá... 
         * 
         * TABELAS QUE SÃO ALTERADAS NA ORDEM
         * 
         * 1- ITEM
         * 2- HISTORICO_MOVIMENTO
         * 3- PRODUTO
         * 4- PEDIDO
         * 
         * 
         */
        
        echo json_encode(["erro" =>"-1", "msg"=> "ok"]);

        //header("Location:" . URL_BASE . "pedido");
    }

    public function atender($id_pedido = null) {
        $objSaida = new Saida;
        $objItem = new Item;

        if (!$id_pedido) {
            header("Location: " . URL_BASE . "saida");
        } else {
            $pedido = $objSaida->getPedido($id_pedido);
        }

        if (!$pedido) {
            header("Location: " . URL_BASE . "saida");
        }

        $dados["pedido"] = $pedido;
        $dados["itens"] = $objItem->listaIdPedido($id_pedido);
        $dados["view"] = "saida/Atender";
        $this->load("template", $dados);
    }

    public function detalhe($id_pedido = null) {
        $objSaida = new Saida;
        $objItem = new Item;

        if (!$id_pedido) {
            header("Location: " . URL_BASE . "saida");
        } else {
            $pedido = $objSaida->getPedido($id_pedido);
        }

        if (!$pedido) {
            header("Location: " . URL_BASE . "saida");
        }

        $dados["pedido"] = $pedido;
        $dados["itens"] = $objItem->listaIdPedido($id_pedido);
        $dados["view"] = "saida/Show";
        $this->load("template", $dados);
    }

    public function recusar($id_pedido = null) {
        $objSaida = new Pedido;

        if (!$id_pedido) {
            header("Location: " . URL_BASE . "pedido");
        } else {
            $pedido = $objSaida->getPedido($id_pedido);
        }

        if (!$pedido) {
            header("Location: " . URL_BASE . "pedido");
        }

        $objSaida->recusar($id_pedido);
        header("Location: " . URL_BASE . "pedido");
    }

    public function excluir($id_pedido = null) {
        $objSaida = new Pedido();
        if (!$id_pedido) {
            header("location: " . URL_BASE . "pedido");
        } else {
            $pedido = $objSaida->getPedido($id_pedido);
        }

        if (!$pedido) {
            header("location: " . URL_BASE . "pedido");
        }

        $objSaida->delete($id_pedido);
        header("location: " . URL_BASE . "pedido");
    }

    public function liberar() {
        $objSaida = new Pedido;
        $id_pedido = isset($_POST["id_pedido"]) ? strip_tags(filter_input(INPUT_POST, "id_pedido")) : NULL;
        $pedido = isset($_POST["pedido"]) ? strip_tags(filter_input(INPUT_POST, "pedido")) : NULL;
        $frete = isset($_POST["frete"]) ? strip_tags(filter_input(INPUT_POST, "frete")) : NULL;
        $seguro = isset($_POST["seguro"]) ? strip_tags(filter_input(INPUT_POST, "seguro")) : NULL;
        $desconto = isset($_POST["desconto"]) ? strip_tags(filter_input(INPUT_POST, "desconto")) : NULL;
        $despesa = isset($_POST["despesa"]) ? strip_tags(filter_input(INPUT_POST, "despesa")) : NULL;

        if (!$id_pedido) {
            header("location: " . URL_BASE . "pedido");
        } else {
            $pedido = $objSaida->getPedido($id_pedido);
        }

        if (!$pedido) {
            header("location: " . URL_BASE . "pedido");
        }

        $objSaida->liberar($id_pedido, $frete, $seguro, $desconto, $despesa);
        header("location: " . URL_BASE . "pedido");
    }

}
