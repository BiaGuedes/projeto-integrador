<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Culinária</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Raleway|Open+Sans|Vollkorn' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../global/css/bootstrap.min.css">
<link rel="stylesheet" href="../global/css/utubers.css">
<link rel="stylesheet" href="../global/css/culinaria.css">
<script src="../global/js/jquery-2.1.1.js"></script>
<script src="../global/js/bootstrap.min.js"></script>
<script src="../global/js/utubers.js"></script>
<link rel="shortcut icon" href="../global/imagens/icon.png" type="image/png" />
</head>
    <body>
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

  $linksnav1['Culinária'] = array('Home' => './',
      'Fitness' => '../culinaria/fitness',
      'Tradicional' => '../culinaria/tradicional');

  $linksnav1['Lifestyle'] = array('Home' => '../lifestyle',
      'Cotidiano' => '../lifestyle/cotidiano',
      'Make up' => '../lifestyle/makeup',
      'Viagem' => '../lifestyle/viagem');

  $nav1.nav1('#ed8bff', '', $linksnav1, '../culinaria/imagens/culinaria.png', ['../global/imagens/ut.png','../']);

$nav2 = require '../partes/nav2.php';
$linksnav2 = array();
$linksnav2['imagens/logos/anamaria.png'] = '../culinaria/tradicional/anamariabrogui.php';
$linksnav2['imagens/logos/cozinhaparadois.png'] = '../culinaria/tradicional/cozinhaparadois.php';
$linksnav2['imagens/gastrono.png'] = '../culinaria/tradicional/gastronomismo.php';
$linksnav2['imagens/ickfd.png'] = '../culinaria/tradicional/icouldkillfordessert.php';
$linksnav2['imagens/rg.png'] = '../culinaria/tradicional/rolegourmet.php';
$linksnav2['imagens/logos/comertreinareamar.png'] = '../culinaria/fitness/comertreinareamar.php';
$linksnav2['imagens/logos/culinariasaudavel.png'] = '../culinaria/fitness/culinariasaudavel.php';
$linksnav2['imagens/logos/fabricademonstros.png'] = '../culinaria/fitness/fabricademonstros.php';
$linksnav2['imagens/logos/fitmencook.png'] = '../culinaria/fitness/fitmencook.php';
$linksnav2['imagens/logos/madeinjpn.png'] = '../culinaria/fitness/madeinjpn.php';

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

<div class="articlesa col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 paddtop20">
<!--<div class="container col-xs-12 col-sm-12 col-md-10 col-md-offset-1">-->
    <!-- SLIDER -->
<div class="col-xs-12 col-sm-12 col-md-12" id="slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <center><img src="../culinaria/imagens/slider/dn.jpg" class="img-responsive" alt="Venha aprender receitas deliciosas com Dani Noce!"></center>
                        <div class="carousel-caption">
                          <h3><a class="slider-link" href="../culinaria/tradicional/icouldkillfordessert.php">Venha aprender receitas deliciosas com Dani Noce!</a></h3>
                          <p></p>
                        </div>
                    </div>
                    <div class="item">
                      <center><img src="../culinaria/imagens/slider/cpd.jpg" class="img-responsive" alt="Receitas rápidas e fáceis com o casal do Cozinha Para 2!"></center>
                      <div class="carousel-caption">
                      <h3><a class="slider-link" href="../culinaria/tradicional/cozinhaparadois.php">Receitas rápidas e fáceis com o casal do Cozinha Para 2!</h3></a>
                      <p></p>
                      </div>
                    </div>
                </div>
            </div>

    <section class="col-md-12 col-sm-12 row">
        <center>
            <hr>
        <h1>Culinária Tradicional</h1>
        <a href="../culinaria/tradicional/anamariabrogui.php"><img src="imagens/ickfd/rec3.jpg" class="tamanhoimg img-responsive" alt="meal"/></a>
        <a href="../culinaria/tradicional/cozinhaparadois.php"><img src="imagens/gastronomismo/rec2.jpg" class="tamanhoimg img-responsive hidden-xs" alt="meal"/></a>
        <a href="../culinaria/tradicional/gastronomismo.php"><img src="imagens/gastronomismo/rec1.jpg" class="tamanhoimg img-responsive" alt="meal"/></a>
        <a href="../culinaria/tradicional/icouldkillfordessert.php"><img src="imagens/anamaria/rec4.jpg" class="tamanhoimg img-responsive hidden-xs" alt="meal"/></a>
        <a href="../culinaria/tradicional/rolegourmet.php"><img src="imagens/ickfd/rec4.jpg" class="tamanhoimg img-responsive hidden-xs" alt="meal"/></a>
            <hr>
        </center>
    </section>
    <center>
    <div class="culinaria-videos">
        <div class="col-md-6 col-sm-7">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="500" height="310" src="https://www.youtube.com/embed/s1Ibk5VTFyw"></iframe>
        </div>
        <p class="text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non</p>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="500" height="310" src="https://www.youtube.com/embed/4zvvrms2P3A"></iframe>
        </div>
        <p class="text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non</p>
        </div>
        <div class="col-md-6 col-sm-7">
        <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe width="500" height="310" src="https://www.youtube.com/embed/5aTrijTuTjc"></iframe>
        </div>
        <p class="text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non</p>
        <div class="embed-responsive embed-responsive-16by9 hidden-xs">
            <iframe width="500" height="310" src="https://www.youtube.com/embed/FSAfeH893aE"></iframe>
        </div>
        <p class="text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non</p>
        </div>
    </div>
        </center>
        <section class="col-md-12 col-sm-12">
            <center>
                <hr>
        <h1>Culinária Fitness</h1>
        <a href="../culinaria/fitness/comertreinareamar.php"><img src="imagens/fitmen/rec2.jpg" class="tamanhoimg img-responsive hidden-xs" alt="meal"/></a>
        <a href="../culinaria/fitness/culinariasaudavel.php"><img src="imagens/made/rec1.jpg" class="tamanhoimg img-responsive hidden-xs" alt="meal"/></a>
        <a href="../culinaria/fitness/fabricademonstros.php"><img src="imagens/fitmen/rec1.jpg" class="tamanhoimg img-responsive" alt="meal"/></a>
        <a href="../culinaria/fitness/fitmencook.php"><img src="imagens/culinaria/rec1.jpg" class="tamanhoimg img-responsive hidden-xs" alt="meal"/></a>
        <a href="../culinaria/fitness/madeinjpn.php"><img src="imagens/culinaria/rec2.jpg" class="tamanhoimg img-responsive" alt="meal"/></a>
                <hr>
            </center>
    </section>
    <center>
        <div class="culinaria-videos">
            <div class="col-md-6 col-sm-7">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/T6-d7A3P7sY"></iframe>
            </div>
        <p class="text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non</p>
        <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/af1vMORddas"></iframe>
        </div>
        <p class="text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non</p>
            </div>
            <div class="col-md-6 col-sm-7">
            <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/TpT0pglrTPA"></iframe>
            </div>
        <p class="text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non</p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/mZR4bo6of4E"></iframe>
            </div>
         <p class="text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non</p>
            </div>
    </div>
        </center>


    </div>
</div>
  <?php

  $footer = require('../partes/footer.php');
  $linksfooter = array();



  $linksfooter['Home'] = '../../Utubers';

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
          'Rodada The Noite' => '../humor/noticiasbizarras/rodadathenoite.php'
      ],
      'Stand Up' => [
          'Home' => '../humor/standup',
          'Comedy Center Brasil' => '../humor/standup/comedycenterbrasil.php',
          'Os Barbixas' => '../humor/standup/osbarbixas.php',
          'Rafinha Bastos' => '../humor/standup/rafinhabastos.php'
      ],
      'Coisas do Dia a Dia' => [
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
      'Home' => '../culinaria/index.php',
      'Fitness' => [
          'Home' => '../culinaria/fitness/index.php',
          'Comer, Treinar e Amar' => '../culinaria/fitness/comertreinareamar.php',
          'Culinária Saudável' => '../culinaria/fitness/culinariasaudavel.php',
          'Fábrica de Monstros' => '../culinaria/fitness/fabricademonstros.php',
          'Fit Men Cook' => '../culinaria/fitness/fitmencook.php',
          'Made in Japan' => '../culinaria/fitness/madeinjpn.php'
      ],
      'Tradicional' => [
          'Home' => '../culinaria/tradicional/index.php',
          'Ana Maria Brogui' => '../culinaria/tradicional/anamariabrogui.php',
          'Cozinha para Dois' => '../culinaria/tradicional/cozinhaparadois.php',
          'Gastronomismo' => '../culinaria/tradicional/gastronomismo.php',
          'I Could Kill for Dessert' => '../culinaria/tradicional/icouldkillfordessert.php',
          'Rolê Gourmet' => '../culinaria/tradicional/rolegourmet.php'
      ]
  ];

  $linksfooter['Lifestyle'] = [
      'Home' => '../lifestyle/index.php',
      'Cotidiano' => [
          'Home' => '../lifestyle/cotidiano/index.php',
          'Flávia Calina' => '../lifestyle/cotidiano/flaviacalina.php',
          'Taciele Alcolea' => '../lifestyle/cotidiano/tacialcolea.php',
          'Viih Tube' => '../lifestyle/cotidiano/vihtube.php'
      ],
      'Makeup' => [
          'Home' => '../lifestyle/makeup/index.php',
          'Alice Salazar' => '../lifestyle/makeup/alicesalazar.php',
          'Bia Andrade' => '../lifestyle/makeup/biaandrade.php',
          'Camila Coelho' => '../lifestyle/makeup/camilacoelho.php'
      ],
      'Viagem' => [
          'Home' => '../lifestyle/viagem/index.php',
          'Bruna Vieira' => '../lifestyle/viagem/brunavieira.php',
          'Camila Coutinho' => '../lifestyle/viagem/camilacoutinho.php',
          'Lu Sicchierolli' => '../lifestyle/viagem/lusicchi.php'
      ]
  ];


  $footer . footer($linksfooter, '../quemsomos.php', '../contato.php');

  ?>

  <script>


  </script>

</body>
<script src="../../global/js/jquery-2.1.1.js"></script>
<script src="../../global/js/bootstrap.min.js"></script>
<script src="../../global/js/utubers.js"></script>
  </html>
