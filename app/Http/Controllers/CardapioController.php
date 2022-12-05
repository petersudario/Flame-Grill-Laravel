<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardapioController extends Controller
{

    public function cardapio(){
        return view('site.cardapio');
    }
}
