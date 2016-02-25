<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Flávia Calina | Cotidiano | Lifestyle</title>
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
        <img class="img-responsive visible-xs" src="../imagens/perfil-flavia.jpg" alt="Youtuber Flávia Calina" />
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h1>Flávia Calina</h1>
        <!-- nada -->
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="http://www.flaviacalina.com/" title="Site Flávia Calina" target=”_blank”><img class="img-responsive pull-right" src="../imagens/logo-flavia.png" alt="Site Flávia Calina" /></a>
        <ul class="list-inline list-unstyled">
          <li><a href="https://www.youtube.com/user/Fla1982" title="Canal no Youtube"  target=”_blank”><img src="../imagens/ytb.png" alt="Canal no Youtube" class="icon-xs"/></a></li>
          <li><a href="https://www.facebook.com/Flavia-Calina-169386649738053/" title="Página no Facebook" target=”_blank”><img src="../imagens/fb.png" alt="Página no Facebook" class="icon-xs" /></a></li>
          <li><a href="https://twitter.com/fla1982" title="Twitter" target=”_blank”><img src="../imagens/twt.png" alt="Twitter da Flávia" class="icon-xs" /></a></li>
          <li><a href="https://www.instagram.com/flavia_calina_/" title="Instagram" target=”_blank”><img src="../imagens/insta.png" alt="Instagram da Flávia" class="icon-xs" /></a></li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <img class="img-responsive hidden-xs" src="../imagens/perfil-flavia.jpg" alt="Youtuber Flávia Calina" />
      </div> <!-- col-->
    </article>
  </div> <!-- row-->
  <div class="row">
    <section>
      <h2 class="titles margin-gd margin-mbl2"><span>Destaques</span></h2>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/PJ7dYynao5c"></iframe>
      </div>
      <h3>Nas profundezas da piscina de bolinhas </h3>
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
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qC8OCFC-X10"></iframe>
            </div>
          </div>
          <div class="col-md-8 col-sm-8">
            <h4>Treinando a Separação</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </li>
        <li>
          <div class="col-md-4 col-sm-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/9EOAUzKcmbg"></iframe>
            </div>
          </div>
          <div class="col-md-8 col-sm-8">
            <h4>Comprinhas para a mãe e para a bebê</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </li>
        <li>
          <div class="col-md-4 col-sm-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/klVLcj67E9A"></iframe>
            </div>
          </div> <!-- final div col video -->
        <div class="col-md-8 col-sm-8">
          <h4 id="truque">Tour pelo quarto da baby Victoria</h4>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </div>
    </div>
    </li>

</section>
<div class="row">
  <div class="col-md-12 col-sm-12 clearfix">
    <section>
      <h2 class="titles margin-gd margin-mbl"><span>Recentes</span></h2>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
          <ul class="list-unstyled">
            <li class="margin-rct line">
              <a class="recentes-pdg" href="https://www.youtube.com/watch?v=V6_vJEGbDno" title="Um pouco sobre minha infância" target="_blank"><img class="img-responsive pull-left" id="mim" src="../imagens/flavia-mim.jpg" alt="Vídeos Recentes" /></a>
              <p class="text-justified">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </li>
            <li class="margin-bx line">
              <a class="recentes-pdg" href="https://www.youtube.com/watch?v=DoYnr7AVI5w" title="Vlog duplo" target="_blank"><img class="img-responsive pull-left" src="../imagens/flavia-duplo.jpg" alt="Vídeos Recentes" /></a>
              <p class="text-justified">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </li>
          </ul>
        </div> <!-- final col menor - metade-->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <ul class="list-unstyled">
            <li class="margin-rct line">
              <a class="recentes-pdg" href="https://www.youtube.com/watch?v=gima4DlatKI" title="Tour pelo nosso espaço" target="_blank"><img class="img-responsive pull-left" src="../imagens/flavia-tour.jpg" alt="Vídeos Recentes" /></a>
              <p class="text-justified">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </li>
            <li class="margin-rct line">
              <a class="recentes-pdg" href="https://www.youtube.com/watch?v=3pZUnZwtR8E" title="Feliz aniversário Victoria" target="_blank"><img class="img-responsive pull-left" src="../imagens/flavia-niver.jpg" alt="Vídeos Recentes" /></a>
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
  <div class="col-md-4 col-sm-4 col-xs-12">
    <section>
      <h2 class="titles margin-gd margin-mbl"><span> TOP 5</span></h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit
      </p>
      <ol>
        <li>
          <h3>Meu parto normal: nascimento da baby V</h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
          <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/7jydpn0j2AE"></iframe>
        </div>
        <hr class="visible-xs">
      </li>
        <li>
          <h3>Massinha diferente </h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
          <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/8JBziaNauuA"></iframe>
        </div>
        <hr class="visible-xs">
      </li>
        <li>
          <h3>Ela disse BAA-TOM!</h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
          <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/5WX0xTrLkQY"></iframe>
        </div>
        <hr class="visible-xs">
      </li>
        <li>
          <h3>Primeiro banho de chuva</h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
          <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/2ELsDDlzXY4"></iframe>
        </div>
        <hr class="visible-xs">
      </li>
        <li>
          <h3>Aniversário de 1 ano da baby V</h3>
          <div class="embed-responsive embed-responsive-16by9 hidden-xs">
          <iframe class="embed-responsive-item" width="300" height="220" src="https://www.youtube.com/embed/agLLziRbgp4"></iframe>
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
          <a href="https://www.youtube.com/watch?v=KEHs7xJlIzg" title="Mulheres empreendedoras com Camila Coutinho" target="_blank" ><img class="img-responsive"  src="../imagens/flavia-cami.jpg" alt="Conversa sobre mulheres empreendedoras com Camila Coutinho" /></a>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </li>
        <li>
          <a href="https://www.youtube.com/watch?v=ZgszTmmdpVQ" title="Perguntas sem noção com Karol Pinheiro" target="_blank" ><img class="img-responsive" src="../imagens/flavia-karol.jpg" alt="Perguntas sem noção com Karol Pinheiro" /></a>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p><hr>
        </li>
      </ul>
    </section>
    <section>
      <a href="https://www.youtube.com/watch?v=Hgu6wEt2PDY" target="_blank"><img class="img-responsive" src="../imagens/flavia-pink.jpg" alt="Panqueca cor-de-rosa" /></a>
      <h3>Panqueca pink!</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <hr></p>
      <a href="https://www.youtube.com/watch?v=Bs6HFpxdvms" target="_blank">
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </a></p><hr>
      </a>
    </section>
  </div> <!-- final col 2 -->
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
          <td>09/12</td>
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
      <a href="../makeup/alicesalazar.php" title="Alice te ensina" target="_blank"><img src="../imagens/alice-adv1.jpg" alt="Alice Salazar te ensina"  class="img-responsive center-block" /></a>
    </aside>
    <aside>
      <a href="../viagem/camilacoutinho.php" title="Uma Garota Estúpida e Très Chic - Camila Coutinho" target="_blank"><img class="img-responsive margin-gd" src="../imagens/adv-camicoutinho.jpg" alt="Camila Coutinho em Garotas Estúpidas." /></a>
    </aside>
    <section>
      <h2 class="titles margin-gd margin-mbl2"><span>Comprinhas</span></h2>
      <ul class="list-unstyled">
        <li>
          <a class="link-c" href="https://www.youtube.com/watch?v=W9V-zFqp9lg" target="_blank">Ajudante de supermercado</a>
        </li>
        <hr>
        <li>
          <a class="link-c" href="https://www.youtube.com/watch?v=y68tsmXpOHg" target="_blank">Comprinhas para aniversário</a>
        </li>
        <hr>
        <li>
          <a class="link-c" href="https://www.youtube.com/watch?v=RcjVzsUnaAI" target="_blank">Comprinhas no mini-mercado</a>
        </li>
        <hr>
      </ul>
    </section>
  </div> <!-- final col 2 -->
</div> <!-- final row -->
</div> <!-- final container -->
<?php
include'../../partes/lifestyle-footer.php';
?>
</body>
</html>
