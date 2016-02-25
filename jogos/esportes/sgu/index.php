<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../global/css/utubers.css">
    <link rel="stylesheet" href="../../css/games.css">
    <link rel="shortcut icon" href="../../../global/imagens/icon.png" type="image/png" />
    <script src="../../../global/js/jquery-2.1.1.js"></script>
    <script src="../../../global/js/bootstrap.min.js"></script>
    <script src="../../../global/js/utubers.js"></script>
</head>
<body class="background-default">
<?php

$nav1 = require '../../../partes/nav1.php';
$linksnav1 = array();
$linksnav1['Humor'] =
    array('Home' => '../../../humor',
        'Coisas do Dia a Dia' => '../../../humor/coisasdoday',
        'Notícias Bizarras' => '../../../humor/noticiasbizarras',
        'Pegadinhas' => '../../../humor/pegadinhas',
        'Stand up' => '../../../humor/standup');

$linksnav1['Jogos'] = array('Home' => '../../',
    'Esportes' => '../../esportes',
    'FPS' => '../../fps',
    'MOBA' => '../../moba',
    'Terror' => '../../terror');

$linksnav1['Culinária'] = array('Home' => '../../../culinaria',
    'Fitness' => '../../../culinaria/fitness',
    'Tradicional' => '../../../culinaria/tradicional');

$linksnav1['Lifestyle'] = array('Home' => '../../../lifestyle',
    'Cotidiano' => '../../../lifestyle/cotidiano',
    'Make up' => '../../../lifestyle/makeup',
    'Viagem' => '../../../lifestyle/viagem');

$nav1 . nav1('#2b5cb5', '', $linksnav1, 'none', ['../../../global/imagens/ut.png', '../../../']);

$nav2 = require '../../../partes/nav2.php';
$linksnav2 = array();

$linksnav2['../../images/perfil/copa-cirrose.jpg'] = '../copa-cirrose/';
$linksnav2['../../images/perfil/GameplayRJ.jpg'] = '../gameplayrj/';
$linksnav2['../../images/perfil/SGU.jpg'] = '../sgu/';

$nav2 . nav2($linksnav2);

?>
<div class="container">

    <article class="col-sm-12 padding-spacement">

        <section class="row">
            <div class="col-sm-3 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                <img class="img-circle img-responsive" src="../../images/perfil/SGU.jpg">
            </div>

            <h1 class="text-left col-sm-9 col-xs-12">Sports Gaming Universe</h1>

            <p class="text-justify col-sm-9 col-xs-12">But I must explain to you how all this mistaken idea of
                denouncing pleasure
                and
                praising pain was born and I will give you a complete account of the system, and expound the actual
                teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to
                pursue
                pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who
                loves
                or pursues or desires to obtain pain of itself, because it is pain, but because occasionally
                circumstances
                occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us
                ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any
                right
                to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who
                avoids a pain that produces no resultant pleasure?</p>
        </section>

        <section class="row padding-spacement">

            <section class="col-sm-8 col-xs-12 nomargin nopadding">
                <h1 class="text-left col-xs-12">TOP Vídeos</h1>

                <div class="col-xs-12 hidden-xs">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/cL2yglvz5G8?list=PLh6u-PMmIR8wfoNnk1IPFpzwdtdvnEBNo"></iframe>
                    </div>
                </div>
            </section>

            <aside class="col-sm-4 hidden-xs nopadding nomargin">

                <h2 class="text-center col-sm-12 padding-bottom" id="title-comentarios">Comentários</h2>

                <div class="col-sm-12 nopadding coment-item">
                    <img class="img-circle col-sm-3" src="../../images/icones/fan-youtuber-coment-1.jpg">

                    <p class="text-justify"><a class="text-center" href="#">@augustomr3c: </a>Muito bom o vídeo, Cauê!
                        Não tem
                        vídeo mais insano e doidera que o teu, Wooohoo!!!</p>
                </div>

                <div class="col-sm-12 nopadding coment-item">
                    <img class="img-circle col-sm-3" src="../../images/icones/fan-youtuber-coment-2.jpg">

                    <p class="text-justify"><a class="text-center" href="#">@jabilsonz396: </a>Muito bom o vídeo, Cauê!
                        Não tem
                        vídeo mais insano e doidera que o teu, Wooohoo!!!</p>
                </div>

                <div class="col-sm-12 nopadding coment-item">
                    <img class="img-circle col-sm-3" src="../../images/icones/fan-youtuber-coment-3.jpg">

                    <p class="text-justify"><a class="text-center" href="#">@suelitonmedes: </a>Muito bom o vídeo, Cauê!
                        Não tem
                        vídeo mais insano e doidera que o teu, Wooohoo!!!</p>
                </div>

                <textarea class="col-sm-12 nopadding" rows="3"></textarea>
                <button type="button" class="btn btn-color col-sm-12">COMENTAR</button>
            </aside>

            <section class="col-xs-12 col-sm-12 padding-spacement">
                <div class="col-xs-12 col-sm-3 nopadding">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/2_Iqc1j5Exc?list=PLh6u-PMmIR8wfoNnk1IPFpzwdtdvnEBNo"></iframe>
                    </div>
                    <p class="text-justify col-sm-12 padding-spacement">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-xs-12 col-sm-3 nopadding">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/8yo7GUkqyzM?list=PLh6u-PMmIR8zr3ySSFLXTDCGkDbFEv6x8"></iframe>
                    </div>
                    <p class="text-justify col-sm-12 padding-spacement">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-xs-12 col-sm-3 nopadding">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/DmPIuM-I6uA?list=PLh6u-PMmIR8zr3ySSFLXTDCGkDbFEv6x8"></iframe>
                    </div>
                    <p class="text-justify col-sm-12 padding-spacement">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-xs-12 col-sm-3 nopadding">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/NY0JCr1fnGg?list=PLh6u-PMmIR8zKMAn9Zt26P9TlumkAxPVF"></iframe>
                    </div>
                    <p class="text-justify col-sm-12 padding-spacement">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </section>
        </section>

    </article>

    <section class="col-sm-12 padding-spacement">
        <h1 class="text-left col-sm-12">Participações</h1>

        <section class="col-xs-12 padding-spacement padding-bottom">
            <div class="col-xs-12 col-sm-6">
                <img src="../../images/capas/capa-part1-sgu.jpg" class="img-responsive">
            </div>

            <h2 class="text-left col-sm-6 col-xs-12 nomargin">SGU pretende virar atleta</h2>

            <p class="text-justify col-sm-6 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu.</p>

            <div class="col-sm-3 col-xs-12 padding-bottom">
                <img src="../../images/icones/sub-part1-sgu.jpg" alt="" class="img-responsive">
            </div>

            <div class="col-sm-3 col-xs-12 padding-bottom">
                <img src="../../images/icones/sub-part2-sgu.jpg" alt="" class="img-responsive">
            </div>
        </section>
    </section>
</div>
<?php

$footer = require('../../../partes/footer.php');
$linksfooter = array();


$linksfooter['Home'] = '../../../';

$linksfooter['Humor'] = [
    'Home' => 'humor',
    'Pegadinhas' => [
        'Home' => '../../../humor/pegadinhas',
        'Canal Boom' => '../../../humor/pegadinhas/canalboom.php',
        'Nao é Sério TV' => '../../../humor/pegadinhas/naoeseriotv.php',
        'Viral Brothers' => '../../../humor/pegadinhas/viralbrothers.php'
    ],
    'Notícias Bizarras' => [
        'Home' => '../../../humor/noticiasbizarras',
        'Caue Moura' => '../../../humor/noticiasbizarras/cauemoura.php',
        'Passou na TV' => '../../../humor/noticiasbizarras/passounatv.php',
        'Rodada The Noite' => '../../../humor/noticiasbizarras/.php'
    ],
    'Stand Up' => [
        'Home' => '../../../humor/standup',
        'Comedy Center Brasil' => '../../../humor/standup/comedycenterbrasil.php',
        'Os Barbixas' => '../../../humor/standup/osbarbixas.php',
        'Rafinha Bastos' => '../../../humor/standup/rafinhabastos.php'
    ],
    'Coisas do Day' => [
        'Home' => '../../../humor/coisasdoday',
        'Galo Frito' => '../../../humor/coisasdoday/galofrito.php',
        'Parafernalha' => '../../../humor/coisasdoday/parafernalha.php',
        'Porta dos Fundos' => '../../../humor/coisasdoday/portadosfundos.php'
    ]
];

$linksfooter['Jogos'] = [
    'Home' => '../../../jogos',
    'Esportes' => [
        'Home' => '../../esportes',
        'Copa Cirrose' => '../../esportes/copa-cirrose',
        'Gameplay RJ' => '../../esportes/gameplayrj',
        'SGU' => '../../esportes/sgu',
    ],
    'FPS' => [
        'Home' => '../../fps',
        'Leet' => '../../fps/leet',
        'LeNinja' => '../../fps/leninja',
        'Monark' => '../../fps/monark'
    ],
    'Moba' => [
        'Home' => '../../moba',
        'Dota WTF' => '../../moba/dotawtf',
        'Dry Bear' => '../../moba/drybear',
        'Gordox' => '../../moba/gordox'
    ],
    'Terror' => [
        'Home' => '../../terror',
        'Ambuplay' => '../../terror/ambuplay',
        'Pew Die Pie' => '../../terror/pewdiepie',
        'Terror-Bionic' => '../../terror/terror-bionic'
    ]
];

$linksfooter['Culinária'] = [
    'Home' => 'culinaria',
    'Fitness' => [
        'Home' => '../../../culinaria/fitness',
        'Comer, Treinar e Amar' => '../../../culinaria/fitness/comertreinareamar.php',
        'Culinária Saudável' => '../../../culinaria/fitness/culinariasaudavel.php',
        'Fábrica de Monstros' => '../../../culinaria/fitness/fabricademonstros.php',
        'Fit Men Cook' => '../../../culinaria/fitness/fitmencook.php',
        'Made in Japan' => '../../../culinaria/fitness/madeinjpn.php'
    ],
    'Tradicional' => [
        'Home' => '../../../culinaria/tradicional',
        'Ana Maria Brogui' => '../../../culinaria/tradicional/anamariabrogui.php',
        'Cozinha para Dois' => '../../../culinaria/tradicional/cozinhaparadois.php',
        'Gastronomismo' => '../../../culinaria/tradicional/gastronomismo.php',
        'I Could Kill for Dessert' => '../../../culinaria/tradicional/icouldkillfordessert.php',
        'Rolê Gourmet' => '../../../culinaria/tradicional/rolegourmet.php'
    ]
];

$linksfooter['Lifestyle'] = [
    'Home' => 'lifestyle',
    'Cotidiano' => [
        'Home' => '../../../lifestyle/cotidiano',
        'Flávia Calina' => '../../../lifestyle/cotidiano/flaviacalina.php',
        'Taciele Alcolea' => '../../../lifestyle/cotidiano/tacialcolea.php',
        'Viih Tube' => '../../../lifestyle/cotidiano/vihtube.php'
    ],
    'Makeup' => [
        'Home' => '../../../lifestyle/makeup',
        'Alice Salazar' => '../../../lifestyle/makeup/alicesalazar.php',
        'Bia Andrade' => '../../../lifestyle/makeup/biaandrade.php',
        'Camila Coelho' => '../../../lifestyle/makeup/camilacoelho.php'
    ],
    'Viagem' => [
        'Home' => '../../../lifestyle/viagem',
        'Bruna Vieira' => '../../../lifestyle/viagem/brunavieira.php',
        'Camila Coutinho' => '../../../lifestyle/viagem/camilacoutinho.php',
        'Lu Sicchierolli' => '../../../lifestyle/viagem/lusicchi.php'
    ]
];

$footer . footer($linksfooter, '../../../sobre.php', '../../../contato.php');

?>

</body>
</html>
