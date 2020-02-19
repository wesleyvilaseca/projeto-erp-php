		
<section class="conteudo">			
    <div class="conteudo-dividido bg-fundo">				
        <div class="conteudo-fluido">						

            <div class="rows">	
                <div class="col-12">
                    <div class="caixa">
                        <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar Ordem de Compra</span>
                        <form name="busca" action="<?php echo URL_BASE . "entradaordemcompra/filtro" ?>" method="GET" >
                            <div class="rows p-3">
                                <div class="col-3">
                                    <label class="text-label">Data 1</label>
                                    <input type="date" name="data_inicial" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-3">
                                    <label class="text-label">Data 2</label>
                                    <input type="date" name="data_final"  placeholder="Digite aqui..." class="form-campo">
                                </div>

                                <div class="col-4">
                                    <label class="text-label">Status</label>
                                    <select class="form-campo" name="id_status">
                                        <option value="">Escolha uma Opção</option>
                                        <?php
                                        foreach ($status as $s) {
                                            $selecionado = (!isset($pesquisa)) ? "" : ($pesquisa->id_status == $s->id_status) ? "selected" : "";
                                            echo "<option value='$s->id_status_ordem_compra' $selecionado>$s->status_ordem_compra</option>";
                                        }
                                        ?>
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
                            <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Ordens de Compra </span> <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul">0</b> registros</small>
                            <!--<a href="#" class="btn btn-verde float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>-->
                        </div>	
                        <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th align="center">Id</th>
                                        <th align="center">Cotação</th>
                                        <th align="center">Fornecedor</th>
                                        <th align="center">Data Emissão</th>
                                        <th align="center">Data Aprovação</th>
                                        <th align="center">Valor</th>
                                        <th align="center">Status</th>
                                        <th align="center" colspan="1">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ordens as $ordem) { ?>
                                        <tr>
                                            <td align="center"><?php echo $ordem->id_ordem_compra ?></td>
                                            <td align="center"><?php echo $ordem->id_cotacao ?></td>
                                            <td align="center"><?php echo $ordem->nome ?></td>
                                            <td align="center"><?php echo databr($ordem->data_emissao, 0) ?></td>
                                            <td align="center"><?php echo databr($ordem->data_aprovacao, 0) ?></td>
                                            <td align="center"><?php echo $ordem->valor_total ?></td>
                                            <td align="center"><?php echo $ordem->status_ordem_compra ?></td>
                                            <td align="center">
                                                <?php if ($ordem->id_ordem_compra == 1) { ?>
                                                    <a href="<?php echo URL_BASE . "entradaordemcompra/atender/" . $ordem->id_ordem_compra?>" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-edit"></i> Atender</a>
                                                <?php } else { ?>
                                                    <a href="#" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Detalhes</a>
                                                <?php } ?>
                                            </td>
                                        </tr>	
                                    <?php } ?>
                                </tbody>
                            </table>


                            <footer class="caixa-rodape"> 
                                <ul class="paginacao text-end">

                                </ul>
                            </footer>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</section>



