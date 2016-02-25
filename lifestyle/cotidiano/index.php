<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cotidiano | Lifestyle | Utuber</title>
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
    <article class="top bottom">
        <h1>Cotidiano</h1>
        <p class="lead">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne.Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne.</p>
        <hr>
  </div>
  <div class="row">
    <div class="col-md-8 col-sm-8">
      <section>
        <h2>Decore o seu quarto: faça você mesmo</h2>
        <h3><a class="link" href="tacialcolea.php">Taciele Alcolea</a></h3>
        <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</p>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/_Ql4q8vzqCg"></iframe>
        </div>
      </section>
    </div> <!-- final div col para o video taci -->
    <div class="enquete2 col-md-4 col-sm-4">
      <aside>
        <a title="Visite a Página da Bruna" href="../viagem/brunavieira.php"><img alt="adv" src="../imagens/adv-bruna.jpg" class="img-responsive hidden-xs"/></a>
      </aside>
      <br><br>
      <aside class="titles margin-mbl2">
        <h3><span>Enquete</span></h3>
        <p>
          Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne.
        </p>
        <div class="radio vertical-align">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          1a Opção
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          2a Opção
        </label>
        <br>
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option3">
           3a Opção
        </label>
      </div>
      <div class="radio disabled">
</div>
<br>
        <button  type="button" class="botao btn btn-default">Votar</button>
      </aside>
    </div> <!-- final div enquete -->
  </div> <!-- final div row -->
  <div class="row">
    <section>
      <div class="assista col-md-6 col-sm-6">
          <h3>Assista também</h3>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gima4DlatKI"></iframe>
          </div>
          <h4>Tour pelo nosso espaço </h4>
          <h5><a class="link" href="flaviacalina.php">Flávia Calina</a></h5>
          <p>
            Lorem ipsum dolor sit amet, ne aeque legimus sit.
          </p>
      </div> <!-- final div video -->
      <div class="top col-md-6 col-sm-6">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe "embed-responsive-item" src="https://www.youtube.com/embed/z40kfTgQJOc"></iframe>
        </div>
        <h4>Manias </h4>
        <h5><a class="link" href="viihtube.php">Viih Tube</a></h5>
        <p>
          Lorem ipsum dolor sit amet, ne aeque legimus sit.
        </p>
    </div> <!-- final div video 2 -->
    </section>
</div> <!-- final div row -->
<hr>
 </article>
<div class="row">
  <section>
  <div class="col-md-6 col-sm-6">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/8Ey78OZEFsA"></iframe>
    </div>
  <hr>
  </div> <!-- final div col -->
  <div class="col-md-6 col-sm-6">
    <ul class="list-unstyled">
      <div class="row">
        <li>
          <div class="col-md-4 col-sm-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9Ba87lpaFkE"></iframe>
            </div>
          </div> <!-- final div col video -->
          <div class="col-md-8 col-sm-8">
            <h4>Truques de make</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. deserunt mollit anim id est laborum.
            </p>
          </div> <!-- final div col texto -->
        </li>
      </div> <!-- final div row -->
      <div class="row">
        <li id="first">
          <div class="col-md-4 col-sm-4">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/3kwIYyy27ys"></iframe>
        </div>
      </div> <!-- final div col video -->
      <div class="col-md-8 col-sm-8">
        <h4>Como engravidei</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div> <!-- final div col texto -->
    </li>
  </div> <!-- final div row -->
  <div class="row">
    <li>
      <div class="col-md-4 col-sm-4">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/n6P4i4_R9zs"></iframe>
        </div>
      </div> <!-- final div col video -->
      <div class="col-md-8 col-sm-8">
        <h4>Lavar louça todo dia, que alegria</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div> <!-- final div col texto -->
    </li>
  </div> <!-- final div row-->
  </ul>
  </div> <!-- final div col para a ul -->
  </section>
</div> <!-- final div row -->
<div class="row pdg-btm">
  <div class="col-md-6 col-sm-6">
    <section class="titles margin-mbl">
      <h2><span>Populares</span></h2>
      <ul class="list-inline list-unstyled">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <li><a href="tacialcolea.php#truque"><img class="img-responsive" src="../imagens/taci-truque.jpg" alt="Taci Alcolea"/></a></li>
          </div>
        <div class="col-md-6 col-sm-6">
          <li><a href="flaviacalina.php#mim"><img class="img-responsive" src="../imagens/flavia-mim.jpg" alt="Flávia Calina"/></a></li>
        </div>
        </div> <!-- final div row -->
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <li><a href="vihtube.php"><img class="img-responsive square2 square4" src="../imagens/vih-15.jpg" alt="Viih Tube"/></a></li>
          </div>
          <div class="col-md-6 col-sm-6">
            <li><a href="tacialcolea.php#cozinha"><img class="img-responsive square2 square4" src="../imagens/slider-taci.jpg" alt="Taci Alcolea"/></a></li>
          </div>
        </div> <!-- final div row -->
      </ul>
    </section>
  </div> <!-- final div col -->
  <div class="col-md-6 col-sm-6 col-xs-12">
    <aside class="pop-xs margin-vih">
      <a href="../cotidiano/vihtube.php" title="Fenômeno do Youtube - Viih Tube" target="_blank"><img class="img-responsive margin-mbl" src="../imagens/viih-adv.jpg" alt="Fenômeno do Youtube - Viih Tube" /></a>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </aside>
  </div>
</div> <!-- final div row -->
<section class="panel panel-default">
  <h2>Vídeos Recentes</h2>
  <div class="row">
    <ul class="list-unstyled">
      <li>
        <div class="col-md-3 col-sm-3">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/9Ba87lpaFkE"></iframe>
          </div>
          <h3>Truques de Make</h3>
          <p>
            lorem ipsum dolor sit amet
          </p>
        </div> <!-- final div col -->
      </li>
      <li>
        <div class="col-md-3 col-sm-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/VuDzbxqMRrY"></iframe>
          </div>
          <h3>Seguidores</h3>
          <p>
            lorem ipsum dolor sit amet
          </p>
        </div> <!-- final div col -->
      </li>
      <li>
        <div class="col-md-3 col-sm-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/SMjNCHnlif4"></iframe>
          </div> <!-- final div responsive video -->
          <h3>Se você tem medo, não assista isso</h3>
          <p>
            lorem ipsum dolor sit amet
          </p>
        </div> <!-- final div col -->
      </li>
      <li>
        <div class="col-md-3 col-sm-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/heU3FdG8S9c"></iframe>
          </div> <!-- final div responsive video -->
          <h3>Se você tem medo, não assista isso</h3>
          <p>
            lorem ipsum dolor sit amet
          </p>
        </div> <!-- final div col -->
      </li>
    </ul>
</div> <!-- final div row -->
</section>
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6">
    <section>
      <ul class="list-unstyled">
        <li class="margin-gd"><p><a href="tacialcolea.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</a></p></li>
        <hr>
        <li class="margin-gd"><p><a href="flaviacalina.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</a></p></li>
        <hr>
        <li class="margin-gd"><p><a href="vihtube.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</a></p></li>
     </ul>
    </section>
  </div> <!-- final div col-->
  <div class="col-lg-6 col-md-6 col-sm-6">
    <aside>
      <a href="../viagem/camilacoutinho.php" title="Uma Garota Estúpida e Très Chic - Camila Coutinho" target="_blank"><img class="img-responsive" src="../imagens/adv-camicoutinho.jpg" alt="Camila Coutinho em Garotas Estúpidas." /></a>
    </aside>
  </div>
</div> <!-- final div row -->
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<section>
  <h2 class="titles margin-mbl2"><span>As Youtubers</span></h2>
    <ul class="list-unstyled list-inline img-center">
  <div class="row">
    <div class=" col-xs-4">
      <li class="col-md-4"><a href="flaviacalina.php" title="Flávia Calina"><img class="img-mbl" src="../imagens/perfil-flavia.jpg" alt="Flávia Calina" /></a></li>
    </div>
    <div class=" col-xs-4">
      <li class="col-md-4"><a href="tacialcolea.php" title="Taci Alcolea"><img class="img-mbl" src="../imagens/taci-ytbrs.jpg" alt="Taci Alcolea" /></a></li>
    </div>
    <div class=" col-xs-4">
      <li class="col-md-4"><a href="vihtube.php" title="Viih Moraes"><img class="img-mbl" src="../imagens/perfil-viih.jpg" alt="Viih Moraes" /></a></li>
    </div>
    </ul>
  </div>
  </section>
</div> <!-- final div col -->
</div> <!-- final div row -->
</div> <!-- final da div container -->
<?php
include'../../partes/lifestyle-footer.php';
?>
</body>
</html>
