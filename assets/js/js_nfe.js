$( function() {    
   
});

function selecionar_tipo_operacao(){
    var escolha = $("#tipo_operacao").val();
    if(escolha=="0"){
        tipo ="E";
    }else{
        tipo ="S";
    }

   $.ajax({
        url: base_url + "cfop/buscar/" + tipo ,
        type: "POST",
        data: { },
        dataType: "json",
        success: function(data){
             var resultado ="";
            $.each(data, function(key){
                resultado += "<option value='" + data[key].codigo_cfop + "'>"+ data[key].codigo_cfop + " - " + data[key].desc_cfop +"</option>" ;
            });
            $("#natureza_operacao").html(resultado);
        }
     });
    
}

function gerar_xml(id_nota){
	var componente0 = "#corLink0_" + id_nota;
	var componente1 = "#corLink1_" + id_nota;
	var componente2 = "#corLink2_" + id_nota;
	var componente3 = "#corLink3_" + id_nota;
	
	var statusNota = "#statusNfe" + id_nota;
	$("#msg_erro").css("display", "none");
	
	  $.ajax({
        url: base_url + "nfe/geraNFE/" + id_nota ,
        type: "POST",
        data: { },
        dataType: "json",
        success: function(data){
			if(data.tipo=="ok"){
				$(statusNota).html("gerado XML");
				$(componente0).removeClass("clicavel");
				$(componente0).addClass("clicado");
				$(componente1).removeClass("nulo");
				$(componente1).addClass("clicavel");
			}
             			
		},
	   beforeSend: function(){
		   console.log();
		   $(statusNota).html("<i class='load2'></i> Aguarde...");
	   },
	    error: function(data){
			console.log(data);
			$("#msg_erro").css("display", "block");
			$("#txt_erro").html(data.responseText);
		   $(statusNota).html("deu erro...");
	   }
	     
     });    
} 


function assinar_xml(id_nota){
	var componente0 = "#corLink0_" + id_nota;
	var componente1 = "#corLink1_" + id_nota;
	var componente2 = "#corLink2_" + id_nota;
	var componente3 = "#corLink3_" + id_nota;
	var statusNota = "#statusNfe" + id_nota;
	
	$("#msg_erro").css("display", "none");
	$.ajax({
        url: base_url + "nfe/assinarNFE/" + id_nota ,
        type: "POST",
        data: { },
        dataType: "json",
        success: function(data){
			console.log(data);
			if(data.tipo=="ok"){
				$(statusNota).html("Nota Assinada");
				$(componente1).removeClass("clicavel");
				$(componente1).addClass("clicado");
				$(componente2).removeClass("nulo");
				$(componente2).addClass("clicavel"); 
			}else{
				$("#msg_erro").css("display", "block");
				$("#txt_erro").html(data.erro);
				$(statusNota).html("deu erro...");
			}
             			
		},
	   beforeSend: function(){
		   console.log();
		   $(statusNota).html("<i class='load2'></i> Aguarde...");
	   },
	    error: function(data){
			console.log(data);
			$("#msg_erro").css("display", "block");
			$("#txt_erro").html(data.responseText);
		   $(statusNota).html("Erro...");
	   }
	     
     }); 
	 
	
	    
}

function enviar_xml(id_nota){
	var componente0 = "#corLink0_" + id_nota;
	var componente1 = "#corLink1_" + id_nota;
	var componente2 = "#corLink2_" + id_nota;
	var componente3 = "#corLink3_" + id_nota;
	var statusNota = "#statusNfe" + id_nota;
	
	$("#msg_erro").css("display", "none");
	$.ajax({
        url: base_url + "nfe/enviarNFE/" + id_nota ,
        type: "POST",
        data: { },
        dataType: "json",
        success: function(data){
			console.log(data);
			if(data.tipo=="ok"){
				$(statusNota).html("Nota Enviada");
				$(componente2).removeClass("clicavel");
				$(componente2).addClass("clicado");
				$(componente3).removeClass("nulo");
				$(componente3).addClass("clicavel");  
			}else{
				$("#msg_erro").css("display", "block");
				$("#txt_erro").html(data.erro);
				$(statusNota).html("deu erro...");
			}
             			
		},
	   beforeSend: function(){
		   console.log();
		   $(statusNota).html("<i class='load2'></i> Aguarde...");
	   },
	    error: function(data){
			console.log(data);
			$("#msg_erro").css("display", "block");
			$("#txt_erro").html(data.responseText);
		   $(statusNota).html("Erro...");
	   }
	     
     }); 
	
	
	     
}

function autorizar_xml(id_nota){
	var componente0 = "#corLink0_" + id_nota;
	var componente1 = "#corLink1_" + id_nota;
	var componente2 = "#corLink2_" + id_nota;
	var componente3 = "#corLink3_" + id_nota;
	
	var statusNota = "#statusNfe" + id_nota;
	
	$("#msg_erro").css("display", "none");
	$.ajax({
        url: base_url + "nfe/consultaNFE/" + id_nota ,
        type: "POST",
        data: { },
        dataType: "json",
        success: function(data){
			console.log(data);
			if(data.tipo=="ok"){
				$(statusNota).html("Nota Autorizada");
				$(componente3).removeClass("clicavel");
				$(componente3).addClass("clicado");
				window.location.href = base_url + "nfe/";
			}else{
				$("#msg_erro").css("display", "block");
				$("#txt_erro").html(data.erro);
				$(statusNota).html("deu erro...");
			}
             			
		},
	   beforeSend: function(){
		   console.log();
		   $(statusNota).html("<i class='load2'></i> Aguarde...");
	   },
	    error: function(data){
			console.log(data);
			$("#msg_erro").css("display", "block");
			$("#txt_erro").html(data.responseText);
		   $(statusNota).html("Erro...");
	   }
	     
     }); 
}


function dados_nota(id_nota){	
	$.ajax({
        url: base_url + "nfe/dadosNfe/" + id_nota ,
        type: "POST",
        data: { },
        dataType: "json",
        success: function(data){
			$("#dados").css("display", "block");
			$("#txt_chave").val(data.chave);			
			$("#txt_recibo").val(data.recibo);			
			$("#txt_protocolo").val(data.protocolo);		
             			
		},
	   beforeSend: function(){
		   //
	   },
	    error: function(data){
			$("#msg_erro").css("display", "block");
			$("#txt_erro").html(data.responseText);
	   }
	     
     }); 
}


