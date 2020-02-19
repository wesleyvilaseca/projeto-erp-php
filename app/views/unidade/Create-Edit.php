<div class="conteudo-dividido bg-fundo">				
    <div class="conteudo-fluido">
        <div class="rows">	        
            <div class="col-12">
                <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                        <span class="h5 mb-0 d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Inserir unidade</span>							
                        <a href="<?php echo URL_BASE . "unidade" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                    </div>
                    <form action="<?php echo URL_BASE . "unidade/salvar"; ?>" method="Post">
                        <div class="col-6 d-block m-auto rows px-5 mt-5">
                            <div class="col-12 mb-3">
                                <label class="text-label">Nome</label>	
                                <input type="text" name="unidade" value="<?php echo isset($unidade) ? $unidade->unidade : null ?>" class="form-campo" placeholder="Digite o nome da unidade">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="text-label">Sigla</label>	
                                <input type="text" name="abrev" value="<?php echo isset($unidade) ? $unidade->abrev : null ?>" class="form-campo" placeholder="Digite o nome da abreviatura">

                            </div>                                    
                            <div class="col-12 mt-3 mb-5">
                                <input type="hidden" name="id_unidade" value="<?php echo isset($unidade) ? $unidade->id_unidade : null ?>">
                                <input type="submit" name="" value="Cadastrar unidade" class="btn btn-azul d-block m-auto">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
