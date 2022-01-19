<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora()
    {
        return view('calculadora');
    }
    public function soma(Request $request)
    {
        //pegar vairveis do formulario
        $num1 = $request->num1;
        $num2 = $request->num2;

        //calcular soma
        $result = $num1 + $num2;

        //mostrar página para o usuário
        return view('resultado', compact('result'));
    }
}
