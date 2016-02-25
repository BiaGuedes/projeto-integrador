<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Luh Sicchierolli | Viagem | Lifestyle </title>
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
        <img src="../imagens/viagem-luh.jpg" alt="Youtuber Luh Sicchierolli" class="img-responsive visible-xs"/>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h1>Estilo Bifásico</h1>
          <h2>por  Lu Sicchierolli</h2>
          <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a href="http://estilobifasico.com/" title="Blog Estilo Bifásico por Lu Sicchierolli" target=”_blank”><img src="../imagens/logo-luh.png" alt="Blog Estilo Bifásico por Lu Sicchierolli" class="img-responsive pull-right" /></a>
          <ul class="list-inline list-unstyled">
            <li><a href="https://www.youtube.com/user/estilobifasico" title="Canal no Youtube"  target=”_blank”><img src="../imagens/ytb.png" alt="Canal no Youtube" class="icon-xs" /></a></li>
            <li><a href="https://www.facebook.com/estilobifasico" title="Página no Facebook" target=”_blank”><img src="../imagens/fb.png" alt="Página no Facebook" class="icon-xs" /></a></li>
            <li><a href="https://twitter.com/luh_fs" title="Twitter" target=”_blank”><img src="../imagens/twt.png" alt="Twitter do Luh" class="icon-xs" /></a></li>
            <li><a href="https://www.instagram.com/luhsicchierolli/" title="Instagram" target=”_blank”><img src="../imagens/insta.png" alt="Instagram do Luh" class="icon-xs" /></a></li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <img class="img-responsive hidden-xs" src="../imagens/viagem-luh.jpg" alt="Youtuber Luh Sicchierolli"/>
        </div> <!-- col-->
      </article>
    </div> <!-- row-->
    <div class="row">
      <section>
        <h2 class="titles margin-gd margin-mbl2"><span>Destaques</span></h2>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/y1_o5MVYcGo"></iframe>
          </div>
          <h3 id="cities">Apaixonado por Milão!</h3>
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div><!-- 1a col -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <ul class="list-unstyled">
            <div class="row">
              <li>
                <div class="col-md-4 col-sm-4">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/01AaePQGD44"></iframe>
                  </div>
                  </div>
                  <div class="col-md-8 col-sm-8">
                    <h4>Piercing no nariz em NY</h4>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </li>
                  <li>
                  <li>
                    <div class="col-md-4 col-sm-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/1qrBBFqSfLg"></iframe>
                      </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                      <h4>Melhores passeios em Aruba</h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-4 col-sm-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/JnaoAE_tpUc"></iframe>
                      </div>
                    </div> <!-- final div col video -->
                  <div class="col-md-8 col-sm-8">
                    <h4>Um dia em Coney Island</h4>
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
              <section>
                <h2 class="titles margin-gd margin-mbl"><span>Recentes</span></h2>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <ul class="list-unstyled">
                      <li class="margin-rct line2" id="shop">
                        <a class="recentes-pdg" href="https://www.youtube.com/watch?v=i2TynLQs-gI" title="Comprinhas EUROTRIP" target="_blank"><img src="../imagens/comprinhas-eurotrip.jpg" alt="Vídeos Recentes" class="img-responsive pull-left square square2"/></a>
                        <p class="text-justified">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </li>
                      <li class="margin-bx line2" id="fra">
                        <a class="recentes-pdg" href="https://www.youtube.com/watch?v=fTcB7FQUU2g" title="Apaixonado por Paris" target="_blank"><img src="../imagens/fra.jpg" alt="Vídeos Recentes" class="img-responsive pull-left square square2" /></a>
                        <p class="text-justified">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </li>
                    </ul>
                  </div> <!-- final col menor - metade-->
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <ul class="list-unstyled">
                      <li class="margin-rct line2">
                        <a class="recentes-pdg" href="https://www.youtube.com/watch?v=KFYDRo0kQQw" title="Roma, Vaticano e chegada em Paris" target="_blank"><img src="../imagens/ita.jpg" alt="Vídeos Recentes" class="img-responsive pull-left square square2" /></a>
                        <p class="text-justified">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </li>
                      <li class="margin-bx line2" id="cities_two">
                        <a id="ita" class="recentes-pdg" href="https://www.youtube.com/watch?v=1Ov5fRJXVTY" title="Gondoleiros em Veneza" target="_blank"><img src="../imagens/venice.jpg" alt="Vídeos Recentes" class="img-responsive pull-left square square2" /></a>
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
                    <h3>Cabelo masculino - crespo ao liso em 10 minutos</h3>
                    <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                      <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/rfl-r0n37r8"></iframe>
                    </div>
                    <hr class="visible-xs">
                </li>
                <li>
                  <h3>Comprando comidas da Liberdade - Japão e Coreia </h3>
                  <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                    <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/auuwe75J5NE"></iframe>
                  </div>
                  <hr class="visible-xs">
                </li>
                <li>
                  <h3>Chegada, falta de gasolina e primeiras compras</h3>
                  <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                    <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/5cM-x5sZ2fk"></iframe>
                  </div>
                  <hr class="visible-xs">
                </li>
                <li>
                  <h3>Indo para Miami - Champagne e balada em Miami Beach</h3>
                  <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                    <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/Rav_6urGQMQ"></iframe>
                  </div>
                  <hr class="visible-xs">
                </li>
                <li>
                  <h3>Disney Magic Kingdom</h3>
                  <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                    <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/IB57HDwPsB8"></iframe>
                </div>
                <hr class="visible-xs">
              </li>
            </ol>
          </section>
        </div> <!-- final col -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <section>
            <h2 class="titles margin-gd margin-mbl2" id="meet"><span>Parcerias</span></h2>
            <ul class="list-unstyled">
              <li>
                <a href="https://www.youtube.com/watch?v=feIxwHDE_zA" title="Acorda Nininha! - Luh e Nina em NY" target="_blank" ><img class="img-responsive" src="../imagens/viagem-acorda.jpg" alt="Acorda Nininha" /></a>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=CqyWlJ8rJC8" title="Trancados pra fora de casa em Madrid - Luh e Kah na Europa" target="_blank" ><img src="../imagens/trip1.jpg" alt="Trancados pra fora de casa em Madrid" class="img-responsive" /></a>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </li>
            </ul>
          </section>
          <hr>
          <section>
            <a href="https://www.youtube.com/watch?v=ppkY6fgDSfs" target="_blank"><img src="../imagens/slider-luh.jpg" alt="Compras em NY" class="img-responsive" /></a>
            <h3>Compras em Nova Iorque</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p><hr>
            <p><a href="https://www.youtube.com/watch?v=3KIHZHTdIjk" target="_blank">
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
          <a href="camilacoutinho.php" title="Uma garota nada estúpida - Camila Coutinho" target="_blank"><img src="../imagens/adv-camicoutinho.jpg" alt="Canal de Viagens Camila Coutinho" /></a>
        </aside>
        <aside>
          <a href="../../jogos/terror/pewdiepie.php" title="Let's play some games together! - Conheça Pew Die Pie" target="_blank"><img src="../imagens/adv-pewdiepie.jpg" alt="Let's play some games together!" class="img-responsive margin-mbl margin-gd" /></a>
        </aside>
        <section>
          <h2 class="titles margin-gd margin-mbl2"><span>Brasil</span></h2>
          <ul class="list-unstyled">
            <li>
              <a class="link-c" href="https://www.youtube.com/watch?v=xJiT3B9xm6c" target="_blank">Tobogã na balada? No Rio de Janeiro tem!</a>
            </li>
            <hr>
            <li>
              <a class="link-c" href="https://www.youtube.com/watch?v=wO0WSsOCk3g" target="_blank">Carnaval em Salvador</a>
            </li>
            <hr>
            <li>
              <a class="link-c" href="https://www.youtube.com/watch?v=81hkIXYBqvk" target="_blank">Conexão Amazônia</a>
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
