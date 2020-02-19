<html lang="pt-br">
    <head>
        <title>Sistema ERP - mjailton</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">		
        <!--css-->
        <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">
        <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">

        <!--codigos-->
        <script src="<?php echo URL_BASE ?>assets/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo URL_BASE ?>assets/js/js-funcoes.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!--font icones-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script>
            var base_url = "<?php echo URL_BASE ?>";
        </script>
    </head>

    <body id="body" class="tema-claro">
        <?php include "cabecalho-mobile.php" ?>	

        <section class="conteudo">
            <?php $this->load($view, $viewData) ?>  
        </section>

        <footer><small>COPYRIGHT - MJAILTON</small></footer>

    </body>
</html>



