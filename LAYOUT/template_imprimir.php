<html lang="pt-br">
	<head>
		<title>Sistema ERP - mjailton</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device=width, initial-scale=1">		
		<!--css-->
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css" media="print" type="text/css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style-imprimir.css" media="print" type="text/css">
		
		<!--codigos-->
		<script src="<?php echo URL_BASE ?>assets/js/jquery-3.3.1.min.js"></script>
		
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">	
		<script>
			var base_url ="<?php echo URL_BASE ?>";
		</script>
		<style>		
			body{
				font-family: 'Roboto', sans-serif;
				font-size:.9rem;
			}
			p{margin:0;}
			h1,h2,h3,h4,h5,h6{margin:0;}
		</style>
	</head>
	
	<body id="body">
		

			<?php $this->load($view, $viewData) ?>  
		
			
	</body>
</html>



