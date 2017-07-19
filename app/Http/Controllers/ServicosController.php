<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicosController extends Controller
{
    //TODO: CRIAR UM METODO QUE RETORNE ALGUNS SERVICOS PRESTADOS

    public function index(){
      $servicos = [
                      [
                          'nome' => 'Tiradentes',
                          'descricao' => 'Tiramos seus dentes'
                      ],
                      [
                          'nome' => 'Soco na cara',
                          'descricao' => 'Tiramos seus dentes com um soco na cara'
                      ],
                      [
                          'nome' => 'Carinho',
                          'descricao' => 'Tiramos seus dentes com o maior carinho do mundo'
                      ],
                      [
                          'nome' => 'Escondido',
                          'descricao' => 'Voce nem percebe que tiramos seus dentes'
                      ]
                  ];

      return view('servicos', ['servicos' => $servicos]);
    }
}
