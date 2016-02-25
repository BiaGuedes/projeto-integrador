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

$linksnav1['Jogos'] = array('Home' => '../jogos',
    'Esportes' => '../esportes',
    'FPS' => '../fps',
    'MOBA' => '../moba',
    'Terror' => '../terror');

$linksnav1['Culinária'] = array('Home' => '../../culinaria',
    'Fitness' => '../../../culinariafitness',
    'Tradicional' => '../../../culinariatradicional');

$linksnav1['Lifestyle'] = array('Home' => '../../lifestyle',
    'Cotidiano' => '../../../lifestyle/cotidiano',
    'Make up' => '../../../lifestyle/makeup',
    'Viagem' => '../../../lifestyle/viagem');

$nav1 . nav1('#2b5cb5', '', $linksnav1, 'none', ['../../global/imagens/ut.png', './']);

$nav2 = require '../../partes/nav2.php';
$linksnav2 = array();

$linksnav2['../images/perfil/copa-cirrose.jpg'] = 'copa-cirrose/';
$linksnav2['../images/perfil/GameplayRJ.jpg'] = 'gameplayrj/';
$linksnav2['../images/perfil/sgu.jpg'] = 'sgu/';

$nav2 . nav2($linksnav2);

?>
<div class="container">

    <div class="col-xs-12 col-sm-10 col-sm-offset-1 padding-spacement">
        <img src="../images/capas/capa-categoria-esportes.jpg" class="img-responsive">
    </div>

    <article class="col-xs-12 col-sm-9">
        <section class="col-xs-12 padding-spacement padding-bottom youtuber-section" id="perfil-youtuber-1">

            <div class="col-xs-9 col-xs-offset-2 col-sm-offset-0 col-sm-4">
                <img src="../images/perfil/copa-cirrose.jpg" class="img-circle img-responsive">
            </div>

            <h1 class="col-xs-12 col-sm-8 text-center">Copa Cirrose</h1>

            <div class="col-xs-12 col-sm-4 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/dgI3szyBMdo"></iframe>
                </div>
            </div>

            <div class="col-xs-12 col-md-4 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/wMi-4XOS5n8"></iframe>
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
                <img src="../images/perfil/GameplayRj.jpg" class="img-circle img-responsive">
            </div>

            <h1 class="col-xs-12 col-sm-8 text-center">GameplayRJ</h1>

            <div class="col-xs-12 col-md-4 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/X45M-lM_S54?list=PLDRcEdRquEb3Leu57ELcBeANNcX1FP3qc"></iframe>
                </div>
            </div>

            <div class="col-xs-12 col-md-4 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/5vwUGnXn8aA?list=PLDRcEdRquEb3Leu57ELcBeANNcX1FP3qc"></iframe>
                </div>
            </div>

            <h2 class="text-left col-xs-12 col-sm-12">Sobre</h2>

            <p class="text-justify col-xs-12 col-sm-12">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium
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
                <img src="../images/perfil/SGU.jpg" class="img-circle img-responsive">
            </div>

            <h1 class="col-xs-12 col-md-8 text-center">Sports Gaming Universe</h1>

            <div class="col-xs-12 col-md-4 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/cL2yglvz5G8?list=PLh6u-PMmIR8wfoNnk1IPFpzwdtdvnEBNo"></iframe>
                </div>
            </div>

            <div class="col-xs-12 col-md-4 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/LTooeoxOk-A?list=PLh6u-PMmIR8wfoNnk1IPFpzwdtdvnEBNo"></iframe>
                </div>
            </div>

            <h2 class="text-left col-xs-12 col-sm-12">Sobre</h2>

            <p class="text-justify col-xs-12 col-md-12">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium
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

            <h3 class="text-center col-xs-12">SGU</h3>

            <div class="col-xs-12 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/cL2yglvz5G8?list=PLh6u-PMmIR8wfoNnk1IPFpzwdtdvnEBNo"></iframe>
                </div>
            </div>

            <h4 class="text-center col-xs-12">FIGHTING SKILLS</h4>

            <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>

        </section>

        <section class="col-xs-12" id="novidades-item-2">

            <h3 class="text-center col-xs-12">GamePlay RJ</h3>

            <div class="col-xs-12 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/Co8LPV2UfgY?list=PLDRcEdRquEb3Leu57ELcBeANNcX1FP3qc"></iframe>
                </div>
            </div>

            <h4 class="text-center col-xs-12">FIFA 16</h4>

            <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>

        </section>

        <section class="col-xs-12" id="novidades-item-3">

            <h3 class="text-center col-xs-12">Copa Cirrose</h3>

            <div class="col-xs-12 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/qO_9WO8FhZ4"></iframe>
                </div>
            </div>

            <h4 class="text-center col-xs-12">Corote League</h4>

            <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>

        </section>

        <section class="col-xs-12" id="novidades-item-4">

            <h3 class="text-center col-xs-12">SGU</h3>

            <div class="col-xs-12 padding-spacement">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/fynrQiW9Wiw?list=PLh6u-PMmIR8zr3ySSFLXTDCGkDbFEv6x8"></iframe>
                </div>
            </div>

            <h4 class="text-center col-xs-12">NBA Jam</h4>

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
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ngTSFXPle84" ></iframe>
                </div>
            </div>
            <h3 class="text-center col-xs-12">Copa Cirrose com INSANOS!</h3>
        </section>
        <section class="col-xs-12 col-sm-4">
            <div class="col-xs-12">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DlOgZXT5T4M"></iframe>
                </div>
            </div>
            <h3 class="text-center col-xs-12">GameplayRJ chega a sua meta de visualizações</h3>
        </section>
        <section class="col-xs-12 col-sm-4">
            <div class="col-xs-12">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZLdPfGgMGbc"></iframe>
                </div>
            </div>
            <h3 class="text-center col-xs-12">SGU quer se tornar um atleta</h3>
        </section>
    </section>
</div>
<?php
include'../../css/footer_jogos.php';
?>
</body>
</html>
