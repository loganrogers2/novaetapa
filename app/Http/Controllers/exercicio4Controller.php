<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exercicio4Controller extends Controller
{
    public function produto(){
        $produtos=['notebook','mouse','teclado'];
        return view ('exercicio4', compact('produtos'));
    }
}
