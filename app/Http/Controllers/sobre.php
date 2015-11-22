<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Sobre extends Controller {

    public function sobre() {
        return view('index', [
            'pagina'=>'sobre',
            'img_topo'=>'about-bg.jpg', 
            'tit_pag'=>'Sobre Mim',
            'subTit_pag'=>'Esse sou Eu']);
    }

}
