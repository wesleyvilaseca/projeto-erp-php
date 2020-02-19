$( function() {
    $("#ipi_campos").hide();
    $("#ipi_tipo").hide();
    $("#ipi_por_perc").hide();
    $("#ipi_por_valor").hide();
});
function selecionar_ipi(){
    var ipi = $("#seleciona_ipi").val();
    if(ipi === '00' || ipi === '49' || ipi === '50' || ipi === '99'){
        $("#ipi_campos").show();
        $("#ipi_tipo").show();
        $("#ipi_por_perc").show();
        $("#ipi_por_valor").hide();
    }else if(ipi === '01' || ipi === '02' || ipi === '03' || ipi === '04' || ipi === '05' || ipi === '51' || ipi === '52' || ipi === '53' || ipi === '54' || ipi === '55'){
        $("#ipi_campos").show();
        $("#ipi_tipo").hide();
        $("#ipi_por_perc").hide();
        $("#ipi_por_valor").hide();
    }else{
       //
    }
}

function seleciona_tipo_calculo(){
    var escolha = $("#OTipoCalc").val();
    if(escolha=="perc"){
        $("#ipi_por_perc").show();
        $("#ipi_por_valor").hide();
    }else{
        $("#ipi_por_perc").hide();
        $("#ipi_por_valor").show(); 
    }
}


