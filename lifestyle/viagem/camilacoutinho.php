<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Camila Coutinho | Viagem | Lifestyle </title>
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
        <img class="img-responsive visible-xs" src="../imagens/viagem-camis.jpg" alt="Youtuber Camila Coutinho" />
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h1>Garotas Estúpidas</h1>
        <h2>por Camila Coutinho</h2>
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="http://www.garotasestupidas.com/" title="Blog Camila Coutinho" target=”_blank”><img class="img-responsive pull-right" src="../imagens/logo-camicoutinho.png" alt="Blog Camila Coutinho" /></a>
        <ul class="list-inline list-unstyled">
          <li><a href="https://www.youtube.com/garotasestupidas" title="Canal no Youtube"  target=”_blank”><img class="icon-xs" src="../imagens/ytb.png" alt="Canal no Youtube" /></a></li>
          <li><a href="https://www.facebook.com/garotasestupidas/" title="Página no Facebook" target=”_blank”><img class="icon-xs" src="../imagens/fb.png" alt="Página no Facebook" /></a></li>
          <li><a href="https://twitter.com/gestupidas/" title="Twitter" target=”_blank”><img class="icon-xs"class="icon-xs" src="../imagens/twt.png" alt="Twitter da Camila" /></a></li>
          <li><a href="https://www.instagram.com/camilacoutinho/" title="Instagram" target=”_blank”><img class="icon-xs" src="../imagens/insta.png" alt="Instagram da Camila" /></a></li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <img class="img-responsive hidden-xs" src="../imagens/viagem-camis.jpg" alt="Youtuber Camila Coutinho" />
      </div> <!-- col-->
    </article>
  </div> <!-- row-->
  <div class="row">
    <section>
      <h2 class="titles margin-gd margin-mbl2"><span>Destaques</span></h2>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/3BWrpqmp1G0"></iframe>
        </div>
        <h3>Youtube apresenta Garotas Estúpidas</h3>
        <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div><!-- 1a col -->
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="list-unstyled">
          <div class="row">
            <li id="shop-two">
              <div class="col-md-4 col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/gv2BjH3KqAE"></iframe>
                </div>
              </div>
              <div class="col-md-8 col-sm-8">
                <h4>Vlog Londres: show da Taylor Swift, Expo McQueen e mais</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </li>
              <li>
              <li>
                <div class="col-md-4 col-sm-4">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/fW_yZN4OfTU"></iframe>
                  </div>
                </div>
                <div class="col-md-8 col-sm-8">
                  <h4>Vlog Bahamas e casamento da amiga </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                  </li>
                  <li id="rus">
                    <div class="col-md-4 col-sm-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/oYroJmveLIY"></iframe>
                      </div>
                    </div> <!-- final div col video -->
                  <div class="col-md-8 col-sm-8">
                    <h4>Vlog Rússia: gravação, balada e muito frio</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                      <li class="margin-rct line2">
                        <a class="recentes-pdg" href="https://www.youtube.com/watch?v=ESW1E8ZPbOo" title="De carona com Gisele Bundchen" target="_blank"><img  src="../imagens/cami-gisa.jpg" alt="Vídeos Recentes" class="img-responsive pull-left square2"/></a>
                        <p class="text-justified">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </li>
                      <li class="margin-bx line2">
                        <a class="recentes-pdg" href="https://www.youtube.com/watch?v=kDm1xehb30w" title="Tour pelo quarto de hotel, cabelo novo e mais!" target="_blank"><img src="../imagens/cami-gd.jpg" alt="Vídeos Recentes" class="img-responsive pull-left square2"/></a>
                        <p class="text-justified">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </li>
                    </ul>
                  </div> <!-- final col menor - metade-->
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <ul class="list-unstyled">
                      <li class="margin-rct line2">
                        <a class="recentes-pdg" href="https://www.youtube.com/watch?v=Bogr68dRpfs" title="O que levo na minha mala de bordo" target="_blank"><img  src="../imagens/comprinhas-russia.jpg" alt="Vídeos Recentes" class="img-responsive pull-left square2" /></a>
                        <p class="text-justified">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                        </p>
                      </li>
                      <li class="margin-bx line2">
                        <a class="recentes-pdg" href="https://www.youtube.com/watch?v=YyZkHLfKJj0" title="Vlog Londres: inauguração Lush, encontro com Vic e mais" target="_blank"><img  src="../imagens/ing.jpg" alt="Vídeos Recentes" class="img-responsive pull-left square2" /></a>
                        <p class="text-justified">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                        </p>
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
                    <h3>De carona com Bruna Marquezine</h3>
                    <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                      <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/WVZU1dJPQhI"></iframe>
                    </div>
                    <hr class="visible-xs">
                </li>
                <li>
                  <h3>Tour no closet de Camila Coutinho </h3>
                  <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                    <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/Njqcm2e-bjs"></iframe>
                  </div>
                  <hr class="visible-xs">
                </li>
                <li>
                  <h3>De carona com Anitta</h3>
                  <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                    <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/_fo5-2BjUpY"></iframe>
                  </div>
                  <hr class="visible-xs">
                </li>
                <li>
                  <h3>Eu nunca</h3>
                  <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                    <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/5ducbApvfYI"></iframe>
                  </div>
                  <hr class="visible-xs">
                </li>
                <li>
                  <h3>De carona com Hugo Gloss</h3>
                  <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                  <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/bzPja6kIlC0"></iframe>
                </div>
                <hr class="visible-xs">
              </li>
            </ol>
          </section>
        </div> <!-- final col -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <section>
            <h2 class="titles margin-gd margin-mbl2"><span>Semana de moda</span></h2>
            <ul class="list-unstyled">
              <li>
                <a href="https://www.youtube.com/watch?v=c7rd5ijYUw4" title="Melhores momentos na semana de moda de Milão" target="_blank" ><img src="../imagens/milan.jpg" alt="Melhores momentos na semana de moda de Milão" class="img-responsive" /></a>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=pX0K6d6yVfM" title="Paris: desfiles Chanel, Valentino, Citypharma, Eurocentres e mais" target="_blank" ><img src="../imagens/cami-gd.jpg" alt="Paris: desfiles Chanel, Valentino, Citypharma, Eurocentres e mais" class="img-responsive"/></a>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </li>
            </ul>
          </section>
          <hr>
          <section id="shop">
            <a href="https://www.youtube.com/watch?v=t1riOKbI840" target="_blank"><img src="../imagens/comprinhas-russia.jpg" alt="Comprinhas da Rússia" class="img-responsive" /></a>
            <h3>Comprinhas da Rússia</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p><hr>
              <p><a href="https://www.youtube.com/watch?v=Y0S0djAAQ6E" target="_blank">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
            <a href="../../jogos/terror/pewdiepie.php" title="Let's play some games together! - Conheça Pew Die Pie" target="_blank"><img src="../imagens/adv-pewdiepie.jpg" alt="Let's play some games together!" class="img-responsive" /></a>
          </aside>
          <aside>
            <a href="brunavieira.php" title="Muitas histórias pra te mostrar! - Bruna Vieira" target="_blank"><img src="../imagens/adv-bruna.jpg" alt="Bruna Vieira e Depois dos Quinze" class="img-responsive margin-mbl margin-gd"/></a>
          </aside>
          <section id="meet">
            <h2 class="titles margin-gd margin-mbl2"><span>#CamieVicTakeDubai</span></h2>
            <ul class="list-unstyled">
              <li>
                <a class="link-c" href="https://www.youtube.com/watch?v=YzCxawi9_yg" target="_blank">Aeroporto, Dubai Mall, Burj Khalifa e Al Manara</a>
              </li>
              <hr>
              <li>
                <a class="link-c" href="https://www.youtube.com/watch?v=_SFNRF2mjxo" target="_blank">Paraquedas, mercados, jantar no Zuma e mais</a>
              </li>
              <hr>
              <li>
                <a class="link-c" href="https://www.youtube.com/watch?v=igAeCLQl6Pg" target="_blank">Deserto, golfinhos e cultura árabe</a>
              </li>
              <hr>
            </ul>
          </section>
        </div> <!-- final col 2 -->
      </div> <!-- final row -->
  </div>
</div>
<?php
include'../../partes/lifestyle-footer.php';
?>
  </body>
  </html>
