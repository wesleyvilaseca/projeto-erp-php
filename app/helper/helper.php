<?php

function paginacao($url, $pg, $paginas){
    $mais = $pg +1;
    $url_mais = "$url&pg=$mais";	
    $menos = $pg -1;
    $url_menos = "$url&pg=$menos";

    $imprimePaginacao ="";
    if($pg==0){		
        for($i=1;$i<=$paginas; $i++){
            if($pg== $i){
                $imprimePaginacao .= "<li class='ativo'>$i</li>";
            }else{
                $imprimePaginacao .= "<li><a href='$url&pg=$i' class='link'>$i</a></li>";
            }
        }
        $imprimePaginacao .= "			
        <li><a href='$url_mais' class='link'><i class='fas fa-angle-right'></i></a></li>
        <li><a href='$url&pg=$paginas' class='link'>Último <i class='fas fa-angle-double-right'></i></a></li>";
    }
	
    if($pg >0){
        $imprimePaginacao .= "
            <li><a href='$url&pg=0' class='primeiro link'><i class='fas fa-angle-double-left'></i> Primeiro</a></li>
            <li><a href='$url_menos' class='ant link' ><i class='fas fa-angle-left'></i></a></li>";
            for($i=1;$i<=$paginas; $i++){
                    if($pg== $i){
                            $imprimePaginacao .= "<li class='ativo'>$i</li>";
                    }else{
                            $imprimePaginacao .= "<li><a href='$url&pg=$i' class='link'>$i</a></li>";
                    }
            }

            $imprimePaginacao .="<li><a href='$url_mais' class='prox link'><i class='fas fa-angle-right'></i></a></li>
            <li><a href='$url&pg=$paginas' class='ultimo link'>Último <i class='fas fa-angle-double-right'></i></a></li>
        ";	

    }
	
    if($pg == $paginas){
        $imprimePaginacao = "
                <li><a href='$url&pg=0' class='primeiro link'><i class='fas fa-angle-double-left'></i> Primeiro</a></li>
                <li><a href='$url_menos' class='ant link' ><i class='fas fa-angle-left'></i></a></li>
        ";

        for($i=1;$i<=$paginas; $i++){
                        if($pg== $i){
                                $imprimePaginacao .= "<li class='ativo'>$i</li>";
                        }else{
                                $imprimePaginacao .= "<li><a href='$url&pg=$i' class='link'>$i</a></li>";
                        }
                }

    }
	
		if($paginas <= 0){
		$imprimePaginacao = "Página 1 de 1";
	}
	
	return $imprimePaginacao;
}

function upload($arquivo, $config_upload=array()){
	set_time_limit(0);
	$nome_arquivo 		= $arquivo["name"];
	$tamanho_arquivo 	= $arquivo["size"];
	$arquivo_temporario     = $arquivo["tmp_name"];
	$erro = 0;
	$msg  = "";
	$retorno = array();
	
        
        
	if(!empty($nome_arquivo)){
            
		$ext = strrchr($nome_arquivo, ".");
		$nome_final = ($config_upload["renomeia"]) ? md5(time()) . $ext:  $nome_arquivo;
		$caminho = $config_upload["caminho_absoluto"] .$nome_final;                 
        
		if (($config_upload["verifica_tamanho"]) && ($tamanho_arquivo > $config_upload["tamanho"])){
			$msg ="O arquivo é maior que o permitido" ;
			$erro = -1;
		}
		
		if(($config_upload["verifica_extensao"]) && (!in_array($ext,$config_upload["extensoes"]))){
			$msg ="O arquivo não é permitido";
			$erro = -1;
		}
                  
                    
		if($erro !=-1){
			if(move_uploaded_file($arquivo_temporario, $caminho)){
				$msg =  "Arquivo enviado com sucesso";
				$erro= 0;
			}else{
				$msg = "erro ao fazer o upload";
				$erro = -1;
			}
		}

	}else{
		$msg = "está vazio";
		$erro = -1;
	}
	$retorno = array("erro" => $erro, "msg"=> $msg, "nome"=>$nome_final);
	
	return $retorno;
}

function databr($data, $opcao)
{
	if ($opcao==1)
	{
		$dia = substr($data,0,2);
		$mes = substr($data,3,2);
		$ano = substr($data,6,4);
		
		$databr = $ano . "-" .$mes ."-" .$dia;	
	}
	else
	{
		$dia = substr($data,8,2);
		$mes = substr($data,5,2);
		$ano = substr($data,0,4);
		
		$databr = $dia . "/" .$mes ."/" .$ano;	
	}
	return $databr;
}
