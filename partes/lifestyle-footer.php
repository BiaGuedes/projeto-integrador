<?php

$footer = require('../../partes/footer.php');
$linksfooter = array();



$linksfooter['Home'] = './';

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
    'Home' => '../../culinaria/index.php',
    'Fitness' => [
        'Home' => '../../culinaria/fitness',
        'Comer, Treinar e Amar' => '../../culinaria/fitness/comertreinareamar.php',
        'Culinária Saudável' => '../../culinaria/fitness/culinariasaudavel.php',
        'Fábrica de Monstros' => '../../culinaria/fitness/fabricademonstros.php',
        'Fit Men Cook' => '../../culinaria/fitness/fitmencook.php',
        'Made in Japan' => '../../culinaria/fitness/madeinjpn.php'
    ],
    'Tradicional' => [
        'Home' => '../../culinaria/tradicional',
        'Ana Maria Brogui' => '../../culinaria/tradicional/anamariabrogui.php',
        'Cozinha para Dois' => '../../culinaria/tradicional/cozinhaparadois.php',
        'Gastronomismo' => '../../culinaria/tradicional/gastronomismo.php',
        'I Could Kill for Dessert' => '../../culinaria/tradicional/icouldkillfordessert.php',
        'Rolê Gourmet' => '../../culinaria/tradicional/rolegourmet.php'
    ]
];

$linksfooter['Lifestyle'] = [
    'Home' => '../index.php',
    'Cotidiano' => [
        'Home' => '../cotidiano/index.php',
        'Flávia Calina' => '../cotidiano/flaviacalina.php',
        'Taciele Alcolea' => '../cotidiano/tacialcolea.php',
        'Viih Tube' => '../cotidiano/vihtube.php'
    ],
    'Makeup' => [
        'Home' => 'index.php',
        'Alice Salazar' => '../makeup/alicesalazar.php',
        'Bia Andrade' => '../makeup/biaandrade.php',
        'Camila Coelho' => '../makeup/camilacoelho.php'
    ],
    'Viagem' => [
        'Home' => '../viagem/index.php',
        'Bruna Vieira' => '../viagem/brunavieira.php',
        'Camila Coutinho' => '../viagem/camilacoutinho.php',
        'Lu Sicchierolli' => '../viagem/lusicchi.php'
    ]
];


$footer . footer($linksfooter, '../../quemsomos.php', '../../contato.php');

?>
