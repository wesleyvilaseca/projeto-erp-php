<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">
    <form action="#" method="Post" enctype="multipart/form-data" >
<div class="conteudo-fluido">								
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
							<span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Cadastrar Novo Produto</span>							
							<a href="#" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>

			</div>
            
                <div class="rows p-4"> 
                        <div class="col-4">
                                <div class="py-1 px-2 mt-3 border text-center">
                                        <img src="" class="img-fluido opaco">
                                </div>
                        </div>
                        <div class="col-8 px-2">
                           <div class="rows">
                                <div class="col-12">
                                        <label class="text-label">Titulo do produto</label>
                                        <input type="text" value="" name="produto" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Categoria</label>
                                        <select class="form-campo" name="id_categoria">
                                            <option value= > Opção 01</option>
                                            <option value= > Opção 02</option>
                                                
                                        </select>
                                </div>
                                <div class="col-4">
                                        <label class="text-label"  >Código Personalizado</label>
                                        <input type="text" name="codigo_personalizado" value="<?php echo isset($produto) ? $produto->codigo_personalizado: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Unidade</label>
                                        <select class="form-campo" name="id_unidade">
                                             <option value= > Opção 01</option>
                                             <option value= > Opção 02</option>
                                        </select>
                                </div>
                               
                                <div class="col-6">
                                        <label class="text-label">Upload da imagem</label>
                                        <input type="file" name="arquivo" class="form-campo">
                                </div>
                                <div class="col-6">
                                        <label class="text-label">Nome do arquivo</label>
                                        <input type="text" value="" name="nome_do_arquivo" value="" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Preço Alto</label>
                                        <input type="text" name="preco_alto" value="" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Preço atual</label>
                                        <input type="text" name="preco" value="" placeholder="Digite aqui..." class="form-campo">
                                </div>												

                                <div class="col-4">
                                        <label class="text-label">Ativo</label>
                                        <select class="form-campo" name="ativo">
                                                <option value="S" >Sim</option>                                                 
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

    </div>
</form>			
</div>
 </section>




