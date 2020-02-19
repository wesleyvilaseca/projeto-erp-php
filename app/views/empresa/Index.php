<div class="conteudo-dividido bg-fundo">				
    <div class="conteudo-fluido">								

        <div class="rows">	
            <div class="col-12">
                <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar por empresa</span>
                    <form name="busca" action="#" method="GET" >

                        <div class="px-4 pb-5 pt-4 ">
                            <div class="rows">
                                <div class="col-10">	
                                    <label class="text-label d-block">empresa </label>
                                    <input type="text" name="q" value="#" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-2 mt-4">
                                    <input type="submit" value="Pesquisar" class="btn btn-azul text-uppercase">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12">
                <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                        <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista de categoria <small class="d-inline-block text-right mb-0 h6 px-2"><?php echo ($total > 1) ? '<b class="text-azul">' . $total . "</b> Registros" : '<b class="text-azul">' . $total . "</b> Registro"; ?></small></span>
                        <a href="<?php echo URL_BASE . "empresa/create" ?>" class="btn btn-verde float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
                    </div>
                    <div class="tabela-responsiva">
                        <table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th align="center">Id</th>
                                    <th align="left" width="290">Empresa</th>
                                    <th align="center" width="290">Fantasia</th>
                                    <th align="center">CNPJ</th>
                                    <th align="center" colspan="3">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($empresas as $empresa) { ?>
                                <tr>

                                    <td align="center"><?php echo $empresa->id_empresa ?></td>
                                    <td align="center"><?php echo $empresa->razao_social ?></td>
                                    <td align="left"><?php echo $empresa->nome_fantasia ?></td>
                                    <td align="center"><?php echo $empresa->cnpj ?></td>
                                


                                    <td align="center">
                                        <a href="<?php echo URL_BASE . "empresa/edit/" . $empresa->id_empresa ?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
                                        <a href="<?php echo URL_BASE . "empresa/delete/" . $empresa->id_empresa ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
                                        <a href="" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-info-circle"></i> Detalhes</a>
                                    </td>
                                </tr>
                                
                                <?php } ?>



                            </tbody>
                        </table>
                        <footer class="caixa-rodape"> 
                            <?php echo paginacao($url, $pg, $paginas) ?>
                        </footer>
                    </div>

                </div>


            </div>

        </div>
    </div>
</div>


