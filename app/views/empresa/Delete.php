<div class="conteudo-dividido bg-fundo">

    <div class="conteudo-fluido">
        <div class="rows">	
            <div class="col-12">
                <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                        <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Inserir Empresa</span>
                        <a href="<?php echo URL_BASE . "empresa/index" ?>" class="btn btn-verde float-right"><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                    </div>

                    <div class="pt-4 px-4 mb-4 width-100 float-left">	
                        <ul class="tabs">
                            <li class="current" data-tab="tab-1">Novo cadastro</li>
                            <li data-tab="tab-2">Endereço</li>
                            <li data-tab="tab-3">Dados Fiscais</li>
                        </ul>		

                        <div id="tab-1" class="tab-content current">
                            <span class="d-block mt-4 h4 border-bottom">Informações básicas</span>
                            <div class="rows pb-4">
                                <div class="col-6 mb-3">
                                    <label class="text-label">Razão Social</label>	
                                    <input type="text"  name="razao_social" value="<?php echo (isset($empresa)) ? $empresa->razao_social : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="text-label">Nome Fantasia</label>	
                                    <input type="text"  value="<?php echo (isset($empresa)) ? $empresa->nome_fantasia : null ?>" name="nome_fantasia"   class="form-campo">
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label">CNPJ</label>	
                                    <input type="text" name="cnpj"  value="<?php echo (isset($empresa)) ? $empresa->cnpj : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Insc. Estadual</label>	
                                    <input type="text" name="ie"  value="<?php echo (isset($empresa)) ? $empresa->ie : null ?>"   placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Insc. Municipal</label>	
                                    <input type="text" name="im"  value="<?php echo (isset($empresa)) ? $empresa->im : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>

                                <div class="col-1 mb-3">
                                    <label class="text-label">DDD:</label>	
                                    <input type="text" name="ddd"  value="<?php echo (isset($empresa)) ? $empresa->ddd : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Fone:</label>	
                                    <input type="text" name="fone"  value="<?php echo (isset($empresa)) ? $empresa->fone : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-3 mb-3">
                                    <label class="text-label">Celular:</label>	
                                    <input type="text" name="celular"  value="<?php echo (isset($empresa)) ? $empresa->celular : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>                                               

                                <div class="col-4 mb-3">
                                    <label class="text-label">E-mail</label>	
                                    <input type="text" name="email"  value="<?php echo (isset($empresa)) ? $empresa->email : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">E-mail Secundário</label>	
                                    <input type="text" name="email_secundario"  value="<?php echo (isset($empresa)) ? $empresa->email_secundario : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">E-mail Contabilidade</label>	
                                    <input type="text" name="email_contabilidade"  value="<?php echo (isset($empresa)) ? $empresa->email_contabilidade : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>


                            </div>
                        </div>

                        <div id="tab-2" class="tab-content">									
                            <span class="d-block mt-4 h4 border-bottom">Endereço</span>										
                            <div class="rows pb-4">																					
                                <div class="col-3 mb-3">
                                    <label class="text-label">CEP</label>
                                    <div class="input-grupo">
                                        <input type="text"  name="cep"  value="<?php echo (isset($empresa)) ? $empresa->cep : null ?>" placeholder="Digite aqui..." class="form-campo">

                                        <div class="input-grupo-append"><button class="btn btn-azul"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="text-label">Logradouro</label>	
                                    <input type="text" name="endereco"  value="<?php echo (isset($empresa)) ? $empresa->endereco : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-1 mb-4">
                                    <label class="text-label">Numero</label>	
                                    <input type="text" name="numero"  value="<?php echo (isset($empresa)) ? $empresa->numero : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>

                                <div class="col-2 mb-2">
                                    <label class="text-label">UF</label>	
                                    <select class="form-campo" name="id_estado">
                                        <?php
                                        foreach ($estados as $estado) {
                                            echo "<option value='$estado->id_estado'>$estado->nome_estado </option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label">Complemento</label>	
                                    <input type="text" name="complemento"  value="<?php echo (isset($empresa)) ? $empresa->complemento : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>	
                                <div class="col-4 mb-3">
                                    <label class="text-label">Bairro</label>	
                                    <input type="text" name="bairro"  value="<?php echo (isset($empresa)) ? $empresa->bairro : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>	
                                <div class="col-4 mb-2">
                                    <label class="text-label">Cidade</label>	
                                    <select class="form-campo" name="id_cidade">
                                        <?php
                                        foreach ($cidades as $cidade) {
                                            echo "<option value='$cidade->id_cidade'>$cidade->nome_cidade</option>";
                                        }
                                        ?>

                                    </select>
                                </div>


                            </div>
                        </div>

                        <div id="tab-3" class="tab-content">									
                            <span class="d-block mt-4 h4 border-bottom">Dados Fiscais</span>										
                            <div class="rows pb-4">																					
                                <div class="col-3 mb-3">
                                    <label class="text-label">CNAE</label>	
                                    <input type="text" name="cnae"  value="<?php echo (isset($empresa)) ? $empresa->cnae : null ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Regime Tributário</label>	
                                    <select class="form-campo" name="regime_tributario">
                                        <option value="10" <?php echo (!isset($empresa)) ? "" : ($empresa->regime_tributario == '10') ? "selected" : "" ?>>Simples Nacional</option> 
                                        <option value="20" <?php echo (!isset($empresa)) ? "" : ($empresa->regime_tributario == '20') ? "selected" : "" ?>>Lucro Presumido</option> 
                                        <option value="30" <?php echo (!isset($empresa)) ? "" : ($empresa->regime_tributario == '30') ? "selected" : "" ?>>Lucro Real</option> 
                                    </select>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="mb-5" style="clear:both">
                        <a href="<?php echo URL_BASE . "empresa/excluir/" . $empresa->id_empresa ?>" class="btn btn-verde btn-medio d-block m-auto">Excluir Empresa</a>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>