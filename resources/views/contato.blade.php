@extends('layout.app')

@section('title', 'Welcome')

@section('corpo')

    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Contato</div>
                <div class="panel-body">
                    Fale conosco.
                </div>
            </div>
        </div>
    </div>

    <!-- testa se ha variavel 'nome' passada no array de variaveis passadas para a view -->
    @if(session('nome'))
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="alert alert-success" role="alert">
                    Sua mensagem foi enviada.<br>
                    <!-- imprime o nome e mensagem que o usuario enviou -->
                    Seu nome: {{ session('nome') }} <br>
                    Sua mensagem: {!! session('mensagem') !!}
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <form method="POST" action="{{ route('enviar_contato') }}">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="nome">Password</label>
                    <input id="nome" type="text" class="form-control" name="nome">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <textarea id="mensagem" class="form-control" name="mensagem"></textarea>
                </div>


                <button type="submit" class="btn btn-default">enviar</button>

            </form>

        </div>
    </div>

@endsection
