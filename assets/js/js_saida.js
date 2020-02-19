function atender(obj){
    var id_item = $(obj).attr("data-idItem");
    var id_produto= $(obj).attr("data-idProduto");
    var qtdSolicitada = $(obj).attr("data-qtdSolicitada");
    var id_pedido = $(obj).attr("data-idPedido");
    var valor = $(obj).attr("data-valor");
    var quant = $("#item_" + id_item).val();
    
    if(parseInt(quant) > parseInt(qtdSolicitada)){
        alert("O valor atendido de "+ quant +" é maior que a quantidade solicitado de " + qtdSolicitada +"!");
        return false;
    }
    
    
    $.ajax({
        url: base_url + "saida/fazer_atendimento",
        type: "POST",
        data:{
            id_item         : id_item,
            id_produto      : id_produto,
            qtdSolicitada   : qtdSolicitada,
            id_pedido       : id_pedido,
            valor           : valor,
            quant           : quant
        },
        dataType: "json",
        success: function(data){
            if(data.erro > 0){
                alert(data.msg);
            }else{
                $("#item_" + id_item).prop("readonly", true);
                $(obj).closest("td").html("atendido");
            }
            console.log(data);
        }
    })
}