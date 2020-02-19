<div class="conteudo-dividido bg-fundo">				
<div class="conteudo-fluido">	
    <div class="rows">	
        <div class="col-12">
            <div class="caixa">
				<div class="caixa-titulo py-1 d-inline-block width-100">
                <span class="h5 mb-0 d-inline-block">
					<i class="fas fa-search"></i> Dados do Pedido: 01
				</span>
				<a href="#" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
				</div>
                    <div class="py-3 px-2">
                        <div class="rows">										
                                <div class="col-3 col-md-12 px-1">
                                        <div class="caixa degrade-roxo px-3 py-4">
                                                <i class="fas fa-users pequeno-font float-left mr-1"></i>
                                                <small>Nome do Cliente</small>
                                                <h4 style="line-height:1rem">Manoel Jailton</h4>
                                        </div>
                                </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-2 py-4">
                                                    <i class="fas fa-calendar-alt pequeno-font float-left mr-1"></i>
                                                    <small>Data</small>
                                                    <h4>19/04/2020</h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">	
                                            <div class="caixa degrade-roxo px-2 py-4">
                                                    <i class="far fa-clock pequeno-font float-left mr-1"></i>
                                                    <small>Hora</small>
                                                    <h4>10:10</h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-3 py-4">
                                                    <i class="fab fa-bitcoin pequeno-font float-left mr-1"></i>
                                                    <small>Total</small>
                                                    <h4>R$ 500,00</h4>
                                            </div>
                                       </div>
                                       <div class="col px-1">
                                            <div class="caixa degrade-roxo px-3 py-4">
													<i class="fas fa-map-marker-alt  pequeno-font float-left mr-1"></i>
                                                    <small>Origem</small>
                                                    <h4>Web</h4>
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
                                          
                                    <tr>
                                            <td align="center">1</td>
                                            <td align="center">Web</td>	
                                            <td align="left">Panela X</td>
                                            <td align="center">R$ 100</td>
                                            <td align="center">5</td>                                                    
                                            <td align="center">R$ 500,00</td>	

                                    </tr>
                               
                                            <tr>
                                                    <td align="right" colspan="6" ><b>Total:</b> <span class="text-verde minimo-font">R$ 500,00</span></td>
                                            </tr>	
                                    </tbody>
                            </table>
                          
                    </div>
                    
                    
                 
                    
                 
                    </div>

                   
            </div>
			
            <div class="col-12">
			<form action="#" method="post" >
                    <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Dados de Entrega</span>
                    
                 
                    <div class="caixa">
                    <div class="px-5">
                    <div class="rows pt-3 pb-4">
                            <div class="col-6">
                                    <label class="text-label">Transportadora</label>
                                    <select class="form-campo" name="id_transportadora">
									<option value=  > Selecione</option>

                                    </select>
                            </div>
                         
                        
                        
                            <div class="col-3">
                                <label class="text-label">Ratreamento</label>
                                 <input type="text" name="rastreamento" class="form-campo">												
                            </div>                        
                           
                          
                            </div>
                        </div>
                      
                    </div>
                    
                    </div>
					<div class="caixa">
                   
                        <div class="caixa-rodape">
						<input type="hidden"  name="id_pedido" >
                        <input type="submit" class="btn btn-verde btn-medio d-inline-block" value="Liberar Pedido">
                   
                    </div>
                    </div>
                   </form>
            </div>

    </div>
</div>
</div>