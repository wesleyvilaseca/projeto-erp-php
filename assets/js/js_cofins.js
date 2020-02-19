$( function() {
    $("#cofins_campos").hide();
    
    limpar();
});
function selecionar_cofins(){
    var cofins = $("#codigo_cofins").val();
    if(cofins === '01' || cofins === '02' ){
        limpar();
        $("#cofins_campos").show();
        $("#cofins_campos").append($("#div_pCOFINS").show());
        $("#cofins_campos").append($("#cofins_selRTipoCalSt").show()); 
        
    }else if(cofins === '03'){
         limpar();
        $("#cofins_campos").show();
        $("#cofins_campos").append($("#div_cofins_vAliqProd").show());
        $("#cofins_campos").append($("#cofins_selRTipoCalSt").show());
    }else if(cofins === '99'){
         limpar();
        $("#cofins_campos").show();      
        $("#cofins_campos").append($("#div_cofins_selRTipoCalc").show());
        $("#cofins_campos").append($("#div_pCOFINS").show());
        $("#cofins_campos").append($("#cofins_selRTipoCalSt").show());
        
    }else{
        limpar();
        $("#cofins_campos").show();;
        $("#cofins_campos").append($("#cofins_selRTipoCalSt").show());
        $("#cofins_campos").append($("#div_cofins_STpCOFINS").show());
    }  
    
  
}

function seleciona_tipo_calculo_cofins(){
    var escolha = $("#cofins_TipoCalc").val();    
    if(escolha=="1"){
        $("#cofins_campos").append($("#div_pCOFINS").show());
        $("#div_cofins_vAliqProd").hide();
        $("#cofins_campos").append($("#cofins_selRTipoCalSt").show());
    }else if(escolha=="2"){        
        $("#div_pCOFINS").hide();
        $("#cofins_campos").append($("#div_cofins_vAliqProd").show());
        $("#cofins_campos").append($("#cofins_selRTipoCalSt").show());
        
    }
}

function seleciona_tipo_calculo_st_cofins(){
    var escolha = $("#cofins_TipoCalcSt").val();
    if(escolha=="1"){
        $("#cofins_campos").append($("#div_cofins_STpCOFINS").show());
        $("#div_cofins_STvAliqProd").hide();
    }else if(escolha=="2"){
        $("#div_cofins_STpCOFINS").hide();
        $("#cofins_campos").append($("#div_cofins_STvAliqProd").show());
    }else{
        $("#div_cofins_STpCOFINS").hide();
        $("#div_cofins_STvAliqProd").hide();
    }
}

function limpar(){
   $("#div_cofins_vAliqProd").hide(); 
   $("#div_pCOFINS").hide(); 
   $("#div_cofins_selRTipoCalc").hide(); 
   $("#cofins_selRTipoCalSt").hide();  
   $("#div_cofins_STpCOFINS").hide(); 
   $("#div_cofins_STvAliqProd").hide(); 
}

