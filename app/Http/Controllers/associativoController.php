<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class associativoController extends Controller
{
    public function TrazDados(){
        $dados =['nome'=>'diego',
        'idade' =>27,
        'profissao' => 'garoto que faz programa'];
        return view ('associativo', compact ('dados'));

          }
}
