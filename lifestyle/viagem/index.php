<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title> Viagem | Lifestyle | Utuber </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../../global/css/bootstrap.min.css">
<link rel="stylesheet" href="../../global/css/utubers.css">
<link rel="stylesheet" href="../../global/css/lifestyle.css">
<link rel="shortcut icon" href="../../global/imagens/icon.png" type="image/png" />
<script src="../../global/js/jquery-2.1.1.js"></script>
<script src="../../global/js/bootstrap.min.js"></script>
<script src="../../global/js/utubers.js"></script>
</head>
<body> <!-- rgba(248, 248, 248, 1) -->
  <?php

  $nav1 = require '../../partes/nav1.php';
  $linksnav1 = array();

  $linksnav1['Humor'] =
      array('Home' => '../../humor',
          'Coisas do Dia a Dia' => '../../humor/coisasdoday',
          'Notícias Bizarras' => '../../humor/noticiasbizarras',
          'Pegadinhas' => '../../humor/pegadinhas',
          'Stand up' => '../../humor/standup');

  $linksnav1['Jogos'] =  array('Home' => '../../jogos',
      'Esportes' => '../../jogos/esportes',
      'FPS' => '../../jogos/fps',
      'MOBA' => '../../jogos/moba',
      'Terror' => '../../jogos/terror');

  $linksnav1['Culinária'] = array('Home' => '../../culinaria',
      'Fitness' => '../../culinaria/fitness',
      'Tradicional' => '../../culinaria/tradicional');

  $linksnav1['Lifestyle'] = array('Home' => '../',
      'Cotidiano' => '../cotidiano',
      'Make up' => '../makeup',
      'Viagem' => './');

  $nav1.nav1('#D9007B', '', $linksnav1, '../imagens/icon.png', ['../../global/imagens/ut.png','../../']);

  $linksnav2 = array();
  $linksnav2['../imagens/logo-bruna.png'] = 'brunavieira.php';
  $linksnav2['../imagens/logo-camicoutinho.png'] = 'camilacoutinho.php';
  $linksnav2['../imagens/logo-luh.png'] = 'lusicchi.php';


  ?>
  <div id="seguranav" class="col-xs-12 col-md-12 col-sm-12 pull-left">
      <div class="col-xs-1 col-md-1 col-sm-1 hidden-xs" id="setaesq"><span class="setaa glyphicon glyphicon-arrow-left"></span></div>
      <nav class="navbar col-md-10 col-xs-12 col-sm-10 " id="navfotos">
          <ul id="ulmaldito" class="text-center">
             <?php

             $keys = array_keys($linksnav2);

             for ($i = 0; $i < sizeof($keys); $i++) {
                 echo '<li><a href="' . $linksnav2[$keys[$i]] . '"><img alt="Foto integrante" class="img-circle" src="' . $keys[$i] . '"/></a></li>';
             };

             ?>
          </ul>
          <!--/.nav-collapse -->
      </nav>
      <div class="col-xs-1 col-md-1 col-sm-1 text-center hidden-xs" id="setadir"><span class="setaa glyphicon glyphicon-arrow-right"></span></div>
  </div>
  <div class="clearfix"></div>
  <script type="application/javascript">
      var int;
      $("#setaesq").mouseenter(function(){
          int = setInterval(function(){
              $("#ulmaldito").scrollLeft($("#ulmaldito").scrollLeft()-1);
          },10);
      });
      $("#setadir").mouseenter(function(){
          int = setInterval(function(){
              $("#ulmaldito").scrollLeft($("#ulmaldito").scrollLeft()+1);
          },10);
      });
      $("#setaesq, #setadir").mouseleave(function(){
          clearInterval(int);
      });
  </script>
<div class="container">
  <div class="row">
      <article class="top bottom">
        <h1>Viagem</h1>
        <p class="lead">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne.Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne.</p>
        <hr>
  </div> <!-- final div row -->
  <div class="row">
    <section id="trip_three">
      <div class="col-md-8 col-sm-8 col-xs-12">
        <h2>Luh Sicchierolli turistando por Barcelona</h2>
        <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne.</p>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/935cHGarmAs"></iframe>
      </div> <!-- final div responsive -->
      <div class="row">
          <h3>Outras viagens do Luh</h3>
          <ul class="list-inline">
            <div class="col-md-4 col-sm-4">
              <li><iframe width="260" height="220" src="https://www.youtube.com/embed/GbSnt8ZZyq0"></iframe></li>
            </div>
            <div class="col-md-4 col-sm-4">
                <li><iframe width="260" height="220" src="https://www.youtube.com/embed/re67ZVLSK-s"></iframe></li>
            </div>
            <div class="col-md-4 col-sm-4">
              <li><iframe width="260" height="220" src="https://www.youtube.com/embed/c8W0qoGlCoM"></iframe></li>
            </div>
          </ul>
        </div> <!-- final div row menor -->
    </div> <!-- final div col -->
    <div class="col-md-4 col-sm-4">
      <aside>
        <ul class="list-unstyled">
          <li>
            <a href="brunavieira.php" title="Acesse a Página de Bruna Vieira"><img class="img-responsive img-circle" src="../imagens/viagem-bruna.jpg" alt="Conheça a Bruna"/></a>
            <h3>Bruna Vieira</h3>
            <h4>do Depois dos Quinze</h4>
          </li>
          <li>
            <a href="camilacoutinho.php" title="Acesse a Página de Camila Coutinho"><img class="img-responsive img-circle" src="../imagens/viagem-camis.jpg" alt="Conheça a Camila"/></a>
            <h3>Camila Coutinho</h3>
            <h4>do Garotas Estúpidas</h4>
          </li>
          <li>
            <a href="lusicchi.php" title="Acesse a Página de Luh Sicchierolli"><img class="img-responsive img-circle" src="../imagens/viagem-luh.jpg" alt="Conheça o Luh"/></a>
            <h3>Luh Sicchierolli</h3>
            <h4>do Estilo Bifásico</h4>
          </li>
        </ul>
      </aside>
    </div> <!-- final col aside -->
    </div> <!-- final div row -->
  </section>
  </article>
  <!--</div>  final div row maior -->
  <div class="row">
    <div class="col-md-8 col-sm-8 col-xs-12">
      <section>
        <h2 class="titles margin-gd margin-mbl"><span>Com os amigos</span></h2>
        <p>Lorem ipsum dolor sit amet, ne aeque legimus sit.</p>
        <ul class="list-unstyled">
          <li>
            <div class="row">
            <div class="col-md-6">
                <a href="brunavieira.php#meet"><h3>Explorando NY com as amigas</h3></a>
                <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne.</p>
            </div>
            <div class="col-md-6">
              <a href="brunavieira.php#meet"><img class="pull-right img-responsive" src="../imagens/viagem-explorando.jpg" alt="Explorando com as amigas"/></a>
            </div> <!-- fecha div col -->
          </div> <!-- fecha a row -->
          </li>
          <hr>
          <li>
            <div class="row">
            <div class="col-md-6">
                <a href="luhsicchi.php#meet"><h3>Acorda Nininha! - Luh e Niina Secrets em NY</h3></a>
                <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne.</p>
            </div>
            <div class="col-md-6">
              <a href="lusicchi.php#meet"><img class="pull-right img-responsive" src="../imagens/viagem-acorda.jpg" alt="Acorda Nininha!"/></a>
            </div> <!-- fecha div col -->
          </div> <!-- fecha a row -->
          </li>
          <hr>
          <li id="trip_two">
            <div class="row">
            <div class="col-md-6">
                <a href="camilacoutinho.php#meet"><h3>Cami e Vic Ceridono vão pra Dubai</h3></a>
                <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne.</p>
            </div>
            <div class="col-md-6">
              <a href="camilacoutinho.php#meet"><img class="pull-right img-responsive" src="../imagens/viagem-dubai.jpg" alt="Cami e Vic vão para Dubai"/></a>
            </div> <!-- fecha div col -->
          </div> <!-- fecha a row -->
          </li>
          <hr>
        </ul>
      </section>
    </div><!-- final div col -->
    <div class="col-md-4 col-sm-4 col-sm-12">
      <aside>
        <h2 class="titles margin-gd margin-mbl3"><span>Destaques</span></h2>
        <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</p>
        <ul class="list-unstyled list-inline">
          <li><a href="camilacoutinho.php" title="Londres"><img class="img-responsive" src="../imagens/london.jpg" alt="Londres"/></a></li>
          <li><a href="brunavieira.php#cities" title="Brighton"><img class="img-responsive" src="../imagens/brighton.jpg" alt="Brighton"/></a></li>
          <li><a href="lusicchi.php#cities" title="Milão"><img class="img-responsive retang" src="../imagens/milan.jpg" alt="Milão"/></a></li>
          <li><a href="lusicchi.php#cities_two" title="Veneza"><img class="img-responsive retang" src="../imagens/venice.jpg" alt="Veneza"/></a></li>
        </ul>
        <hr>
      </aside>
      <aside>
        <a href="../viagem/brunavieira.php" title="Depois dos Quinze tem muito mais" target="_blank"><img  src="../imagens/adv-bruna.jpg" alt="Depois dos Quinze tem muito mais" class="img-responsive margin-gd margin-mbl"  /></a>
      </aside>
    </div><!-- final div col -->
  </div> <!-- final div row -->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <section class="text-center">
        <h2>Comprinhas</h2>
        <p>
          Lorem ipsum dolor sit amet
        </p>
        <ul class="list-unstyled list-inline">
          <li>
            <a href="camilacoutinho.php#shop" title="Comprinhas da Rússia"><img class="img-responsive" src="../imagens/comprinhas-russia.jpg" alt="Comprinhas"/> </a>
          </li>
          <li id="shop">
            <a href="brunavieira.php#shop" title="Comprinhas no intercâmbio"><img class="img-responsive" src="../imagens/comprinhas-intercambio.jpg" alt="Comprinhas"/> </a>
          </li>
          <li id="trip_one">
            <a href="camilacoutinho.php#shop-two" title="Comprinhas em Londres"><img class="img-responsive" src="../imagens/comprinhas-londres.jpg" alt="Comprinhas"/> </a>
          </li>
          <li>
            <a href="lusicchi.php#shop" title="Comprinhas da Eurotrip"><img class="img-responsive" src="../imagens/comprinhas-eurotrip.jpg" alt="Comprinhas"/> </a>
          </li>
        </ul>
      </section>
    </div> <!-- final col -->
  </div> <!-- final row comprinhas -->
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
      <section>
        <h2 class="titles margin-gd margin-mbl4"><span>O que levar na mala?</span></h2>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Lut0-RqkJIg"></iframe>
              </div>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Bogr68dRpfs"></iframe>
              </div>
            </div> <!-- fecha 1a col -->
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p><a class="pull-right margin-gd" href="brunavieira.php#bag">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </a></p>
              <hr class="mala">
              <p><a href="camilacoutinho.php#bag">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </a></p>
            </div> <!-- fecha 2a col -->
            </div> <!-- fecha row -->
            </section>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <aside>
                <img src="../imagens/bruna-fora.jpg" alt="Viagem - Bruna Vieira"/>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <button  type="button" class="botao btn btn-default">Acessar a  Página</button>
              </aside>
            </div> <!-- fecha col -->
    </div> <!-- final col -->
  </div> <!-- final row -->
<div class="row">
  <div class="col-md-12">
    <section>
      <h2 class="titles margin-gd margin-mbl4"><span>Alguns países visitados</span></h2>
    <ul class="list-unstyled list-inline">
      <li><a href="brunavieira.php#arg" title="Argentina"><img class="img-responsive" src="../imagens/arg.jpg" alt="Argentina" /></a></li>
      <li><a href="brunavieira.php#bra" title="Brasil"><img class="img-responsive" src="../imagens/bra.jpg" alt="Brasil" /></a></li>
      <li><a href="lusicchi.php#fra" title="França"><img class="img-responsive" src="../imagens/fra.jpg" alt="França" /></a></li>
      <li><a href="camilacoutinho.php#ing" title="Inglaterra"><img class="img-responsive square3" src="../imagens/ing.jpg" alt="Inglaterra" /></a></li>
      <li><a href="lusicchi.php#ita" title="Itália"><img class="img-responsive" src="../imagens/ita.jpg" alt="Itália" /></a></li>
      <li><a href="camilacoutinho.php#rus" title="Rússia"><img class="img-responsive" src="../imagens/rus.jpg" alt="Rússia" /></a></li>
    </ul>
  </section>
  </div>
</div>
</div> <!-- final div container -->
<?php
include'../../partes/lifestyle-footer.php';
?>
</body>
</html>
