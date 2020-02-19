<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_cotacao.js"></script>
<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">
    <form action="<?php echo URL_BASE ."cotacao/salvar" ?>" method="Post" enctype="multipart/form-data" >
<div class="conteudo-fluido">								
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
              <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Nova Cotação</span>							
                  <a href="<?php echo URL_BASE ."cotacao" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>

                    </div>
            
                <div class="rows p-4"> 
                        <div class="col-12 px-2">
                           <div class="rows">
								<div class="col-4">
                                        <label class="text-label">Data da Solicitação</label>
                                        <input type="date" value="<?php echo isset($cotacao) ? $cotacao->data_abertura: "" ?>" name="solicitacao" placeholder="Digite aqui..." class="form-campo">
                                </div>
								<div class="col-4">
                                        <label class="text-label">Data da Entrega</label>
                                        <input type="date" value="<?php echo isset($cotacao) ? $cotacao->data_encerramento: "" ?>" name="solicitacao" placeholder="Digite aqui..." class="form-campo">
                                </div>
								
								<div class="col-2">
                                  <input type="button" class="btn btn-verde btn-medio d-inline-block inserir"  value="Finalizar Cotação" id="btnFinalizarCotacao">
                            </div>
								
						 </div>
				
                        </div>
                </div>
              </div>
            </div>
    </div>

	<div class="rows">	
            <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
              <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Solicitações</span>							
               </div>
			   
			   <div class="caixa">
                    <div class="px-5">
                    <div class="rows pt-3 pb-4">
                            <div class="col-8">
							 <label class="text-label">Solicitação</label>
							 <select class="form-campo" name="id_solicitacao" id="id_solicitacao">
								 <option value="">Escolha uma Opção</option>
								<?php foreach($todas_solicitacoes as $solicitacao){
									echo "<option value='$solicitacao->id_solicitacao' $selecionado>
										$solicitacao->id_solicitacao | 
										$solicitacao->produto | " .
										databr($solicitacao->data_entrega,0) ." | 
										$solicitacao->status_solicitacao !
										$solicitacao->qtde 
										
										</option>";
								}
								 ?>
							 </select>
						 </div>
								 
                            
                            <div class="col-2">
                                  <input type="button" class="btn btn-verde btn-medio d-inline-block inserir"  value="Inserir" id="btnInserirSolicitacao">
                            </div>
							<div class="col-2">
                                 <input type="hidden" id="id_produto" name="id_produto">
                                  <a href="#"  class="btn btn-verde btn-medio d-inline-block inserir"> Múltiplos</a>
                            </div>
                        </div>
                     
                    </div>
                    
                    
                    </div>
				<div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                    <thead>
                                            <tr>
												<th align="center">Id</th>
												<th align="left">Produto</th>
												<th align="center">Data</th>
												<th align="center">Data Entrega</th>
												<th align="center">Status</th>
												<th align="center">Qtde</th>
												<th align="center" >Ação</th>
										</tr>
                                    </thead>
                                    <tbody id="lista_solicitacao"> 
                                <?php
                                    $i = 1;
                                    foreach($solicitacoes as $solicitacao){
                                 ?>
                                    <tr>
                                       <td align="center"><?php echo $solicitacao->id_solicitacao ?></td>
                                         <td align="left"><?php echo $solicitacao->produto ?></td>
                                         <td align="center"><?php echo databr($solicitacao->data_solicitacao,0) ?></td>
                                         <td align="center"><?php echo databr($solicitacao->data_entrega,0) ?></td>
										  <td align="left"><?php echo $solicitacao->status_solicitacao ?></td>
										  <td align="left"><?php echo $solicitacao->qtde ?></td>
										<td><a href="<?php echo URL_BASE ."solicitacao/delete/" .$solicitacao->id_solicitacao ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
                                         </td>

                                    </tr>
                                <?php } ?>    	
                                    </tbody>
                            </table>
                          
                    </div>	
            
            
              </div>
            </div>
    </div>

<div class="rows">	
            <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
              <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Fornecedores</span>							
               </div>
			   
			   <div class="caixa">
                    <div class="px-5">
                    <div class="rows pt-3 pb-4">
                            <div class="col-8">
							 <label class="text-label">Fornecedores</label>
							 <select class="form-campo" name="id_contato" id="id_contato">
								 <option value="">Escolha uma Opção</option>
								<?php foreach($todos_fornecedores as $fornecedor){
									echo "<option value='$fornecedor->id_contato' >	$fornecedor->nome </option>";
								}
								 ?>
							 </select>
						 </div>
								 
                            
                            <div class="col-2">
                                 <input type="hidden" id="id_produto" name="id_produto">
                                  <input type="button" class="btn btn-verde btn-medio d-inline-block inserir"  value="Inserir" id="btnInserirFornecedor">
                            </div>
							<div class="col-2">
                                 <input type="hidden" id="id_produto" name="id_produto">
                                  <a href="#"  class="btn btn-verde btn-medio d-inline-block inserir"> Múltiplos</a>
                            </div>
                        </div>
                     
                    </div>
                    
                    
                    </div>
				<div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                    <thead>
                                            <tr>
                                                    <th align="center">Item</th>
                                                    <th align="left" >ID</th>
                                                    <th align="left" width="290">Nome</th>
                                                    <th align="center">Email</th>      
                                                    <th align="center">Fone</th>         
                                                    <th align="center">Ação</th>         
                                                    
                                            </tr>
                                    </thead>
                                    <tbody id="lista_fornecedor"> 
                                <?php
                                    $i = 1;
                                    foreach($fornecedores as $fornecedor){
                                 ?>
                                    <tr>
                                            <td align="center"><?php echo $i++ ?></td>
                                            <td align="left"><?php echo $fornecedor->id_contato ?></td>
                                            <td align="left"><?php echo $fornecedor->nome ?></td>
                                            <td align="center"><?php echo $fornecedor->email ?></td>	
                                            <td align="center"><?php echo $fornecedor->fone ?></td>	
											<td><a href='#' class='btn btn-sm btn-danger d-inline-block' title='Excluir'><i class='fas fa-trash'></i></a></td>

                                    </tr>
                                <?php } ?>    	
                                    </tbody>
                            </table>
                          
                    </div>	
            
            
              </div>
            </div>
    </div>

 

    </div>
</form>			
</div>
 </section>
 
  <script>
	var id_cotacao = "<?php echo $cotacao->id_cotacao ?>";
 </script>




