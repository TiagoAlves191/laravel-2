<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvariasController extends Controller
{
    public function listaAvarias() {
        $tabelaAvarias=[];
        return view ('avarias.listaAvarias')->with('tabelaAvarias', $tabelaAvarias);
    }
    
}
