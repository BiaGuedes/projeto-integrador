<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Make up | Lifestyle | Utuber</title>
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

  $nav1.nav1('#D9007B', '../imagens/lifestyle-icon.png', $linksnav1, '../imagens/icon.png', ['../../global/imagens/ut.png','../../']);

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
      <article class="top bottom">
        <h1>Make up</h1>
        <p class="lead">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne.Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne.</p>
        <hr>
  </div> <!-- final div row -->
    <div class="row">
      <section>
        <div class="col-md-4 col-sm-6 col-xs-12">
        <h2 class="titles"><span>Tutorial</span></h2>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="300" height="300" src="https://www.youtube.com/embed/KQD0vp7Oh_M"></iframe>
          </div>
        </div> <!-- final div col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h1>Feminina e poderosa!</h1>
          <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</p>
          <a class="link-b" href="camilacoelho.php">Assista mais</a>
          <div class="row">
            <hr>
            <section>
                <ul class="list-inline list-unstyled text-center">
                    <li><a href="https://www.youtube.com/user/MakeUpByCamila/" title="Youtube" target="_blank"><img class="img-responsive icon-xs" src="../imagens/ytb.png" alt="Youtube"/></a></li>
                    <li><a href="https://www.facebook.com/Camila-Figueiredo-Coelho-161758410553702/" title="Facebook" target="_blank"><img class="img-responsive icon-xs" src="../imagens/fb.png" alt="Facebook" /></a></li>
                    <li><a href="https://www.instagram.com/camilacoelho/" title="Instagram" target="_blank"><img  src="../imagens/insta.png" alt="Instagram" class="img-responsive icon-xs"/></a></li>
                </ul>
            </section>
            <hr class="visible-xs">
          </div> <!-- final div col -->
        </div>  <!-- final div row -->
        <div class="col-md-4 col-sm-4">
          <aside>
            <a href="camilacoutinho.php" title="Uma Garota Estúpida e Très Chic - Camila Coutinho" target="_blank"><img src="../imagens/adv-camicoutinho.jpg" alt="Camila Coutinho em Garotas Estúpidas." class="img-responsive"/></a>
          </aside>
        </div> <!-- final div col -->
      </div> <!-- final div row -->
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <section class="titles margin-gd margin-mbl2">
              <h4><span>Roube o look</span></h4>
                  <ul class="list-inline">
                      <li class="col-xs-4">
                          <a href="http://www.sigmabeauty.com/powder-blush-limelight/p/NL06" title="Comprar online"><img class="img-responsive" src="../imagens/steal-blush.jpg" alt="Sigma Powder Blush" title="Comprar online"/></a>
                          <p><a href="http://www.sigmabeauty.com/powder-blush-limelight/p/NL06">Sigma Powder Blush</a></p>
                      </li>
                      <li class="col-xs-4">
                          <a href="http://www.amazon.com/dp/B00JDZ3O2O/ref=asc_df_B00JDZ3O2O4007759/?creative=394997&creativeASIN=B00JDZ3O2O&linkCode=df0&tag=wwwshopstylec-20&ascsubtag=1754869480" title="Comprar online"><img class="img-responsive" src="../imagens/steal-blender.jpg" alt="Beauty Blender"/></a>
                          <p><a href="http://www.amazon.com/dp/B00JDZ3O2O/ref=asc_df_B00JDZ3O2O4007759/?creative=394997&creativeASIN=B00JDZ3O2O&linkCode=df0&tag=wwwshopstylec-20&ascsubtag=1754869480">Esponja Beauty Blender</a></p>
                      </li>
                      <li class="col-xs-4">
                          <a href="http://www.amazon.com/dp/B00B1DRA94/ref=asc_df_B00B1DRA944004213/?creative=394997&creativeASIN=B00B1DRA94&linkCode=df0&tag=wwwshopstylec-20&ascsubtag=1754871888" title="Comprar online"><img class="img-responsive" src="../imagens/steal-eyeliner.jpg" alt="L'óreal Eyeliner"/></a>
                          <p><a href="http://www.amazon.com/dp/B00B1DRA94/ref=asc_df_B00B1DRA944004213/?creative=394997&creativeASIN=B00B1DRA94&linkCode=df0&tag=wwwshopstylec-20&ascsubtag=1754871888">Delineador L'óreal Eyeliner</a></p>
                      </li>
                  </ul>
          </section> <!-- end section roube o look -->
        </div><!-- final div col -->
        <div class="col-md-4 col-sm-4 col-xs-12 enquete">
          <aside class="margin-mbl enquete">
            <hr class="visible-xs">
            <h3 class="negrito">Enquete</h3>
            <p>
              Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne.
            </p>
            <form>
              <ul class="list-unstyled">
                <li><input type="radio"/><p>Option 1</p></li>
                <li><input type="radio"/><p>Option 2</p></li>
                <li><input type="radio"/><p>Option 3</p></li>
                <li><input type="radio"/><p>Option 4</p></li>
              </ul>
            </form>
            <button  type="button" class="botao btn btn-default">Votar</button>
          </aside>
        </section>
      </article>
    </div> <!--final div col -->
  </div> <!-- final div row -->
<div class="row">
  <section class="text-center">
    <h2 class="titles"><span>Top Tutoriais</span></h2>
    <ul class="list-inline">
      <div class="col-md-3 col-sm-3">
        <li>
          <iframe width="250" height="200" src="https://www.youtube.com/embed/Nccj-qXpAMs"></iframe>
          <p><a href="biaandrade.php#top">Lorem ipsum dolor sit amet..Lorem ipsum dolor sit amet lorem ipsum dolor sit amet..</a></p>
        </li>
      </div>
      <div class="col-md-3 col-sm-3">
        <li>
          <iframe width="250" height="200" src="https://www.youtube.com/embed/DlNl1BBTICM"></iframe>
          <p><a href="alicesalazar.php#top">Lorem ipsum dolor sit amet..</p><p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet..</a></p>
        </li>
      </div>
      <div class="col-md-3 col-sm-3">
        <li>
          <iframe width="250" height="200" src="https://www.youtube.com/embed/xt2rFBpd_lk"></iframe>
          <p><a href="biaandrade.php#top-dois">Lorem ipsum dolor sit amet..</p><p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet..</a></p>
        </li>
      </div>
      <div class="col-md-3 col-sm-3">
        <li>
        <iframe width="250" height="200" src="https://www.youtube.com/embed/wx700inyHkw"></iframe>
        <p><a href="camilacoelho.php#top">Lorem ipsum dolor sit amet..</p><p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet..</a></p>
        </li>
      </div>
    </ul>
    </section>
</div> <!-- final div row -->
<hr>
<div class="row">
  <section>
    <h3>Conheça as Youtubers Experts em Beleza!</h3>
    <ul class="list-inline list-unstyled text-center">
      <li>
        <h4 class="text-center link">Alice Salazar</h4>
        <a href="alicesalazar.php"><img class="img-responsive" src="../imagens/alice-ytbrs.jpg" alt="Página de Alice Salazar"/></a>
      </li>
      <li>
        <h4 class="text-center link">Bianca Andrade</h4>
        <a href="biaandrade.php"><img class="img-responsive" src="../imagens/bia-ytbrs.jpg" alt="Página de Bia Andrade"/></a>
      </li>
      <li>
        <h4 class="text-center link">Camila Coelho</h4>
        <a href="camilacoelho.php"><img class="img-responsive" src="../imagens/cami-ytbrs.jpg" alt="Página de Camila Coelho"/></a>
    </ul>
  </section>
</div> <!-- final div row -->
<div class="row">
  <section>
    <h2 class="titles margin-mbl2"><span>Últimos Posts</span></h2>
    <ul class="list-inline">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <li>
          <a class="link-c" href="alicesalazar.php" target="_blank"><h3>Alice Salazar</a></h3>
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" width="330" height="240" src="https://www.youtube.com/embed/PPLd_2efH_Q"></iframe>
        </div>
          <ul class="list-unstyled">
            <li><p><a href="alicesalazar.php#last_one" target="_blank">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</a></p>
            <hr></li>
            <li><p><a href="alicesalazar.php#last_two" target="_blank">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</a></p>
            <hr></li>
            <li><p><a href="alicesalazar.php#last_three" target="_blank">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</a></p>
            </li>
          </ul>
        </li>
      </div> <!-- final div col -->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <li>
          <a class="link-c" href="biaandrade.php" target="_blank"><h3>Boca Rosa por Bia Andrade</a></h3>
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" width="330" height="240" src="https://www.youtube.com/embed/cgFOcewuKzg"></iframe>
        </div>
          <ul class="list-unstyled">
            <li><p><a href="biaandrade.php#last_one" target="_blank">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</a></p>
            <hr></li>
            <li><p><a href="biaandrade.php#last_two" target="_blank">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</a></p>
            <hr></li>
            <li><p><a href="biaandrade.php#last_three" target="_blank">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</a></p>
            </li>
          </ul>
        </li>
      </div> <!-- final div col -->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <li>
          <h3><a class="link-c" href="camilacoelho.php" target="_blank">Camila Coelho</a></h3>
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" width="330" height="240" src="https://www.youtube.com/embed/3Xmj3x1tDRY"></iframe>
        </div>
          <ul class="list-unstyled">
            <li><p><a href="camilacoelho.php#last_one" target="_blank">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</a></p>
            <hr></li>
            <li><p><a href="camilacoelho.php#last_two" target="_blank">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</a></p>
            <hr></li>
            <li><p><a href="camilacoelho.php#last_three" target="_blank">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</a></p>
            </li>
          </ul>
        </li><!-- final li maior -->
      </div> <!-- final div col -->
    </ul>
  </section>
</div> <!-- final div row -->
</div> <!-- final div container -->
<?php
include'../../partes/lifestyle-footer.php';
?>
</body>
</html>
