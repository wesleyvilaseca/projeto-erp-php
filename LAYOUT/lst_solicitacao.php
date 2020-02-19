	
<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">						
				
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar solicitacao</span>
					<form name="busca" action="#" method="GET" >
                            <div class="rows p-3">
                                 
                                 <div class="col-4">
                                         <label class="text-label">Produto</label>
                                         <select class="form-campo" name="id_produto">
											 <option value="">Escolha uma Opção</option>
											
                                         </select>
                                 </div>
                                 <div class="col-4">
                                         <label class="text-label">Status</label>
                                         <select class="form-campo" name="id_status">
											 <option value="">Escolha uma Opção</option>
											
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
		<form action="#" method="post">						
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> Solicitações </span> <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul">0</b> registros</small>
					
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
                                                           					
                                <tr>
                                      <td align="center">
										 
										 <input type="checkbox"   >  
										
										</td>
                                         <td align="center">1</td>
                                         <td align="left">Produto X</td>
                                         <td align="center">10/02/2020</td>
										  <td align="left">Entregue</td>
										  <td align="left">1</td>
                                         <td align="center">
										 <a href="#" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-check-double"></i> Cotar</a>
									
								
                                         <a href="#" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
                                         </td>
                                 </tr>												
                                   														
							</tbody>
        </table>
                      
                        
        <footer class="caixa-rodape"> 
                <ul class="paginacao text-end">
                     
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
				
						<div class="rows  py-3 px-5">							
								<div class="col-12">
                                        <label class="text-label">Produto</label>
                                        <select class="form-campo" name="id_produto" id="id_produto">
										 											
									</select>
                                </div>
								<div class="col-8">
                                        <label class="text-label">Data da Entrega</label>
										<input type="date"  name="data_entrega" id="data_entrega" placeholder="Digite aqui..." class="form-campo">
                                </div>
								                              
                                
                                <div class="col-4">
                                        <label class="text-label"  >Qtde</label>
										<input type="text" name="qtde" id="qtde" placeholder="Digite aqui..." class="form-campo">
                                </div>                               
								 <div class="col-12 mt-4">
									<input type="button" value="Salvar alterações" id="btnInserir" class="btn btn-verde btn-medio d-block m-auto">
								</div>,
								
                        </div>
					
			</div>
		</div>
	</div>
<div id="mascara"></div>

