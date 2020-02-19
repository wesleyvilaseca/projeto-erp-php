<div class="conteudo-dividido bg-fundo">	
    <div class="conteudo-fluido">
        <div class="rows">	
                <div class="col-12">
                <div class="caixa">
                <div class="caixa-titulo py-1 d-inline-block width-100">
                        <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Inserir Empresa</span>
                        <a href="#" class="btn btn-verde float-right"><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
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
                                                        <input type="text"  name="razao_social"  placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                                <div class="col-6 mb-3">
                                                        <label class="text-label">Nome Fantasia</label>	
                                                        <input type="text" name="nome_fantasia"  class="form-campo">
                                                </div>

                                                <div class="col-4 mb-3">
                                                        <label class="text-label">CNPJ</label>	
                                                        <input type="text" name="cnpj"   placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                                <div class="col-4 mb-3">
                                                        <label class="text-label">Insc. Estadual</label>	
                                                        <input type="text" name="ie"    placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                                <div class="col-4 mb-3">
                                                        <label class="text-label">Insc. Municipal</label>	
                                                        <input type="text" name="im"  placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                               
                                                <div class="col-1 mb-3">
                                                        <label class="text-label">DDD:</label>	
                                                        <input type="text" name="ddd"   placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                                <div class="col-4 mb-3">
                                                        <label class="text-label">Fone:</label>	
                                                        <input type="text" name="fone"   placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                                <div class="col-3 mb-3">
                                                        <label class="text-label">Celular:</label>	
                                                        <input type="text" name="celular" placeholder="Digite aqui..." class="form-campo">
                                                </div>                                               

                                                <div class="col-4 mb-3">
                                                        <label class="text-label">E-mail</label>	
                                                        <input type="text" name="email"  placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                                <div class="col-4 mb-3">
                                                        <label class="text-label">E-mail Secundário</label>	
                                                        <input type="text" name="email_secundario" placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                                <div class="col-4 mb-3">
                                                        <label class="text-label">E-mail Contabilidade</label>	
                                                        <input type="text" name="email_contabilidade"  placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                             
                              
                                </div>
                        </div>
                    
                    <div id="tab-2" class="tab-content">									
                                <span class="d-block mt-4 h4 border-bottom">Endereço</span>										
                                <div class="rows pb-4">																					
                                                <div class="col-3 mb-3">
                                                    <label class="text-label">CEP</label>
                                                     <div class="input-grupo">
                                                     <input type="text"  name="cep" placeholder="Digite aqui..." class="form-campo">
                                                    
                                                     <div class="input-grupo-append"><button class="btn btn-azul"><i class="fas fa-search"></i></button></div>
                                                     </div>
                                                </div>
                                                <div class="col-6 mb-3">
                                                        <label class="text-label">Logradouro</label>	
                                                        <input type="text" name="logradouro"  placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                                <div class="col-1 mb-4">
                                                        <label class="text-label">Numero</label>	
                                                        <input type="text" name="numero"   placeholder="Digite aqui..." class="form-campo">
                                                </div>
												
                                                <div class="col-2 mb-2">
                                                        <label class="text-label">UF</label>	
                                                        <select class="form-campo" name="id_estado">
                                                                <option checked>Selecione</option>
                                                                <option >MA</option>
                                                                <option >SP</option>
                                                                
                                                        </select>
                                                </div>

                                                <div class="col-4 mb-3">
                                                        <label class="text-label">Complemento</label>	
                                                        <input type="text" name="complemento"   placeholder="Digite aqui..." class="form-campo">
                                                </div>	
                                                <div class="col-4 mb-3">
                                                        <label class="text-label">Bairro</label>	
                                                        <input type="text" name="bairro"  placeholder="Digite aqui..." class="form-campo">
                                                </div>	
                                                <div class="col-4 mb-2">
                                                        <label class="text-label">Cidade</label>	
                                                        <select class="form-campo" name="id_cidade">
                                                                <option checked>Selecione</option>
                                                                <option checked>São Luís</option>
                                                                <option checked>São Paulo</option>
                                                                
                                                                
                                                        </select>
                                                </div>
	

                                </div>
                        </div>
                
                        <div id="tab-3" class="tab-content">									
                                <span class="d-block mt-4 h4 border-bottom">Dados Fiscais</span>										
                                <div class="rows pb-4">																					
                                         <div class="col-3 mb-3">
                                                <label class="text-label">CNAE</label>	
                                                <input type="text" name="cnae"  placeholder="Digite aqui..." class="form-campo">
                                        </div>
                                        <div class="col-4 mb-3">
                                                <label class="text-label">Regime Tributário</label>	
                                                <select class="form-campo" name="regime_tributario">
                                                        <option value="10">Simples Nacional</option> 
                                                        <option value="20">Lucro Presumido</option> 
                                                        <option value="30" >Lucro Real</option> 
                                                </select>
                                        </div>
                                                                           
	
                                </div>
                        </div>
                </div>

                <div class="col-6 mb-5" style="clear:both">
                    <a href="#" class="btn btn-azul btn-grande d-block m-auto">Excluir Empresa</a>
         
                </div>
                </div>


                </div>
                </div>
                            </div>
               
</div>