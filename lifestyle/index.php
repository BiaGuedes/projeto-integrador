
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Lifestyle</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../global/css/bootstrap.min.css">
<link rel="stylesheet" href="../global/css/utubers.css">
<link rel="stylesheet" href="../global/css/lifestyle.css">
<link rel="shortcut icon" href="../global/imagens/icon.png" type="image/png" />
<script src="../global/js/jquery-2.1.1.js"></script>
<script src="../global/js/bootstrap.min.js"></script>
<script src="../global/js/utubers.js"></script>
</head>
<body> <!-- rgba(248, 248, 248, 1) -->
  <?php

  $nav1 = require '../partes/nav1.php';
  $linksnav1 = array();
  $linksnav1['Humor'] =
      array('Home' => '../humor',
          'Coisas do Dia a Dia' => '../humor/coisasdoday',
          'Notícias Bizarras' => '../humor/noticiasbizarras',
          'Pegadinhas' => '../humor/pegadinhas',
          'Stand up' => '../humor/standup');

  $linksnav1['Jogos'] =  array('Home' => '../jogos',
      'Esportes' => '../jogos/esportes',
      'FPS' => '../jogos/fps',
      'MOBA' => '../jogos/moba',
      'Terror' => '../jogos/terror');

  $linksnav1['Culinária'] = array('Home' => '../culinaria',
      'Fitness' => '../culinaria/fitness',
      'Tradicional' => '../culinaria/tradicional');

  $linksnav1['Lifestyle'] = array('Home' => './',
      'Cotidiano' => 'cotidiano',
      'Make up' => 'makeup',
      'Viagem' => 'viagem');

  $nav1.nav1('#D9007B', '', $linksnav1, 'imagens/icon.png', ['../global/imagens/ut.png','../']);


  $linksnav2 = array();
  $nav2 = require '../partes/nav2.php';
  $linksnav2 = array();
  $linksnav2['imagens/logo-alice.png'] = 'makeup/alicesalazar.php';
  $linksnav2['imagens/logo-bia.png'] = 'makeup/biaandrade.php';
  $linksnav2['imagens/logo-bruna.png'] = 'viagem/brunavieira.php';
  $linksnav2['imagens/logo-camicoelho.png'] = 'makeup/camilacoelho.php';
  $linksnav2['imagens/logo-camicoutinho.png'] = 'viagem/camilacoutinho.php';
  $linksnav2['imagens/logo-flavia.png'] = 'cotidiano/flaviacalina.php';
  $linksnav2['imagens/logo-luh.png'] = 'viagem/lusicchi.php';
  $linksnav2['imagens/logo-taci.png'] = 'cotidiano/tacialcolea.php';
  $linksnav2['imagens/logo-vih.png'] = 'cotidiano/vihtube.php';






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

        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 paddtop20" id="slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a class="slider-link" href="makeup"><img src="imagens/slider-camila.jpg" alt="As melhores maquiagens do Youtube"></a>
                        <div class="carousel-caption">
                          <h3><a class="slider-link" href="makeup">As melhores maquiagens do Youtube</a></h3>
                          <p><a class="slider-link" href="makeup">O Portal completo sobre canais do Youtube reúne as melhores makes da internet!</a></p>
                        </div>
                    </div>
                    <div class="item">
                      <a class="slider-link" href="cotidiano"><img src="imagens/slider-taci.jpg" alt="Compartilhe seu dia a dia"></a>
                      <div class="carousel-caption">
                      <h3><a class="slider-link" href="cotidiano">Compartilhe seu dia a dia</a></h3>
                      <p><a class="slider-link" href="cotidiano">As Youtubers compartilham com você suas rotinas diárias</a></p>
                      </div>
                    </div>
                    <div class="item">
                      <a class="slider-link" href="cotidiano"> <img src="imagens/slider-luh.jpg" alt="Sinta-se em outros ares!"></a>
                      <div class="carousel-caption">
                          <h3><a class="slider-link" href="viagem">Sinta-se em outros ares</a></h3>
                          <p><a class="slider-link" href="cotidiano">O Portal te leva pra longe sem sair de casa!</a></p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"><!-- col-md-10 col-md-offset-1*/ -->
          <article>
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-4">
                <img class="img-responsive" src="imagens/lookretro2.jpg" alt="Look Retrô"/>
              </div>
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/JoyC11nQeR4"></iframe> -->
              <div class="col-md-4 col-sm-6 col-xs-8">
                <h1>Olhar Retrô</h1>
                <p class="lead">Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.
                </p>
                <a class="hidden-xs link-b" href="https://www.youtube.com/watch?v=JoyC11nQeR4">Ver no Youtube</a>
                <a class="hidden-xs link pull-right" href="makeup/camilacoelho.php">Veja mais de Camila Coelho</a>
                <div class="row"><!-- mudei era container -->
                    <hr class="hidden-xs">
                    <section>
                      <a class="display visible-xs link-b" href="https://www.youtube.com/watch?v=JoyC11nQeR4">Ver no Youtube</a>
                      <ul class="list-inline push-right">
                        <li class="social-media"><a href="https://www.youtube.com/user/MakeUpByCamila/" title="Youtube" target="_blank"><img class="img-responsive icon-xs" alt="Youtube"  src="imagens/ytb.png"/></a></li>
                        <li><a href="https://www.facebook.com/Camila-Figueiredo-Coelho-161758410553702/" title="Facebook" target="_blank"><img class="img-responsive icon-xs" alt="Facebook" src="imagens/fb.png"/></a></li>
                        <li><a href="https://www.instagram.com/camilacoelho/" title="Instagram" target="_blank"><img class="img-responsive icon-xs" alt="Instagram" src="imagens/insta.png"/></a></li>
                      </ul>
                    </section>
                </div> <!-- end div row-->
              </div> <!-- fechada-->
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <!-- falta col-xs -->
                <aside class="hidden-xs bottom">
                  <a href="viagem/camilacoutinho.php" title="Uma Garota Estúpida e Très Chic - Camila Coutinho" target="_blank"><img class="img-responsive" src="imagens/adv-camicoutinho.jpg" alt="Camila Coutinho em Garotas Estúpidas." /></a>
                </aside>
              </div> <!-- final div col-->
            </div> <!-- final div row -->
            <div class="row">
              <div class="col-md-8 col-sm-12 col-xs-12">
                <section class="titles margin-gd margin-mbl2">
                    <h2><span>Roube o look</span></h2>
                        <ul class="list-inline">
                            <li class="col-xs-4">
                                <a href="http://www.adoromaquiagem.com.br/content/mascara-para-cilios-preta-ultra-volume-a-prova-dagua-una" title="Comprar online"><img class="img-responsive" src="imagens/steal-mascara.jpg" alt="Máscara para Cílios Natura"/></a>
                                <p><a href="http://www.adoromaquiagem.com.br/content/mascara-para-cilios-preta-ultra-volume-a-prova-dagua-una">Máscara para Cílios Natura</a></p>
                            </li>
                            <li class="col-xs-4">
                                <a href="http://www.adoromaquiagem.com.br/content/delineador-em-caneta-preto-una" title="Comprar online"><img class="img-responsive" src="imagens/steal-delineador.jpg" alt="Delineador em Caneta Preto Natura"/></a>
                                <p><a href="http://www.adoromaquiagem.com.br/content/delineador-em-caneta-preto-una">Delineador em Caneta Preto Natura</a></p>
                            </li>
                            <li class="col-xs-4">
                                <a href="http://www.adoromaquiagem.com.br/content/corretivo-faces" title="Comprar online"><img class="img-responsive" src="imagens/steal-corretivo.jpg" alt="Corretivo Natura Faces"/></a>
                                <p><a href="http://www.adoromaquiagem.com.br/content/corretivo-faces">Corretivo Natura Faces</a></p>
                            </li>
                        </ul>
                </section> <!-- end section roube o look -->
              </div>
              <div class="visible-xs col-xs-12"> <!-- falta col-xs -->
                <aside>
                  <hr>
                  <a href="viagem/camilacoutinho.php" title="Uma Garota Estúpida e Très Chic - Camila Coutinho" target="_blank"><img src="imagens/adv-camicoutinho.jpg" alt="Camila Coutinho em Garotas Estúpidas." /></a>
                </aside>
              </div> <!-- final div col-->
              <div class="hidden-xs col-md-4 col-sm-8">
                <aside>
                  <a href="viagem/brunavieira.php" title="Depois dos Quinze tem muito mais" target="_blank"><img class="img-responsive" src="imagens/adv-bruna.jpg" alt="Depois dos Quinze tem muito mais" /></a>
                </aside>
              </div>
            </div>
          </article>
          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
              <section>
                <hr class="top">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" width="700" height="360" src="https://www.youtube.com/embed/x65tMlEFprM"></iframe>
                </div>
                <h2 class="text-center">Festa de 1 milhão</h2>
                <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</p>
              </section>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <section class="titles margin-gd margin-mbl2">
                <h3><span>Viagem</span></h3>
                <img class="img-responsive" src="imagens/trip1.jpg" alt="Conheça Barcelona"/>
                <ul class="list-unstyled">
                  <li>
                    <h4><a href="viagem/index.php#trip_three">Luh em Barcelona</a></h4>
                    <p><a href="viagem/index.php#trip_three">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </a></p>
                    <hr>
                  </li>
                  <li>
                    <h4><a href="viagem/index.php#trip_one">Comprinhas em Londres</a></h4>
                    <p><a href="viagem/index.php#trip_one">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></p>
                    <hr>
                  </li>
                  <li>
                    <h4><a href="viagem/index.php#trip_two">Cami e Vic vão para Dubai</a></h4>
                    <p><a href="viagem/index.php#trip_two"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></p>
                  </li>
                </ul>
              </section>
            </div>
          </div> <!-- final div row 2 -->
          <div class="row teste">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <section class="top text-center">
                <div class="titles bigger margin-gd margin-mbl3">
                  <h2><span class="teste teste-sm">Top Vlogs</span></h2>
                  <p class="hidden-xs pdg-gd">Lorem ipsum dolor sit amet, ne aeque legimus sit.</p>
                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <ul class="hidden-xs hidden-sm list-inline">
                    <li><iframe width="250" height="200" src="https://www.youtube.com/embed/MiO01444jLA"></iframe></li>
                    <li><iframe width="250" height="200" src="https://www.youtube.com/embed/r2dP3YR8-Rg"></iframe></li>
                    <li><iframe width="250" height="200" src="https://www.youtube.com/embed/7jydpn0j2AE"></iframe></li>
                    <li><iframe width="250" height="200" src="https://www.youtube.com/embed/MtueXDnizmw"></iframe></li>
                    </ul>
                  </div>
                  <div class="row visible-sm">
                    <div class="col-md-12 col-sm-6">
                      <ul class="hidden-xs list-inline">
                      <li><iframe width="250" height="200" src="https://www.youtube.com/embed/MiO01444jLA"></iframe></li>
                      <li><iframe width="250" height="200" src="https://www.youtube.com/embed/r2dP3YR8-Rg"></iframe></li>
                    </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <ul class="hidden-xs list-inline">
                      <li><iframe width="250" height="200" src="https://www.youtube.com/embed/7jydpn0j2AE"></iframe></li>
                      <li><iframe width="250" height="200" src="https://www.youtube.com/embed/MtueXDnizmw"></iframe></li>
                      </ul>
                    </div>
                  </div>
                </div>

                <ol class="visible-xs">
                  <li>
                    <p>Taci mostra num tour todas as novidades sobre sua casa nova.</p>
                    <h3><a class="pull-right link-b" href="https://www.youtube.com/watch?v=MiO01444jLA">ASSISTA</a></h3>
                    <hr class="margin-mbl2">
                  </li>
                  <li>
                    <p> Viih está na Disney e tem como missão te encantar!</p>
                    <h3><a class="pull-right link-b" href="https://www.youtube.com/watch?v=r2dP3YR8-Rg">ASSISTA</a></h3>
                    <hr class="margin-mbl2">
                  </li>
                  <li>
                    <p>O vlog mais emocionante de todos! Flávia Calina gravou toda a emoção no dia do nascimento da baby V.</p>
                    <h3><a class="pull-right link-b" href="https://www.youtube.com/watch?v=7jydpn0j2AE">ASSISTA</a></h3>
                    <hr class="margin-mbl2">
                  </li>
                  <li>
                    <p> Os aplicativos secretos de fotografia das blogueiras.</p>
                    <h3><a class="pull-right link-b" href="https://www.youtube.com/watch?v=MtueXDnizmw">ASSISTA</a></h3>
                  </li>
                </ol>
                <hr class="margin-mbl2">
              </section>
            </div> <!--final div col -->
          </div> <!-- final div row 3 - sobre top vlogs -->
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <section>
                <h2>Publicados Recentemente</h2>
                <ul>
                  <li>
                    <h4>9h</h4>
                    <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</p>
                    <a class="link" href="viagem/brunavieira.php">Acesse a Página da Bruna</a>
                  </li>
                  <li>
                    <h4>07h30</h4>
                    <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</p>
                    <a class="link" href="viagem/camilacoutinho.php">Acesse a Página da Camila Coutinho</a>
                  </li>
                  <li>
                    <h4>1h</h4>
                    <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</p>
                    <a class="link" href="makeup/alicesalazar.php">Acesse a Página da Alice Salazar</a>
                  </li>
                  <li>
                    <h4>00h40</h4>
                    <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</p>
                      <a class="link" href="cotidiano/vihtube.php">Acesse a Página da Vih Moraes</a>
                  </li>
                  <li>
                    <h4>0h30</h4>
                    <p>Lorem ipsum dolor sit amet, ne aeque legimus sit. Eos id graeco numquam, his exerci oportere ne. Pri nisl omnium quaerendum ei, at sale justo mel.</p>
                      <a class="link" href="viagem/lusicchi.php">Acesse a Página do Luh Sicchierolli</a>
                  </li>
                </ul>
              </section>
              <hr class="visible-xs">
            </div> <!-- final div col publicados recentemente -->
            <div class="col-md-4 col-sm-4">
              <section>
                <ul class="list-unstyled">
                  <li>
                    <h3><a class="link-c" href="makeup/biaandrade.php#poralgoaqui">Make para selfie</a></h3>
                    <p><a href="makeup/biaandrade.php#carousel">Bia Andrade te ensina a fazer uma make perfeita para a selfie!</a></p>
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" width="350" height="215" src="https://www.youtube.com/embed/p3LvYoh9-2I"></iframe>
                    </div>
                  </li>
                  <li>
                    <h3><a class="link-c" href="viagem/index.php#shop">Comprinhas de Viagem </a></h3>
                    <p><a href="viagem/index.php#shop">Bruna Vieira mostra suas comprinhas e novidades da gringa!</a></p>
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" width="350" height="215" src="https://www.youtube.com/embed/iP2QMnKBmjs"></iframe>
                    </div>
                  </li>
                  <li>
                    <h3><a class="link-c" href="viagem/lusicchi.php">Conheça a Itália </a></h3>
                    <p><a href="viagem/lusicchi.php">Que tal dar uma voltinha pela Itália com o Luh?</a></p>
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" width="350" height="215" src="https://www.youtube.com/embed/y1_o5MVYcGo"></iframe>
                    </div>
                  </li>
                </ul>
              </section>
            </div> <!-- final div col sobre os videos -->
            <div class=" top col-md-4 col-sm-4 col-xs-12">
              <div class="row">
                <aside>
                  <ul class="top bottom list-unstyled">
                    <li class="line"><a href="cotidiano/index.php" title="Acesse a página Cotidiano"><img class="img-responsive" alt="Cotidiano" src="imagens/cotidiano.jpg"/></a></li>
                    <li class="line"><a href="makeup/index.php" title="Acesse a página Maquiagem"><img class="img-responsive" alt="Maquiagem" src="imagens/make.jpg"/></a></li>
                    <li class="line"><a href="viagem/index.php" title="Acesse a página Viagem"><img class="img-responsive" alt="Viagem" src="imagens/viagem.jpg"/></a></li>
                  </ul>
                </aside>
              </div>

            </div> <!-- final div col sobre o aside -->
          </div> <!-- final div row 4 - sobre publicados recentemente, videos e imagens -->
        </div> <!-- end div container-->
  <?php

  $footer = require('../partes/footer.php');
  $linksfooter = array();



  $linksfooter['Home'] = '../';

  $linksfooter['Humor'] = [
      'Home' => '../humor',
      'Pegadinhas' => [
          'Home' => '../humor/pegadinhas',
          'Canal Boom' => '../humor/pegadinhas/canalboom.php',
          'Nao é Sério TV' => '../humor/pegadinhas/naoeseriotv.php',
          'Viral Brothers' => '../humor/pegadinhas/viralbrothers.php'
      ],
      'Notícias Bizarras' => [
          'Home' => '../humor/noticiasbizarras',
          'Caue Moura' => '../humor/noticiasbizarras/cauemoura.php',
          'Passou na TV' => '../humor/noticiasbizarras/passounatv.php',
          'Rodada The Noite' => '../humor/noticiasbizarras/.php'
      ],
      'Stand Up' => [
          'Home' => '../humor/standup',
          'Comedy Center Brasil' => '../humor/standup/comedycenterbrasil.php',
          'Os Barbixas' => '../humor/standup/osbarbixas.php',
          'Rafinha Bastos' => '../humor/standup/rafinhabastos.php'
      ],
      'Coisas do Day' => [
          'Home' => '../humor/coisasdoday',
          'Galo Frito' => '../humor/coisasdoday/galofrito.php',
          'Parafernalha' => '../humor/coisasdoday/parafernalha.php',
          'Porta dos Fundos' => '../humor/coisasdoday/portadosfundos.php'
      ]
  ];

  $linksfooter['Jogos'] = [
      'Home' => '../jogos',
      'Esportes' => [
          'Home' => '../jogos/esportes',
          'Copa Cirrose' => '../jogos/esportes/copa-cirrose',
          'Gameplay RJ' => '../jogos/esportes/gameplayrj',
          'SGU' => '../jogos/esportes/sgu',
      ],
      'FPS' => [
          'Home' => '../jogos/fps',
          'Leet' => '../jogos/fps/leet',
          'LeNinja' => '../jogos/fps/leninja',
          'Monark' => '../jogos/fps/monark'
      ],
      'Moba' => [
          'Home' => '../jogos/moba',
          'Dota WTF' => '../jogos/moba/dotawtf',
          'Dry Bear' => '../jogos/moba/drybear',
          'Gordox' => '../jogos/moba/gordox'
      ],
      'Terror' => [
          'Home' => '../jogos/terror',
          'Ambuplay' => '../jogos/terror/ambuplay',
          'Pew Die Pie' => '../jogos/terror/pewdiepie',
          'Terror-Bionic' => '../jogos/terror/terror-bionic'
      ]
  ];

  $linksfooter['Culinária'] = [
      'Home' => '../culinaria',
      'Fitness' => [
          'Home' => '../culinaria/fitness',
          'Comer, Treinar e Amar' => '../culinaria/fitness/comertreinareamar.php',
          'Culinária Saudável' => '../culinaria/fitness/culinariasaudavel.php',
          'Fábrica de Monstros' => '../culinaria/fitness/fabricademonstros.php',
          'Fit Men Cook' => '../culinaria/fitness/fitmencook.php',
          'Made in Japan' => '../culinaria/fitness/madeinjpn.php'
      ],
      'Tradicional' => [
          'Home' => '../culinaria/tradicional',
          'Ana Maria Brogui' => '../culinaria/tradicional/anamariabrogui.php',
          'Cozinha para Dois' => '../culinaria/tradicional/cozinhaparadois.php',
          'Gastronomismo' => '../culinaria/tradicional/gastronomismo.php',
          'I Could Kill for Dessert' => '../culinaria/tradicional/icouldkillfordessert.php',
          'Rolê Gourmet' => '../culinaria/tradicional/rolegourmet.php'
      ]
  ];

  $linksfooter['Lifestyle'] = [
      'Home' => './',
      'Cotidiano' => [
          'Home' => 'cotidiano',
          'Flávia Calina' => 'cotidiano/flaviacalina.php',
          'Taciele Alcolea' => 'cotidiano/tacialcolea.php',
          'Viih Tube' => 'cotidiano/vihtube.php'
      ],
      'Makeup' => [
          'Home' => 'makeup',
          'Alice Salazar' => 'makeup/alicesalazar.php',
          'Bia Andrade' => 'makeup/biaandrade.php',
          'Camila Coelho' => 'makeup/camilacoelho.php'
      ],
      'Viagem' => [
          'Home' => 'viagem',
          'Bruna Vieira' => 'viagem/brunavieira.php',
          'Camila Coutinho' => 'viagem/camilacoutinho.php',
          'Lu Sicchierolli' => 'viagem/lusicchi.php'
      ]
  ];


  $footer.footer($linksfooter, '../quemsomos.php', '../contato.php');

  ?>

</body>
</html>
