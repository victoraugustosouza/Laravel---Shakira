@extends('layout.app')

@section('title', 'Welcome')

@section('corpo')

    <style>

      .help-block {
        color: red;
        font-size: 10px;
        font-weight: 400;
      }

    </style>

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
                    <label for="nome">Nome</label>
                    <input id="nome" type="text" class="form-control" name="nome">

                    @if ($errors->has('nome'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nome') }}</strong>
                        </span>
                    @endif

                </div>



                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" class="form-control" name="email">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                </div>



                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" class="form-control" name="mensagem"></textarea>

                    @if ($errors->has('mensagem'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mensagem') }}</strong>
                        </span>
                    @endif
                    
                </div>


                <button type="submit" class="btn btn-default">Enviar</button>
                <br><br>

            </form>

        </div>
    </div>

@endsection
