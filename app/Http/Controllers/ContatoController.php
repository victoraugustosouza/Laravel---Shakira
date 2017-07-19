<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    public function index(){
        return view('contato');
    }

    public function enviarContato(Request $request){

        //colocando os dados da requisicao num array chamado $formulario
        $formulario = $request->all();

        //validando dados
        $validacao = $this->validateContato($formulario);

        if ($validacao->fails()) {
          return redirect('contato')
                        ->withErrors($validacao)
                        ->withInput();
        }

        //acessando os dados do formulario de acordo com o nome desles, especificado no campo "name" no html
        $nome = $formulario['nome'];
        $mensagem = $formulario['mensagem'];


        return back()->with(['nome' => $nome, 'mensagem' => $mensagem]);



    }

    public function validateContato($data){

      return Validator::make($data, [
          'nome' => 'required|max:3',
          'email' => 'required|email',
          'mensagem' => 'required|min:5'
      ]);

    }
}
