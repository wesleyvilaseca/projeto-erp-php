<div class="conteudo-dividido bg-fundo">				
    <div class="conteudo-fluido">	
        <div class="rows">	
            <div class="col-12">
            <div class="caixa">
            <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar por Pedidos</span>
                    <div class="px-5">
                    <form name="busca" action="#" method="GET" >
                    <div class="rows pt-3 pb-4">
                            <div class="col-3">
                                         <label class="text-label">Data 1</label>
                                         <input type="date" name="data_inicial" value="" placeholder="Digite aqui..." class="form-campo">
                                 </div>
								 <div class="col-3">
                                         <label class="text-label">Data 2</label>
                                         <input type="date" name="data_final" value="" placeholder="Digite aqui..." class="form-campo">
                                 </div>
                             
                                 <div class="col-4">
                                         <label class="text-label">Status</label>
                                         <select class="form-campo" name="idStatus">
											 <option value="">Escolha uma Opção</option>
										
                                         </select>
                                 </div>
								 <div class="col-4">
                                         <label class="text-label">Cliente</label>
                                         <select class="form-campo" name="idContato">
											 <option value="">Escolha uma Opção</option>
											
                                         </select>
                                 </div>
							 <div class="col-2 mt-4">
                                 <input type="submit" value="Pesquisar" class="btn btn-warning text-uppercase">
                             </div>
                            </div>
							</form>
                        </div>
                    </div>
            </div>
							
							
            <div class="col-12">
                <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  mb-0 pt-1 d-inline-block"><i class="far fa-list-alt"></i> LISTA DE PEDIDOS</span>
                    </div>
		<div class="tabela-responsiva">
		<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                    <th align="center">Id</th>
                    <th align="left">Cliente</th>
                    <th align="center">Data</th>
                    <th align="center">Subtotal</th>
                    <th align="center">Origem</th>
                    <th align="center">Status</th>
                    <th align="center" colspan="4">Ação</th>
            </tr>
        </thead>
        <tbody>  
        
        <tr>
                <td align="center">1</td>
                <td align="left">Manoel Jailton</td>
                <td align="left">19/04/2020</td>
                <td align="center">R$ 500,00</td> 											
                <td align="left">Web</td>
                <td align="center"><span class="status ">Finalizado</span></td> 											
                <td align="center"><a href="#" class="d-block btn btn-outline-verde status digitacao"><i class="fas fa-info-circle"></i> Detalhes</a></td>						
                <td align="center">
                    <a href="#" class="d-block btn btn-outline-verde status recusado"> Excluir</a>	
                    
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
                        </div>

                </div>
        </div>
</div>