<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Bia Andrade | Make up | Lifestyle</title>
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
        <img class="img-responsive visible-xs" src="../imagens/bia-ytbrs.jpg" alt="Youtuber Bia Andrade" />
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h1>Bia Andrade</h1>
        <!-- nada -->
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="http://bocarosablog.com/" title="Blog Boca Rosa" target=”_blank”><img class="img-responsive pull-right" src="../imagens/logo-bia.png" alt="Blog Boca Rosa" /></a>
        <ul class="list-unstyled list-inline">
          <li><a href="https://www.youtube.com/user/Biancaa8159" title="Canal no Youtube"  target=”_blank”><img class="icon-xs" src="../imagens/ytb.png" alt="Canal no Youtube" /></a></li>
          <li><a href="https://www.facebook.com/bocarosablog/" title="Página no Facebook" target=”_blank”><img class="icon-xs" src="../imagens/fb.png" alt="Página no Facebook" /></a></li>
          <li><a href="https://twitter.com/BocaRosaBlog" title="Twitter" target=”_blank”><img class="icon-xs" src="../imagens/twt.png" alt="Twitter da Bia" /></a></li>
          <li><a href="https://www.instagram.com/bocarosablog/" title="Instagram" target=”_blank”><img class="icon-xs" src="../imagens/insta.png" alt="Instagram da Bia" /></a></li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <img class="img-responsive hidden-xs" src="../imagens/bia-ytbrs.jpg" alt="Youtuber Bia Andrade" />
      </div> <!-- fecha col-->
    </article>
  </div> <!-- row -->
  <div class="row">
    <section id="carousel">
      <h2 class="titles margin-gd margin-mbl2"><span>Destaques</span></h2>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/p3LvYoh9-2I"></iframe>
      </div>
      <h3>Maquiagem para arrasar na selfie!</h3>
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
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fHt4MIPay4c"></iframe>
                </div>
              </div> <!-- final div col video -->
              <div class="col-md-8 col-sm-8">
                <h4>Namorado narrando vídeo de maquiagem</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </li>
            <li>
              <div class="col-md-4 col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/GoLQ2CsFtUg"></iframe>
                </div>
              </div> <!-- final div col video -->
              <div class="col-md-8 col-sm-8">
                <h4>Como fazer um delineado de gatinho perfeito!</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div> <!-- final div col texto -->
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
                  <a class="recentes-pdg" href="https://www.youtube.com/watch?v=Y1hA7fziCzg" title="Preparação de pele igual a das gringas!" target="_blank"><img src="../imagens/bia-gringa.jpg" alt="Vídeos Recentes" class="img-responsive pull-left" /></a>
                  <p class="text-justified">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </li>
                <li class="margin-bx line">
                  <a class="recentes-pdg" href="https://www.youtube.com/watch?v=TSp9iwrY0p0" title="Cabelão em 10 minutos" target="_blank"><img src="../imagens/bia-mega.jpg" alt="Vídeos Recentes" class="img-responsive pull-left"/></a>
                  <p class="text-justified">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </li>
              </ul>
            </div> <!-- final col menor - metade-->
            <div class="col-md-6 col-sm-6 col-xs-6">
              <ul class="list-unstyled">
                <li class="margin-rct line">
                  <a href="https://www.youtube.com/watch?v=ZQL39WHgHuc" title="Maquiagem versátil para o Halloween" target="_blank"><img src="../imagens/bia-halloween.jpg" alt="Vídeos Recentes" class="img-responsive pull-left"/></a>
                  <p class="text-justified">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </li>
                <li class="margin-rct line">
                  <a class="recentes-pdg" href="https://www.youtube.com/watch?v=FWG1Gvmvq_I" title="Faxinando o cantinho do BR" target="_blank"><img src="../imagens/bia-cantinho.jpg" alt="Vídeos Recentes" class="img-responsive pull-left" /></a>
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
              <h3>Quer cílios gigantes? Vem comigo!</h3>
              <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/Nccj-qXpAMs"></iframe>
              </div>
              <hr class="visible-xs">
            </li>
            <li>
              <h3>Tag: namorado maquiando </h3>
              <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/XawmEjalITY"></iframe>
              </div>
              <hr class="visible-xs">
            </li>
            <li>
              <h3>Nossa história de amor</h3>
              <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/Iv9pOF4aNoE"></iframe>
              </div>
              <hr class="visible-xs">
            </li>
            <li id="top-dois">
              <h3>Prepare sua pele com as técnicas da Kim Kardashian</h3>
              <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/xt2rFBpd_lk"></iframe>
              </div>
              <hr class="visible-xs">
            </li>
            <li>
              <h3>Minha rotina da manhã</h3>
              <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                <iframe class="embed-responsive-item"  width="300" height="220" src="https://www.youtube.com/embed/PJToweU2V7E"></iframe>
              </div>
              <hr class="visible-xs">
            </li>
          </ol>
        </section>
      </div> <!-- final col -->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <section>
          <h2 class="titles margin-gd margin-mbl2"><span>Parcerias</span></h2>
          <ul class="list-unstyled">
            <li>
              <a href="https://www.youtube.com/watch?v=iwLNlfvTsV8" title="Sendo maquiada pela diva Mariana Saad" target="_blank" ><img class="img-responsive" src="../imagens/bia-saad.jpg" alt="Sendo maquiada pela diva Mariana Saad" /></a>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </li>
            <li>
              <a href="https://www.youtube.com/watch?v=S_FYaiSEkCs" title="Novo curso de maquiagem online para pele negra com Camila Nunes" target="_blank" ><img class="img-responsive" src="../imagens/bia-nunes.jpg" alt="Novo curso de maquiagem online para pele negra com Camila Nunes" /></a>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p><hr>
          </li>
        </ul>
      </section>
      <section>
        <a href="https://www.youtube.com/watch?v=aiS8MSOXgEY" target="_blank"><img src="../imagens/bia-preso.jpg" alt="Penteado com trança e rabo de cavalo lateral" class="img-responsive"/></a>
        <h3>Cabelos: Penteado com trança e rabo de cavalo lateral</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p><hr>
        <p><a href="https://www.youtube.com/watch?v=ISZHKcoGi_E" target="_blank">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </a></p><hr>
      </section>
    </div> <!-- fecha col -->
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
          <td>04/12</td>
          <td>Local</td>
          <td>Cidade</td>
        </tr>
        <tr>
          <td>05/12</td>
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
          <td>12/12</td>
          <td>Local</td>
          <td>Cidade</td>
        </tr>
      </table>
    </aside>
    <aside>
      <a href="../viagem/camilacoutinho.php" title="Uma garota nada estúpida - Camila Coutinho" target="_blank"><img src="../imagens/adv-camicoutinho.jpg" alt="Canal de Viagens Camila Coutinho" class="img-responsive center-block" /></a>
    </aside>
    <aside class="margin-gd">
      <a href="../../jogos/terror/pewdiepie.php" title="Let's play some games together! - Conheça Pew Die Pie" target="_blank"><img src="../imagens/adv-pewdiepie.jpg" alt="Let's play some games together!" class="img-responsive margin-gd" /></a>
    </aside>
    <section>
      <h2 class="titles margin-gd margin-mbl2"><span>Produtos Recebidos</span></h2>
      <ul class="list-unstyled">
        <li>
          <a class="link-c" href="https://www.youtube.com/watch?v=l7vmtxgRJOg" target="_blank">Os recebidos de setembro</a>
        </li>
        <hr>
        <li>
          <a class="link-c" href="https://www.youtube.com/watch?v=ijxGwnTaS7I" target="_blank">Pirando! Os recebidos da MAC</a>
        </li>
        <hr>
        <li>
          <a class="link-c" href="https://www.youtube.com/watch?v=6IS2U0x13d8" target="_blank">Os recebidos de Agosto</a>
        </li>
        <hr>
      </ul>
    </section>
</div> <!-- fecha row -->
</div> <!-- fecha row insta -->
</div> <!-- fecha container -->
<?php
include'../../partes/lifestyle-footer.php';
?>
</body>
</html>
