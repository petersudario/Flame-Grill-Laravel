<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = [
            0 => ['nome' => 'Havan', 'status' => 'N', 'CPF' => '', 'CNPJ' => '00.000.000/0001-00', 'TEL' => '90000-0000', 'DDD' => 41],
            1 => ['nome' => 'Centauro', 'status' => 'N', 'CPF' => '030.000.000-00', 'CNPJ' => '00.000.000/0001-00', 'TEL' => '92000-0000', 'DDD' => 48],
            2 => ['nome' => 'Big', 'status' => 'S', 'CPF' => '040.000.000-00', 'CNPJ' => '00.000.000/0001-00', 'TEL' => '94000-0000', 'DDD' => 11],
            3 => ['nome' => 'Renner', 'status' => 'S', 'CPF' => '000.000.000-00', 'CNPJ', 'TEL' => '95000-0000', 'DDD' => ''],

        ];

        return view('site.fornecedor.index', compact('fornecedores'));
    }
}
