<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exercicio3Controller extends Controller
{
    public function precos(){
    $preco=[21,59,20];
    return view ('exercicio3', compact('preco'));
 }   
}
