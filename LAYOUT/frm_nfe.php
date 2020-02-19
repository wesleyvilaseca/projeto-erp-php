
<div class="conteudo-dividido bg-fundo">
<form action="<?php echo URL_BASE ."nfe/salvar" ?>" method="Post"  >	
    <div class="conteudo-fluido">
        <div class="rows">	
                <div class="col-12">
                <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Nova Nota</span>
                            <a href="#" class="btn btn-verde float-right"><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                    </div>

                <div class="pt-4 px-4 mb-4 width-100 float-left">	
                         <ul class="tabs">
                                <li class="current" data-tab="tab-1">Dados gerais</li>
                                <li data-tab="tab-2">Dados Destinatário</li>
                                <li data-tab="tab-3">Produtos</li>
                                <li data-tab="tab-4">Totalizadores</li>
                        </ul>		

        <div id="tab-1" class="tab-content current">
                <span class="d-block mt-4 h4 border-bottom">Informações básicas</span>
                <div class="rows pb-4">
                        <div class="col-2 mb-3">
                                <label class="text-label">Num NFe </label>	
                                <input type="text" name="cNF"  readonly="true" placeholder="Digite aqui..." class="form-campo">
                        </div>
                        <div class="col-1 mb-3">
                                <label class="text-label">Pedido </label>	
                                <input type="text" name="id_pedido" value="00" readonly="true" placeholder="Digite aqui..." class="form-campo">
                        </div>

                        <div class="col-2 mb-3">
                                <label class="text-label">Tipo de operação</label>	
                                <select class="form-campo" name="tpNF" id="tipo_operacao"  >
                                        <option value="0">ENTRADA</option>
                                        <option value="1" selected="">SAÍDA</option>
                                </select>
                        </div>

                        <div class="col-6 mb-3">
                                <label class="text-label">Natureza Operação</label>	
                               <select class="form-campo" name="natOp" id="natOp" >
                                    <option  value="">Selecione uma Opção</option>
                                  
                            </select>  
                        </div>
                                <div class="col-1 mb-3">
                                        <label class="text-label">Série </label>	
                                        <input type="text" name="serie" value="1" readonly="true" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                 <div class="col-3 mb-3">
                                    <label class="text-label">UF</label>	
                                     <input type="text" name="cUf" value="1" readonly="true" readonly="true" placeholder="Digite aqui..." class="form-campo">
                                    
                                </div>
                                <div class="col-2 mb-3">
                                        <label class="text-label">Data Emissão NF</label>	
                                        <input type="date" name="data_emissao_nfe" value="00/00/0000" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-2 mb-3">
                                        <label class="text-label">Hora emissão NF</label>	
                                        <input type="time" name="hora_emissao_nfe" value="00:00" placeholder="Digite aqui..." class="form-campo">
                                </div>                             
                    
                                <div class="col-2 mb-3">
                                        <label class="text-label">Data saída/entrada</label>	
                                        <input type="date" name="data_saida_nfe" value="00/00/0000" placeholder="Digite aqui..." class="form-campo">
                                </div> 
                                <div class="col-3 mb-3">
                                        <label class="text-label">Hora saída/entrada</label>	
                                        <input type="time" name="hora_saida_nfe" value="00:00" placeholder="Digite aqui..." class="form-campo">
                                </div>
                    
                                <div class="col-3 mb-3">
                                    <label class="text-label">Ambiente</label>	
                                    <select class="form-campo" name="tpAmb">
                                        <option value="1" >Produção</option>
                                        <option value="2" selected>Homologação</option>                                                 
                                            
                                    </select>
                                </div>
                    
                                <div class="col-3 mb-3">
                                        <label class="text-label">Destinado a consumidor final</label>	
                                        <select class="form-campo" name="indFinal">
                                            <option value="0">NÃO</option>
                                            <option value="1">SIM</option>
                                        </select>
                                </div>
                              
                                <div class="col-3 mb-3">
                                        <label class="text-label">Finalidade da emissão</label>	
                                        <select class="form-campo" name="finNFe">
                                                <option value="1">NORMAL</option>
                                                <option value="2">COMPLEMENTAR</option>
                                                <option value="3">DE AJUSTE</option>
                                                <option value="4">DEVOLUÇÃO DE MERCADORIA</option>
                                        </select>
                                </div>
                                <div class="col-3 mb-3">
                                        <label class="text-label">Destino da operação</label>	
                                        <select class="form-campo" name="idDest">
                                                <option value="0">AUTOMÁTICO</option>
                                                <option value="1">OPERAÇÃO INTERNA</option>
                                                <option value="2">OPERAÇÃO INTERESTADUAL</option>
                                                <option value="3">OPERAÇÃO COM EXTERIOR</option>
                                        </select>
                                </div>
                                <div class="col-3 mb-3">
                                        <label class="text-label">Possui NF referenciada</label>	
                                        <select class="form-campo" name="temRefNF">
                                                <option value="0">NÃO</option>
                                                <option value="1">SIM</option>                                                 
                                          </select>
                                </div>                                        
                                <div class="col-3">
                                    <label class="text-label">Presença do comprador</label>
                                    <select class="form-campo" name="indPres">
                                            <option value="0">NÃO SE APLICA</option>
                                            <option value="1">OPERAÇÃO PRESENCIAL</option>
                                            <option value="2" selected>OPERAÇÃO NÃO PRESENCIAL, PELA INTERNET</option>
                                            <option value="3">OPERAÇÃO NÃO PRESENCIAL, TELEATENDIMENTO</option>
                                            <option value="4">NFC-e EM OPERAÇÃO COM ENTREGA A DOMICÍLIO</option>
                                            <option value="5">OPERAÇÃO PRESENCIAL, FORA DO ESTABELECIMENTO</option>
                                            <option value="9">OPERAÇÃO NÃO PRESENCIAL, OUTROS</option> 
                                    </select>
                                </div>                                                                          

                </div>
        </div>

        <div id="tab-2" class="tab-content">									
            <span class="d-block mt-4 h4 border-bottom">Dados Destinatário</span>										
            <div class="rows pb-4">																					
            
            <div class="col-2 mb-3">
                    <label class="text-label">ID Contato</label>	
                    <input type="text" name="id_contato" value="1" placeholder="Digite aqui..." class="form-campo">
            </div>	
            <div class="col-4 mb-3">
                    <label class="text-label">Contato (Nome / Razão Social, Fantasia e CPF / CNPJ)</label>	
                    <input type="text" name="bairro" value="bairro" placeholder="Digite aqui..." class="form-campo">
            </div>	
            <div class="col-4 mb-3">
                    <label class="text-label">Razão/Nome dest.</label>	
                    <input type="text" name="ExNome" value="nome" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-4 mb-3">
                     <label class="text-label">CPF destinatário</label>	
                     <input type="text" name="ECNPJ" value="cep" placeholder="Digite aqui..." class="form-campo">
             </div>
                
            <div class="col-4 mb-3">
                    <label class="text-label">RG</label>	
                    <input type="text" name="EIE" value="RG" placeholder="Digite aqui..." class="form-campo">
            </div>	
                
            <div class="col-4 mb-3">
                    <label class="text-label">Suframa</label>	
                    <input type="text" name="EIM" value="suframa" placeholder="Digite aqui..." class="form-campo">
            </div>  
            
             <div class="col-4 mb-3">
                     <label class="text-label">CNPJ destinatário</label>	
                     <input type="text" name="ECNPJ" value="cnpj" placeholder="Digite aqui..." class="form-campo">
             </div>
                
            <div class="col-4 mb-3">
                    <label class="text-label">Inscr. Estadual</label>	
                    <input type="text" name="EIE" value="ie" placeholder="Digite aqui..." class="form-campo">
            </div>	
                
            <div class="col-4 mb-3">
                    <label class="text-label">Inscr. Municipal</label>	
                    <input type="text" name="EIM" value="im" placeholder="Digite aqui..." class="form-campo">
            </div> 
            
            <div class="col-2 mb-3">
                <label class="text-label">CEP</label>
                 <div class="input-grupo">
                 <input type="text" value="Cep" name="ECEP" placeholder="Digite aqui..." class="form-campo">

                 </div>
            </div> 
            <div class="col-4 mb-3">
                    <label class="text-label">Logradouro</label>	
                    <input type="text" name="ExLgr" value="Logradouro" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-1 mb-4">
                    <label class="text-label">Numero</label>	
                    <input type="text" name="Enro" value="01" placeholder="Digite aqui..." class="form-campo">
            </div>
            <div class="col-4 mb-3">
                    <label class="text-label">Complemento</label>	
                    <input type="text" name="ExCpl" value="complemento" placeholder="Digite aqui..." class="form-campo">
            </div>
            <div class="col-3 mb-3">
                    <label class="text-label">Bairro</label>	
                    <input type="text" name="ExBairro" value="bairro" placeholder="Digite aqui..." class="form-campo">
            </div>	
                 
           
            <div class="col-3 mb-2">
                    <label class="text-label">UF</label>	
                    <select class="form-campo" name="EUF">
                        <option>selecione</option>
                    </select>
            </div>
            
            <div class="col-6 mb-2">
                        <label class="text-label">Cidade</label>	
                        <select class="form-campo" name="EUF">
                           <option>selecione</option>
                        </select>
                </div>    
            <div class="col-2 mb-3">
                     <label class="text-label">DD</label>	
                     <input type="text" name="Efone" value="ddd" placeholder="Digite aqui..." class="form-campo">
             </div> 
                
             <div class="col-2 mb-3">
                     <label class="text-label">Telefone</label>	
                     <input type="text" name="Efone" value="fone" placeholder="Digite aqui..." class="form-campo">
             </div>
             <div class="col-2 mb-3">
                     <label class="text-label">Celular</label>	
                     <input type="text" name="Efone" value="celular" placeholder="Digite aqui..." class="form-campo">
             </div>
             <div class="col-6 mb-3">
                     <label class="text-label">E-mail</label>	
                     <input type="text" name="Eemail" value="email" placeholder="Digite aqui..." class="form-campo">
             </div>
             

               


            </div>
    </div>
                    
    
    <div id="tab-3" class="tab-content">									
            <span class="d-block mt-4 h4 border-bottom">Produto</span>										
            <div class="rows pb-4">																					
            <div class="col-12">
                    <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="far fa-list-alt"></i> Itens do Pedido</span>
                    <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                    <thead>
                                            <tr>
                                                    <th align="center">Item</th>
                                                    <th align="left" width="290">Produto</th>
                                                    <th align="center">Preço</th>
                                                    <th align="center">Qtde</th>
                                                    <th align="center">Subtotal</th>
                                                    <th align="center">Valor Aprox.</th>
                                                    <th align="center">IPI</th>
                                                    <th align="center">PIS</th>
                                                    <th align="center">PISST</th>
                                                    <th align="center">COFINS</th>
                                                    <th align="center">COFINSST</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <tr>
                                                    <td align="center">1</td>
                                                    <td align="left">produto1</td>
                                                    <td align="center">R$ 100</td>
                                                    <td align="center">1</td>
                                                    <td align="center">R$ 100</td>		
                                                    <td align="center">R$ 0</td>	
                                                    <td align="center">R$ 0</td>	
                                                    <td align="center">R$ 0</td>	
                                                    <td align="center">R$ 0</td>	
                                                    <td align="center">R$ 0</td>	
                                                    <td align="center">R$ 0</td>	
                                            </tr>
                                       
                                            <tr>
                                                    <td colspan="11" align="right"><b>Total R$</b> <span class="text-verde minimo-font">100</span></td>
                                            </tr>	
                                    </tbody>
                            </table>
                          
                    </div>

                    </div>

            </div>
            
              
               

            </div>
    </div>
                    
  

    <div id="tab-4" class="tab-content">									
            <span class="d-block mt-4 h4 border-bottom">Totalizadores</span>										
            <div class="rows pb-4">																					
            
            <div class="col-2 mb-3">
                    <label class="text-label">Total BC ICMS</label>	
                    <input type="text" name="tot_base_calculo_icms" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>	
            <div class="col-2 mb-3">
                    <label class="text-label">Total ICMS</label>	
                    <input type="text" name="tot_icms" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>	
            <div class="col-2 mb-3">
                    <label class="text-label">Total ICMS desonerado</label>	
                    <input type="text" name="tot_icms_deson" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-2 mb-3">
                     <label class="text-label">Total do FCP</label>	
                     <input type="text" name="tot_FCP" value="0" placeholder="Digite aqui..." class="form-campo">
             </div>	
             <div class="col-2 mb-3">
                     <label class="text-label">Total BC ICMS ST</label>	
                     <input type="text" name="tot_base_calculoST" value="0" placeholder="Digite aqui..." class="form-campo">
             </div>	
             <div class="col-2 mb-3">
                     <label class="text-label">Total ICMS ST</label>	
                     <input type="text" name="tot_icmsST" value="0" placeholder="Digite aqui..." class="form-campo">
             </div>


            <div class="col-2 mb-3">
                    <label class="text-label">Total do FCPST</label>	
                    <input type="text" name="tot_FCPST" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
            <div class="col-2 mb-4">
                    <label class="text-label">Total do FCPST Ret.</label>	
                    <input type="text" name="tot_FCPSTRet" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>          

            <div class="col-2 mb-3">
                    <label class="text-label">Total bruto dos produtos</label>	
                    <input type="text" name="tot_produto" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>	
            <div class="col-2 mb-3">
                    <label class="text-label">Total de frete</label>	
                    <input type="text" name="tot_Frete" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>	
            <div class="col-2 mb-3">
                    <label class="text-label">Total de seguro</label>	
                    <input type="text" name="tot_Seguro" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-2 mb-3">
                    <label class="text-label">Total de desconto</label>	
                    <input type="text" name="tot_Desconto" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>	

            <div class="col-2 mb-3">
                    <label class="text-label">Total de II</label>	
                    <input type="text" name="tot_Importacao" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-2 mb-3">
                    <label class="text-label">Total de IPI</label>	
                    <input type="text" name="tot_IPI" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                
                <div class="col-2 mb-3">
                    <label class="text-label">Total de IPI Devolução</label>	
                    <input type="text" name="tot_IPI_Devolucao" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>             
                
            <div class="col-2 mb-3">
                    <label class="text-label">Total de PIS</label>	
                    <input type="text" name="tot_PIS" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
            <div class="col-2 mb-3">
                    <label class="text-label">Total de COFINS</label>	
                    <input type="text" name="tot_COFINS" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-2 mb-3">
                    <label class="text-label">Total Outras Despesas</label>	
                    <input type="text" name="tot_Outro" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-2 mb-3">
                    <label class="text-label">TOTAL DA NF</label>	
                    <input type="text" name="tot_nota" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
            <div class="col-2 mb-3">
                    <label class="text-label">Total Aproximado</label>	
                    <input type="text" name="total_tributo_aproximado" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                       
            </div>
    </div>
                    
    
                    
</div>

    <div class="mb-5" style="clear:both">
        <input type="submit" value="Salvar" class="btn btn-azul btn-grande d-block m-auto">
    </div>
    </div>


    </div>
    </div>
                </div>
    </form>
</div>
