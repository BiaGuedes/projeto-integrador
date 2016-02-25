<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Camila Coelho | Make up | Lifestyle</title>
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
      'Make up' => './',
      'Viagem' => '../viagem');

  $nav1.nav1('#D9007B', '', $linksnav1, '../imagens/icon.png', ['../../global/imagens/ut.png','../../']);

  $linksnav2 = array();
  $linksnav2['../imagens/logo-alice.png'] = 'alicesalazar.php';
  $linksnav2['../imagens/logo-bia.png'] = 'biaandrade.php';
  $linksnav2['../imagens/logo-camicoelho.png'] = 'camilacoelho.php';


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
    <article class="top">
      <img class="img-responsive visible-xs" src="../imagens/cami-ytbrs.jpg" alt="Youtuber Camila Coelho" />
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <h1>Camila Coelho</h1>
      <!-- oi-->
      <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a href="http://alicesalazar.com.br/" title="Blog  Camila Coelho" target=”_blank”><img class="img-responsive pull-right" src="../imagens/logo-camicoelho.png" alt="Blog Camila Coelho" /></a>
      <ul class="list-unstyled list-inline">
          <li><a href="https://www.youtube.com/user/MakeUpByCamila/" title="Youtube" target="_blank"><img src="../imagens/ytb.png" alt="Youtube" class="icon-xs"/></a></li>
          <li><a href="https://www.facebook.com/Camila-Figueiredo-Coelho-161758410553702/" title="Facebook" target="_blank"><img src="../imagens/fb.png" alt="Facebook" class="icon-xs" /></a></li>
          <li><a href="https://www.instagram.com/camilacoelho/" title="Instagram" target="_blank"><img src="../imagens/insta.png" alt="Instagram" class="icon-xs" /></a></li>
          <!--once again -->
      </ul>
    </div> <!-- fecha col -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <img class="img-responsive hidden-xs" src="../imagens/cami-ytbrs.jpg" alt="Youtuber Camila Coelho" />
    </div> <!-- fecha col -->
  </article>
</div> <!-- fecha row -->
<div class="row">
  <section>
    <h2 class="titles margin-gd margin-mbl2"><span>Destaques</span></h2>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/xUYkldgsH40"></iframe>
      </div>
      <h3>Esfumado metalizado pra balada</h3>
        <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat pariatur.
        </p>
      </div> <!-- fecha 1a col destaques -->
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="list-unstyled">
          <div class="row">
            <li>
              <div class="col-md-4 col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xHoi6r_6jUM"></iframe>
                </div>
              </div> <!-- final div col video -->
              <div class="col-md-8 col-sm-8">
                <h4>Contorno da Kim Kardashian</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. deserunt mollit anim id est laborum.
                </p>
            </li>
            <li>
              <div class="col-md-4 col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/xHdHfyjIrC4"></iframe>
                </div>
              </div> <!-- final div col video -->
              <div class="col-md-8 col-sm-8">
                <h4>Transformando make dia em make noite</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. deserunt mollit anim id est laborum.
                </p>
              </div> <!-- final div col texto -->
            </li>
            <li>
              <div class="col-md-4 col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/A36OukGXgco"></iframe>
                </div>
              </div> <!-- final div col video -->
              <div class="col-md-8 col-sm-8">
                <h4>Maquiagem Taylor Swift</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. deserunt mollit anim id est laborum.
                </p>
              </div> <!-- final div col texto -->
            </li>
          </div> <!-- final div row -->
      </div> <!-- fecha 2a col destaques -->
    </section>
  </div> <!-- fecha row destaques-->
  <div class="row">
    <div class="col-md-12 col-sm-12 clearfix">
    <section>
      <h2 class="titles margin-gd margin-mbl"><span>Recentes</span></h2>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 com-xs-6">
            <ul class="list-unstyled">
              <li class="margin-rct line">
                <a class="recentes-pdg" href="https://www.youtube.com/watch?v=74sNAnxGeFM" title="Resenha BB Cream" target="_blank"><img  src="../imagens/cami-bb.jpg" alt="Vídeos Recentes" class="img-responsive pull-left" /></a>
                <p class="text-justified">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </li>
              <li class="margin-bx line">
                <a class="recentes-pdg" href="https://www.youtube.com/watch?v=agaHk0W0xhs" title="Recebidos" target="_blank"><img src="../imagens/cami-recebido.jpg" alt="Vídeos Recentes" class="img-responsive pull-left" /></a>
                <p class="text-justified">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </li>
            </ul>
          </div> <!-- final col menor - metade-->
          <div class="col-md-6 col-sm-6 col-xs-6">
            <ul class="list-unstyled">
              <li class="margin-rct line">
                <a class="recentes-pdg" href="https://www.youtube.com/watch?v=gRX5nbCmeVQ" title="Meu bazar" target="_blank"><img src="../imagens/cami-bazar.jpg" alt="Vídeos Recentes" class="img-responsive pull-left" /></a>
                <p class="text-justified">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </li>
              <li class="margin-rct line">
                <a class="recentes-pdg" href="https://www.youtube.com/watch?v=S8BfH2kJGjw" title="Esfumado marrom com toque turquesa" target="_blank"><img src="../imagens/slider-camila.jpg" alt="Vídeos Recentes" class="img-responsive pull-left square2" /></a>
                <p class="text-justified">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </li>
            </ul>
            </div> <!-- final col menor - metade-->
        </div> <!-- final row menor -->
      </section>
    </div> <!-- final col recentes -->
  </div> <!-- final row recentes -->
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12 offset-12">
      <section>
        <h2 class="titles margin-gd margin-mbl"><span> TOP 5</span></h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit
        </p>
        <ol>
          <li id="top">
            <h3>Delineado perfeito</h3>
            <div class="embed-responsive embed-responsive-16by9 hidden-xs">
              <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/wx700inyHkw"></iframe>
            </div>
            <hr class="visible-xs">
          </li>
          <li>
            <h3>Maquiagem para loiras </h3>
            <div class="embed-responsive embed-responsive-16by9 hidden-xs">
              <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/lb69Q6tQq5Q"></iframe>
            </div>
            <hr class="visible-xs">
          </li>
          <li>
            <h3>Maquiagem Glam romântica</h3>
            <div class="embed-responsive embed-responsive-16by9 hidden-xs">
              <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/kME1SBAjlCM"></iframe>
            </div>
            <hr class="visible-xs">
          </li>
          <li>
            <h3>Como enrolar o cabelo com pranchinha</h3>
            <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/pqsYSUJK-EE"></iframe>
          </div>
          <hr class="visible-xs">
          </li>
          <li>
              <h3>Make fácil para balada</h3>
            <div class="embed-responsive embed-responsive-16by9 hidden-xs">
              <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/NhWt0JIAPL0"></iframe>
            </div>
            <hr class="visible-xs">
          </li>
        </ol>
      </section>
    </div> <!-- final col -->
    <div class="col-md-4 col-sm-4 col-xs-12">
      <section>
        <h2 class="titles margin-gd margin-mbl2"><span>Cabelos</span></h2>
        <ul class="list-unstyled">
          <li>
            <a href="https://www.youtube.com/watch?v=x7jtjGLCeFg" title="Penteado meio preso anos 60" target="_blank" ><img class="img-responsive" src="../imagens/cami-cabelo.jpg" alt="Penteado meio preso anos 60" /></a>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </li>
          <li>
            <a href="https://www.youtube.com/watch?v=PRK4FOaJlvM" title="Penteado headband" target="_blank" ><img class="img-responsive" src="../imagens/cami-headband.jpg" alt="Penteado headband" /></a>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p><hr>
        </li>
      </ul>
    </section>
<section>
  <a href="https://www.youtube.com/watch?v=plDLfjsdKz4" target="_blank"><img class="img-responsive" src="../imagens/cami-spfw.jpg" alt="Vida de blogueira ep.1" /></a>
  <h3>#VidaDeBlogueira SPFW (Episódio 1)</h3>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </p><hr>
    <p><a href="https://www.youtube.com/watch?v=ONFpUnVXOIw" target="_blank">
    Confira o episódio 2 da saga de Camila Coelho na temporada de desfiles da SPFW e quem ela encontrou por lá!
  </a></p><hr>
</section>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<aside>
  <h2 class="titles margin-gd margin-mbl2"><span>Agenda</span></h2>
  <table class="table table-condensed">
    <tr>
      <td>Data</td>
      <td>Evento</td>
      <td>Cidade</td>
    </tr>
    <tr>
      <td>03/12</td>
      <td>Local</td>
      <td>Cidade</td>
    </tr>
    <tr>
      <td>07/12</td>
      <td>Local</td>
      <td>Cidade</td>
    </tr>
    <tr>
      <td>08/12</td>
      <td>Local</td>
      <td>Cidade</td>
    </tr>
    <tr>
      <td>12/12</td>
      <td>Local</td>
      <td>Cidade</td>
    </tr>
    <tr>
      <td>15/12</td>
      <td>Local</td>
      <td>Cidade</td>
    </tr>
  </table>
</aside>
<aside>
  <a href="../viagem/brunavieira.php" title="Depois dos Quinze tem muito mais" target="_blank"><img class="img-responsive center-block" src="../imagens/adv-bruna.jpg" alt="Depois dos Quinze tem muito mais" /></a>
</aside>
<aside>
  <a href="../viagem/camilacoutinho.php" title="Uma garota nada estúpida - Camila Coutinho" target="_blank"><img src="../imagens/adv-camicoutinho.jpg" alt="Canal de Viagens Camila Coutinho" class="img-responsive margin-gd" /></a>
</aside>
<section>
  <h2 class="titles margin-gd margin-mbl2"><span>Como as Celebs fazem!</span></h2>
  <ul class="list-unstyled">
    <li>
      <a class="link-c" href="https://www.youtube.com/watch?v=OSWtJLODkE4" target="_blank">Maquiagem Sandy</a>
    </li>
    <hr>
    <li>
      <a class="link-c" href="https://www.youtube.com/watch?v=L4R9Im5Yacs" target="_blank">Maquiagem Kylie Jenner</a>
    </li>
    <hr>
    <li>
      <a class="link-c" href="https://www.youtube.com/watch?v=Kef4oTVY2nM" target="_blank">Maquiagem Cara Delevingne</a>
    </li>
    <hr>
  </ul>
</section>
</div> <!-- fecha a col -->
</div> <!-- fecha row -->
  </div> <!-- fecha container -->
  <?php
  include'../../partes/lifestyle-footer.php';
  ?>
</body>
</html>
