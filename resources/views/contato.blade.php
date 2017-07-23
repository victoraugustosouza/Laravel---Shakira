@extends('layout.app')



@section('corpo')
      <div class="text" style="color: white;text-align: center;">
      <h2>Sua opinião é importante para nós. </h2>
      </div>
      <br>

      <div class="container">
       <div class="row">
        <div class="col-xs-6 col-xs-offset-3" style="color: white;vertical-align: middle;text-align: center;" >
          <form method="POST" action="{{ route('enviar_contato',['id'=>'61684354635']) }}">
          {{ csrf_field() }} 
          {{ method_field('PUT') }}
          <div class="form-group">
            <label for="name">Nome: </label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome aqui."  style="color: black;">
          </div>  

           <div class="form-group">
                    <label for="email">E-mail: </label>
                    <input id="email" type="email"  name="email" placeholder="Seu e-mail aqui." style="color: black;">
           </div>


          <div class="form-group">
            <label for="estado">Estado: </label>
            <select id="estado" name="estado" style="color: black;">
              <option value="RJ">Rio de Janeiro</option>
              <option value="SP">São Paulo</option>
              <option value="MG">Minas Gerais</option>
            </select>
          </div>

          <div class="form-group">
            <label for="mensagem">Mensagem: </label>
            <textarea id="mensagem" name="mensagem" placeholder="Sua mensagem aqui." style="height:200px;color: black;"></textarea>

            <input type="submit" value="Enviar" style="color: black">
          </div>
          </form>
      </div>
      </div>
    </div>
@endsection
