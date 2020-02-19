<nav class="menuprincipal">					
    <ul class="menu-ul">
        <li><a href="<?php echo URL_BASE ?>"><i class="fa fa-fw fa-home"></i> Home</a></li>
        <div class="modulos">	
            <div class="item">
                <li class="cat"><a href=""><i class="far fa-fw fa-file"></i> Módulo I - Cadastros </a></li>
                <div>
                    <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Cadastro</b></li>		
                    <input type="checkbox" id="m_cad1" name="cadastro">
                    <label for="m_cad1">Categoria</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE . "categoria" ?>"> Listar todos</a></li>
                        <li><a href="<?php echo URL_BASE . "categoria/create" ?>"> Cadastrar Novo</a></li>
                    </ul>
                </div>    
                <div>    
                    <input type="checkbox" id="m_cad2" name="cadastro">
                    <label for="m_cad2">Unidade</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE . "unidade" ?>"> Listar todos</a></li>
                        <li><a href="<?php echo URL_BASE . "unidade/create" ?>"> Cadastrar Novo</a></li>
                    </ul>
                </div>  
                <div>  
                    <input type="checkbox" id="m_cad3" name="cadastro">
                    <label for="m_cad3">Produto</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE . "produto" ?>"> Listar todos</a></li>
                        <li><a href="<?php echo URL_BASE . "produto/create" ?>"> Cadastrar Novo</a></li>
                    </ul>
                </div>
                <div>  
                    <input type="checkbox" id="m_contato" name="cadastro">
                    <label for="m_contato">Contato</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE . "contato" ?>"> Listar todos</a></li>
                        <li><a href="<?php echo URL_BASE . "contato/create" ?>"> Cadastrar Novo</a></li>
                    </ul>
                </div>


            </div>
        </div>


        <div class="modulos">	
            <div class="item">
                <li class="cat"><a href=""><i class="fas fa-cash-register"></i> Módulo II - vendas</a></li>
                <div>				 

                    <div>
                        <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>PDV</b> </li>

                        <div>

                            <li><a href="<?php echo URL_BASE . "pdv" ?>">Lista de Vendas</a></li>
                        </div>

                    </div>
                    <div>
                        <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Pedido</b> </li>                   


                        <div>
                            <li><a href="<?php echo URL_BASE . "pedido" ?>"> Todas os Pedidos</a></li>
                            <li><a href="<?php echo URL_BASE . "pedido/index/1" ?>"> Em digitação</a></li>
                            <li><a href="<?php echo URL_BASE . "pedido/index/2" ?>"> Em Espera</a></li>
                            <li><a href="<?php echo URL_BASE . "pedido/index/3" ?>"> Atendido</a></li>
                            <li><a href="<?php echo URL_BASE . "pedido/index/4" ?>"> Recusado</a></li>
                        </div>
                    </div>



                    <div>
                        <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Lojavirtual</b> </li>
                        <div>
                            <input type="checkbox" id="m_cad_loja3">
                            <label for="m_cad_loja3">Produto</label>
                            <ul class="sub">
                                <li><a href="<?php echo URL_BASE . "produto" ?>"> Listar todos</a></li>
                                <li><a href="<?php echo URL_BASE . "lojaproduto/create" ?>"> Cadastrar Novo</a></li>
                            </ul>
                        </div>
                        <div>
                            <input type="checkbox" id="m_cad_loja4">
                            <label for="m_cad_loja4">Vendas</label>
                            <ul class="sub">
                                <li><a href="<?php echo URL_BASE . "pedido" ?>"> Todas as vendas</a></li>
                                <li><a href="<?php echo URL_BASE . "" ?>"> Pagas</a></li>
                                <li><a href="<?php echo URL_BASE . "" ?>"> Enviadas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modulos">	
            <div class="item">	
                <li class="cat"><a href=""><i class="fas fa-file-invoice-dollar"></i> Módulo III - NFE</a></li>
                <div>
                    <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Dados Para NFE</b></li>

                    <div>
                        <li><a href="<?php echo URL_BASE . "empresa/create" ?>"> Configurações da Nota</a></li>
                        <input type="checkbox" id="m_NFE_4">
                        <label for="m_NFE_4">Empresa</label>
                        <ul class="sub">     
                            <li><a href="<?php echo URL_BASE . "empresa/create" ?>"> Cadastrar Novo</a></li>
                            <li><a href="<?php echo URL_BASE . "empresa" ?>"> Listar todos</a></li>
                        </ul>
                    </div>

                    <div>
                        <input type="checkbox" id="m_NFE_5">
                        <label for="m_NFE_5">Contato</label>
                        <ul class="sub"> 
                            <li><a href="<?php echo URL_BASE . "contato" ?>"> Listar todos</a></li>
                            <li><a href="<?php echo URL_BASE . "contato/create" ?>"> Cadastrar Novo</a></li>
                        </ul>
                    </div>  

                    <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Dados do Produto</b></li>
                    <div>
                        <li><a href="<?php echo URL_BASE . "nfeproduto" ?>"> Listar todos</a></li>
                        <li><a href="<?php echo URL_BASE . "nfeproduto/create" ?>"> Cadastrar Novo</a></li> 
                    </div>





                    <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Tributação</b></li> 
                    <div>
                        <input type="checkbox" id="m_NFE_6">
                        <label for="m_NFE_6">Tributação</label>
                        <ul class="sub"> 
                            <li><a href="<?php echo URL_BASE . "tributacao" ?>"> Lista Todos</a></li>
                            <li><a href="<?php echo URL_BASE . "" ?>"> Nova</a></li>
                            <li><a href="<?php echo URL_BASE . "" ?>"> Tributação IPI</a></li>
                            <li><a href="<?php echo URL_BASE . "" ?>"> Tributação PIS</a></li>
                            <li><a href="<?php echo URL_BASE . "" ?>"> Tributação COFINS</a></li>
                            <li><a href="<?php echo URL_BASE . "" ?>"> Tributação ICMS</a></li>
                        </ul>
                    </div>


                    <div>
                        <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Nota Fiscal</b> </li>
                        <div>
                            <input type="checkbox" id="m_cad_nota">
                            <label for="m_cad_nota">Notas</label>
                            <ul class="sub">
                                <li><a href="<?php echo URL_BASE . "nfe" ?>"> Todas as Notas</a></li>
                                <li><a href="<?php echo URL_BASE . "" ?>"> Em digitaçãoC</a></li>
                                <li><a href="<?php echo URL_BASE . "" ?>"> Assinada</a></li>
                                <li><a href="<?php echo URL_BASE . "" ?>"> Validada</a></li>
                                <li><a href="<?php echo URL_BASE . "" ?>"> Autorizada</a></li>
                                <li><a href="<?php echo URL_BASE . "" ?>"> Canceladas</a></li>  
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="modulos">	
            <div class="item">	
                <li class="cat"><a href=""><i class="fas fa-file-invoice-dollar"></i> Módulo IV - COMPRAS</a></li>
                <div>
                    <div>
                        <li><a href="<?php echo URL_BASE . "solicitacao" ?>"> Solicitacao</a></li>
                        <li><a href="<?php echo URL_BASE . "cotacao" ?>"> Cotação</a></li>
                        <li><a href="<?php echo URL_BASE . "ordemcompra" ?>"> Ordem de Compra</a></li>
                    </div>
                </div>

            </div>
        </div>
        </div>

        <div class="modulos">	
            <div class="item">
                <li class="cat"><a href=""><i class="far fa-fw fa-file"></i> Módulo Bônus - Multilinguagem</a></li>
                <div>
                    <input type="checkbox" id="m_pedido1">
                    <label for="m_pedido1">Admin</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE . "pedido" ?>"> Todos os pedidos</a></li>
                        <li><a href="<?php echo URL_BASE . "" ?>"> Pedidos pendentes</a></li>
                        <li><a href="<?php echo URL_BASE . "" ?>"> Novo pedido</a></li>
                    </ul>
                </div>
                <div>
                    <input type="checkbox" id="m_pedido2">
                    <label for="m_pedido2">Pedidos APP</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE . "" ?>"> Todos os pedidos</a></li>
                        <li><a href="<?php echo URL_BASE . "" ?>"> Pedidos pendentes</a></li>
                    </ul>
                </div>
                <div>
                    <input type="checkbox" id="m_pedido3">
                    <label for="m_pedido3">Pedidos Desktop</label>	
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE . "" ?>"> Todos os pedidos</a></li>
                        <li><a href="<?php echo URL_BASE . "" ?>"> Pedidos pendentes</a></li>
                    </ul>
                    </li>
                </div>
                <div>
                    <input type="checkbox" id="m_pedido4">
                    <label for="m_pedido4">Pedidos Web</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE . "" ?>"> Todos os pedidos</a></li>
                        <li><a href="<?php echo URL_BASE . "" ?>"> Pedidos pendentes</a></li>
                    </ul>
                    </li>
                </div>
            </div>
        </div>

        <!--<div class="modulos">	
            <div class="item">		
                <li class="cat"><a href=""><i class="fas fa-box-open"></i> MÓDULO: ESTOQUE</a></li>
                <div>
                    <input type="checkbox" id="m_estoque">
                    <label for="m_estoque">ENTRADAS</label>
                    <ul class="sub">  
                        <li><a href="#">ENTRADA</a></li>
                        <li><a href="#">VENDAS</a></li>                
                    </ul>             
                </div>
            </div>
        </div>-->
        
        
        <div class="modulos">	
            <div class="item">	
                <li class="cat"><a href=""><i class="fas fa-file-invoice-dollar"></i> Módulo:    Estoque</a></li>
                <div>
                    <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Cadastros Necessários</b></li>

                    <div>
                        <li><a href="<?php echo URL_BASE . "estoqueproduto" ?>"> Produto</a></li>
                        <li><a href="<?php echo URL_BASE . "tipomovimento" ?>"> Tipo de movimento</a></li>
                        <!--<input type="checkbox" id="m_NFE_4">
                        <label for="m_NFE_4">Empresa</label>
                        <ul class="sub">     
                            <li><a href="<?php echo URL_BASE . "empresa/create" ?>"> Cadastrar Novo</a></li>
                            <li><a href="<?php echo URL_BASE . "empresa" ?>"> Listar todos</a></li>
                        </ul>-->
                    </div>

                    <!--<div>
                        <input type="checkbox" id="m_NFE_5">
                        <label for="m_NFE_5">Contato</label>
                        <ul class="sub"> 
                            <li><a href="<?php echo URL_BASE . "contato" ?>"> Listar todos</a></li>
                            <li><a href="<?php echo URL_BASE . "contato/create" ?>"> Cadastrar Novo</a></li>
                        </ul>
                    </div>  -->

                    <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Entradas</b></li>
                    <div>
                        <li><a href="<?php echo URL_BASE . "entradaordemcompra" ?>"> ENTRADAS DE ORDEM DE COMPRA</a></li>
                        <li><a href="<?php echo URL_BASE . "entradaavulsa" ?>"> ENTRADAS AVULSAS</a></li> 
                    </div>

                    <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>Saídas</b></li> 
                    <div>
                        <li><a href="<?php echo URL_BASE . "saida" ?>"> pedido</a></li>
                        <!--<input type="checkbox" id="m_NFE_6">
                        <label for="m_NFE_6">Tributação</label>
                        <ul class="sub"> 
                            <li><a href="<?php echo URL_BASE . "tributacao" ?>"> Lista Todos</a></li>
                            <li><a href="<?php echo URL_BASE . "" ?>"> Nova</a></li>
                            <li><a href="<?php echo URL_BASE . "" ?>"> Tributação IPI</a></li>
                            <li><a href="<?php echo URL_BASE . "" ?>"> Tributação PIS</a></li>
                            <li><a href="<?php echo URL_BASE . "" ?>"> Tributação COFINS</a></li>
                            <li><a href="<?php echo URL_BASE . "" ?>"> Tributação ICMS</a></li>
                        </ul>
                    </div>-->


                    <div>
                        <li class="text-left text-azul p-2 text-uppercase h6 mb-0"><b>MOVIMENTAÇÕES</b> </li>
                        <div>
                            <li><a href="<?php echo URL_BASE . "empresa/create" ?>"> HISTÓRICO DE MOVIMENtos</a></li>
                             <li><a href="<?php echo URL_BASE . "empresa/create" ?>"> extrato do produto</a></li>
                            <!--<input type="checkbox" id="m_cad_nota">
                            <label for="m_cad_nota">Notas</label>
                            <ul class="sub">
                                <li><a href="<?php echo URL_BASE . "nfe" ?>"> Todas as Notas</a></li>
                                <li><a href="<?php echo URL_BASE . "" ?>"> Em digitaçãoC</a></li>
                                <li><a href="<?php echo URL_BASE . "" ?>"> Assinada</a></li>
                                <li><a href="<?php echo URL_BASE . "" ?>"> Validada</a></li>
                                <li><a href="<?php echo URL_BASE . "" ?>"> Autorizada</a></li>
                                <li><a href="<?php echo URL_BASE . "" ?>"> Canceladas</a></li>  
                            </ul>-->
                        </div>

                    </div>

                </div>
            </div>
        </div>



        <div class="modulos">	
            <div class="item">	
                <li class="cat"><a href=""><i class="fas fa-hand-holding-usd"></i> MÓDULO: FINANCEIRO</a></li>            
                <div>
                    <input type="checkbox" id="m_financeiro1">
                    <label for="m_financeiro1">ENTRADAS</label>
                    <ul class="sub"> 
                        <li><a href="<?php echo URL_BASE . "" ?>"> ENTRADA</a></li>
                        <li><a href="<?php echo URL_BASE . "" ?>"> FORNECEDOR</a></li>                       
                    </ul>
                </div>
                <div>
                    <input type="checkbox" id="m_financeiro2">
                    <label for="m_financeiro2">SAÍDAS</label>
                    <ul class="sub"> 
                        <li><a href="<?php echo URL_BASE . "" ?>"> SAÍDA</a></li>
                        <li><a href="<?php echo URL_BASE . "" ?>"> FORNECEDOR</a></li>                       
                    </ul>         
                </div>
            </div>
        </div>


        <div class="modulos">	
            <div class="item">
                <li class="cat"><a href=""><i class="fas fa-users"></i> MÓDULO: PESSOAL</a></li> 
                <input type="checkbox" id="m_pessoal">
                <label for="m_pessoal">SAÍDAS</label>
                <ul class="sub">   
                    <li><a href="#">DEMISSÕES</a></li>
                    <li><a href="#">ADMISSÕES</a></li>
                    <li><a href="#">FOLHA DE PAGAMENTO</a></li>
                    <li><a href="#">CONTROLE DE PONTO</a></li>
                </ul>            
            </div>
        </div>


        <div class="modulos">	
            <div class="item">	
                <li class="cat"><a href=""><i class="fas fa-file-invoice-dollar"></i> MÓDULO: CONTÁBIL/FISCAL</a></li>            
                <div>
                    <input type="checkbox" id="m_fiscal1">
                    <label for="m_fiscal1">FISCAL</label>
                    <ul class="sub">
                        <li><a href="#">ENTRADAS E SAÍDAS</a></li>
                        <li><a href="#">APURAÇÃO E TRIBUTOS</a></li>
                        <li><a href="#">RECEITAS</a></li>
                        <li><a href="#">DESPESAS</a></li>
                        <li><a href="#">CUSTOS</a></li>                     
                    </ul>
                </div>
                <div>
                    <input type="checkbox" id="m_fiscal2">
                    <label for="m_fiscal2">CONTÁBIL</label>
                    <ul class="sub">
                        <li><a href="<?php echo URL_BASE . "" ?>"> DEMONSTRAÇÕES CONTÁBEIS</a></li>
                        <li><a href="<?php echo URL_BASE . "" ?>"> LANÇAMENTO DE CRÉDITO E DÉBITO</a></li>                       
                    </ul>
                </div>                           
            </div>
        </div>
        <div>	

            <div class="modulos">	
                <div class="item">	
                    <li class="cat"><a href=""><i class="fas fa-tools"></i> MÓDULO: PRODUÇÃO</a></li>
                    <input type="checkbox" id="m_producao">
                    <label for="m_producao">PRODUÇÃO</label>            
                    <ul class="sub">
                        <li><a href="#">MATÉRIA-PRIMA</a></li>
                        <li><a href="#">CUSTO DE PRODUÇÃO</a></li>
                        <li><a href="#">ESTOQUE MATÉRIA-PRIMA</a></li>
                    </ul>            
                </div>
            </div>


    </ul>
</nav>