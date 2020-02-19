<div class="conteudo-dividido bg-fundo">				
    <div class="conteudo-fluido">								

        <div class="rows">
            <div class="col-12">
                <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                        <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Tipos de movimento <small class="d-inline-block text-right mb-0 h6 px-2"><?php echo (count($lista) > 1) ? '<b class="text-azul">' . count($lista) . "</b> Registros" : '<b class="text-azul">' . count($lista) . "</b> Registro"; ?></small></span>
                        <!--<a href="<?php echo URL_BASE . "unidade/create" ?>" class="btn btn-verde float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>-->
                    </div>
                    <div class="tabela-responsiva">
                        <table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th align="center">Id</th>
                                    <th align="left" width="40%">Descrição</th>
                                    <th align="center">Tipo</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lista as $unidade) { ?>
                                    <tr>
                                        <td align="center"><?php echo $unidade->id_tipo_movimento ?></td>
                                        <td align="left"><?php echo $unidade->tipo_movimento ?></td>
                                        <td align="center"><?php echo $unidade->ent_sai ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>


            </div>

        </div>
    </div>
</div>
