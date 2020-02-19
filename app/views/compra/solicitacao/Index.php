<section class="conteudo">			
    <div class="conteudo-dividido bg-fundo">				
        <div class="conteudo-fluido">						

            <div class="rows">	
                <div class="col-12">
                    <div class="caixa">
                        <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar solicitacao</span>
                        <form name="busca" action="<?php echo URL_BASE . "solicitacao/filtro" ?>" method="GET" >
                            <div class="rows p-3">

                                <div class="col-4">
                                    <label class="text-label">Data 1</label>
                                    <input type="date" name="data_inicial" value="<?php echo isset($pesquisa) ? $pesquisa->data_inicial : date("Y-m-d") ?>" class="form-campo">
                                </div>                             

                                <div class="col-4">
                                    <label class="text-label">Data 2</label>
                                    <input type="date" name="data_final" value="<?php echo isset($pesquisa) ? $pesquisa->data_final : null ?>" class="form-campo">
                                </div>

                            </div>

                            <div class="rows p-3">

                                <div class="col-4">
                                    <label class="text-label">Produto</label>
                                    <select class="form-campo" name="id_produto">
                                        <option value="">Escolha uma Opção</option>
                                        <?php
                                        foreach ($produtos as $produto) {
                                            $selecionado = (!isset($pesquisa)) ? "" : ($produto->id_produto == $pesquisa->id_produto) ? "selected" : "";
                                            echo "<option value='$produto->id_produto' $selecionado>$produto->produto</option> ";
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="text-label">Status</label>
                                    <select class="form-campo" name="id_status">
                                        <option value="">Escolha uma Opção</option>
                                        <?php
                                        foreach ($status as $s) {
                                            $selecionado = (!isset($pesquisa)) ? "" : ($s->id_status_solicitacao == $pesquisa->id_status) ? "selected" : "";
                                            echo "<option value='$s->id_status_solicitacao' $selecionado>$s->status_solicitacao</option> ";
                                        }
                                        ?>

                                    </select>

                                </div>
                                <div class="col-2 mt-4">
                                    <input type="submit" value="Buscar" class="btn btn-warning text-uppercase width-100">
                                </div>
                            </div>
                    </div>
                    </form>
                </div>



                <div class="col-12">
                    <form action="<?php echo URL_BASE . "cotacao/create" ?>" method="post">						
                        <div class="caixa">
                            <div class="caixa-titulo py-1 d-inline-block width-100">
                                <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Solicitações </span> <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul"><?php echo $total ?></b> registros</small>

                                <div class="float-right">
                                    <input type="submit" value="Fazer Cotação em Massa" class="btn btn-roxo d-inline-block">

                                    <a href="#addnovo" rel="modal" class="btn btn-verde d-inline-block"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
                                </div>	
                            </div>	
                            <div class="tabela-responsiva">
                                <table cellpadding="0" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th align="center">Marcar</th>
                                            <th align="center">Id</th>
                                            <th align="left">Produto</th>
                                            <th align="center">Data Entrega</th>
                                            <th align="center">Status</th>
                                            <th align="center">Qtde</th>
                                            <th align="center" colspan="2">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody id="lista_solicitacao">
                                        <?php
                                        foreach ($solicitacoes as $solicitacao) {
                                            ?>
                                            <tr>
                                                <?php if ($solicitacao->id_status_solicitacao != 1) { ?>
                                                <td align="center"><input type="checkbox" name="idSolicitacao[]" value="<?php echo $solicitacao->id_solicitacao ?>" disabled="true"></td>
                                                <?php } else { ?>
                                                    <td align="center"><input type="checkbox" name="idSolicitacao[]" value="<?php echo $solicitacao->id_solicitacao ?>"></td>
                                                <?php } ?>
                                                    
                                                <td align="center"><?php echo $solicitacao->id_solicitacao ?></td>
                                                <td align="left"><?php echo $solicitacao->produto ?></td>
                                                <td align="center"><?php echo databr($solicitacao->data_entrega, 0) ?></td>
                                                <td align="left"><?php echo $solicitacao->status_solicitacao ?></td>
                                                <td align="left"><?php echo $solicitacao->qtd ?></td>
                                                <td align="center">
                                                    <a href="<?php echo URL_BASE . "cotacao/cotar/" . $solicitacao->id_solicitacao ?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-check-double"></i> Cotar</a>
                                                    <a href="#" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
                                                </td>
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
                    </form>

                </div>

            </div>
        </div>
    </div>

</section>

<div class="window" id="addnovo">
    <div class="caixa mb-0">
        <span class="caixa-titulo width-100 d-block">
            <i class="far fa-arrow-alt-circle-right"></i> CADASTRAR NOVA SOLICITAÇÃO
            <a href="" class="fechar">x</a>
        </span>
        <div class="p-5">
            <form action="<?php echo URL_BASE . "solicitacao/inserir" ?>" method="POST">
                <div class="rows  py-3 px-5">							
                    <div class="col-12">
                        <label class="text-label">Produto</label>
                        <select class="form-campo" name="id_produto" id="id_produto">
                            <?php
                            foreach ($produtos as $produto) {
                                echo "<option value='$produto->id_produto'>$produto->produto</option> ";
                            }
                            ?>

                        </select>
                    </div>             

                    <div class="col-8">
                        <label class="text-label">Data da Entrega</label>
                        <input type="date"  name="data_entrega" id="data_entrega" value="<?php echo date("Y-m-d") ?>" placeholder="Digite aqui..." class="form-campo">
                    </div>


                    <div class="col-4">
                        <label class="text-label"  >Qtde</label>
                        <input type="text" name="qtd" id="qtde" value="1" placeholder="Digite aqui..." class="form-campo">
                    </div>                               
                    <div class="col-12 mt-4">
                        <input type="submit" value="Salvar alterações" id="btnInserir" class="btn btn-verde btn-medio d-block m-auto">
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

<div id="mascara"></div>


