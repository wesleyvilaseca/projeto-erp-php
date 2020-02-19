<div class="conteudo-dividido bg-fundo">				
    <div class="conteudo-fluido">								

        <div class="rows">	
                <div class="col-12">
                <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar por categoria</span>
                    <form name="busca" action="" method="GET" >
                        
                        <div class="px-4 pb-5 pt-4 ">
							<div class="rows">
								<div class="col-10">	
										<label class="text-label d-block">Nome </label>
										<input type="text" name="q" value="" placeholder="Digite aqui..." class="form-campo">
								</div>
								<div class="col-2 mt-4">
										<input type="submit" value="Pesquisar" class="btn btn-azul text-uppercase">
								</div>
							</div>
                        </div>
                    </form>
                </div>
                </div>

		<div class="col-12">
            <div class="caixa">
                <div class="caixa-titulo py-1 d-inline-block width-100">
                        <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista de categoria <small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-azul">50</b> registros</small></span>
                        <a href="#" class="btn btn-verde float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
                </div>
                    <div class="tabela-responsiva">
                    <table cellpadding="0" cellspacing="0">
                            <thead>
                                    <tr>
                                            <th align="center">item</th>
                                            <th align="center">Id</th>
                                            <th align="left" width="40%">Nome</th>
                                            <th align="center">Ativo</th>
                                            <th align="center" colspan="3">Ação</th>
                                    </tr>
                            </thead>
                            <tbody>  
					<tr>							
                      <td align="center">1</td>
						<td align="center">1</td>
						<td align="left">Panela</td>
						<td align="center"><span class="text-verde"><i class="fas fa-check"></i> Sim</span></td>
																		
						<td align="center">
							<a href="#" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
							<a href="#" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
							<a href="" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-info-circle"></i> Detalhes</a>
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
