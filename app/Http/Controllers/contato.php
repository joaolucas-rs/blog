<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Contato extends Controller {

    public function contato() {
        return view('index', [
            'pagina'=>'contato',
            'img_topo'=>'contato.jpg', 
            'tit_pag'=>'Contato',
            'subTit_pag'=>'Envie Sua Mensagem']);
    }

}
