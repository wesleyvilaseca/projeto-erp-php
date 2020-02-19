$( function() {
    $("#cofins_campos").hide();
    $("#cofins_tipo").hide();
    $("#cofins_por_perc").hide();
    $("#cofins_por_valor").hide();
});
function selecionar_cofins(){
    var cofins = $("#seleciona_cofins").val();
    if(cofins === '01' || cofins === '02' ){
        $("#cofins_campos").show();
        $("#cofins99").hide();
        $("#cofins01_02").show();
        $("#cofins03").hide();
        $("#cofins99").hide();
        $("#st").html("Tipo de cálculo");
        $("#cofins_tipo").show();
        $("#cofins_por_perc").hide();
        $("#cofins_por_valor").hide();
        
    }else if(cofins === '03'){
        $("#cofins_campos").show();
        $("#cofins99").hide();
        $("#cofins01_02").hide();
        $("#cofins03").show();
        $("#st").html("Tipo de cálculo");
        $("#cofins_tipo").show();
        $("#cofins_por_perc").hide();
        $("#cofins_por_valor").hide();
    }else if(cofins === '99'){
       $("#cofins_campos").show();
         $("#cofins99").show();
        $("#cofins01_02").show();
        $("#cofins03").hide();       
        $("#st").html("Tipo de cálculo Subst. Trib."); 
        $("#cofins_tipo").show();
        $("#cofins_por_perc").hide();
        $("#cofins_por_valor").hide();
    }else{
        $("#cofins_campos").show();
        $("#cofins99").hide();
        $("#cofins01_02").hide();
        $("#cofins03").hide();       
        $("#st").html("Tipo de cálculo");       
        
        $("#cofins_tipo").show();
        $("#cofins_por_perc").hide();
        $("#cofins_por_valor").hide();
    }
    
  
}

function seleciona_tipo_calculo_cofins(){
    var escolha = $("#RTipoCalc").val();
    console.log(escolha);
    if(escolha==="perc"){
        $("#cofins_por_perc").show();
        $("#cofins_por_valor").hide();
    }else if(escolha=="valor"){
        $("#cofins_por_perc").hide();
        $("#cofins_por_valor").show(); 
    }else{
       $("#cofins_por_perc").hide();
        $("#cofins_por_valor").hide(); 
    }
}

function seleciona_tipo_calculo_st_cofins(){
    var escolha = $("#RTipoCalSt").val();
    console.log(escolha);
    if(escolha==="perc"){
        $("#cofins01_02").show();
        $("#cofins03").hide();
    }else if(escolha==="valor"){
        $("#cofins01_02").hide();
        $("#cofins03").show(); 
    }else{
       $("#cofins01_02").hide();
        $("#cofins03").hide(); 
    }
}


