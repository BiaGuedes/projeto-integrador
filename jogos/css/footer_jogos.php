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
