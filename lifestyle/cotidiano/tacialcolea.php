<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Taci Alcolea | Cotidiano | Lifestyle</title>
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
      'Cotidiano' => './',
      'Make up' => '../makeup',
      'Viagem' => '../viagem');

  $nav1.nav1('#D9007B', '', $linksnav1, '../imagens/icon.png', ['../../global/imagens/ut.png','../../']);

  $linksnav2 = array();
  $linksnav2['../imagens/logo-flavia.png'] = 'flaviacalina.php';
  $linksnav2['../imagens/logo-taci.png'] = 'tacialcolea.php';
  $linksnav2['../imagens/logo-vih.png'] = 'vihtube.php';


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
        <img class="img-responsive visible-xs" src="../imagens/taci-ytbrs.jpg" alt="Youtuber Taci Alcolea " />
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h1>Taciele Alcolea</h1>
        <!-- useless -->
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="http://www.tacielealcolea.com/" title="Blog Taciele Alcolea" target=”_blank”><img class="img-responsive pull-right" src="../imagens/logo-taci.png" alt="Blog Taciele Alcolea" /></a>
        <ul class="list-unstyled list-inline">
          <li><a href="https://www.youtube.com/user/barbiepahetaci" title="Canal no Youtube"  target=”_blank”><img class="icon-xs" src="../imagens/ytb.png" alt="Canal no Youtube" /></a></li>
          <li><a href="https://www.facebook.com/TaciAlcolea/" title="Página no Facebook" target=”_blank”><img class="icon-xs" src="../imagens/fb.png" alt="Página no Facebook" /></a></li>
          <li><a href="https://twitter.com/TacieleAlcolea" title="Twitter" target=”_blank”><img class="icon-xs" src="../imagens/twt.png" alt="Twitter da Taci" /></a></li>
          <li><a href="https://www.instagram.com/tacielealcolea/" title="Instagram" target=”_blank”><img class="icon-xs" src="../imagens/insta.png" alt="Instagram da Taci" /></a></li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <img class="img-responsive hidden-xs" src="../imagens/taci-ytbrs.jpg" alt="Youtuber Taci Alcolea " />
      </div> <!-- col-->
    </article>
  </div> <!-- row-->
  <div class="row">
    <section>
      <h2 class="titles margin-gd margin-mbl2"><span>Destaques</span></h2>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/dArnXptTAFU"></iframe>
      </div>
      <h3>Diário da Decoração: papeis de parede e quadros na cozinha </h3>
      <p>
       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
  </div><!-- 1a col -->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <ul class="list-unstyled">
      <div class="row">
        <li>
          <div class="col-md-4 col-sm-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YbjrB8OsSxM"></iframe>
            </div>
          </div>
          <div class="col-md-8 col-sm-8">
            <h4>Spa entre amigas: expectativa x realidade</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </li>
        <li>
          <div class="col-md-4 col-sm-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/ZoAul6ogz54"></iframe>
            </div>
          </div>
          <div class="col-md-8 col-sm-8">
            <h4>Rotina da noite e cortando a franja em casa</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </li>
        <li>
          <div class="col-md-4 col-sm-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/j4yLYEGKodM"></iframe>
            </div>
          </div> <!-- final div col video -->
        <div class="col-md-8 col-sm-8">
          <h4 id="truque">8 truques para um look perfeito!</h4>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </li>
    </div>
  </div>
</section>
</div>
<div class="row">
  <div class="col-md-12 col-sm-12 clearfix">
  <section> <!-- ULTIMA ATUALIZAÇÃO -->
    <h2 class="titles margin-gd margin-mbl"><span>Recentes</span></h2>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 com-xs-6">
        <ul class="list-unstyled">
          <li class="margin-rct line">
            <a class="recentes-pdg" href="https://www.youtube.com/watch?v=9Ba87lpaFkE" title="Truques de Make" target="_blank"><img class="img-responsive pull-left" src="../imagens/taci-truque.jpg" alt="Vídeos Recentes" /></a>
            <p class="text-justified">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.            </p>
          </li>
          <li class="margin-bx line">
            <a class="recentes-pdg" href="https://www.youtube.com/watch?v=yKAffdAmBco" title="Diário de Intercâmbio #4" target="_blank"><img class="img-responsive pull-left" src="../imagens/taci-diario.jpg" alt="Vídeos Recentes" /></a>
            <p class="text-justified">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.            </p>
          </li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 com-xs-6">
        <ul class="list-unstyled">
          <li class="margin-rct line">
            <a class="recentes-pdg" href="https://www.youtube.com/watch?v=npJ7EOzXZ5c" title="Tour pelo escritório" target="_blank"><img class="img-responsive pull-left" src="../imagens/taci-office.jpg" alt="Vídeos Recentes" /></a>
            <p class="text-justified">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.            </p>
          </li>
          <li class="margin-rct ">
            <a class="recentes-pdg" href="https://www.youtube.com/watch?v=ortwTZ5G3iQ" title="Desafio culinário: Taci na cozinha" target="_blank"><img class="img-responsive square2 pull-left" id="cozinha" src="../imagens/slider-taci.jpg" alt="Vídeos Recentes" /></a>
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
          <li>
            <h3>Tour pela casa nova</h3>
            <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/MiO01444jLA"></iframe>
          </div>
        <hr class="visible-xs">
      </li>
          <li>
            <h3>Tour pelo antigo quarto </h3>
            <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/ef_yJZhhzv8"></iframe>
          </div>
          <hr class="visible-xs">
          </li>
          <li>
            <h3>Casamento Taciele e Fernando</h3>
            <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/QK0uy8o-ENY"></iframe>
          </div>
          <hr class="visible-xs">
          </li>
          <li>
            <h3>Decore o seu quarto: dicas simples  e baratas</h3>
            <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/zxU02tZ2beo"></iframe>
          </div>
          <hr class="visible-xs">
          </li>
          <li>
            <h3>5 dicas que toda garota deve saber sobre unhas</h3>
            <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/Dxr1fw6_dJY"></iframe>
          </div>
          <hr class="visible-xs">
        </li>
        </ol>
      </section>
    </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
  <section>
  <h2 class="titles margin-gd  margin-mbl3"><span>Parcerias</span></h2>
  <ul class="list-unstyled">
    <li>
      <a href="https://www.youtube.com/watch?v=CiCs7wQyZMw" title="A compra do primeiro imóvel com Bruna e Niina" target="_blank" ><img class="img-responsive" src="../imagens/taci-imovel.jpg" alt="O primeiro imóvel - com Bruna e Niina" /></a>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </li>
    <li>
      <a href="https://www.youtube.com/watch?v=c_nenRglCsI" title="Vem se arrumar com a gente: Bia e Taci no Lollapalooza" target="_blank" ><img class="img-responsive" src="../imagens/taci-bia.jpg" alt="Vem se arrumar com a gente - Taci e Bia" /></a>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p><hr>
    </li>
  </ul>
</section>
<section>
  <a href="https://www.youtube.com/watch?v=PnYfNYdQd_U" target="_blank"><img src="../imagens/taci-corda.jpg" alt="Rotina saudável" class="img-responsive" /></a>
  <h3>Garota em forma</h3>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p><hr>
      <p><a href="https://www.youtube.com/watch?v=ubPbo4qfCVc" target="_blank">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </a></p><hr>
</section>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <aside>
    <h2 class="titles maegin-gd margin-mbl2"><span>Agenda</span></h2>
    <table class="table table-condensed">
      <tr>
        <td>Data</td>
        <td>Evento</td>
        <td>Cidade</td>
      </tr>
      <tr>
        <td>01/12</td>
        <td>Local</td>
        <td>Cidade</td>
      </tr>
      <tr>
        <td>02/12</td>
        <td>Local</td>
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
        <td>10/12</td>
        <td>Local</td>
        <td>Cidade</td>
      </tr>
    </table>
  </aside>
  <aside>
    <a href="../makeup/alicesalazar.php"><img class="img-responsive center-block" src="../imagens/alice-adv1.jpg" alt="Publicidade Alice Salazar"/></a>
  </aside>
  <aside>
    <a href="../../jogos/terror/pewdiepie.php" title="Let's play some games together! - Conheça Pew Die Pie" target="_blank"><img src="../imagens/adv-pewdiepie.jpg" alt="Let's play some games together!" class="img-responsive margin-gd" /></a>
  </aside>
  <section>
    <h2 class="titles margin-gd margin-mbl2"><span>Diário de Viagem</span></h2>
    <ul class="list-unstyled">
      <li>
        <a class="link-c" href="https://www.youtube.com/watch?v=lkaGTbL7YGM" target="_blank"> Show da Taylor Swift e passeio de helicóptero</a>
      </li>
      <hr>
      <li>
        <a class="link-c" href="https://www.youtube.com/watch?v=DJk3LsEKk4Y" target="_blank">Rotina da manhã em dia de evento em NY</a>
      </li>
      <hr>
      <li>
        <a class="link-c" href="https://www.youtube.com/watch?v=OZ7AH6TrI-8" target="_blank">Mini férias na praia</a>
      </li>
      <hr>
    </ul>
  </section>
</div>
</div>
</div> <!-- container -->
<?php
include'../../partes/lifestyle-footer.php';
?>
  </body>
  </html>
