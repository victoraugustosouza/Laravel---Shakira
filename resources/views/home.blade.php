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
   </div>

  </div>

</div>
<div class="wrap">
<div class="container-fluid" id="c1"  > 
  <div class="row">
    <div class="col-md-6" id="c4"> 
      <div id="child">
       The Office<br>
       </div>
            
      <div class="text" id="child1">
       Todas às quartas no canal Sony</div>
      </div>
    </div>        
</div>

<div id="Personagens" class="container-fluid" >
     <div id="child2">
       Os funcionarios da Duder Mifflin querem te conhecer.
      </div>
      <div style="width:100%; height:100%;text-align:center;">
          <button type="button" class="btn btn-success btn-lg">Clique aqui conhecer Michael,Dwight e Angela.</button>

    </div>
  </div>
      
      
  

 <div id="Frases" class="container-fluid">
    <div id="child3" style="font-size: 70px;">
         <p> "Em um mundo ideal, eu teria todos os dez dedos na mão esquerda e a direita seria apenas para dar socos."</p>
    </div>
    <div style="width:100%; height:100%;text-align:center;">
          <button type="button" class="btn btn-warning btn-lg">Clique aqui para mais frases.</button>

    </div>
  </div>
     
             
              <!-- Your content here -->

 <div id="Temporadas" class="container-fluid">
  
    <div id="child3" style="font-size: 80px;">
         <p> Acesse o Guia de Episódios e não perca nada.</p>
    </div>
    <div style="width:100%; height:100%;text-align:center;">
          <button type="button" class="btn btn-primary btn-lg">Clique aqui para acessar.</button>

    </div>
  </div>
     
             
              <!-- Your content here -->
 <div id="Locações" class="container-fluid">


      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/principal6.jpg" alt="Alfredos">
      <div class="carousel-caption">
          <h3>Os Melhores lugares de Scranton</h3>
          <p>Alfredo's Bar</p>
        </div>
      </div>

    <div class="item">
      <img src="img/principal7.jpg" alt="predio">
      <div class="carousel-caption">
          <h3>Os Melhores lugares de Scranton</h3>
          <p>Dunder Mifflin</p>
        </div>
      </div>
    

    <div class="item">
      <img src="img/principal5.jpg" alt="Bar" >
      <div class="carousel-caption">
          <h3>Os Melhores lugares de Scranton</h3>
          <p>Poor Richard's</p>
        </div>
    </div>
  </div>
  </div>
     
           
              <!-- Your content here -->
</div>
  </div>




<footer  class="container-fluid bg-4 text-center">
  <p><h3>The Office é uma série produzida pela <a href="https://www.wikipedia.com">NBC</a>.Todos os direitos reservados.</h3></p>
  <p>Nenhum programador foi ferido durante a produção deste website.</p> 
</footer>
 

 

  
  
  </body>
      
</html>