<div class="conteudo-dividido bg-fundo">
			
<form action="#" method="Post" enctype="multipart/form-data" >
  <div class="conteudo-fluido">								
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
            <span class="h5 caixa-titulo"><i class="fas fa-box"></i> Cadastrar Novo Produto</span>
                <div class="rows p-4"> 
                        <div class="col-4">
                                <div class="py-1 px-2 mt-3 border text-center">
                                        <img src="https://mjailton.com.br/testes/erp_oficial/versao02/upload/CUSCUZEIRA_LARANJA.jpg" class="img-fluido opaco">
                                </div>
                        </div>
                        <div class="col-8 px-2">
                           <div class="rows">
                                <div class="col-12">
                                        <label class="text-label">Titulo do produto</label>
                                        <input type="text"  name="produto" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Categoria</label>
                                        <select class="form-campo" name="id_categoria">
                                            <option value='1' > Categoria 01</option>
                                            <option value='1' > Categoria 02</option>
                                                
                                        </select>
                                </div>
                                <div class="col-4">
                                        <label class="text-label"  >Código Personalizado</label>
                                        <input type="text" name="codigo_personalizado"  placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Unidade</label>
                                        <select class="form-campo" name="id_unidade">
                                                <option value='1' > Unidade 01</option>
												<option value='1' > Unidade 02</option>
                                        </select>
                                </div>
                               
                                <div class="col-6">
                                        <label class="text-label">Upload da imagem</label>
                                        <input type="file" name="arquivo" class="form-campo">
                                </div>
                                <div class="col-6">
                                        <label class="text-label">Nome do arquivo</label>
                                        <input type="text"  name="nome_do_arquivo" value="" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Preço Alto</label>
                                        <input type="text" name="preco_alto"  placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Preço atual</label>
                                        <input type="text" name="preco"  placeholder="Digite aqui..." class="form-campo">
                                </div>												

                                <div class="col-4">
                                        <label class="text-label">Ativo</label>
                                        <select class="form-campo" name="ativo">
                                                <option value="S">Sim</option>                                                 
                                                <option value="N" >Não</option> 
                                        </select>
                                </div>
                            
                              
                        </div>
			
                            <div class="col-12 mt-4  pb-5">
                                    <input type="submit" value="Salvar alterações" class="btn btn-verde btn-medio d-block m-auto">
                            </div>	
                        </div>
                </div>
              </div>
            </div>
    </div>
					
            <div class="caixa">
			 <span class="h5 caixa-titulo"><i class="fas fa-box"></i> Loja Virtual</span>               	
            <div class="py-3 px-4">
                    <span class="h4 d-block">Informações</span>
                    <div class="rows">	
                            <div class="col">	
                                    <span class="text-label">Lançamento</span>
                                    <select class="form-campo">
                                            <option value="S">Sim</option>                                                 
                                            <option value="N">Não</option> 
                                    </select>
                            </div>	
                            <div class="col">	
                                    <span class="text-label">Promoção</span>
                                    <select class="form-campo">
                                            <option value="S">Sim</option>                                                 
                                            <option value="N">Não</option> 
                                    </select>
                            </div>	
                            <div class="col">	
                                    <span class="text-label">Mais vendido</span>
                                    <select class="form-campo">
                                            <option value="S">Sim</option>                                                 
                                            <option value="N">Não</option> 
                                    </select>
                            </div>	
                          
                    </div>

                    <div class="rows mb-5">
                        <div class="col">	
                                <small class="text-label">Comprimento</small>
                                <input type="text" placeholder="Digite o título" class="form-campo">
                        </div>	
                        <div class="col">	
                                <small class="text-label">Altura</small>
                                <input type="text" placeholder="Digite o título" class="form-campo">
                        </div>	
                        <div class="col">	
                                <small class="text-label">Largura</small>
                                <input type="text" placeholder="Digite o título" class="form-campo">
                        </div>	
                        <div class="col">
                                <small class="text-label">Quantidade</small>
                                <input type="text" placeholder="Digite o título" class="form-campo">
                        </div>
					</div>	
                    

                    <div class="border-top"><!--lINHA DIVISÓRIA--></div>
                    
                 <div class="py-4 px-0">
                        <span class="h4 d-block">Descrição</span>
                        <textarea rows="5" id="ckeditor" class="ckeditor" name="txt_descricao"></textarea>											

                        
                </div>
            	
            </div>		
							
											
    </div>
							
</div>
</form>			
</div>

  
 <script src="assets/ckeditor/ckeditor.js"> </script>  



