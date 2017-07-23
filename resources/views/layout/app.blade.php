<!DOCTYPE html>
<html lang="en">
<head>

  <title>The Office</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7-dist/css/estilo.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/gnutypewriter" type="text/css"/>
 <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<link href="{{ URL::asset('css/estilo.css') }}" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" style="background-color: black">
  <div class="container-fluid" id="c2">
    <div class="row"><!--cria linha-->
      <div class="col-md-12">  
      <nav class="navbar navbar-inverse bg-inverse " id="t1">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img\logo.png" class="img-responsive" ></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">          
            <ul class="nav navbar-nav ">
              <li><a href="#Personagens">Personagens <span class="sr-only"></span></a></li>
              <li><a href="#Frases">Frases</a></li>
              <li><a href="#Temporadas">Temporadas</a></li>
              <li><a href="#Locações">Locações Utilizadas</a></li>
              
               
            </ul>

            

            <form class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Digite aqui">
              </div>
              <button type="submit" class="btn btn-default">Procurar</button>
               <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
            </form>

            
              

          </div><!-- /.navbar-collapse -->


        </div><!-- /.container-fluid -->

         
        
      </nav>

        <!-- criando nossa sessao 'corpo' para poder, aqui, colocar nosso codigo em outras views -->
        @yield('corpo')

        <!-- incluindo o footer no nosso app view -->
        @include('layout.footer')

    </div>


   
</body>
</html>