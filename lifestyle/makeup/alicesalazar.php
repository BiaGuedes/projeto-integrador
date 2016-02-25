<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Alice Salazar | Make up | Lifestyle </title>
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
      <img class="img-responsive visible-xs" src="../imagens/alice-ytbrs.jpg" alt="Youtuber Alice Salazar" />
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h1>Alice Salazar</h1>
        <!-- nada -->
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="http://alicesalazar.com.br/" title="Site Alice Salazar" target=”_blank”><img class="img-responsive pull-right" src="../imagens/logo-alice.png" alt="Site Alice Salazar" /></a>
        <ul class="list-unstyled list-inline">
          <li><a href="https://www.youtube.com/user/alicecsalazar/" title="Canal no Youtube"  target=”_blank”><img class="icon-xs" src="../imagens/ytb.png" alt="Canal no Youtube" /></a></li>
          <li><a href="https://www.facebook.com/AliceSalazarOficial" title="Página no Facebook" target=”_blank”><img class="icon-xs" src="../imagens/fb.png" alt="Página no Facebook" /></a></li>
          <li><a href="https://twitter.com/alicesalazar" title="Twitter" target=”_blank”><img class="icon-xs" src="../imagens/twt.png" alt="Twitter da Alice" /></a></li>
          <li><a href="https://www.instagram.com/alicesalazaroficial/" title="Instagram" target=”_blank”><img class="icon-xs" src="../imagens/insta.png" alt="Instagram da Alice" /></a></li>
        </ul>
    </div> <!-- fecha col -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <img class="img-responsive hidden-xs" src="../imagens/alice-ytbrs.jpg" alt="Youtuber Alice Salazar" />
    </div> <!-- fecha col -->
    </article>
  </div> <!-- fecha row -->
  <div class="row">
    <section>
      <h2 class="titles margin-gd margin-mbl2"><span>Destaques</span></h2>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/jcShNWNSj5I"></iframe>
      </div>
      <h3>Como fazer a maquiagem em 3 minutos</h3>
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
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eLokGkm4gT8"></iframe>
                </div>
              </div> <!-- final div col video -->
              <div class="col-md-8 col-sm-8">
                <h4>Olho neutro e batom vinho</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. deserunt mollit anim id est laborum.
                </p>
            </li>
            <li>
              <div class="col-md-4 col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/gpo_JiEfjVI"></iframe>
                </div>
              </div> <!-- final div col video -->
              <div class="col-md-8 col-sm-8">
                <h4>Dica de olho preto esfumado</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. deserunt mollit anim id est laborum.
                </p>
              </div> <!-- final div col texto -->
            </li>
            <li>
              <div class="col-md-4 col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/6qcKe8LYsls"></iframe>
                </div>
              </div> <!-- final div col video -->
              <div class="col-md-8 col-sm-8">
                <h4>Maquiagem belezura pra fazer no trânsito!</h4>
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
        <div class="col-md-6 col-sm-6 col-xs-6">
          <ul class="list-unstyled">
            <li class="margin-rct line">
              <a class="recentes-pdg" href="https://www.youtube.com/watch?v=PPLd_2efH_Q" title="Maquiagem, batons e lançamentos" target="_blank"><img src="../imagens/alice-make.jpg" alt="Vídeos Recentes" class="img-responsive pull-left" /></a>
              <p class="text-justified">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            <li class="margin-bx line">
              <a id="last_one" href="https://www.youtube.com/watch?v=mGTRbB3TFoI" title="Vlog Fanfest 1: Dia dos Youtubers" target="_blank"><img src="../imagens/alice-fanfest.jpg" alt="Vídeos Recentes" class="img-responsive pull-left" /></a>
              <p class="text-justified">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </li>
          </ul>
        </div> <!-- final col menor - metade-->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <ul class="list-unstyled">
            <li class="margin-rct line">
              <a id="last_two" href="https://www.youtube.com/watch?v=olyGHxOA02A" title="Minha vida pessoal (Ep.4)" target="_blank"><img  src="../imagens/alice-vida.jpg" alt="Vídeos Recentes" class="img-responsive pull-left" /></a>
              <p class="text-justified">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </li>
            <li class="margin-rct line">
              <a id="last_three" href="https://www.youtube.com/watch?v=-v69bbIHeMU" title="Olhos marcantes e boca nude" target="_blank"><img src="../imagens/alice-payot.jpg" alt="Vídeos Recentes" class="img-responsive pull-left" /></a>
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
          <h3>Como você se maquiava antes e como se maquia agora</h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/DlNl1BBTICM"></iframe>
          </div>
          <hr class="visible-xs">
        </li>
        <li>
          <h3>Como fazer cachos soltos nos cabelos </h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/rnJ_SuitfWQ"></iframe>
          </div>
          <hr class="visible-xs">
        </li>
        <li>
          <h3>Duas amigas se arrumando para a balada</h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/gvbw5iz8TPg"></iframe>
          </div>
          <hr class="visible-xs">
        </li>
        <li>
          <h3>Maquiagem com sombra preta e batom vermelho</h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
          <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/AmwZWeFwfUw"></iframe>
        </div>
        <hr class="visible-xs">
        </li>
        <li>
          <h3>Olho preto para o dia a dia</h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/TS44F9QQC4Q"></iframe>
          </div>
          <hr class="visible-xs">
        </li>
      </ol>
    </section>
  </div> <!-- fecha a col top 5 -->
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <section>
      <h2 class="titles margin-gd margin-mbl2"><span>Exterior</span></h2>
      <ul class="list-unstyled">
        <li>
          <a href="https://www.youtube.com/watch?v=IjFKAsQ507M" title="Quais maquiagens comprar numa viagem ao exterior?" target="_blank" ><img class="img-responsive" src="../imagens/alice-exterior.jpg" alt="Quais maquiagens comprar numa viagem ao exterior?" /></a>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </li>
        <li>
          <a href="https://www.youtube.com/watch?v=c4DgcautoLY" title="Comprinhas de maquiagem em NY" target="_blank" ><img class="img-responsive" src="../imagens/alice-ny.jpg" alt="Comprinhas de maquiagem em NY" /></a>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p><hr>
        </li>
      </ul>
    </section>
    <section>
      <a href="https://www.youtube.com/watch?v=xgzxJGdkVgo" target="_blank"><img class="img-responsive" src="../imagens/alice-kids.jpg" alt="Minha vida - Infância" /></a>
      <h3>Minha vida - Infância (Episódio 1)</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p><hr>
      <p><a href="https://www.youtube.com/watch?v=G8nctyKk9rs" target="_blank">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </a></p><hr>
    </section>
  </div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
    <a href="camilacoutinho.php" title="Uma garota nada estúpida - Camila Coutinho" target="_blank"><img src="../imagens/adv-camicoutinho.jpg" alt="Canal de Viagens Camila Coutinho" class="img-responsive center-block" /></a>
  </aside>
  <aside class="margin-gd">
    <a href="../../jogos/terror/pewpiedie.php" title="Travado na mesma fase? - Canal de Jogos Pew Die Pie" target="_blank"><img src="../imagens/adv-pewdiepie.jpg" alt="Canal de Jogos Pew Die Pie" class="img-responsive margin-gd"/></a>
  </aside>
  <section>
    <h2 class="titles margin-gd margin-mbl2"><span>5 Mais</span></h2>
    <ul class="list-unstyled">
      <li>
        <a class="link-c" href="https://www.youtube.com/watch?v=XNIPPujUCaY" target="_blank">Conheça 5 soluções para os principais erros de make</a>
      </li>
      <hr>
      <li>
        <a class="link-c" href="https://www.youtube.com/watch?v=f9UZIpRS_KU" target="_blank">As 5 paletas preferidas</a>
      </li>
      <hr>
      <li>
        <a class="link-c" href="https://www.youtube.com/watch?v=8i8CHScXCy4" target="_blank">Os 5 erros ao passar corretivo</a>
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
