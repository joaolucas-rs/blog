<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Index extends Controller {

    public function index() {
        return view('index', [
            'pagina' => 'principal', 
            'img_topo' => 'home-bg.jpg', 
            'tit_pag'=>'Blog do João Lucas',
            'subTit_pag'=>'Blog de Informática: Tecnologia da Informação e Internet']);
    }


}
