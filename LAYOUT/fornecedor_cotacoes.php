		
<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">						
				
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar cotacao</span>
					<form name="busca" action="<?php echo URL_BASE ."cotacao/filtro" ?>" method="GET" >
                            <div class="rows p-3">
                                 <div class="col-4">
                                         <label class="text-label">Nome</label>
                                         <input type="text" name="q" value="<?php echo isset($pesquisa) ? $pesquisa->q: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                 </div>
                                 <div class="col-3">
                                         <label class="text-label">Produto</label>
                                         <select class="form-campo" name="grupo">
											 <option value="">Escolha uma Opção</option>
											<?php foreach($produtos as $produto){
												//$selecionado = (!isset($produto)) ? "" : ($produto->id_produto==$grupo->id_grupo) ? "selected" : "";
												echo "<option value='$produto->id_produto' $selecionado>$produto->produto</option>";
											}
											 ?>
                                         </select>
                                 </div>
                                 <div class="col-3">
                                         <label class="text-label">Status</label>
                                         <select class="form-campo" name="status">
											 <option value="">Escolha uma Opção</option>
											<?php foreach($status as $s){
												//$selecionado = (!isset($pesquisa)) ? "" : ($pesquisa->categoria==$categoria->id_categoria) ? "selected" : "";
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
                    <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Cotações por Fornecedor </span> 
                    <a href="<?php echo URL_BASE ."cotacao/create" ?>" class="btn btn-verde float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
            </div>	
                    <div class="tabela-responsiva">
                    <table cellpadding="0" cellspacing="0">
                            <thead>
                                    <tr>
                                            <th align="center">Id</th>
                                            <th align="center">Data</th>
                                            <th align="center">Data Entrega</th>
                                            <th align="center">qtde</th>
                                            <th align="center">Valor</th>
                                            <th align="center" colspan="4">Ação</th>
                                    </tr>
                            </thead>
                            <tbody>
                                <?php foreach($itens as $item){ ?>
                            					
                                <tr>
                                         <td align="center"><?php echo $item->id_cotacao ?></td>
                                         <td align="center"><?php echo databr($item->limite_entrega,0) ?></td>
                                         <td align="center"><?php echo $item->data_entrega ?></td>
                                         <td align="center"><?php echo $item->qtde ?></td>
                                         <td align="center"><?php echo $item->valor ?></td>
										 
                                         <td align="center">
										 
										 <a href="<?php echo URL_BASE ."cotacao/editar/" .$item->id_cotacao ?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Cotar</a>
										 
										  <a href="<?php echo URL_BASE ."cotacao/editar/" .$item->id_cotacao ?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Gerar ordem de compra</a>
										  
										   
										   
										 <a href="<?php echo URL_BASE ."cotacao/editar/" .$cotacao->id_cotacao ?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
                                         <a href="<?php echo URL_BASE ."cotacao/delete/" .$cotacao->id_cotacao ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Cancelar</a>
                                         </td>
                                 </tr>												
                                <?php } ?>
																
        </tbody>
        </table>
                        
                        
        <footer class="caixa-rodape"> 
                <ul class="paginacao text-end">
                      <?php //echo paginacao($url, $pg, $paginas) ?>
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
	


