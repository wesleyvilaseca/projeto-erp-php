$( function() {
    $("#pis_campos").hide();
    $("#pis_tipo").hide();
    $("#pis_por_perc").hide();
    $("#pis_por_valor").hide();
});
function selecionar_pis(){
    var pis = $("#seleciona_pis").val();
    if(pis === '01' || pis === '02' ){
        $("#pis_campos").show();
        $("#pis99").hide();
        $("#pis01_02").show();
        $("#pis03").hide();
        $("#pis99").hide();
        $("#st").html("Tipo de cálculo");
        $("#pis_tipo").show();
        $("#pis_por_perc").hide();
        $("#pis_por_valor").hide();
        
    }else if(pis === '03'){
        $("#pis_campos").show();
        $("#pis99").hide();
        $("#pis01_02").hide();
        $("#pis03").show();
        $("#st").html("Tipo de cálculo");
        $("#pis_tipo").show();
        $("#pis_por_perc").hide();
        $("#pis_por_valor").hide();
    }else if(pis === '99'){
       $("#pis_campos").show();
         $("#pis99").show();
        $("#pis01_02").show();
        $("#pis03").hide();       
        $("#st").html("Tipo de cálculo Subst. Trib."); 
        $("#pis_tipo").show();
        $("#pis_por_perc").hide();
        $("#pis_por_valor").hide();
    }else{
        $("#pis_campos").show();
        $("#pis99").hide();
        $("#pis01_02").hide();
        $("#pis03").hide();       
        $("#st").html("Tipo de cálculo");       
        
        $("#pis_tipo").show();
        $("#pis_por_perc").hide();
        $("#pis_por_valor").hide();
    }
    
  
}

function seleciona_tipo_calculo_pis(){
    var escolha = $("#RTipoCalc").val();
    console.log(escolha);
    if(escolha=="perc"){
        $("#pis_por_perc").show();
        $("#pis_por_valor").hide();
    }else if(escolha=="valor"){
        $("#pis_por_perc").hide();
        $("#pis_por_valor").show(); 
    }else{
       $("#pis_por_perc").hide();
        $("#pis_por_valor").hide(); 
    }
}

function seleciona_tipo_calculo_st_pis(){
    var escolha = $("#RTipoCalSt").val();
    console.log(escolha);
    if(escolha=="perc"){
        $("#pis01_02").show();
        $("#pis03").hide();
    }else if(escolha=="valor"){
        $("#pis01_02").hide();
        $("#pis03").show(); 
    }else{
       $("#pis01_02").hide();
        $("#pis03").hide(); 
    }
}


