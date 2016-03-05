<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Utuber - O primeiro portal sobre Youtubers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway|Open+Sans|Vollkorn' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="global/imagens/icon.png" type="image/png" />
    <link rel="stylesheet" href="global/css/bootstrap.min.css">
    <link rel="stylesheet" href="global/css/utubers.css">
    <script src="global/js/jquery-2.1.1.js"></script>
    <script src="global/js/bootstrap.min.js"></script>
    <script src="global/js/utubers.js"></script>
</head>
<body>
<?php

$nav1 = require 'partes/nav1.php';
$linksnav1 = array();
$linksnav1['Humor'] =
    array('Home' => 'humor',
        'Coisas do Dia a Dia' => 'humor/coisasdoday',
        'Notícias Bizarras' => 'humor/noticiasbizarras',
        'Pegadinhas' => 'humor/pegadinhas',
        'Stand up' => 'humor/standup');

$linksnav1['Jogos'] =  array('Home' => 'jogos',
    'Esportes' => 'jogos/esportes',
    'FPS' => 'jogos/fps',
    'MOBA' => 'jogos/moba',
    'Terror' => 'jogos/terror');

$linksnav1['Culinária'] = array('Home' => 'culinaria',
    'Fitness' => 'culinaria/fitness',
    'Tradicional' => 'culinaria/tradicional');

$linksnav1['Lifestyle'] = array('Home' => 'lifestyle',
    'Cotidiano' => 'lifestyle/cotidiano',
    'Make up' => 'lifestyle/makeup',
    'Viagem' => 'lifestyle/viagem');


$nav1.nav1('#D70019', '', $linksnav1, 'none', ['global/imagens/ut.png','./']);

?>
<article class="articlesa col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 paddtop20">
    <div class="col-xs-12 padd0">
        <section class="col-xs-12 col-md-7 col-sm-7 padd0">
            <article class="col-xs-12 col-md-12" >
                <div class="col-xs-12 col-md-12" >
                    <div class="linh col-xs-12 margtop10"> <span> Destaque </span> </div>
                </div>
                <a href="#">
                    <img src="global/imagens/principal.jpg" class="img-responsive col-xs-12 padd0" alt="Imagem principal">
                </a>
            </article>
            <div class="col-xs-12 col-md-6  padd0" >
                <div class="linh col-xs-10 col-xs-offset-1"> <span> Culinária </span> </div>
                <div class="col-xs-12 col-md-12 " ><a href="culinaria"><img src="global/imagens/temax.jpg" class="img-responsive col-xs-12 padd0" alt="Publicidade"></a>
                    <p>Lorem ipsum dolor sit amet, in elementum luctus, sodales nec dui, aut mauris. Cras id, per nesciunt tincidunt, id ut volutpat. Purus justo.</p>
                    <p>Lorem ipsum dolor sit amet, in elementum luctus, sodales nec dui, aut mauris. Cras id, per nesciunt tincidunt, id ut volutpat. Purus justo.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6  padd0 " >
                <div class="linh col-xs-10 col-xs-offset-1"> <span> Jogos </span> </div>
                <div class="col-xs-12 col-md-12 " ><a href="jogos"><img src="global/imagens/temay.jpg" class="img-responsive col-xs-12 padd0" alt="Publicidade"></a>
                    <p>Lorem ipsum dolor sit amet, in elementum luctus, sodales nec dui, aut mauris. Cras id, per nesciunt tincidunt, id ut volutpat. Purus justo.</p>
                    <p>Lorem ipsum dolor sit amet, in elementum luctus, sodales nec dui, aut mauris. Cras id, per nesciunt tincidunt, id ut volutpat. Purus justo.</p>
                </div>
            </div>
        </section>
        <div class="col-xs-12 col-md-5 col-sm-5 padd0">
            <section class="col-xs-12 col-md-12 padd0 ">
                <div class="col-xs-12 col-md-12 padd0" ><a href="#" class="bg-danger" id="public1"><img src="global/imagens/public1.jpg" class="col-xs-12 padd0" alt="Publicidade"></a></div>
            </section>
            <div class="col-xs-12 col-md-12" >
                <div class="linh col-xs-10 col-xs-offset-1"> <span> Recomendado </span> </div>
            </div>
            <aside class="col-xs-12 col-md-12 padd0" id="recomend" >
                <div class="col-xs-12 padd0">
                    <div class="col-xs-6 col-sm-12 col-md-6 padd0">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MtUWWtTvrBM"></iframe>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-6 des" >
                        <p>Lorem ipsum dolor sit amet, in elementum luctus, sodales nec dui, aut mauris. Cras id, per nesciunt tincidunt.</p>
                    </div>
                </div>
                <div class="col-xs-12 padd0">
                    <div class="col-xs-6 col-sm-12 col-md-6 padd0">
                      <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ExOce7kWJsQ"></iframe>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-6 des" >
                        <p>Lorem ipsum dolor sit amet, in elementum luctus, sodales nec dui, aut mauris. Cras id, per nesciunt tincidunt.</p>
                    </div>
                </div><div class="col-xs-12 padd0">
                    <div class="col-xs-6 col-sm-12 col-md-6 padd0">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6Si76u41oQU"></iframe>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-6 des" >
                        <p>Lorem ipsum dolor sit amet, in elementum luctus, sodales nec dui, aut mauris. Cras id, per nesciunt tincidunt.</p>
                    </div>
                </div><div class="col-xs-12 padd0">
                    <div class="col-xs-6 col-sm-12 col-md-6 padd0">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HokyEdjb2HU"></iframe>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-6 des" >
                        <p>Lorem ipsum dolor sit amet, in elementum luctus, sodales nec dui, aut mauris. Cras id, per nesciunt tincidunt.</p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <section class="col-xs-12 col-md-12 toplikes padd0" >
        <div class="linh col-xs-10 col-xs-offset-1"> <span> Top Likes </span> </div>
        <div class="col-xs-12 col-md-4 margtop20">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vEaNCoCXcdk"></iframe>
            </div>
        </div>
        <div class="col-xs-12 col-md-4 margtop20">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MiO01444jLA"></iframe>
            </div>
        </div>
        <div class="col-xs-12 col-md-4 margtop20">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0mC9kkysGNA"></iframe>
            </div>
        </div>
    </section>
    <section class="col-xs-12 col-md-12 padd0" >
        <div class="linh col-xs-10 col-xs-offset-1"></div>
        <div class="col-xs-12 col-md-7 ">
            <div class="col-xs-12 col-sm-6 margtop20" >
                <a href="lifestyle/viagem/camilacoutinho.php"><img src="./lifestyle/imagens/adv-camicoutinho.jpg" alt="Canal Garotas Estúpidas" class="img-responsive"></a>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h1>Texto sobre o youtuber</h1>
                <p>Lorem ipsum dolor sit amet, in elementum luctus, sodales nec dui, aut mauris. Cras id, per nesciunt tincidunt, id ut volutpat. Purus justo.</p>
                <p>Lorem ipsum dolor sit amet, in elementum luctus, sodales nec dui, aut mauris. Cras id, per nesciunt tincidunt, id ut volutpat. Purus justo.</p>
                <p>Lorem ipsum dolor sit amet, in elementum luctus, sodales nec dui, aut mauris. Cras id, per nesciunt tincidunt, id ut volutpat. Purus justo.</p>
                <p><a href="culinaria/tradicional/gastronomismo.php">Link pro Youtuber</a></p>
            </div>
        </div>
        <div class="col-xs-12 col-md-5 padd0 assin">
            <div class="col-xs-6 col-sm-6 col-md-12">
                <form action="#" id="newsl">
                    <h1 class="font18px text-center">Assine nossa NEWSLETTER</h1>
                    <input class="form-control" type="text" id="newsl">
                    <button class="botao-h btn btn-default margtop20 center-block" type="button"> Enviar </button>
                </form>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-12">
                <a href="#"><img src="global/imagens/public2.jpg" class="col-xs-12 padd0 img-responsive margtop20" alt="Publicidade"></a>
            </div>
        </div>
    </section>
    <section class="col-xs-12 col-md-12 margtop10 visible-md visible-lg visible-sm" >
        <form action="#" id="formEnq" class="col-xs-12 paddtop20 paddbot20 secen">
            <h1 class="col-sm-2 col-xs-12 margbot20">Enquete</h1>
            <label for="opt1" class="col-sm-2 col-xs-12">
                <input id="opt1" type="radio" name="enqt">
                Opção 1
            </label>
            <label for="opt2" class="col-sm-2 col-xs-12">
                <input id="opt2" type="radio" name="enqt">
                Opção 2
            </label>
            <label for="opt3" class="col-sm-2 col-xs-12">
                <input id="opt3" type="radio" name="enqt">
                Opção 3
            </label>
            <div class="col-sm-2 col-xs-12 pull-right">
                <button type="submit" class="btn btn-default botao-h center-block">Enviar</button>
            </div>
        </form>
    </section>
</article>
<?php

$footer = require('partes/footer.php');
$linksfooter = array();


$linksfooter['Home'] = './';

$linksfooter['Humor'] = [
    'Home' => 'humor',
    'Pegadinhas' => [
        'Home' => 'humor/pegadinhas',
        'Canal Boom' => 'humor/pegadinhas/canalboom.php',
        'Nao é Sério TV' => 'humor/pegadinhas/naoeseriotv.php',
        'Viral Brothers' => 'humor/pegadinhas/viralbrothers.php'
    ],
    'Notícias Bizarras' => [
        'Home' => 'humor/noticiasbizarras',
        'Caue Moura' => 'humor/noticiasbizarras/cauemoura.php',
        'Passou na TV' => 'humor/noticiasbizarras/passounatv.php',
        'Rodada The Noite' => 'humor/noticiasbizarras/rodadathenoite.php'
    ],
    'Stand Up' => [
        'Home' => 'humor/standup',
        'Comedy Center Brasil' => 'humor/standup/comedycenterbrasil.php',
        'Os Barbixas' => 'humor/standup/osbarbixas.php',
        'Rafinha Bastos' => 'humor/standup/rafinhabastos.php'
    ],
    'Coisas do Day' => [
        'Home' => 'humor/coisasdoday',
        'Galo Frito' => 'humor/coisasdoday/galofrito.php',
        'Parafernalha' => 'humor/coisasdoday/parafernalha.php',
        'Porta dos Fundos' => 'humor/coisasdoday/portadosfundos.php'
    ]
];

$linksfooter['Jogos'] = [
    'Home' => 'jogos',
    'Esportes' => [
        'Home' => 'jogos/esportes',
        'Copa Cirrose' => 'jogos/esportes/copa-cirrose',
        'Gameplay RJ' => 'jogos/esportes/gameplayrj',
        'SGU' => 'jogos/esportes/sgu',
    ],
    'FPS' => [
        'Home' => 'jogos/fps',
        'Leet' => 'jogos/fps/leet',
        'LeNinja' => 'jogos/fps/leninja',
        'Monark' => 'jogos/fps/monark'
    ],
    'Moba' => [
        'Home' => 'jogos/moba',
        'Dota WTF' => 'jogos/moba/dotawtf',
        'Dry Bear' => 'jogos/moba/drybear',
        'Gordox' => 'jogos/moba/gordox'
    ],
    'Terror' => [
        'Home' => 'jogos/terror',
        'Ambuplay' => 'jogos/terror/ambuplay',
        'Pew Die Pie' => 'jogos/terror/pewdiepie',
        'Terror-Bionic' => 'jogos/terror/terror-bionic'
    ]
];

$linksfooter['Culinária'] = [
    'Home' => 'culinaria',
    'Fitness' => [
        'Home' => 'culinaria/fitness',
        'Comer, Treinar e Amar' => 'culinaria/fitness/comertreinareamar.php',
        'Culinária Saudável' => 'culinaria/fitness/culinariasaudavel.php',
        'Fábrica de Monstros' => 'culinaria/fitness/fabricademonstros.php',
        'Fit Men Cook' => 'culinaria/fitness/fitmencook.php',
        'Made in Japan' => 'culinaria/fitness/madeinjpn.php'
    ],
    'Tradicional' => [
        'Home' => 'culinaria/tradicional',
        'Ana Maria Brogui' => 'culinaria/tradicional/anamariabrogui.php',
        'Cozinha para Dois' => 'culinaria/tradicional/cozinhaparadois.php',
        'Gastronomismo' => 'culinaria/tradicional/gastronomismo.php',
        'I Could Kill for Dessert' => 'culinaria/tradicional/icouldkillfordessert.php',
        'Rolê Gourmet' => 'culinaria/tradicional/rolegourmet.php'
    ]
];

$linksfooter['Lifestyle'] = [
    'Home' => 'lifestyle',
    'Cotidiano' => [
        'Home' => 'lifestyle/cotidiano',
        'Flávia Calina' => 'lifestyle/cotidiano/flaviacalina.php',
        'Taciele Alcolea' => 'lifestyle/cotidiano/tacialcolea.php',
        'Viih Tube' => 'lifestyle/cotidiano/vihtube.php'
    ],
    'Makeup' => [
        'Home' => 'lifestyle/makeup',
        'Alice Salazar' => 'lifestyle/makeup/alicesalazar.php',
        'Bia Andrade' => 'lifestyle/makeup/biaandrade.php',
        'Camila Coelho' => 'lifestyle/makeup/camilacoelho.php'
    ],
    'Viagem' => [
        'Home' => 'lifestyle/viagem',
        'Bruna Vieira' => 'lifestyle/viagem/brunavieira.php',
        'Camila Coutinho' => 'lifestyle/viagem/camilacoutinho.php',
        'Lu Sicchierolli' => 'lifestyle/viagem/lusicchi.php'
    ]
];

$footer.footer($linksfooter, 'quemsomos.php', 'contato.php');

?>
</body>
</html>
