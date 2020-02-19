<div class="conteudo-dividido bg-fundo">				
    <div class="conteudo-fluido">	
        <div class="rows">	
            <div class="col-12">
                <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                        <span class="h5 mb-0 d-inline-block">
                            <i class="fas fa-search"></i> Dados do Pedido: <?php echo $pedido->id_pedido ?>
                        </span>
                        <a href="<?php echo URL_BASE . "pedido" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                    </div>
                    <div class="py-3 px-2">
                        <div class="rows">										
                            <div class="col-3 col-md-12 px-1">
                                <div class="caixa degrade-roxo px-3 py-4">
                                    <i class="fas fa-users pequeno-font float-left mr-1"></i>
                                    <small>Nome do Cliente</small>
                                    <h4 style="line-height:1rem"><?php echo $pedido->nome ?></h4>

                                </div>
                            </div>
                            <div class="col px-1">
                                <div class="caixa degrade-roxo px-2 py-4">
                                    <i class="fas fa-calendar-alt pequeno-font float-left mr-1"></i>
                                    <small>Data</small>
                                    <h4><?php echo databr($pedido->data_pedido,0) ?></h4>
                                </div>
                            </div>
                            <div class="col px-1">	
                                <div class="caixa degrade-roxo px-2 py-4">
                                    <i class="far fa-clock pequeno-font float-left mr-1"></i>
                                    <small>Hora</small>
                                    <h4><?php echo $pedido->hora_pedido ?></h4>
                                </div>
                            </div>
                            <div class="col px-1">
                                <div class="caixa degrade-roxo px-3 py-4">
                                    <i class="fab fa-bitcoin pequeno-font float-left mr-1"></i>
                                    <small>Total</small>
                                    <h4>R$ <?php echo $pedido->total ?></h4>
                                </div>
                            </div>
                            <div class="col px-1">
                                <div class="caixa degrade-roxo px-3 py-4">
                                    <i class="fas fa-map-marker-alt  pequeno-font float-left mr-1"></i>
                                    <small>Origem</small>
                                    <h4><?php echo $pedido->origem ?></h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Itens do Pedido</span>
                    <div class="tabela-responsiva">
                        <table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th align="center">ID</th>
                                    <th align="center">Origem</th>
                                    <th align="left" width="290">Produto</th>
                                    <th align="center">Preço</th>
                                    <th align="center">Qtde</th>                                                    
                                    <th align="center">Subtotal</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($itens as $item){?>
                                <tr>
                                    <td align="center"><?php echo $item->id_produto?></td>
                                    <td align="center"><?php echo $item->origem?></td>	
                                    <td align="left"><?php echo $item->produto?></td>
                                    <td align="center">R$ <?php echo $item->valor?></td>
                                    <td align="center"><?php echo $item->qtd?></td>                                                    
                                    <td align="center">R$ <?php echo $item->valor * $item->qtd  ?></td>	

                                </tr>
                                
                                <?php } ?>

                                <tr>
                                    <td align="right" colspan="6" ><b>Total:</b> <span class="text-verde minimo-font">R$ <?php echo $pedido->total ?></span></td>
                                </tr>	
                            </tbody>
                        </table>

                    </div>
                </div>

                <!-- qunado não hover pedido 

                <div class="caixa p-2">
                        <div class="msg msg-verde">
                        <p><b><i class="fas fa-check"></i> Mensagem de boas vindas</b> Parabéns seu produto foi inserido com sucesso</p>
                        </div>
                        <div class="msg msg-vermelho">
                        <p><b><i class="fas fa-times"></i> Mensagem de Erro</b> Houve um erro</p>
                        </div>
                        <div class="msg msg-amarelo">
                        <p><b><i class="fas fa-exclamation-triangle"></i> Mensagem de aviso</b> Tem um aviso pra você</p>
                        </div>
                </div>
                -->
            </div>

        </div>
    </div>
</div>