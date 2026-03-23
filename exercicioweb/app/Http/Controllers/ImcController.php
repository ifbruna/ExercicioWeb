<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function calculo(Request $request){
    $peso = $request -> peso;
    $altura = $request -> altura;
    $faixa;

    $faixa = ($peso / ($altura*$altura));

    $categoria = "não informada";

    if ($faixa <= 18.5){
        $categoria = "abaixo do peso";
    }else if ($faixa >= 18.5 || $faixa <= 24.9){
        $categoria = "normal";
    } else if ($faixa >= 25 || $faixa <= 29.9){
        $categoria = "acima do peso";
    } else {
        $categoria = "obeso";
    }

    return view('resultado', compact('categoria'));

}

    public function form(){
        return view ('form');
    }

}