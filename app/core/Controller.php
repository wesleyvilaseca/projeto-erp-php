<?php
namespace app\core;

class Controller{
     public function load($viewName, $viewData=array()){
         //o extract tranforma as keys do array em variavel
       extract($viewData);
       include "app/views/" . $viewName .".php";
   }
}
