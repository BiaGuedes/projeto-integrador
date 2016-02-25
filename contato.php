<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato | Utuber</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway|Open+Sans|Vollkorn' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="global/css/bootstrap.min.css">
    <link rel="shortcut icon" href="global/imagens/icon.png" type="image/png" />
    <link rel="stylesheet" href="global/css/utubers.css">
    <script src="global/js/jquery-2.1.1.js"></script>
    <script src="global/js/bootstrap.min.js"></script>
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

<article class="articlesa col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">

    <section class="col-sm-8 col-sm-offset-2">

        <h1 class="font18px margtop50">UTubers</h1>
        <p>Lorem ipsum dolor sit amet, in elementum luctus, sodales nec dui, aut mauris. Cras id, per nesciunt tincidunt, id ut volutpat. Purus justo. Sagittis in, integer quis. Duis porta.</p>
        <p>Ipsum mi. Scelerisque suspendisse nunc. Wisi pede, dictum ipsum praesent, vel dolor amet. Quis proin, quis vestibulum aliquam, urna nisl lacinia. Aenean quam maecenas.</p>

    </section>

    <div class="linh col-xs-10 col-xs-offset-1">
        <span> Fale Conosco </span>
    </div>

    <section class="col-sm-8 col-sm-offset-2">

        <h1 class="font18px">Equipe</h1>
        <ul class="col-xs-6 liststnone">
            <li>Beatriz</li>
            <li>Caio</li>
            <li>Larissa</li>
            <li>Rafael</li>
            <li>Ricardo</li>
        </ul>
        <ul class="col-xs-6 liststnone">
            <li>Beatriz@gmail.com</li>
            <li>Caio@gmail.com</li>
            <li>Larissa@gmail.com</li>
            <li>Rafael@gmail.com</li>
            <li>Ricardo@gmail.com</li>
        </ul>
    </section>
    <section class="col-sm-8 col-sm-offset-2 margtop50">
        <form action="#">
            <div class="col-sm-6 col-xs-12 margtop10">
                <label for="nome">Nome</label>
                <input class="form-control" id="nome" type="text">
            </div>
            <div class="col-sm-6 col-xs-12 margtop10">
                <label for="email">E-mail</label>
                <input class="form-control" id="email" type="text">
            </div>
            <div class="col-xs-12 margtop10">
                <label for="assunto">Assunto</label>
                <select class="form-control" name="" id="assunto">
                    <option value="">Selecione..</option>
                </select>
            </div>
            <div class="col-xs-12 margtop10">
                <label for="msg">Mensagem</label>
                <textarea class="form-control" id="msg"></textarea>
            </div>
            <div class="col-xs-12 margtop20 margbot50">
              <button class="botao-h btn btn-default margtop20 center-block" type="button"> Enviar </button>

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
        'Rodada The Noite' => 'humor/noticiasbizarras/.php'
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

$footer . footer($linksfooter, 'quemsomos.php', 'contato.php');


?>



</body>
</html>
