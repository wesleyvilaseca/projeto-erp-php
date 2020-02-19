$( function() {    
    limpar();
});
function selecionar_pis(){
    var pis = $("#codigo_pis").val();
    if(pis === '01' || pis === '02' ){
         limpar();
        $("#pis_campos").show();
        $("#pis_campos").append($("#pPIS").show());
        $("#pis_campos").append($("#selRTipoCalSt").show());       
        
    }else if(pis === '03'){
         limpar();
        $("#pis_campos").show();
        $("#pis_campos").append($("#vAliqProd_pis").show());
        $("#pis_campos").append($("#selRTipoCalSt").show());
    }else if(pis === '99'){         
        $("#pis_campos").show();      
        $("#pis_campos").append($("#selRTipoCalc").show());
        $("#pis_campos").append($("#pPIS").show());
        $("#pis_campos").append($("#selRTipoCalSt").show());
        
    }else{
        limpar();
        $("#pis_campos").show();;
        $("#pis_campos").append($("#selRTipoCalSt").show());
        $("#pis_campos").append($("#STpPIS").show());
    }  
  
}
STvAliqProd_pis
function seleciona_tipo_calculo_pis(){
    var escolha = $("#pis_TipoCalc").val();    
    if(escolha=="1"){
        $("#pis_campos").append($("#pPIS").show());
        $("#vAliqProd_pis").hide();
        $("#pis_campos").append($("#selRTipoCalSt").show());
        
    }else if(escolha=="2"){
        $("#pis_campos").append($("#vAliqProd_pis").show());
        $("#pPIS").hide();
        $("#pis_campos").append($("#selRTipoCalSt").show());
        
    }
}

function seleciona_tipo_calculo_st_pis(){
    var escolha = $("#pis_TipoCalcSt").val();
    if(escolha=="1"){
        $("#pis_campos").append($("#STpPIS").show());
        $("#STvAliqProd_pis").hide();
    }else if(escolha=="2"){
        $("#STpPIS").hide();
        $("#pis_campos").append($("#STvAliqProd_pis").show());
    }else{
        $("#STpPIS").hide();
        $("#STvAliqProd_pis").hide();
    }
}

function limpar(){
   $("#pPIS").hide(); 
   $("#vAliqProd_pis").hide(); 
   $("#selRTipoCalc").hide(); 
   $("#selRTipoCalSt").hide();  
   $("#STpPIS").hide(); 
   $("#STvAliqProd_pis").hide(); 
}

