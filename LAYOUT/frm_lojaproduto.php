<section class="conteudo">			
<div class="conteudo-dividido bg-fundo">
    <form action="<?php echo URL_BASE ."estoqueproduto/salvar" ?>" method="Post" enctype="multipart/form-data" >
<div class="conteudo-fluido">								
    <div class="rows">	
            <div class="col-12">
            <div class="caixa">
            <div class="caixa-titulo py-1 d-inline-block width-100">
                                    <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Cadastrar Novo Produto</span>							
                                    <a href="<?php echo URL_BASE ."estoqueproduto" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>

                    </div>
            
                <div class="rows p-4"> 
                        <div class="col-4">
                                <div class="py-1 px-2 mt-3 border text-center">
                                        <img src="<?php echo  isset($produto) ? URL_IMAGEM .$produto->imagem: URL_IMAGEM ."semproduto.png"  ?>" class="img-fluido opaco">
                                </div>
                        </div>
                        <div class="col-8 px-2">
                           <div class="rows">
                                <div class="col-12">
                                        <label class="text-label">Titulo do produto</label>
                                        <input type="text" value="<?php echo isset($produto) ? $produto->produto: "" ?>" name="produto" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Categoria</label>
                                        <select class="form-campo" name="id_categoria">
                                             
                                            <?php foreach($categorias as $categoria){ 
                                                $selecionado = (!isset($produto)) ? "" : ($produto->id_categoria==$categoria->id_categoria) ? "selected" : "";
                                                echo "<option value='$categoria->id_categoria' $selecionado > $categoria->categoria</option>";
                                            } ?>
                                                
                                        </select>
                                </div>
                                <div class="col-4">
                                        <label class="text-label"  >Código Personalizado</label>
                                        <input type="text" name="codigo_personalizado" value="<?php echo isset($produto) ? $produto->codigo_personalizado: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Unidade</label>
                                        <select class="form-campo" name="id_unidade">
                                                <?php foreach($unidades as $unidade){
                                                    $selecionado = (!isset($produto)) ? "" : ($produto->id_unidade==$unidade->id_unidade) ? "selected" : "";
                                                echo "<option value='$unidade->id_unidade' $selecionado > $unidade->unidade</option>";
                                            } ?>
                                        </select>
                                </div>
                               
                                <div class="col-6">
                                        <label class="text-label">Upload da imagem</label>
                                        <input type="file" name="arquivo" class="form-campo">
                                </div>
                                <div class="col-6">
                                        <label class="text-label">Nome do arquivo</label>
                                        <input type="text" value="<?php echo isset($produto) ? $produto->imagem: "" ?>" name="nome_do_arquivo" value="" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Preço Alto</label>
                                        <input type="text" name="preco_alto" value="<?php echo isset($produto) ? $produto->preco_alto: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Preço atual</label>
                                        <input type="text" name="custo_medio" value="<?php echo isset($produto) ? $produto->custo_medio: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
								

                                <div class="col-4">
                                        <label class="text-label">Ativo</label>
                                        <select class="form-campo" name="ativo">
                                                <option value="S" <?php echo (!isset($produto)) ? "" : ($produto->ativo=="S") ? "selected" : "" ?>>Sim</option>                                                 
                                                <option value="N" <?php echo (!isset($produto)) ? "" : ($produto->ativo=="N") ? "selected" : "" ?> >Não</option> 
                                        </select>
                                </div>
								
						       
                        </div>
				
                        </div>
                </div>
              </div>
            </div>
    </div>


    <div class="caixa">        
	<span class="h5 caixa-titulo"><i class="fas fa-box"></i> Dados Para Loja Virtual</span>
        
		<div class="py-3 px-4">
            <div class="rows py-4 px-3"> 
				<div class="col">
					<label class="text-label">Lançamento</label>
					<select class="form-campo" name="eh_lancamento">
						<option value="S" <?php echo (!isset($produto)) ? "" : ($produto->eh_lancamento=="S") ? "selected" : "" ?>>Sim</option>
						<option value="N" <?php echo (!isset($produto)) ? "" : ($produto->eh_lancamento=="N") ? "selected" : "" ?> >Não</option> 
					</select>
				</div>
				<div class="col">
					<label class="text-label">Promoção</label>
					<select class="form-campo" name="eh_promocao">
						<option value="S" <?php echo (!isset($produto)) ? "" : ($produto->eh_promocao=="S") ? "selected" : "" ?>>Sim</option>
						<option value="N" <?php echo (!isset($produto)) ? "" : ($produto->eh_promocao=="N") ? "selected" : "" ?> >Não</option> 
					</select>
				</div>
				<div class="col">
					<label class="text-label">Mais vendido</label>
					<select class="form-campo" name="eh_maisvendido">
						<option value="S" <?php echo (!isset($produto)) ? "" : ($produto->eh_maisvendido=="S") ? "selected" : "" ?>>Sim</option>
						<option value="N" <?php echo (!isset($produto)) ? "" : ($produto->eh_maisvendido=="N") ? "selected" : "" ?> >Não</option> 
					</select>
				</div>
								
                <div class="col">
						<label class="text-label">Comprimento</label>
						<input type="text" name="comprimento_correio" value="<?php echo isset($produto) ? $produto->comprimento_correio: "" ?>" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col">
						<label class="text-label">Altura</label>
						<input type="text" name="altura_correio" value="<?php echo isset($produto) ? $produto->altura_correio: "" ?>" placeholder="Digite aqui..." class="form-campo">
				</div>
                 
				<div class="col">
						<label class="text-label">Largura</label>
						<input type="text" name="largura_correio" value="<?php echo isset($produto) ? $produto->largura_correio: "" ?>" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col">
						<label class="text-label">Diâmetro</label>
						<input type="text" name="diametro_correio" value="<?php echo isset($produto) ? $produto->diametro_correio: "" ?>" placeholder="Digite aqui..." class="form-campo">
				</div>	
				
				 <div class="border-top width-100 mt-5"><!--lINHA DIVISÓRIA--></div>
                    
                 <div class="py-4 px-3">
                        <span class="h3">Descrição</span>
                        <textarea rows="5" id="ckeditor" class="ckeditor" name="txt_descricao"></textarea>											

                 </div>
				                 
             </div>
             
           <div class="col-12  pb-5">
                    <input type="hidden" name="id_produto" value="<?php echo isset($produto) ? $produto->id_produto: null ?>" >
                    <input type="submit" value="Salvar alterações" class="btn btn-verde btn-medio h5 px-4 d-block m-auto">
            </div>
                     
        </div>
        
      
 </div>

 

    </div>
</form>			
</div>
 </section>

<script src="<?php echo URL_BASE ."assets/ckeditor/ckeditor.js" ?>"> </script>


