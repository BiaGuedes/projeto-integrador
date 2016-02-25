<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Culinária Saudável</title>
<link href="../../global/css/culinaria.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="../../global/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../../global/css/utubers.css" rel="stylesheet" type="text/css"/>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="../../global/imagens/icon.png" type="image/png" />
</head>
<body>
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

  $linksnav1['Culinária'] = array('Home' => '../',
      'Fitness' => './',
      'Tradicional' => '../../culinaria/tradicional');

  $linksnav1['Lifestyle'] = array('Home' => '../../lifestyle',
      'Cotidiano' => '../../lifestyle/cotidiano',
      'Make up' => '../../lifestyle/makeup',
      'Viagem' => '../../lifestyle/viagem');

  $nav1.nav1('#ed8bff', '', $linksnav1, '../../culinaria/imagens/culinaria.png', ['../../global/imagens/ut.png','../']);

$nav2 = require '../../partes/nav2.php';
$linksnav2 = array();
$linksnav2['../imagens/logos/comertreinareamar.png'] = 'comertreinareamar.php';
$linksnav2['../imagens/logos/culinariasaudavel.png'] = 'culinariasaudavel.php';
$linksnav2['../imagens/logos/fabricademonstros.png'] = 'fabricademonstros.php';
$linksnav2['../imagens/logos/fitmencook.png'] = 'fitmencook.php';
$linksnav2['../imagens/logos/madeinjpn.png'] = 'madeinjpn.php';
$nav2.nav2($linksnav2);

?>
<hr>
    <div class="articlesa col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 paddtop20">

        <article class="articlesa col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 paddtop20">
                <img src="../imagens/logos/culinariasaudavel.png" class="canais img-responsive img-circle" alt="logo"/>
                <h1>Culinária Saudável</h1>
                <p class="text-justify hidden-xs">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non consistere uno magni quisquis illi sunt erat: tellus tanto pondere dixere arce natura retinebat tegit coeperunt terras coegit instabilis emicuit liberioris forma non militis sibi seductaque carmen levius altae certis suis. </p>
        </article>
        <section>
                <!--VÍDEOS-->
            <div class="col-md-6 col-sm-7 hidden-xs">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="500" height="310" src="https://www.youtube.com/embed/zlhm6G4OPPM"></iframe>
            </div>
            <p class="text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non consistere uno magni quisquis illi sunt erat: tellus tanto pondere dixere arce natura retinebat tegit coeperunt terras coegit instabilis emicuit liberioris forma non militis sibi seductaque carmen levius altae certis suis. </p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="500" height="310" src="https://www.youtube.com/embed/ApUAjzls4N8"></iframe>
            </div>
            <p class="text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non consistere uno magni quisquis illi sunt erat: tellus tanto pondere dixere arce natura retinebat tegit coeperunt terras coegit instabilis emicuit liberioris forma non militis sibi seductaque carmen levius altae certis suis. </p>
            </div>
            <div class="col-md-6 col-sm-7">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="500" height="310" src="https://www.youtube.com/embed/WJn1mHTHTqU"></iframe>
            </div>
            <p class="text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non consistere uno magni quisquis illi sunt erat: tellus tanto pondere dixere arce natura retinebat tegit coeperunt terras coegit instabilis emicuit liberioris forma non militis sibi seductaque carmen levius altae certis suis. </p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="500" height="310" src="https://www.youtube.com/embed/dpnHvA9iuHA"></iframe>
            </div>
            <p class="text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non consistere uno magni quisquis illi sunt erat: tellus tanto pondere dixere arce natura retinebat tegit coeperunt terras coegit instabilis emicuit liberioris forma non militis sibi seductaque carmen levius altae certis suis. </p>
            </div>

        </section>
                        <aside>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <img src="../imagens/culinaria/rec1.jpg" class="rec1 img-responsive img-circle tamanhoimg" alt="receita" />
                  <h2 class="coluna">Receita</h2>
                  <p class="coluna text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non consistere uno magni quisquis illi sunt erat: tellus tanto pondere dixere arce natura retinebat tegit coeperunt terras coegit instabilis emicuit liberioris forma non militis sibi seductaque carmen levius altae certis suis. Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non consistere uno magni quisquis illi sunt erat: tellus tanto pondere dixere arce natura retinebat tegit coeperunt terras coegit instabilis emicuit liberioris forma non militis sibi seductaque carmen levius altae certis suis. </p>
                </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                  <img src="../imagens/culinaria/rec2.jpg" class="rec1 img-responsive img-circle tamanhoimg" alt="receita" />
                  <h2 class="coluna">Receita</h2>
                  <p class="coluna text-justify">Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non consistere uno magni quisquis illi sunt erat: tellus tanto pondere dixere arce natura retinebat tegit coeperunt terras coegit instabilis emicuit liberioris forma non militis sibi seductaque carmen levius altae certis suis. Quinta mare tellus habitandae quam mare orbem iunctarum caelumque qui caeleste ligavit: circumfluus fuerant aequalis summaque pondus tegi regna igni principio inposuit terra nix poena mixtam diverso manebat militis natus ignea zonae pondus non consistere uno magni quisquis illi sunt erat: tellus tanto pondere dixere arce natura retinebat tegit coeperunt terras coegit instabilis emicuit liberioris forma non militis sibi seductaque carmen levius altae certis suis. </p>
              </div>
            </div>
            </aside>


</div>
  <?php

  $footer = require('../../partes/footer.php');
  $linksfooter = array();



  $linksfooter['Home'] = '../../';

  $linksfooter['Humor'] = [
      'Home' => '../../humor',
      'Pegadinhas' => [
          'Home' => '../../humor/pegadinhas',
          'Canal Boom' => '../../humor/pegadinhas/canalboom.php',
          'Nao é Sério TV' => '../../humor/pegadinhas/naoeseriotv.php',
          'Viral Brothers' => '../../humor/pegadinhas/viralbrothers.php'
      ],
      'Notícias Bizarras' => [
          'Home' => '../../humor/noticiasbizarras',
          'Caue Moura' => '../../humor/noticiasbizarras/cauemoura.php',
          'Passou na TV' => '../../humor/noticiasbizarras/passounatv.php',
          'Rodada The Noite' => '../../humor/noticiasbizarras/rodadathenoite.php'
      ],
      'Stand Up' => [
          'Home' => '../../humor/standup',
          'Comedy Center Brasil' => '../../humor/standup/comedycenterbrasil.php',
          'Os Barbixas' => '../../humor/standup/osbarbixas.php',
          'Rafinha Bastos' => '../../humor/standup/rafinhabastos.php'
      ],
      'Coisas do Dia a Dia' => [
          'Home' => '../../humor/coisasdoday',
          'Galo Frito' => '../../humor/coisasdoday/galofrito.php',
          'Parafernalha' => '../../humor/coisasdoday/parafernalha.php',
          'Porta dos Fundos' => '../../humor/coisasdoday/portadosfundos.php'
      ]
  ];

  $linksfooter['Jogos'] = [
      'Home' => '../../jogos',
      'Esportes' => [
          'Home' => '../../jogos/esportes',
          'Copa Cirrose' => '../../jogos/esportes/copa-cirrose',
          'Gameplay RJ' => '../../jogos/esportes/gameplayrj',
          'SGU' => '../../jogos/esportes/sgu',
      ],
      'FPS' => [
          'Home' => '../../jogos/fps',
          'Leet' => '../../jogos/fps/leet',
          'LeNinja' => '../../jogos/fps/leninja',
          'Monark' => '../../jogos/fps/monark'
      ],
      'Moba' => [
          'Home' => '../../jogos/moba',
          'Dota WTF' => '../../jogos/moba/dotawtf',
          'Dry Bear' => '../../jogos/moba/drybear',
          'Gordox' => '../../jogos/moba/gordox'
      ],
      'Terror' => [
          'Home' => '../../jogos/terror',
          'Ambuplay' => '../../jogos/terror/ambuplay',
          'Pew Die Pie' => '../../jogos/terror/pewdiepie',
          'Terror-Bionic' => '../../jogos/terror/terror-bionic'
      ]
  ];

  $linksfooter['Culinária'] = [
      'Home' => '../index.php',
      'Fitness' => [
          'Home' => 'index.php',
          'Comer, Treinar e Amar' => 'comertreinareamar.php',
          'Culinária Saudável' => 'culinariasaudavel.php',
          'Fábrica de Monstros' => 'fabricademonstros.php',
          'Fit Men Cook' => 'fitmencook.php',
          'Made in Japan' => 'madeinjpn.php'
      ],
      'Tradicional' => [
          'Home' => '../../culinaria/tradicional/index.php',
          'Ana Maria Brogui' => '../../culinaria/tradicional/anamariabrogui.php',
          'Cozinha para Dois' => '../../culinaria/tradicional/cozinhaparadois.php',
          'Gastronomismo' => '../../culinaria/tradicional/gastronomismo.php',
          'I Could Kill for Dessert' => '../../culinaria/tradicional/icouldkillfordessert.php',
          'Rolê Gourmet' => '../../culinaria/tradicional/rolegourmet.php'
      ]
  ];

  $linksfooter['Lifestyle'] = [
      'Home' => '../../lifestyle/index.php',
      'Cotidiano' => [
          'Home' => '../../lifestyle/cotidiano/index.php',
          'Flávia Calina' => '../../lifestyle/cotidiano/flaviacalina.php',
          'Taciele Alcolea' => '../../lifestyle/cotidiano/tacialcolea.php',
          'Viih Tube' => '../../lifestyle/cotidiano/vihtube.php'
      ],
      'Makeup' => [
          'Home' => '../../lifestyle/makeup/index.php',
          'Alice Salazar' => '../../lifestyle/makeup/alicesalazar.php',
          'Bia Andrade' => '../../lifestyle/makeup/biaandrade.php',
          'Camila Coelho' => '../../lifestyle/makeup/camilacoelho.php'
      ],
      'Viagem' => [
          'Home' => '../../lifestyle/viagem/index.php',
          'Bruna Vieira' => '../../lifestyle/viagem/brunavieira.php',
          'Camila Coutinho' => '../../lifestyle/viagem/camilacoutinho.php',
          'Lu Sicchierolli' => '../../lifestyle/viagem/lusicchi.php'
      ]
  ];


  $footer . footer($linksfooter, '../../quemsomos.php', '../../contato.php');

  ?>

  <script>


  </script>

</body>
<script src="../../global/js/jquery-2.1.1.js"></script>
<script src="../../global/js/bootstrap.min.js"></script>
<script src="../../global/js/utubers.js"></script>
  </html>
