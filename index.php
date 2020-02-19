<?php
require 'config/config.php';
require 'app/core/Core.php';
require 'vendor/autoload.php';
require 'app/helper/helper.php';
date_default_timezone_set("America/Fortaleza");

$core = new Core;
$core->run();

/*
echo "contoller: " .$core->getController();
echo "<br>Método : " .$core->getMetodo();
$parametros = $core->getParametros();
foreach ($parametros as $param)
    echo "<br>Parâmetro : " .$param;*/

