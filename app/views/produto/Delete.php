<section class="conteudo">			
    <div class="conteudo-dividido bg-fundo">

            <div class="conteudo-fluido">								
                <div class="rows">	
                    <div class="col-12">
                        <div class="caixa">
                            <span class="h5 caixa-titulo"><i class="fas fa-box"></i> Excluir Produto</span>
                            <div class="rows p-4"> 
                                <div class="col-4">
                                    <div class="py-1 px-2 mt-3 border text-center">
                                        <img src="<?php echo isset($produto) ? URL_IMAGEM . $produto->imagem : URL_IMAGEM . "sem-produto.png"?>" class="img-fluido opaco">
                                    </div>
                                </div>
                                <div class="col-8 px-2">
                                    <div class="rows">
                                        <div class="col-12">
                                            <label class="text-label">Titulo do produto</label>
                                            <input type="text"  name="produto" value="<?php echo isset($produto) ? $produto->produto : null ?>" placeholder="Digite aqui..." class="form-campo">
                                        </div>
                                        <div class="col-4">
                                            <label class="text-label">Categoria</label>
                                            <select class="form-campo" name="id_categoria">
                                                <?php
                                                //echo "<option value='$categoria->id_categoria' $selecionado > $produto->id_categoria </option>";
                                                foreach ($categorias as $categoria) {
                                                    $selecionado = (!isset($produto)) ? "" : ($produto->id_categoria==$categoria->id_categoria) ? "selected" : "" ;
                                                    echo "<option value='$categoria->id_categoria' $selecionado > $categoria->categoria </option>";
                                                }
                                                ?>

                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label class="text-label"  >Código Personalizado</label>
                                            <input type="text" name="sku"  value="<?php echo isset($produto) ? $produto->sku : null ?>" placeholder="Digite aqui..." class="form-campo">
                                        </div>
                                        <div class="col-4">
                                            <label class="text-label">Unidade</label>    
                                            
                                            <select class="form-campo" name="id_unidade">
                                                <?php                                                
                                                foreach ($unidades as $unidade) {
                                                    print $unidade->id_unidade;
                                                    $selecionado = (!isset($produto)) ? "" : ($produto->id_unidade==$unidade->id_unidade) ? "selected" : "" ;
                                                    echo "<option value='$unidade->id_unidade' $selecionado> $unidade->unidade </option>";
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="col-6">
                                            <label class="text-label">Upload da imagem</label>
                                            <input type="file" name="arquivo" class="form-campo">
                                        </div>
                                        <div class="col-6">
                                            <label class="text-label">Nome do arquivo</label>
                                            <input type="text"  name="imagem" value="<?php echo isset($produto) ? $produto->imagem : null ?>" placeholder="Digite aqui..." class="form-campo">
                                        </div>
                                        <div class="col-4">
                                            <label class="text-label">Preço Alto</label>
                                            <input type="text" name="preco_alto" value="<?php echo isset($produto) ? $produto->preco_alto : null ?>" placeholder="Digite aqui..." class="form-campo">
                                        </div>
                                        <div class="col-4">
                                            <label class="text-label">Preço atual</label>
                                            <input type="text" name="preco" value="<?php echo isset($produto) ? $produto->preco : null ?>"  placeholder="Digite aqui..." class="form-campo">
                                        </div>												

                                        <div class="col-4">
                                            <label class="text-label">Ativo</label>
                                            <select class="form-campo" name="ativo">
                                                <option value="S" <?php echo (!isset($produto)) ? "" : ($produto->ativo == "S") ? "selected" : "" ?>>Sim</option>                                                 
                                                <option value="N" <?php echo (!isset($produto)) ? "" : ($produto->ativo == "N") ? "selected" : "" ?>>Não</option> 
                                            </select>
                                        </div>


                                    </div>

                                    <div class="col-12 mt-4  pb-5">
                                        <a href="<?php echo URL_BASE . "produto/excluir/" . $produto->id_produto ?>" class="btn btn-verde btn-medio d-block m-auto">Excluir Produto</a>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	

            </div>
		
    </div>
</section>




