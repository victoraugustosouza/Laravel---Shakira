<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        return view('contato');
    }
    public function enviarContato(Request $request,$id){
       $formulario = $request->all();

        //validando dados


        //acessando os dados do formulario de acordo com o nome desles, especificado no campo "name" no html
        $nome = $formulario['nome'];
        $mensagem = $formulario['mensagem'];


        return back()->with(['nome' => $nome, 'mensagem' => $mensagem]);



    }
}
