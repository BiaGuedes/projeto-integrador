<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Viih Tube | Cotidiano | Lifestyle</title>
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
      <img class="img-responsive visible-xs" src="../imagens/perfil-viih.jpg" alt="Youtuber Viih Moraes" />
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h1>Viih Tube</h1>
        <h2>por Vih Moraes</h2>
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="http://viihtube.blogspot.com.br/" title="Blog Viih Tube" target=”_blank”><img class="img-responsive pull-right" src="../imagens/logo-vih.png" alt="Blog Viih Tube" /></a>
        <ul class="list-unstyled list-inline">
          <li><a href="https://www.youtube.com/user/viihtubeoficial/" title="Canal no Youtube"  target=”_blank”><img class="icon-xs" src="../imagens/ytb.png" alt="Canal no Youtube" /></a></li>
          <li><a href="https://www.facebook.com/ViihTube/?fref=ts" title="Página no Facebook" target=”_blank”><img class="icon-xs" src="../imagens/fb.png" alt="Página no Facebook" /></a></li>
          <li><a href="https://twitter.com/viihtube" title="Twitter" target=”_blank”><img class="icon-xs" src="../imagens/twt.png" alt="Twitter da Viih Tube" /></a></li>
          <li><a href="https://www.instagram.com/viih.tube/" title="Instagram" target=”_blank”><img class="icon-xs" src="../imagens/insta.png" alt="Instagram da Viih Tube" /></a></li>
        </ul>
      </div> <!-- fecha col -->
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <img class="img-responsive hidden-xs" src="../imagens/perfil-viih.jpg" alt="Youtuber Viih Moraes" />
      </div>
    </article>
  </div>
  <div class="row">
    <section>
      <h2 class="titles margin-gd margin-mbl2"><span>Destaques</span></h2>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/vnUyNifroyE"></iframe>
    </div>
    <h3>Semana de provas</h3>
      <p>
       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <ul class="list-unstyled">
        <div class="row">
          <li>
            <div class="col-md-4 col-sm-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/c1YUvqo6XK0"></iframe>
              </div>
            </div>
            <div class="col-md-8 col-sm-8">
              <h4>Primeiro beijo</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
          </li>
          <li>
            <div class="col-md-4 col-sm-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/e2K9fxWLifE"></iframe>
              </div>
            </div> <!-- final div col video -->
            <div class="col-md-8 col-sm-8">
              <h4>TAG: pai e filha</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </li>
          <li>
            <div class="col-md-4 col-sm-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" idth="560" height="315" src="https://www.youtube.com/embed/2AdlXexVXSA"></iframe>
              </div>
            </div> <!-- final div col video -->
            <div class="col-md-8 col-sm-8">
              <h4>10 tipos de modinha</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
              <a class="recentes-pdg" href="https://www.youtube.com/watch?v=VuDzbxqMRrY" title="Seguidores" target="_blank"><img class="img-responsive pull-left" id="vih-flwr" src="../imagens/viih-adv.jpg" alt="Vídeos Recentes" /></a>
              <p class="text-justified">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </li>
            <li class="margin-bx line">
              <a class="recentes-pdg" href="https://www.youtube.com/watch?v=nJ01rcDKVf0" title="O que muda quando se tem 15 anos" target="_blank"><img class="img-responsive pull-left" src="../imagens/vih-15.jpg" alt="Vídeos Recentes" /></a>
              <p class="text-justified">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </li>
          </ul>
        </div> <!-- final col menor - metade-->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <ul class="list-unstyled">
            <li class="margin-rct line">
              <a class="recentes-pdg" href="https://www.youtube.com/watch?v=SMjNCHnlif4" title="Se você tem medo, não assista" target="_blank"><img class="img-responsive pull-left" src="../imagens/vih-medo.jpg" alt="Vídeos Recentes" /></a>
              <p class="text-justified">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </li>
            <li class="margin-rct line">
              <a class="recentes-pdg" href="https://www.youtube.com/watch?v=r2dP3YR8-Rg" title="Vou morar nesse castelo da Disney" target="_blank"><img class="img-responsive pull-left" src="../imagens/vih-castel.jpg" alt="Vídeos Recentes" /></a>
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
          <h3>Fui trollar meu namorado e olha no que deu</h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/sK0A9I3q1w0"></iframe>
          </div>
          <hr class="visible-xs">
        </li>
        <li>
          <h3>Trollando o namorado </h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/dsqAYrks4_E"></iframe>
          </div>
          <hr class="visible-xs">
        </li>
        <li>
          <h3>TAG: namorados</h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/SUYk5Xfy2rI"></iframe>
          </div>
          <hr class="visible-xs">
        </li>
        <li>
          <h3>Viih Tube 15 anos</h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/7xyC8EF6f1g"></iframe>
          </div>
          <hr class="visible-xs">
        </li>
        <li>
          <h3>Leitura labial com o namorado</h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/Mlzqftn-CiE"></iframe>
          </div>
          <hr class="visible-xs">
        </li>
      </ol>
    </section>
  </div> <!-- final col -->
  <div class="col-md-4 col-sm-4 col-xs-12">
    <section>
      <h2 class="titles margin-gd margin-mbl2"><span>Tags</span></h2>
      <ul class="list-unstyled">
        <li>
          <a href="https://www.youtube.com/watch?v=o5TSJXIwxjw" title="Draw my life - saiba mais sobre Viih" target="_blank" ><img src="../imagens/vih-draw.jpg" alt="Draw my life" class="img-responsive" /></a>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </li>
        <li>
          <a href="https://www.youtube.com/watch?v=He2SK3JsQs4" title="Desenhando Youtubers" target="_blank" ><img src="../imagens/vih-draw-ytbrs.jpg" alt="Desenhando Youtubers" class="img-responsive"/></a>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p><hr>
      </li>
    </ul>
  </section>
    <section>
      <a href="https://www.youtube.com/watch?v=bkPZs3Haufc" target="_blank"><img src="../imagens/vih-frio.jpg" alt="Eu odeio ir na academia no inverno" /></a>
      <h3>Eu odeio ir na academia no inverno</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p><hr>
    </a>
        <p><a href="https://www.youtube.com/watch?v=W12htk5kXF8" target="_blank">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
          <td>05/12</td>
          <td>Local</td>
          <td>Cidade</td>
        </tr>
        <tr>
          <td>06/12</td>
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
        <tr>
          <td>15/12</td>
          <td>Local</td>
          <td>Cidade</td>
        </tr>
      </table>
    </aside>
    <aside>
      <a href="../viagem/brunavieira.php" title="Muitas histórias pra te mostrar! - Bruna Vieira" target="_blank"><img src="../imagens/adv-bruna.jpg" alt="Bruna Vieira e Depois dos Quinze" class="img-responsive center-block" /></a>
    </aside>
    <aside>
      <a href="../makeup/alicesalazar.php"><img class="img-responsive margin-gd" src="../imagens/alice-adv1.jpg" alt="Publicidade Alice Salazar"/></a>
    </aside>
    <section>
      <h2 class="titles margin-gd margin-mbl2"><span>Na mídia</span></h2>
      <ul class="list-unstyled">
        <li>
          <a class="link-c" href="https://www.youtube.com/watch?v=-yojkOu0wwU" target="_blank">Eu fui para a Globo?</a>
        </li>
        <hr>
        <li>
          <a class="link-c" href="https://www.youtube.com/watch?v=e-bZmWbbAwU" target="_blank">Rádio Tang</a>
        </li>
        <hr>
        <li>
          <a class="link-c" href="https://www.youtube.com/watch?v=WySyLNNQmmg" target="_blank">SBT, rádio e entrevista</a>
        </li>
        <hr>
      </ul>
    </section>
  </div>
</div>
</div>
<?php
include'../../partes/lifestyle-footer.php';
?>
  </body>
  </html>
