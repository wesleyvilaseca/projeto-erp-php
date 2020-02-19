
<section class="conteudo">			
    <div class="conteudo-dividido bg-fundo">				
        <div class="conteudo-fluido">						

            <div class="rows">	
                <div class="col-12">
                    <div class="caixa">
                        <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Filtrar entrada avulsa</span>
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

                <div class="conteudo-fluido">
                    <div class="rows">	
                        <div class="col-12">
                            <div class="caixa">
                                <span class="h5 caixa-titulo"><i class="fas fa-box"></i> Itens do Pedido</span>
                                <div class="col-12 px-2">
                                    <div class="rows">
                                        <div class="col-8">
                                            <label class="text-label">Produto</label>
                                            <input type="hidden" name="id_produto" id="id_produto" />
                                            <input type="text" id="produto" data-type="localizar_produto" class="form-campo"/>
                                        </div>
                                        <div class="col-2">
                                            <label class="text-label">Valor</label>
                                            <input type="text" id="preco" placeholder="R$ 00,0" class="form-campo">
                                        </div>
                                        <div class="col-2">
                                            <label class="text-label">Qtd</label>
                                            <input type="text" id="qtd" placeholder="1" class="form-campo">
                                        </div> 
                                    </div>

                                </div>
                                <div class="col-12 mt-4  pb-5">
                                    <input type="hidden" id="id_produto" name="id_produto">
                                    <input type="button" id="btnInserir" value="Inserir Produto" class="btn btn-verde btn-medio d-block m-auto">
                                </div>

                                <div class="tabela-responsiva">
                                    <table cellpadding="0" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th align="center">Item</th>
                                                <th align="center">Data</th>
                                                <th align="center">Produto</th>
                                                <th align="center">Qtd</th>
                                                <th align="center">Valor</th>
                                                <th align="center">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody id="lista_itens">
                                            <?php
                                            $i = 1;
                                            foreach ($entradas as $entrada) {
                                                $subtotal = $entrada->qtd_entrada * $entrada->valor_entrada;
                                                ?>
                                                <tr>
                                                    <td align="center" id="item"><?php echo $i++ ?></td>
                                                    <td align="center"><?php echo databr($entrada->data_entrada, 0) ?></td>
                                                    <td align="center"><?php echo $entrada->produto ?></td>                                            
                                                    <td align="center"><?php echo $entrada->qtd_entrada ?></td>                                            
                                                    <td align="center"><?php echo $entrada->valor_entrada ?></td>                                            
                                                    <td align="center"><?php echo $subtotal ?></td>                                            
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
                        </div>

                    </div>

                </div>






            </div>
        </div>
    </div>

</section>
<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_entrada.js"></script>	



