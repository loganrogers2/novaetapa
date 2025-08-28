<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exercicio2Controller extends Controller
{
    public function tarefa(){
        $nomes=['ana','bia','carlos','daniel'];
        return view ('exercicio2', compact('nomes'));
    }
}
