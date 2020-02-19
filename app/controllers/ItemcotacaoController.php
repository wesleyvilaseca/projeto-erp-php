<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Itemcotacao;
use app\models\Ordemcompra;
use app\models\Itemordemcompra;
use app\models\Cotacao;
use app\models\Solicitacao;

class ItemcotacaoController extends Controller {

    public function aprovar() {
        $objItemCotacao         = new Itemcotacao;
        $objOrdemCompra         = new Ordemcompra;
        $objItemordemcompra     = new Itemordemcompra;
        $objCotacao             = new Cotacao;
        $objSolicitacao         = new Solicitacao;
        $item = new \stdClass;
        $item->id_cotacao       = $_POST["id_cotacao"];
        $item->id_item_cotacao  = $_POST["id_item_cotacao"];
        
        $item_cotacao           = $objItemCotacao->getItemCotacao($item->id_item_cotacao);
        
        $item->id_solicitacao   = $item_cotacao->id_solicitacao;
        $item->id_fornecedor   = $item_cotacao->id_fornecedor;
        $item->id_produto   = $item_cotacao->id_produto;
        $item->qtd   = $item_cotacao->qtd;
        $item->valor_cotacao   = $item_cotacao->valor_cotacao;
        $item->id_aprovado      = 3; //status para o aprovado
        $item->id_rejeitado     = 5; //status para o rejeitado
        
        $ordem_compra = $objOrdemCompra->exist($item->id_cotacao, $item->id_fornecedor);
        
        if(!$ordem_compra){
            $id = $objOrdemCompra->novaOrdemCompra($item->id_cotacao, $item->id_fornecedor);
            $ordem_compra = $objOrdemCompra->getOrdemCompra($id);
        }
        
        $item->id_ordem_compra = $ordem_compra->id_ordem_compra;
        
        if(!$objItemordemcompra->exist($item->id_ordem_compra, $item->id_produto)){
            $objItemordemcompra->inserir($item->id_ordem_compra, $item->id_produto, $item->qtd, $item->valor_cotacao);
        }
        
        //adiciona o fornecedor na respectiva solicitacao e tambem a ordem de compra
        $objSolicitacao->aprovarCotacao($item->id_solicitacao, $item->id_ordem_compra, $item->id_fornecedor);
        
        //mudar o status do item da cotacao para aprovado e os demais para recusado
        $objItemCotacao->aprovar($item);
        
        
        //verificar se todos os itens já foram cotados
        //caso sim, muda o status da cotacao
        
        $todosCotados = $objItemCotacao->getTodosCotados($item->id_cotacao);
        if($todosCotados <= 0){
            //mudar o status
            $objCotacao->mudaStatus($item->id_cotacao, 4);
            echo json_encode("fim");
            exit;
        }
        
        $retorno = $objItemCotacao->listaFornecedorSolicitacaoCotacao($item->id_cotacao, $item->id_solicitacao);
        echo json_encode($retorno);
    }

    
}
