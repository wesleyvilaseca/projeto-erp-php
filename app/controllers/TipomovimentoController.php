<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Tipomovimento;

class TipomovimentoController extends Controller {

    public function index() {
        $objTipoMovimento = new Tipomovimento;
        $dados["lista"] = $objTipoMovimento->lista();
        $dados["view"] = "tipomovimento/Index";
        $this->load("template", $dados);
    }
   
}
