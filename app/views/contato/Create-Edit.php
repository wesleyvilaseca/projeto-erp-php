<div class="conteudo-dividido bg-fundo">
    <form action="<?php echo URL_BASE . "contato/salvar" ?>" method="Post"  >	
        <div class="conteudo-fluido">
            <div class="rows">	
                <div class="col-12">
                    <div class="caixa">
                        <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Inserir Contato</span>
                            <a href="<?php echo URL_BASE . "contato" ?>" class="btn btn-verde float-right"><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                        </div>

                        <div class="pt-4 px-4 mb-4 width-100 float-left">	
                            <ul class="tabs">
                                <li class="current" data-tab="tab-1">Dados Gerais</li>
                                <li data-tab="tab-2">Endereço</li>
                                <li data-tab="tab-3">Informações Adicionais</li>
                            </ul>		

                            <div id="tab-1" class="tab-content current">
                                <span class="d-block mt-4 mb-4 h4 border-bottom">Informações básicas</span>
                                <div class="rows pb-4">										
                                    <div class="col-12 mb-4">
                                        <span class="h5 d-block">Marque os tipos desejados:</span>
                                        <div class="rows itens-check px-3">
                                            <div><input type="checkbox" name="eh_cliente" class="form-control tipo" id="contato" value="S" checked> <label class="p-2 mr-1" for="contato"><i class="fas fa-user"></i> Contato</label>
                                            </div>
                                            <div><input type="checkbox" name="eh_fornecedor" class="form-control tipo" id="fornecedor" value="S"> <label class="p-2 mr-1" for="fornecedor"><i class="fas fa-cart-arrow-down"></i> Fornecedor</label>
                                            </div>

                                            <div><input type="checkbox" name="eh_transportador" class="form-control tipo" id="transportador" value="S"> <label class="p-2" for="transportador"><i class="fas fa-truck"></i> Transportador</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php
                                    /*print '<pre>';
                                    print_r($contato);
                                    print '</pre>';*/
                                    ?>
                                    

                                    <div class="col-6 mb-3">
                                        <label class="text-label">Nome</label>	
                                        <input type="text" name="nome" value="<?php echo (isset($contato)) ? $contato->nome : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>                                    
                                    <div class="col-6 mb-3">
                                        <label class="text-label">Nome Fantasia</label>	
                                        <input type="text" name="nome_fantasia" value="<?php echo (isset($contato)) ? $contato->nome_fantasia : null ?>" class="form-campo">
                                    </div>

                                    <div class="col-4 mb-3">
                                        <label class="text-label">CPF</label>	
                                        <input type="text" name="cpf" value="<?php echo (isset($contato)) ? $contato->cpf : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>


                                    <div class="col-4 mb-3">
                                        <label class="text-label">CNPJ</label>	
                                        <input type="text" name="cnpj" value="<?php echo (isset($contato)) ? $contato->cnpj : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>

                                    <div class="col-4 mb-3">
                                        <label class="text-label">Data Cadastro</label>	
                                        <input type="date" name="data_cadastro" value="<?php echo (isset($contato)) ? $contato->data_cadastro : null ?>" placeholder="" class="form-campo">
                                    </div>	

                                    <div class="col-8 mb-3">
                                        <label class="text-label">E-mail</label>	
                                        <input type="text" name="email" value="<?php echo (isset($contato)) ? $contato->email : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label class="text-label">Senha</label>	
                                        <input type="password" name="senha" placeholder="Digite aqui..." class="form-campo">
                                    </div>

                                    <div class="col-1 mb-3">
                                        <label class="text-label">DDD:</label>	
                                        <input type="text" name="ddd" value="<?php echo (isset($contato)) ? $contato->ddd : null ?>"  placeholder="Digite aqui..." class="form-campo">
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label class="text-label">Fone:</label>	
                                        <input type="text" name="telefone" value="<?php echo (isset($contato)) ? $contato->telefone : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label class="text-label">Celular:</label>	
                                        <input type="text" name="celular" value="<?php echo (isset($contato)) ? $contato->celular : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>
                                    <div class="col-2">
                                        <label class="text-label">Ativo</label>
                                        <select class="form-campo" name="ativo">
                                            <option value="S" <?php echo (!isset($contato)) ? "" : ($contato->ativo == "S") ? "selected" : null ?>>Sim</option>                                                 
                                            <option value="N" <?php echo (!isset($contato)) ? "" : ($contato->ativo == "N") ? "selected" : null ?>>Não</option> 
                                        </select>
                                    </div>


                                </div>
                            </div>

                            <div id="tab-2" class="tab-content">									
                                <span class="d-block mt-4 h4 border-bottom">Endereço</span>										
                                <div class="rows pb-4">																					
                                    <div class="col-4 mb-3">
                                        <label class="text-label">CEP</label>
                                        <div class="input-grupo">
                                            <input type="text"  name="cep" value="<?php echo (isset($contato)) ? $contato->cep : null ?>" placeholder="Digite aqui..." class="form-campo">
                                            <div class="input-grupo-append"><button class="btn btn-azul"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label class="text-label">Logradouro</label>	
                                        <input type="text" name="logradouro" value="<?php echo (isset($contato)) ? $contato->logradouro : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>
                                    <div class="col-1 mb-4">
                                        <label class="text-label">Numero</label>	
                                        <input type="text" name="numero" value="<?php echo (isset($contato)) ? $contato->numero : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>

                                    <div class="col-3 mb-2">
                                        <label class="text-label">UF</label>	
                                        <select class="form-campo" name="id_estado">
                                            <?php
                                            foreach ($estados as $estado) {
                                                $selecionado = (!isset($contato)) ? "" : ($contato->id_cidade == $cidade->id_cidade) ? "selected" : "";
                                                echo "<option value='$estado->id_estado' $selecionado>$estado->nome_estado </option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-4 mb-3">
                                        <label class="text-label">Complemento</label>	
                                        <input type="text" name="complemento" value="<?php echo (isset($contato)) ? $contato->complemento : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>	
                                    <div class="col-4 mb-3">
                                        <label class="text-label">Bairro</label>	
                                        <input type="text" name="bairro" value="<?php echo (isset($contato)) ? $contato->bairro : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>
                                    <div class="col-4 mb-2">
                                        <label class="text-label">Cidade</label>	
                                        <select class="form-campo" name="id_cidade">
                                            <?php
                                            if ($estado->id_estado) {
                                                foreach ($cidades as $cidade) {
                                                    $selecionado = (!isset($contato)) ? "" : ($contato->id_cidade == $cidade->id_cidade) ? "selected" : "";
                                                    echo "<option value='$cidade->id_cidade' $selecionado>$cidade->nome_cidade</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>



                            <div id="tab-3" class="tab-content">									
                                <span class="d-block mt-4 h4 border-bottom">Informações Adicionais</span>										
                                <div class="rows pb-4">
                                    <div class="col-4 mb-3">
                                        <label class="text-label">Insc. Estadual</label>	
                                        <input type="text" name="ie" value="<?php echo (isset($contato)) ? $contato->ie : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label class="text-label">Insc. Municipal</label>	
                                        <input type="text" name="im" value="<?php echo (isset($contato)) ? $contato->im : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label class="text-label">Suframa</label>	
                                        <input type="text" name="suframa" value="<?php echo (isset($contato)) ? $contato->suframa : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>

                                    <div class="col-4 mb-3">
                                        <label class="text-label">RG</label>	
                                        <input type="text" name="rg" value="<?php echo (isset($contato)) ? $contato->rg : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label class="text-label">Cód. Estrangeiro</label>	
                                        <input type="text" name="cod_estrangeiro" value="<?php echo (isset($contato)) ? $contato->cod_estrangeiro : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label class="text-label">IE Subst. Trib.</label>	
                                        <input type="text" name="ie_subst_trib" value="<?php echo (isset($contato)) ? $contato->ie_subst_trib : null ?>" placeholder="Digite aqui..." class="form-campo">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mb-5" style="clear:both">
                            <input type="hidden" name="id_contato" value="<?php echo (isset($contato)) ? $contato->id_contato : null ?>">
                            <input type="submit" value="Salvar" class="btn btn-azul btn-grande d-block m-auto">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </form>
</div>