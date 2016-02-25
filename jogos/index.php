<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../global/css/utubers.css">
      <link rel="shortcut icon" href="../global/imagens/icon.png" type="image/png" />
    <link rel="stylesheet" href="css/games.css">
    <script src="../global/js/jquery-2.1.1.js"></script>
    <script src="../global/js/bootstrap.min.js"></script>
    <script src="../global/js/utubers.js"></script>
</head>
<body class="background-default">
<?php

$nav1 = require '../partes/nav1.php';
$linksnav1 = array();
$linksnav1['Humor'] =
    array('Home' => '../humor',
        'Coisas do Dia a Dia' => '../humor/coisasdoday',
        'Notícias Bizarras' => '../humor/noticiasbizarras',
        'Pegadinhas' => '../humor/pegadinhas',
        'Stand up' => '../humor/standup');

$linksnav1['Jogos'] = array('Home' => './',
    'Esportes' => 'esportes',
    'FPS' => 'fps',
    'MOBA' => 'moba',
    'Terror' => 'terror');

$linksnav1['Culinária'] = array('Home' => '../culinaria',
    'Fitness' => '../culinaria/fitness',
    'Tradicional' => '../culinaria/tradicional');

$linksnav1['Lifestyle'] = array('Home' => '../lifestyle',
    'Cotidiano' => '../lifestyle/cotidiano',
    'Make up' => '../lifestyle/makeup',
    'Viagem' => '../lifestyle/viagem');


$nav1 . nav1('#2b5cb5', '', $linksnav1, 'none', ['../global/imagens/ut.png', '../']);


$nav2 = require '../partes/nav2.php';
$linksnav2 = array();

$linksnav2['images/perfil/leninja.jpg'] = 'fps/leninja/';
$linksnav2['images/perfil/leet.jpg'] = 'fps/leet/';
$linksnav2['images/perfil/monark.jpg'] = 'fps/monark/';
$linksnav2['images/perfil/ambuplay.jpg'] = 'terror/ambuplay/';
$linksnav2['images/perfil/pewdiepie.jpg'] = 'terror/pewdiepie/';
$linksnav2['images/perfil/terror-bionic.jpg'] = 'terror/terror-bionic/';
$linksnav2['images/perfil/dotawtf.jpg'] = 'moba/dotawtf/';
$linksnav2['images/perfil/drybear.jpg'] = 'moba/drybear/';
$linksnav2['images/perfil/gordox.jpg'] = 'moba/gordox/';
$linksnav2['images/perfil/copa-cirrose.jpg'] = 'esportes/copa-cirrose/';
$linksnav2['images/perfil/gameplayrj.jpg'] = 'esportes/copa-cirrose/';
$linksnav2['images/perfil/sgu.jpg'] = 'esportes/sgu/';

$nav2 . nav2($linksnav2);

?>
<div class="container">

    <article class="row">

        <section class="col-xs-12 padding-spacement">
            <h1 class="text-center col-xs-12">Bem vindo ao portal de jogos</h1>

            <p class="text-justify col-xs-12 col-sm-10 col-sm-offset-1">Cum unus convexi evolvit aberant inmensa
                liberioris
                origine
                cesserunt arce legebantur aquae flamina ultima lucis undas dominari terris habitandae galeae elementaque
                indigestaque conversa bracchia et pressa contraria colebat caelumque naturae speciem moderantum erat
                porrexerat timebat alta terra satus chaos: erat boreas his militis madescit terris minantia duris mare
                coegit, orbem ambitae membra lucis volucres partim sive illas peregrinum retinebat tumescere mentes
                aquae
                crescendo sunt pontus. </p>
        </section>

        <div class="col-xs-12 padding-spacement">
            <div class="col-sm-10 col-xs-12 nopadding">
                <div class="thumbnail">
                    <a href="terror/pewdiepie">
                        <div class="caption">
                            <h4>PewDiePie</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/capas/capa-home-pewds.jpg" class="img-responsive">
                </div>
                <div class="thumbnail">
                    <a href="fps/leninja">
                        <div class="caption">
                            <h4>Le Ninja Mode</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/capas/capa-home-leninja.jpg" class="img-responsive">
                </div>
            </div>

            <aside class="col-sm-2 hidden-xs nopadding">
                <div class="thumbnail">
                    <a href="moba/drybear">
                        <div class="caption">
                            <h4>Dry Bear Games</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/drybear.jpg" class="img-responsive">
                </div>
                <div class="thumbnail">
                    <a href="esportes/copa-cirrose">
                        <div class="caption">
                            <h4>Canal 4</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/copa-cirrose.jpg" class="img-responsive">
                </div>
            </aside>
        </div>

        <section class="col-xs-12 padding-spacement">

            <h1 class="text-center col-xs-12 col-sm-12">First Person Shooter</h1>
            <article class="col-xs-12 col-sm-8 col-sm-offset-1 nopadding">
                <p class="text-justify col-xs-12 col-sm-12 padding-spacement">Cum unus convexi evolvit aberant inmensa
                    liberioris
                    origine
                    cesserunt arce legebantur aquae flamina ultima lucis undas dominari terris habitandae galeae
                    elementaque
                    indigestaque conversa bracchia et pressa contraria colebat caelumque naturae speciem moderantum erat
                    porrexerat timebat alta terra satus chaos: erat boreas his militis madescit terris minantia duris
                    mare
                    coegit, orbem ambitae membra lucis volucres partim sive illas peregrinum retinebat tumescere mentes
                    aquae
                    crescendo sunt pontus.</p>

                <div class="col-xs-12 col-sm-12">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9wD1-7IogH4"></iframe>
                    </div>
                </div>

            </article>

            <aside class="col-xs-12 col-sm-2 padding-spacement">
                <div class="thumbnail col-xs-4 col-sm-12">
                    <a href="fps/leninja">
                        <div class="caption">
                            <h4>Le Ninja Mode</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/leninja.jpg" class="img-responsive">
                </div>
                <div class="thumbnail col-xs-4 col-sm-12">
                    <a href="fps/leet">
                        <div class="caption">
                            <h4>Leet Gameplay</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/leet.jpg" class="img-responsive">
                </div>
                <div class="thumbnail col-xs-4 col-sm-12">
                    <a href="fps/monark">
                        <div class="caption">
                            <h4>Monark</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/monark.jpg" class="img-responsive">
                </div>
            </aside>
        </section>

        <section class="col-xs-12 padding-spacement">

            <h1 class="text-center col-sm-12">TERROR</h1>

            <aside class="col-xs-12 col-sm-2 col-sm-offset-1 padding-spacement">
                <div class="thumbnail col-xs-4 col-sm-12">
                    <a href="terror/pewdiepie">
                        <div class="caption">
                            <h4>Pew Die Pie</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/pewdiepie.jpg" class="img-responsive">
                </div>
                <div class="thumbnail col-xs-4 col-sm-12">
                    <a href="terror/ambuplay">
                        <div class="caption">
                            <h4>AmbuPlay</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/ambuplay.jpg" class="img-responsive">
                </div>
                <div class="thumbnail col-xs-4 col-sm-12">
                    <a href="terror/terror-bionic">
                        <div class="caption">
                            <h4>Terror Bionic</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/terror-bionic.jpg" class="img-responsive">
                </div>
            </aside>

            <article class="col-sm-8 nopadding">
                <p class="text-justify col-sm-12 padding-spacement">Cum unus convexi evolvit aberant inmensa liberioris
                    origine
                    cesserunt arce legebantur aquae flamina ultima lucis undas dominari terris habitandae galeae
                    elementaque
                    indigestaque conversa bracchia et pressa contraria colebat caelumque naturae speciem moderantum erat
                    porrexerat timebat alta terra satus chaos: erat boreas his militis madescit terris minantia duris
                    mare
                    coegit, orbem ambitae membra lucis volucres partim sive illas peregrinum retinebat tumescere mentes
                    aquae
                    crescendo sunt pontus.</p>

                <div class="col-sm-12">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tLbGWYi41dE"></iframe>
                    </div>
                </div>

            </article>
        </section>

        <section class="col-xs-12 padding-spacement">

            <h1 class="text-center col-xs-12 col-sm-12">MOBA</h1>
            <article class="col-xs-12 col-sm-8 col-sm-offset-1 nopadding">
                <p class="text-justify col-xs-12 col-sm-12 padding-spacement">Cum unus convexi evolvit aberant inmensa
                    liberioris
                    origine
                    cesserunt arce legebantur aquae flamina ultima lucis undas dominari terris habitandae galeae
                    elementaque
                    indigestaque conversa bracchia et pressa contraria colebat caelumque naturae speciem moderantum erat
                    porrexerat timebat alta terra satus chaos: erat boreas his militis madescit terris minantia duris
                    mare
                    coegit, orbem ambitae membra lucis volucres partim sive illas peregrinum retinebat tumescere mentes
                    aquae
                    crescendo sunt pontus.</p>

                <div class="col-xs-12 col-sm-12">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rDOxxRf4muE"></iframe>
                    </div>
                </div>

            </article>

            <aside class="col-xs-12 col-sm-2 padding-spacement">
                <div class="thumbnail col-xs-4 col-sm-12">
                    <a href="moba/drybear">
                        <div class="caption">
                            <h4>Dry Bear Gamers</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/drybear.jpg" class="img-responsive">
                </div>
                <div class="thumbnail col-xs-4 col-sm-12">
                    <a href="moba/dotawtf">
                        <div class="caption">
                            <h4>Dota WTF</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/dotawtf.jpg" class="img-responsive">
                </div>
                <div class="thumbnail col-xs-4 col-sm-12">
                    <a href="moba/gordox">
                        <div class="caption">
                            <h4>Gordox</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/gordox.jpg" class="img-responsive">
                </div>
            </aside>
        </section>

        <section class="col-xs-12 padding-spacement">

            <h1 class="text-center col-sm-12">ESPORTES</h1>

            <aside class="col-xs-12 col-sm-2 col-sm-offset-1 padding-spacement">
                <div class="thumbnail col-xs-4 col-sm-12">
                    <a href="esportes/copa-cirrose">
                        <div class="caption">
                            <h4>Copa Cirrose</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/copa-cirrose.jpg" class="img-responsive">
                </div>
                <div class="thumbnail col-xs-4 col-sm-12">
                    <a href="esportes/gameplayrj">
                        <div class="caption">
                            <h4>Gameplay RJ/h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/GameplayRj.jpg" class="img-responsive">
                </div>
                <div class="thumbnail col-xs-4 col-sm-12">
                    <a href="esportes/sgu">
                        <div class="caption">
                            <h4>SGU</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <img src="images/perfil/SGU.jpg" class="img-responsive">
                </div>
            </aside>

            <article class="col-sm-8 nopadding">
                <p class="text-justify col-sm-12 padding-spacement">Cum unus convexi evolvit aberant inmensa liberioris
                    origine
                    cesserunt arce legebantur aquae flamina ultima lucis undas dominari terris habitandae galeae
                    elementaque
                    indigestaque conversa bracchia et pressa contraria colebat caelumque naturae speciem moderantum erat
                    porrexerat timebat alta terra satus chaos: erat boreas his militis madescit terris minantia duris
                    mare
                    coegit, orbem ambitae membra lucis volucres partim sive illas peregrinum retinebat tumescere mentes
                    aquae
                    crescendo sunt pontus.</p>

                <div class="col-sm-12">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/X45M-lM_S54?list=PLDRcEdRquEb3Leu57ELcBeANNcX1FP3qc"></iframe>
                    </div>
                </div>

            </article>
        </section>

    </article>

    <section class="col-xs-12">
        <h1 class="text-left col-xs-12">Ultimas postagens</h1>
        <section class="col-xs-12 padding-spacement">
            <div class="col-sm-4 col-xs-12">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/Co8LPV2UfgY?list=PLDRcEdRquEb3Leu57ELcBeANNcX1FP3qc"></iframe>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wMi-4XOS5n8"></iframe>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/dJs3RfHS92U?list=PL-mtQGsMyOZVd2GsQNaU9t2cFzb-S8Pr4"></iframe>
                </div>
            </div>
        </section>
        <section class="col-xs-12 hidden-xs padding-spacement">
            <div class="col-sm-4">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FYV1CdfwVgw"></iframe>
                </div>
            </div>
            <div class="col-sm-4">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4xvF1dohXCM"></iframe>
                </div>
            </div>
            <div class="col-sm-4">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Z4OOh1dM96s"></iframe>
                </div>
            </div>
        </section>
    </section>

</div>
<?php

$footer = require('../partes/footer.php');
$linksfooter = array();


$linksfooter['Home'] = './';

$linksfooter['Humor'] = [
    'Home' => 'humor',
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
    'Home' => 'jogos',
    'Esportes' => [
        'Home' => 'esportes',
        'Copa Cirrose' => 'esportes/copa-cirrose',
        'Gameplay RJ' => 'esportes/gameplayrj',
        'SGU' => 'esportes/sgu',
    ],
    'FPS' => [
        'Home' => 'fps',
        'Leet' => 'fps/leet',
        'LeNinja' => 'fps/leninja',
        'Monark' => 'fps/monark'
    ],
    'Moba' => [
        'Home' => 'moba',
        'Dota WTF' => 'moba/dotawtf',
        'Dry Bear' => 'moba/drybear',
        'Gordox' => 'moba/gordox'
    ],
    'Terror' => [
        'Home' => 'terror',
        'Ambuplay' => 'terror/ambuplay',
        'Pew Die Pie' => 'terror/pewdiepie',
        'Terror-Bionic' => 'terror/terror-bionic'
    ]
];

$linksfooter['Culinária'] = [
    'Home' => 'culinaria',
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
    'Home' => 'lifestyle',
    'Cotidiano' => [
        'Home' => '../lifestyle/cotidiano',
        'Flávia Calina' => '../lifestyle/cotidiano/flaviacalina.php',
        'Taciele Alcolea' => '../lifestyle/cotidiano/tacialcolea.php',
        'Viih Tube' => '../lifestyle/cotidiano/vihtube.php'
    ],
    'Makeup' => [
        'Home' => '../lifestyle/makeup',
        'Alice Salazar' => '../lifestyle/makeup/alicesalazar.php',
        'Bia Andrade' => '../lifestyle/makeup/biaandrade.php',
        'Camila Coelho' => '../lifestyle/makeup/camilacoelho.php'
    ],
    'Viagem' => [
        'Home' => '../lifestyle/viagem',
        'Bruna Vieira' => '../lifestyle/viagem/brunavieira.php',
        'Camila Coutinho' => '../lifestyle/viagem/camilacoutinho.php',
        'Lu Sicchierolli' => '../lifestyle/viagem/lusicchi.php'
    ]
];

$footer . footer($linksfooter, '../sobre.php', '../contato.php');

?>
<script>


</script>
</body>
</html>
