$( function() {
	//Menu mobile
	
	$('.mobmenu').click (function(){
	$('.menuprincipal').slideToggle();
	$(this).toggleClass('active');
		return false;
	});	
		
		
	//toggle
	$( "#button" ).on( "click", function() {
      $( ".newClass" ).switchClass( "newClass", "mostrarClass", 10 );
      $( ".mostrarClass" ).switchClass( "mostrarClass", "newClass", 10 );
    });
	
	//tabs
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});
	
	//
	  $('label input[type=radio]').click(function() {
	  $('body').addClass('active');
	});
	
	
// modal 
	$("a[rel=modal]").click( function(ev){
        ev.preventDefault();
 
        var id = $(this).attr("href");
 
        var alturaTela = $(document).height();
        var larguraTela = $(window).width();
		
		
			
        //colocando o fundo preto
        $('#mascara').css({'width':larguraTela,'height':alturaTela});
        //$('#mascara').fadeIn(500); 
        $('#mascara').fadeTo("slow",0.8);
 
        var left = ($(window).width() /2) - ( $(id).width() / 2 );
        var top = ($(window).height() / 2) - ( $(id).height() / 2 );
     
        $(id).css({'top':top,'left':left});
        $(id).show(); 
		$(window).scrollTop(0) ;
		
    });
 
    $("#mascara").click( function(){
        $(this).hide();
        $(".window").hide();
    });
 
    $('.fechar').click(function(ev){
        ev.preventDefault();
        $("#mascara").hide();
        $(".window").hide();
    });
	
	

 
 //grafico bar
   var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Janeiro", "Fervereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 10034],
            lineTension: 0,
            backgroundColor: '#607bd7',
            borderColor: '#607bd7',
            borderWidth: 1,
            pointBackgroundColor: '#607bd7',
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
	  
	//Grafico pizza 01
	var ctx = document.getElementById("myChart2");
		 var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ["Lucro","Gasto"],
          datasets: [{
            data: [34339, 12345],
            lineTension: 0,
            backgroundColor: ['#0C99F1','#FF7373'],
            borderColor: '#2D3244',
            borderWidth: 1,
            pointBackgroundColor: '#2D3244',
          }]
        }
		
      });
	  
	  
	//Grafico pizza 01
	var ctx = document.getElementById("myChart3");
		 var myChart = new Chart(ctx, {
        type: 'pie',
		legend:{fontColor: '#dddddd'},
        data: {
          labels: ["Entrada","Saída"],
          datasets: [{
            data: [34339, 12345],
            lineTension: 0,
            backgroundColor: ['#4968D1','#00D9A3'],
            borderColor: '#2D3244',
            borderWidth: 1,
            pointBackgroundColor: '#2D3244',
          }]
        }
		         
      });
	  
 

	  
	  
 });
 
 function mudarLayout(cor){	 
	 if( $( "#body" ).hasClass( "tema-claro" )){
		$( "#body" ).removeClass("tema-claro")  
	 }
	 if( $( "#body" ).hasClass( "tema-dark" )){
		$( "#body" ).removeClass("tema-dark")  
	 }
	 
	 $( "#body" ).addClass( "tema-" + cor );
	 
	 $.ajax({
        url: base_url + "home/mudarLayout/" +cor ,
        type: "POST",
        data: { },
        dataType: "json"
	     
     });
	
	 
 }