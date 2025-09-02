<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContagemController extends Controller
{
    public function contar(){
        $produtos = ['produto A','produto B','produto C'];
        $quantidade = 0;
        foreach($produtos as $produto){
            $quantidade++;
        }
        return view('Contagem', compact('quantidade',));
    }
}
