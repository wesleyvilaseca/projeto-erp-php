<div class="conteudo-dividido bg-fundo">				
    <div class="conteudo-fluido">								

        <div class="rows">	
            <div class="col-12">
                <div class="caixa">
                    <span class="h5 caixa-titulo"><i class="fas fa-search"></i> Buscar por categoria</span>
                    <form name="busca" action="<?php echo URL_BASE . "categoria/filtro" ?>" method="GET" >

                        <div class="px-4 pb-5 pt-4 ">
                            <div class="rows">
                                <div class="col-10">	
                                    <label class="text-label d-block">Nome </label>
                                    <input type="text" name="q" value="<?php echo isset($q) ? $q : null ?>" placeholder="Digite aqui..." class="form-campo">
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
                        <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista de categoria <small class="d-inline-block text-right mb-0 h6 px-2"><?php echo ($total > 1) ? '<b class="text-azul">'. $total . "</b> Registros" : '<b class="text-azul">' . $total . "</b> Registro"; ?></small></span>
                        <a href="<?php echo URL_BASE . "categoria/create" ?>" class="btn btn-verde float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
                    </div>
                    <div class="tabela-responsiva">
                        <table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th align="center">item</th>
                                    <th align="center">Id</th>
                                    <th align="left" width="40%">Nome</th>
                                    <th align="center">Ativo</th>
                                    <th align="center" colspan="3">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($categorias as $categoria) {
                                    ?>
                                    <tr>

                                        <td align="center"><?php echo $i++ ?></td>
                                        <td align="center"><?php echo $categoria->id_categoria ?></td>
                                        <td align="left"><?php echo $categoria->categoria ?></td>

                                        <?php if ($categoria->ativo_categoria == "S") { ?>
                                            <td align="center"><span class="text-verde"><i class="fas fa-check"></i> Sim</span></td>
                                        <?php } else { ?>
                                            <td align="center"><span class="text-vermelho"><i class="fas fa-ban"></i> Não</span></td>
                                        <?php } ?>


                                        <td align="center">
                                            <a href="<?php echo URL_BASE . "categoria/edit/" . $categoria->id_categoria ?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
                                            <a href="<?php echo URL_BASE . "categoria/delete/" . $categoria->id_categoria ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
                                            <a href="" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-info-circle"></i> Detalhes</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <footer class="caixa-rodape">
                            <ul class="paginacao text-end">
                                <?php echo paginacao($url, $pg, $paginas) ?>
                            </ul>
                        </footer>
                    </div>

                </div>


            </div>

        </div>
    </div>
</div>
