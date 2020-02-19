<?php


define("SERVIDOR", "localhost");
define("BANCO", "projeto_erp");
define("USUARIO", "root");
define("SENHA", "");


define('CONTROLLER_PADRAO', 'home');
define('METODO_PADRAO', 'index');
define('NAMESPACE_CONTROLLER', 'app\\controllers\\');
define('URL_BASE', 'http://localhost/erp/');
define('URL_IMAGEM', 'http://localhost/erp/upload/');


$config_upload["verifica_extensao"] = false;
$config_upload["extensoes"] = array(".gif",".jpeg", ".png", ".bmp", ".jpg");
$config_upload["verifica_tamanho"] = true;
$config_upload["tamanho"] = 2097152; //2 mb
$config_upload["caminho_absoluto"]= "D:/wamp64/www/erp/upload/";
$config_upload["renomeia"] = true;
