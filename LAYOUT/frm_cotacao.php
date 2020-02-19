
<section class="conteudo">			
	<div class="bg-fundo">
		<div class="conteudo-fluido">
		<form action = "#" method="Post" >  								
			<div class="rows">	  	
				                	
          <div class="col-6">
            <div class="caixa mb-3">
				<div class="h5 caixa-titulo azul d-inline-block width-100 py-1">
					<span class="d-inline-block"><i class="fas fa-arrow-right"></i> Solicitações </span>
				</div>			   
						<div class="col-12 mb-3">
							 <label class="text-label">Solicitação</label>
							 <div class="rows">
                            <div class="col-6">
							 <select class="form-campo" name="id_solicitacao" id="id_solicitacao">
								 <option value="">Escolha uma Opção</option>
							
							 </select>
							 </div>
									 
							<div class="col-3">
								<input type="button" class="btn btn-roxo width-100"  value="Inserir" id="btnInserirSolicitacao">
							</div>
							<div class="col-3 px-2">
								<a href="#janela1" rel="modal" class="btn btn-azul width-100">Múltiplos</a>
							</div>
							</div>
							
                        </div>
                </div>     
                <div class="caixa p-0">
					<div class="tabela-responsiva sm tborder">    
						<div class="rolagem-tabela2">
								<table cellpadding="0" cellspacing="0" class="mb-0">
										<thead>
											<tr>
												<th align="center">id</th>
												<th align="left">Produto</th>
												<th align="center">Status</th>
												<th align="center">Qtde</th>
												<th align="center">Ação</th>
											</tr>
										</thead>
										<tbody id="lista_solicitacao"> 
									
										<tr>
											<td align="center">1</td>
										    <td align="left">
												<strong class="d-block">Produto X</strong>
												<small class="datas">Data: 19/04/2020</small>
												<small class="datas">Data entrega: 25/04/2020</small>
												
											</td>
											  <td align="center">Cotado</td>
											  <td align="center">10</td>
											<td align="center"><a href="javascript:;"  class="link-vermelho"><i class="fas fa-trash-alt h5 mb-0"></i><!-- Excluir--></a>
											 </td>

										</tr>
									   	
										</tbody>
								</table>
								
							  
						</div>	
                    </div>	            
                </div>            
            </div>
			
			<div class="col-6">
				<div class="caixa mb-3">
					<div class="h5 caixa-titulo azul2 d-inline-block width-100 py-1">
						<span class="d-inline-block"><i class="fas fa-arrow-right"></i> Fornecedores </span>
					</div>					
						<div class="col-12 mb-3">
							<label class="text-label d-block">Fornecedores</label>
								<div class="rows">
									<div class="col-6">
										<select class="form-campo" name="id_contato" id="id_contato">
											 <option value="">Escolha uma Opção</option>
											
										 </select>
									</div>
									<div class="col-3">
										 <input type="hidden" id="id_produto" name="id_produto">
										 <input type="button" class="btn btn-roxo width-100"  value="Inserir" id="btnInserirFornecedor">
									</div>
									
									<div class="col-3 px-2">
										<a href="#janela2" rel="modal" class="btn btn-azul2 width-100">Múltiplos</a>
									</div>
								</div>
						</div>
				</div>
				<div class="caixa p-0">
					<div class="tabela-responsiva sm tborder">
						<div class="rolagem-tabela2">
							<table cellpadding="0" cellspacing="0" class="mb-0">
											<thead>
													<tr>
															<th align="center">Item</th>
															<th align="center" >ID</th>
															<th align="center">Nome</th>
															<th align="center">Email</th>      
															<th align="center">Fone</th>         
															<th align="center">Ação</th>         
															
													</tr>
											</thead>
											<tbody id="lista_fornecedor"> 
										
											<tr class="status-bg"> 
													<td align="center">2></td>
													<td align="center">4</td>
													<td align="center">Jailton</td>
													<td align="center">mjailton@gmail</td>	
													<td align="center">9898</td>
													<td align="center"><a href="javascript:;"  class="link-vermelho"><i class="fas fa-trash-alt h5 mb-0"></i><!-- Excluir--></a>
													</td>									 

											</tr>
										
											</tbody>
									</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 pb-4 pt-3">
				</span> 
				
				<input type="submit" class="btn btn-verde m-auto h4"  value="Finalizar Cotação" >
			</div>	
			
		
         </div>
			</div>
		</form>			
		</div>
	</div>
 </section>
 
 <!--Modal solicitações--->
			<div class="window" id="janela1">
				<div class="caixa mb-0">
					<div class="caixa-titulo azul width-100 d-inline-block py-1">
						<span class="d-inline-block pt-1"><i class="fas fa-arrow-right"></i> Selecionar múltiplas solicitações</span>
						<a href="" class="fechar">x</a>
					</div>
					<div class="px-4">
					<div class="rows py-3">
						<div class="col-6">
							<label class="text-label">Pesquisar por nome</label>
							<input type="text" name="" placeholder="Digite aqui..." class="form-campo">
						</div>
						<div class="col-3">
							<label class="text-label">Selecione uma opção</label>
							<select class="form-campo">
								<option value="S">Sim </option>
								<option value="N">Não </option>
							</select>
						</div>
						<div class="col-3 mt-4">
							<input type="submit" name="" value="PESQUISAR" class="btn btn-roxo width-100">
						</div>
					</div>
					<div class="tabela-responsiva sm tborder">					
					<span class="text-label d-block">Resultado</span>
					<div class="rolagem-tabela2">
					<form action="">
						<table cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th align="center"><div class="check"><input type="checkbox" name="" id="marcar_0"><label for="marcar_0" class="float-left"></label></div> Todos</th>
									<th align="left">Produto</th>
									<th align="center" width="40">Ação</th>
								</tr>
							</thead>
							<tbody>
								<tr class="status-bg">
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_1"><label for="marcar_1"></label></div></td>
									<td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>
								<tr class="status-bg"> 
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_2"><label for="marcar_2"></label></div></td>
									<td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>
								<tr> 
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_3"><label for="marcar_3"></label></div></td>
									<td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>
								<tr> 
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_4"><label for="marcar_4"></label></div></td>
									<td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>
								<tr> 
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_5"><label for="marcar_5"></label></div></td>
									<td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>
								<tr> 
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_6"><label for="marcar_6"></label></div></td>
									<td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>
								<tr> 
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_7"><label for="marcar_7"></label></div></td>
									<td align="left">1 | ALÇA DE ALUMINIO PEQUENA | 19/04/2019 | Em cotação de preço | 10</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>			
							</tbody>
						</table>
					</form>
					</div>	
				</div>
				</div>
				<div class="col-12 py-4">
					<input type="submit" class="btn btn-azul m-auto px-4" value="Enviar marcados">
				</div>
			</div>
			</div>
			
			<!--Modal fornecedores--->
			<div class="window" id="janela2">
				<div class="caixa mb-0">
					<div class="caixa-titulo azul2 width-100 d-inline-block py-1">
						<span class="d-inline-block pt-1"><i class="fas fa-arrow-right"></i> Selecionar múltiplos fornecedores</span>
						<a href="" class="fechar">x</a>
					</div>
					<div class="px-4">
					<div class="rows py-3">
						<div class="col-10">
							<label class="text-label">Pesquisar por nome</label>
							<input type="text" name="" placeholder="Digite aqui..." class="form-campo">
						</div>
						<div class="col-2 mt-4">
							<input type="submit" name="" value="PESQUISAR" class="btn btn-roxo width-100">
						</div>
					</div>
					
					<div class="tabela-responsiva sm tborder">										
					<span class="text-label d-block">Resultado</span>
					<div class="rolagem-tabela2">
					<form action="">
						<table cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th align="center"><div class="check"><input type="checkbox" name="" id="marcar_00"><label for="marcar_00" class="float-left"></label></div> Todos</th>
									<th align="left">Produto</th>
									<th align="center">Ação</th>
								</tr>
							</thead>
							<tbody>
								<tr class="status-bg">
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_01"><label for="marcar_01"></label></div></td>
									<td align="left">Manoel Jailton | mjailton@gmail.com</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>
								<tr>
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_02"><label for="marcar_02"></label></div></td>
									<td align="left">Manoel Jailton | mjailton@gmail.com</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>	
								<tr>
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_03"><label for="marcar_03"></label></div></td>
									<td align="left">Manoel Jailton | mjailton@gmail.com</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>	
								<tr>
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_04"><label for="marcar_04"></label></div></td>
									<td align="left">Manoel Jailton | mjailton@gmail.com</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>	
								<tr>
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_05"><label for="marcar_05"></label></div></td>
									<td align="left">Manoel Jailton | mjailton@gmail.com</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>	
								<tr>
									<td align="center"><div class="check"><input type="checkbox" name="" id="marcar_06"><label for="marcar_06"></label></div></td>
									<td align="left">Manoel Jailton | mjailton@gmail.com</td>
									<td class="text-center"><a href="" class="btn btn-verde btn-pequeno p-1 d-inline-block">Marcar</a></td>
								</tr>		
							</tbody>
						</table>
					</form>
					</div>	
				</div>
				</div>
				<div class="col-12 py-4">
					<input type="submit" class="btn btn-azul2 m-auto px-4" value="Enviar marcados">
				</div>
			</div>
			</div>
			
			<div id="mascara"></div>
 
  <script>
	var id_cotacao = "<?php echo $cotacao->id_cotacao ?>";
 </script>




