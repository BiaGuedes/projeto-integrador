<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Quem somos | Utuber</title>
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

  $linksnav2 = array();
  $linksnav2['global/imagens/bia.jpg'] = '#bia';
  $linksnav2['global/imagens/caio.jpg'] = '#caio';
  $linksnav2['global/imagens/larissa.jpg'] = '#larissa';
  $linksnav2['global/imagens/rafael.jpg'] = '#rafael';
  $linksnav2['global/imagens/ricardo.jpg'] = '#rid';


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


<article class="articlesa col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
    <div class="linh col-xs-10 col-xs-offset-1">
        <span> Sobre nós </span>
    </div>

    <div class="clearfix"></div>

    <section class="col-sm-8 col-sm-offset-2 text-center" id="sobre">
        <h1 class="font18px">UTuber</h1>
        <p>O Utuber é o Portal que reúne conteúdo sobre os melhores canais do Youtube.</p>
        <p>Você já pesquisou por alguma receita e descobriu um canal no Youtube totalmente dedicado a isso? Ou queria muito passar aquele nível impossível no seu game favorito - e recorreu ao Youtube? Que tal conhecer mais sobre esses Youtubers?   </p>
        <p> No Utuber você escolhe um tema e conhece os melhores canais sobre ele! </p>
        <p>Criado como Projeto Final para obtenção de nota nas disciplinas <abbr title="Práticas de Projetos para Sistemas de Internet II">PPSI II</abbr> e Práticas de Design da <abbr title="Faculdade de Tecnologia de São Roque">FATEC-SR</abbr>, o Projeto contou com a colaboração de cinco estudantes, cuja contribuição e maiores detalhes serão explicitados a seguir. </p>
    </section>

    <div class="clearfix"></div>

    <div class="linh col-xs-10 col-xs-offset-1">
        <span> Integrantes </span>
    </div>
    <div class="clearfix"></div>


    <section class="col-sm-8 col-sm-offset-2" id="sobre">
        <div class="col-xs-12 padd0 ints">
            <div class="col-md-3 col-xs-12 fotoint pull-left">
                <img class="img-circle center-block" src="global/imagens/bia.jpg" id="bia">
            </div>
            <div class="col-md-9 col-xs-12 infoint">
                <h1>Beatriz Guedes</h1>
                <p>R.A.: 2650831513005, 18 anos, formada no curso técnico em Administração pelo <abbr title="Instituto Federal de São Paulo">IFSP</abbr>, foi responsável pela área de culinária do portal, porém não sabe nem fritar um ovo. </p>
                <ul>
                  <li><p>Função: planejamento e desenvolvimento</li>
                  <li><p>Área:<a class="link" href="culinaria"> Culinária</a></p></li>
                  <li>
                    <p>Contribuição:</p>
                    <p>Arquitetura da informação geral do portal;</p>
                    <p>Responsável por todo o planejamento (wireframes), estruturação HTML, estilo e conteúdo da seção <a class="link" href="culinaria">Culinária</a>.</p>
                  </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col-xs-12 padd0 ints">
            <div class="col-md-3 col-xs-12 fotoint pull-right">
                <img class="img-circle center-block" src="global/imagens/caio.jpg" id="caio">
            </div>
            <div class="col-md-9 col-xs-12 infoint">
                <h1>Caio Nepomuceno</h1>
                <p>R.A.: 2650831513006, 18 anos, formado no curso técnico em Informática pela <abbr title="Escola Técnica Estadual">ETEC</abbr>,  foi responsável pela área de jogos do portal. Um tanto quanto vagal, dedicado a assistir séries e filmes, "dar rolê cos bródi" e jogar conversa fora.</p>
                <ul>
                  <li><p>Função: planejamento e desenvolvimento</p></li>
                  <li><p>Área: <a class="link" href="jogos"> Jogos</a></p></li>
                  <li>
                    <p>Contribuição:</p>
                    <p>Responsável por todo o planejamento (wireframes), estruturação HTML, estilo  e conteúdo da seção <a class="link" href="jogos">Jogos</a>.</p>
                  </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col-xs-12 padd0 ints">
            <div class="col-md-3 col-xs-12 fotoint pull-left">
                <img class="img-circle center-block" src="global/imagens/larissa.jpg" id="larissa">
            </div>
            <div class="col-md-9 col-xs-12 infoint">
                <h1>Larissa Rabello</h1>
                <p>R.A.: 2650831513016, 24 anos, formada em Administração com linha de formação em finanças pelo <abbr title="Universidade Presbiteriana Mackenzie">Mackenzie</abbr>, decidiu se aventurar no desenvolvimento front-end - e gostou do lado geek da força! Tenta comandar a bagunça mas também foi responsável pela área Lifestyle, e resumiria o seu em um único personagem: Homer Simpson (por que ele não tem um canal no Youtube???).  </p>
                <ul>
                  <li><p>Função: planejamento, desenvolvimento e  gerenciamento do projeto</p></li>
                  <li><p>Área:<a class="link" href="lifestyle"> Lifestyle</a> e Geral</p></li>
                  <li>
                    <p>Contribuição:</p>
                    <p>Planejamento geral do site, criação de layouts (wireframes) e estruturação HTML das áreas comuns - <a class="link" href="index.php">Home</a>, <a class="link" href="quemsomos.php">Quem Somos</a> e <a class="link" href="contato.php">Contato</a>;</p>
                    <p>Responsável por todo o planejamento (wireframes) e execução (estruturação HTML, estilo e conteúdo) da seção <a class="link" href="lifestyle">Lifestyle</a>.</p>
                  </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col-xs-12 padd0 ints">
            <div class="col-md-3 col-xs-12 fotoint pull-right">
                <img class="img-circle center-block" src="global/imagens/rafael.jpg" id="rafael">
            </div>
            <div class="col-md-9 col-xs-12 infoint">
                <h1>Rafael Ogrim</h1>
                <p>R.A.: 26508315025, 18 anos, formado no curso técnico em Informática pela <abbr title="Escola Técnica Estadual">ETEC</abbr>, foi responsável por detalhes importantes do portal - dê uma olhada nessa página mesmo e comprove!</p>
                <ul>
                  <li><p>Função: implementação de php e desenvolvimento</p></li>
                  <li><p>Área: Geral</p></li>
                  <li>
                    <p>Contribuição: </p>
                    <p>Solução para a navegação feita em PHP;</p>
                    <p>Responsável pelo estilo e conteúdo das áreas comuns - <a class="link" href="index.php">Home</a>, <a class="link" href="quemsomos.php">Quem Somos</a> e <a class="link" href="contato.php">Contato</a>.</p>
                  </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col-xs-12 padd0 ints">
            <div class="col-md-3 col-xs-12 fotoint pull-left">
                <img class="img-circle center-block" src="global/imagens/ricardo.jpg" id="rid">
            </div>
            <div class="col-md-9 col-xs-12 infoint">
                <h1>Ricardo Ono</h1>
                <p>R.A.: 2650831513026, 18 anos, vindo do "mato", sempre ajudou os pais no campo. No entanto, decidiu se aventurar no mundo da informática aos 15, concluindo alguns cursos técnicos na área. Agora escreve essa minibiografia em uma faculdade na área de tecnologia.</p>
                <ul>
                  <li><p>Função e área: planejamento e desenvolvimento</p></li>
                  <li><p>Área: <a class="link" href="humor">Humor</a></p></li>
                  <li>
                    <p>Contribuição:</p>
                    <p> Responsável por todo o planejamento (wireframes), estruturação HTML, estilo  e conteúdo da seção <a class="link" href="humor">Humor</a>.</p>
                  </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>
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

<script>


</script>

</body>
</html>
