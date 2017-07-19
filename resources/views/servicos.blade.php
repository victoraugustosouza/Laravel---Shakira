@extends('layout.app')

@section('title', 'Welcome')

@section('corpo')

    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Serviços</div>
                <div class="panel-body">
                    Veja os serviços que oferecemos.
                </div>
            </div>
        </div>
    </div>

    <div class="row">

    @foreach($servicos as $servico)
      <div class="col-xs-3">

        <div class="panel panel-primary">

          <div class="panel-heading">
            {{ $servico['nome'] }}
          </div>

          <div class="panel-body" style="height: 70px;">
            {{ $servico['descricao'] }}
          </div>

        </div>
      </div>
    @endforeach

    </div>


@endsection
