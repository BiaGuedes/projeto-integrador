<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../global/css/utubers.css">
        <link rel="shortcut icon" href="../../global/imagens/icon.png" type="image/png" />
    <link rel="stylesheet" href="../css/games.css">
    <script src="../../global/js/jquery-2.1.1.js"></script>
    <script src="../../global/js/bootstrap.min.js"></script>
    <script src="../../global/js/utubers.js"></script>
</head>
<body class="background-default">
<?php

$nav1 = require '../../partes/nav1.php';
$linksnav1 = array();
$linksnav1['Humor'] =
    array('Home' => '../../humor',
        'Coisas do Dia a Dia' => '../../humor/coisasdoday',
        'Notícias Bizarras' => '../../humor/noticiasbizarras',
        'Pegadinhas' => '../../humor/pegadinhas',
        'Stand up' => '../../humor/standup');

$linksnav1['Jogos'] = array('Home' => '../',
    'Esportes' => '../esportes',
    'FPS' => '../fps',
    'MOBA' => '../moba',
    'Terror' => '../terror');

$linksnav1['Culinária'] = array('Home' => '../../culinaria',
    'Fitness' => '../../../culinaria/fitness',
    'Tradicional' => '../../../culinaria/tradicional');

$linksnav1['Lifestyle'] = array('Home' => '../../lifestyle',
    'Cotidiano' => '../../lifestyle/cotidiano',
    'Make up' => '../../lifestyle/makeup',
    'Viagem' => '../../lifestyle/viagem');

$nav1.nav1('#2b5cb5', '', $linksnav1, 'none', ['../../global/imagens/ut.png','../../']);

$nav2 = require '../../partes/nav2.php';
$linksnav2 = array();

$linksnav2['../images/perfil/leninja.jpg'] = 'leninja/';
$linksnav2['../images/perfil/leet.jpg'] = 'leet/';
$linksnav2['../images/perfil/monark.jpg'] = 'monark/';

$nav2 . nav2($linksnav2);

?>
<div class="container">

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 padding-spacement">
        <img src="../images/capas/capa-categoria-fps.jpg" class="img-responsive">
    </div>

    <article class="col-xs-12 col-sm-9">
        <section class="col-xs-12 padding-spacement padding-bottom youtuber-section" id="perfil-youtuber-1">

            <div class="col-xs-9 col-xs-offset-2 col-sm-offset-0 col-sm-4">
                <img src="../images/perfil/leninja.jpg" class="img-circle img-responsive">
            </div>

            <h1 class="col-xs-12 col-sm-8 text-center">Le Ninja Mode</h1>
            <div class="col-xs-12 col-sm-4 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YpD6IN9lCcc"></iframe>
                </div>
            </div>

            <div class="col-xs-12 col-md-4 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Xq5Vz92SiV0"></iframe>
                </div>
            </div>

            <h2 class="text-left col-xs-12">Sobre</h2>
            <p class="text-justify col-xs-12">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

        </section>

        <section class="col-xs-12 padding-spacement padding-bottom youtuber-section" id="perfil-youtuber-2">

            <div class="col-xs-9 col-xs-offset-2 col-sm-offset-0 col-sm-4">
                <img src="../images/perfil/leet.jpg" class="img-circle img-responsive">
            </div>

            <h1 class="col-xs-12 col-sm-8 text-center">Leet Gameplay</h1>

            <div class="col-xs-12 col-md-4 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/giOjbpseVyA"></iframe>
                </div>
            </div>

            <div class="col-xs-12 col-md-4 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iyCBETidKN0"></iframe>
                </div>
            </div>

            <h2 class="text-left col-xs-12 col-sm-12">Sobre</h2>

            <p class="text-justify col-xs-12 col-sm-12">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

        </section>

        <section class="col-xs-12 padding-spacement padding-bottom youtuber-section" id="perfil-youtuber-3">

            <div class="col-xs-9 col-xs-offset-2 col-sm-offset-0 col-sm-4">
                <img src="../images/perfil/monark.jpg" class="img-circle img-responsive">
            </div>

            <h1 class="col-xs-12 col-md-8 text-center">Monark</h1>

            <div class="col-xs-12 col-md-4 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uFS5icogg5U"></iframe>
                </div>
            </div>

            <div class="col-xs-12 col-md-4 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/o5OSfk9OvMA"></iframe>
                </div>
            </div>

            <h2 class="text-left col-xs-12 col-sm-12">Sobre</h2>

            <p class="text-justify col-xs-12 col-md-12">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

        </section>
    </article>

    <aside class="col-xs-12 col-sm-3" id="novidades">
        <h1 class="text-center col-xs-12 col-sm-12">Ultimos Posts</h1>

        <section class="col-xs-12" id="novidades-item-1">

            <h3 class="text-center col-xs-12">Leet Gameplay</h3>

            <div class="col-xs-12 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/giOjbpseVyA"></iframe>
                </div>
            </div>

            <h4 class="text-center col-xs-12">Cenas Vish</h4>

            <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>

        </section>

        <section class="col-xs-12" id="novidades-item-2">

            <h3 class="text-center col-xs-12">Le Ninja Mode</h3>

            <div class="col-xs-12 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Xq5Vz92SiV0"></iframe>
                </div>
            </div>

            <h4 class="text-center col-xs-12">Portal 2</h4>

            <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>

        </section>

        <section class="col-xs-12" id="novidades-item-3">

            <h3 class="text-center col-xs-12">Monark</h3>

            <div class="col-xs-12 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/h_kBCuBe6gM"></iframe>
                </div>
            </div>

            <h4 class="text-center col-xs-12">Monark é matador</h4>

            <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>

        </section>

        <section class="col-xs-12" id="novidades-item-4">

            <h3 class="text-center col-xs-12">Le Ninja Mode</h3>

            <div class="col-xs-12 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wRUwKV9rm6o"></iframe>
                </div>
            </div>

            <h4 class="text-center col-xs-12">Portal 2 - Genius</h4>

            <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>

        </section>

    </aside>

    <section class="col-md-12 padding-spacement">

        <h1 class="text-center col-md-12">Noticias e atualizações</h1>
        <section class="col-xs-12 col-sm-4">
            <div class="col-xs-12">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pGMKNzsHSdc"></iframe>
                </div>
            </div>
            <h3 class="text-center col-xs-12">Cauê moura faz comercial com outros Youtubers</h3>
        </section>
        <section class="col-xs-12 col-sm-4">
            <div class="col-xs-12">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nGL6bImwaJA"></iframe>
                </div>
            </div>
            <h3 class="text-center col-xs-12">Monark faz comercial da Live TIM</h3>
        </section>
        <section class="col-xs-12 col-sm-4">
            <div class="col-xs-12">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PJgfBv9tRa4"></iframe>
                </div>
            </div>
            <h3 class="text-center col-xs-12">LeNinja entre em parceria com a Ubisoft!</h3>
        </section>
    </section>
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
        'Rodada The Noite' => '../../humor/noticiasbizarras/.php'
    ],
    'Stand Up' => [
        'Home' => '../../humor/standup',
        'Comedy Center Brasil' => '../../humor/standup/comedycenterbrasil.php',
        'Os Barbixas' => '../../humor/standup/osbarbixas.php',
        'Rafinha Bastos' => '../../humor/standup/rafinhabastos.php'
    ],
    'Coisas do Day' => [
        'Home' => '../../humor/coisasdoday',
        'Galo Frito' => '../../humor/coisasdoday/galofrito.php',
        'Parafernalha' => '../../humor/coisasdoday/parafernalha.php',
        'Porta dos Fundos' => '../../humor/coisasdoday/portadosfundos.php'
    ]
];

$linksfooter['Jogos'] = [
    'Home' => '../jogos',
    'Esportes' => [
        'Home' => '../esportes',
        'Copa Cirrose' => '../esportercopa-cirrose',
        'Gameplay RJ' => '../esportergameplayrj',
        'SGU' => '../esportersgu',
    ],
    'FPS' => [
        'Home' => '../fps',
        'Leet' => '../fps/leet',
        'LeNinja' => '../fps/leninja',
        'Monark' => '../fps/monark'
    ],
    'Moba' => [
        'Home' => '../moba',
        'Dota WTF' => '../moba/dotawtf',
        'Dry Bear' => '../moba/drybear',
        'Gordox' => '../moba/gordox'
    ],
    'Terror' => [
        'Home' => '../terror',
        'Ambuplay' => '../terror/ambuplay',
        'Pew Die Pie' => '../terror/pewdiepie',
        'Terror-Bionic' => '../terror/terror-bionic'
    ]
];

$linksfooter['Culinária'] = [
    'Home' => 'culinaria',
    'Fitness' => [
        'Home' => '../../culinariafitness',
        'Comer, Treinar e Amar' => '../../culinariafitness/comertreinareamar.php',
        'Culinária Saudável' => '../../culinariafitness/culinariasaudavel.php',
        'Fábrica de Monstros' => '../../culinariafitness/fabricademonstros.php',
        'Fit Men Cook' => '../../culinariafitness/fitmencook.php',
        'Made in Japan' => '../../culinariafitness/madeinjpn.php'
    ],
    'Tradicional' => [
        'Home' => '../../culinariatradicional',
        'Ana Maria Brogui' => '../../culinariatradicional/anamariabrogui.php',
        'Cozinha para Dois' => '../../culinariatradicional/cozinhaparadois.php',
        'Gastronomismo' => '../../culinariatradicional/gastronomismo.php',
        'I Could Kill for Dessert' => '../../culinariatradicional/icouldkillfordessert.php',
        'Rolê Gourmet' => '../../culinariatradicional/rolegourmet.php'
    ]
];

$linksfooter['Lifestyle'] = [
    'Home' => 'lifestyle',
    'Cotidiano' => [
        'Home' => '../../lifestyle/cotidiano',
        'Flávia Calina' => '../../lifestyle/cotidiano/flaviacalina.php',
        'Taciele Alcolea' => '../../lifestyle/cotidiano/tacialcolea.php',
        'Viih Tube' => '../../lifestyle/cotidiano/vihtube.php'
    ],
    'Makeup' => [
        'Home' => '../../lifestyle/makeup',
        'Alice Salazar' => '../../lifestyle/makeup/alicesalazar.php',
        'Bia Andrade' => '../../lifestyle/makeup/biaandrade.php',
        'Camila Coelho' => '../../lifestyle/makeup/camilacoelho.php'
    ],
    'Viagem' => [
        'Home' => '../../lifestyle/viagem',
        'Bruna Vieira' => '../../lifestyle/viagem/brunavieira.php',
        'Camila Coutinho' => '../../lifestyle/viagem/camilacoutinho.php',
        'Lu Sicchierolli' => '../../lifestyle/viagem/lusicchi.php'
    ]
];

$footer . footer($linksfooter, '../../sobre.php', '../../contato.php');

?>
<script>


</script>
</body>
</html>
