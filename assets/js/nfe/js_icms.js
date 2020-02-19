$( function() {
    $("#icms_campos").hide();
    $("#icms_tipo").hide();
    $("#icms_por_perc").hide();
    $("#icms_por_valor").hide();
});
function selecionar_icms(){
    var icms = $("#seleciona_icms").val();
    if(icms === '01' || icms === '02' ){
        $("#icms_campos").show();
        $("#icms99").hide();
        $("#icms01_02").show();
        $("#icms03").hide();
        $("#icms99").hide();
        $("#st").html("Tipo de cálculo");
        $("#icms_tipo").show();
        $("#icms_por_perc").hide();
        $("#icms_por_valor").hide();
        
    }else if(icms === '03'){
        $("#icms_campos").show();
        $("#icms99").hide();
        $("#icms01_02").hide();
        $("#icms03").show();
        $("#st").html("Tipo de cálculo");
        $("#icms_tipo").show();
        $("#icms_por_perc").hide();
        $("#icms_por_valor").hide();
    }else if(icms === '99'){
       $("#icms_campos").show();
         $("#icms99").show();
        $("#icms01_02").show();
        $("#icms03").hide();       
        $("#st").html("Tipo de cálculo Subst. Trib."); 
        $("#icms_tipo").show();
        $("#icms_por_perc").hide();
        $("#icms_por_valor").hide();
    }else{
        $("#icms_campos").show();
        $("#icms99").hide();
        $("#icms01_02").hide();
        $("#icms03").hide();       
        $("#st").html("Tipo de cálculo");       
        
        $("#icms_tipo").show();
        $("#icms_por_perc").hide();
        $("#icms_por_valor").hide();
    }
    
  
}

function selecionar_origem_icms(){
    var escolha = $("#RTipoCalc").val();
    console.log(escolha);
    if(escolha=="perc"){
        $("#icms_por_perc").show();
        $("#icms_por_valor").hide();
    }else if(escolha=="valor"){
        $("#icms_por_perc").hide();
        $("#icms_por_valor").show(); 
    }else{
       $("#icms_por_perc").hide();
        $("#icms_por_valor").hide(); 
    }
}



