		
<section class="conteudo">			
    <div class="conteudo-dividido bg-fundo">				
        <div class="conteudo-fluido">						

            <div class="rows">	
                <div class="col-12">
                    <div class="caixa">
                        <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar cotacao</span>
                        <form name="busca" action="<?php echo URL_BASE . "cotacao/filtro" ?>" method="GET" >
                            <div class="rows p-3">
                                <div class="col-3">
                                    <label class="text-label">Data 1</label>
                                    <input type="date" name="data_inicial" value="<?php echo isset($pesquisa) ? $pesquisa->data_inicial : "" ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-3">
                                    <label class="text-label">Data 2</label>
                                    <input type="date" name="data_final" value="<?php echo isset($pesquisa) ? $pesquisa->data_final : "" ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>


                                <div class="col-4">
                                    <label class="text-label">Status</label>
                                    <select class="form-campo" name="id_status">
                                        <option value="">Escolha uma Opção</option>
                                        <?php
                                        foreach ($status as $s) {
                                            $selecionado = (!isset($pesquisa)) ? "" : ($s->id_status_cotacao == $pesquisa->idStatus) ? "selected" : "";
                                            echo "<option value='$s->id_status_cotacao' $selecionado>$s->status_cotacao</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-1 mt-4">
                                    <input type="submit" value="Ok" class="btn btn-warning text-uppercase">
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
                <div class="col-12">
                    <div class="caixa">
                        <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Lista de Cotações </span> <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul"><?php echo $total ?></b> registros</small>

                        </div>	
                        <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th align="center">Id</th>
                                        <th align="center">Data</th>
                                        <th align="center">Status</th>
                                        <th align="center" colspan="4">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($cotacoes as $cotacao) { ?>

                                        <tr>
                                            <td align="center"><?php echo $cotacao->id_cotacao ?></td>
                                            <td align="center"><?php echo databr($cotacao->data_abertura, 0) ?></td>
                                            <td align="center"><?php echo $cotacao->status_cotacao ?></td>
                                            <td align="center">
                                                <?php if($cotacao->id_status_cotacao <= 2){?>
                                                <a href="javascript:;" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Sem Ação </a>
                                                <?php }else if($cotacao->id_status_cotacao == 3){?>
                                                <a href="<?php echo URL_BASE . "cotacao/compararPreco/" . $cotacao->id_cotacao?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Cotar</a>
                                                <?php }else{?>
                                                <a href="#" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Detalhes</a>
                                                <?php }?>
                                        </tr>												
                                    <?php } ?>

                                </tbody>
                            </table>


                            <footer class="caixa-rodape"> 
                                <ul class="paginacao text-end">
                                    <?php echo paginacao($url, $pg, $paginas) ?>
                                </ul>
                            </footer>
                        </div>

                    </div>

                    <!-- qunado não hover pedido 
                    
                    <div class="caixa p-2">
                            <div class="msg msg-verde">
                            <p><b><i class="fas fa-check"></i> Mensagem de boas vindas</b> Parabéns seu cotacao foi inserido com sucesso</p>
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

</section>



