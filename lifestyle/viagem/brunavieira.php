<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Bruna Vieira | Viagem | Lifestyle </title>
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
      <article class="top">
        <img class="img-responsive visible-xs" src="../imagens/viagem-bruna.jpg" alt="Youtuber Bruna Vieira" />
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h1>Depois dos Quinze</h1>
        <h2>por Bruna Vieira</h2>
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="http://www.depoisdosquinze.com/" title="Blog Bruna Vieira" target=”_blank”><img class="img-responsive pull-right" src="../imagens/logo-bruna.png" alt="Blog Bruna Vieira" /></a>
        <ul class="list-inline list-unstyled">
          <li><a href="https://www.youtube.com/user/canaldepoisdosquinze" title="Canal no Youtube"  target=”_blank”><img class="icon-xs" src="../imagens/ytb.png" alt="Canal no Youtube" /></a></li>
          <li><a href="https://www.facebook.com/blogdepoisdosquinze/" title="Página no Facebook" target=”_blank”><img class="icon-xs" src="../imagens/fb.png" alt="Página no Facebook" /></a></li>
          <li><a href="https://twitter.com/brunavieira" title="Twitter" target=”_blank”><img class="icon-xs" src="../imagens/twt.png" alt="Twitter da Bruna" /></a></li>
          <li><a href="https://www.instagram.com/depoisdosquinze/" title="Instagram" target=”_blank”><img class="icon-xs" src="../imagens/insta.png" alt="Instagram da Bruna" /></a></li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <img class="img-responsive hidden-xs" src="../imagens/viagem-bruna.jpg" alt="Youtuber Bruna Vieira" />
      </div> <!-- col-->
    </article>
  </div> <!-- row-->
  <div class="row">
    <section>
      <h2 class="titles margin-gd margin-mbl2"><span>Destaques</span></h2>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/KOViFifJWUM"></iframe>
        </div>
        <h3>OMG! Fui parar em Los Angeles</h3>
        <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div><!-- 1a col -->
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="list-unstyled">
          <div class="row">
            <li>
              <div class="col-md-4 col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fVbzRk7GHMg"></iframe>
                </div>
              </div>
              <div class="col-md-8 col-sm-8">
                <h4>Pé na estrada</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </li>
              <li>
                <div class="col-md-4 col-sm-4">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/Kkd5BBaQE1U"></iframe>
                  </div>
                </div>
                <div class="col-md-8 col-sm-8">
                  <h4 id="meet">Explorando NY com as amigas</h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </div>
                  </li>
                  <li id="cities">
                    <div class="col-md-4 col-sm-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/8QKlBRzy0GE"></iframe>
                      </div>
                    </div> <!-- final div col video -->
                  <div class="col-md-8 col-sm-8">
                    <h4>Em busca da Zoella e parque de diversões no píer</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                </li>
              </div>
            </div>
          </section>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 clearfix">
              <section>
                <h2 class="titles margin-gd margin-mbl"><span>Recentes</span></h2>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <ul class="list-unstyled">
                      <li class="margin-rct line">
                        <a class="recentes-pdg" href="https://www.youtube.com/watch?v=uFcfyUEHhAU" title="A loja mais assustadora e Halloween" target="_blank"><img class="img-responsive pull-left" src="../imagens/bruna-susto.jpg" alt="Vídeos Recentes" /></a>
                        <p class="text-justified">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </li>
                      <li class="margin-bx line">
                        <a class="recentes-pdg" href="https://www.youtube.com/watch?v=fR58DoagIxI" title="Walmart x Target" target="_blank"><img class="img-responsive pull-left" src="../imagens/bruna-mkt.jpg" alt="Vídeos Recentes" /></a>
                        <p class="text-justified">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </li>
                    </ul>
                  </div> <!-- final col menor - metade-->
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <ul class="list-unstyled">
                      <li class="margin-rct line">
                        <a class="recentes-pdg" href="https://www.youtube.com/watch?v=IMCb6VMrNlU" title="Escritório do Twitter" target="_blank"><img class="img-responsive pull-left" src="../imagens/bruna-twt.jpg" alt="Vídeos Recentes" /></a>
                        <p class="text-justified">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </li>
                      <li class="margin-rct line">
                        <a class="recentes-pdg" href="https://www.youtube.com/watch?v=LGx4IZ-ChK4" title="Tour em Stanford" target="_blank"><img class="img-responsive pull-left" src="../imagens/bruna-stanford.jpg" alt="Vídeos Recentes" /></a>
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
                  <li id="bag">
                    <h3>Arrumando a mala para o intercâmbio</h3>
                      <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                        <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/Lut0-RqkJIg"></iframe>
                      </div>
                      <hr class="visible-xs">
                  </li>
                  <li id="shop">
                    <h3>Comprinhas no intercâmbio </h3>
                      <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                    <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/0-TJDQ1rfFw"></iframe>
                    </div>
                    <hr class="visible-xs">
                  </li>
                  <li id="bra">
                    <h3>O toboágua mais insano,  matando seu sirigueijo e Beach Park</h3>
                      <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                    <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/cQ7iLluNwVU"></iframe>
                    </div>
                    <hr class="visible-xs">
                  </li>
                  <li>
                    <h3>Viajando sozinha pela primeira vez</h3>
                      <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                    <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/SX_gV98BgyI"></iframe>
                    </div>
                    <hr class="visible-xs">
                  </li>
                  <li>
                    <h3>Comprinhas no intercâmbio e sorteio</h3>
                      <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                    <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/iP2QMnKBmjs"></iframe>
                    </div>
                    <hr class="visible-xs">
                  </li>
                </ol>
              </section>
            </div> <!-- final col -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <section>
                <h2 class="titles margin-gd margin-mbl2"><span>Dicas</span></h2>
                <ul class="list-unstyled">
                  <li>
                    <a href="https://www.youtube.com/watch?v=l8BLD4rljbQ" title="Dicas para quem quer morar fora do país" target="_blank" ><img class="img-responsive" src="../imagens/bruna-fora.jpg" alt="Dicas para quem quer morar fora do país" /></a>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/watch?v=oNz2Xy0pe3E" title="O que levar para uma viagem na praia" target="_blank" ><img class="img-responsive" src="../imagens/bruna-praia.jpg" alt="O que levar para uma viagem na praia" /></a>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p><hr>
                  </li>
                </ul>
              </section>
      <section id="arg">
        <a href="https://www.youtube.com/watch?v=0gUD6QCHGas" target="_blank"><img class="img-responsive" src="../imagens/arg.jpg" alt="Pontos turísticos de Buenos Aires" /></a>
        <h3>Pontos turísticos</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p><hr>
          <p><a href="https://www.youtube.com/watch?v=KmW-pLUDR34" target="_blank">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
            <td>09/12</td>
            <td>Local</td>
            <td>Cidade</td>
          </tr>
          <tr>
            <td>10/12</td>
            <td>Local</td>
            <td>Cidade</td>
          </tr>
          <tr>
            <td>12/12</td>
            <td>Local</td>
            <td>Cidade</td>
          </tr>
        </table>
      </aside>
      <aside>
        <a href="camilacoutinho.php" title="Uma Garota Estúpida e Très Chic - Camila Coutinho" target="_blank"><img class="img-responsive center-block" src="../imagens/adv-camicoutinho.jpg" alt="Camila Coutinho em Garotas Estúpidas." /></a>
      </aside>
    <aside class="margin-gd">
      <a href="../../jogos/terror/pewdiepie.php" title="Let's play some games together! - Conheça Pew Die Pie" target="_blank"><img src="../imagens/adv-pewdiepie.jpg" alt="Let's play some games together!" class="img-responsive margin-gd" /></a>
    </aside>
    <section>
      <h2 class="titles margin-gd margin-mbl2"><span>São Paulo</span></h2>
      <ul class="list-unstyled">
        <li>
          <a class="link-c" href="https://www.youtube.com/watch?v=emI_rdGoT7U" target="_blank">O que fazer na Paulista?</a>
        </li>
        <hr>
        <li>
          <a class="link-c" href="https://www.youtube.com/watch?v=Tc7uec7IBhs" target="_blank">Uma semana em São Paulo comigo</a>
        </li>
        <hr>
        <li>
          <a class="link-c" href="https://www.youtube.com/watch?v=WySyLNNQmmg" target="_blank">Galeria do Rock, Endossa e Condimento</a>
        </li>
        <hr>
      </ul>
    </section>
  </div> <!-- final col 2 -->
</div> <!-- final row -->
</div>
<?php
include'../../partes/lifestyle-footer.php';
?>
</body>
</html>
