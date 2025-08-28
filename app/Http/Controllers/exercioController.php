<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exercioController extends Controller
{
    public function exercicio1(){
        $itens=[ 'guardanapo ','papel','prato'];
        return view('exercicio1', compact('itens'));
    }
}
