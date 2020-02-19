
	<div class="conteudo-dividido bg-fundo">
			

  <div class="conteudo-fluido">		
   <form action="<?php echo URL_BASE ."produto/salvar" ?>" method="Post" enctype="multipart/form-data" >
    <div class="rows">	
        <div class="col-12">
            <div class="caixa">
                <span class="h5 caixa-titulo"><i class="fas fa-box"></i> Cadastrar novo produto</span>
                 <div class="rows p-4">
                            <div class="col-4 mt-4 text-center">
                                    <div class="p-4  border">
                                            <img src="<?php echo URL_IMAGEM ."semproduto.png" ?>" class="img-fluido opaco">
                                    </div>
                            </div>
                            <div class="col-8">
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
                                        <input type="text" name="nome_do_arquivo"  placeholder="Digite aqui..." class="form-campo">
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
                                
                                
                                
                                
                        </div>
                </div>
            </div>
        </div>
    </div>
       
       
       
    <div class="caixa">        
	<span class="h5 caixa-titulo"><i class="fas fa-box"></i> Dados Fiscais</span>
        
		<div class="py-3 px-4">
            <div class="rows p-4"> 
                
                
                
               

                <div class="col-3" >                        
                    <small class="text-label">Referência EAN/GTIN</small>
                    <input type="text" class="form-campo" name="produtos_IcEAN" />
                </div>
               
                 <div class="col-3">
                        <label class="text-label">NCM</label>
                        <input type="text" name="produtos_INCM"  placeholder="Digite aqui..." class="form-campo">
                </div>
                 <div class="col-3">
                        <label class="text-label">Código CEST</label>
                        <input type="text" name="produtos_ICEST"  placeholder="Digite aqui..." class="form-campo">
                </div>                
                 <div class="col-3">
                        <label class="text-label">Código Benef. Fiscal na UF</label>
                        <input type="text" name="produtos_IcBenef"  placeholder="Digite aqui..." class="form-campo">
                </div>                
                
                <div class="col-3">	
                    <span class="text-label">Exceção tabela IPI</span>
                    <select class="form-campo" name="Norigem" >
                            <option value="0" selected="selected"></option>
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            
                    </select>                            
                </div>   
                <div class="col-3">
                        <label class="text-label">MVA</label>
                        <input type="text" name="mva"  placeholder="Digite aqui..." class="form-campo">
                </div>                
                 <div class="col-3">
                        <label class="text-label">FCI</label>
                        <input type="text" name="fci"  placeholder="Digite aqui..." class="form-campo">
                </div>  
                 
             </div>
             
           <div class="col-12 mt-4  text-center pb-5">
                    <input type="hidden" name="id_produto" value="" >
                    <input type="submit" value="Salvar alterações" class="btn btn-verde btn-medio d-inline-block">
            </div>
                     
        </div>
        
      
 </div>
       
       
       
					
   
</form>			
</div>
</div>



    
    <script src="<?php echo URL_BASE ."assets/ckeditor/ckeditor.js" ?>"> </script>
    <script src="<?php echo URL_BASE ."assets/js/js_ipi.js" ?>"> </script>
    <script src="<?php echo URL_BASE ."assets/js/js_pis.js" ?>"> </script>
    <script src="<?php echo URL_BASE ."assets/js/js_cofins.js" ?>"> </script>
    <script src="<?php echo URL_BASE ."assets/js/js_icms.js" ?>"> </script>