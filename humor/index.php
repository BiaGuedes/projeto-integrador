<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humor</title>
    <link rel = "stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href="../global/css/bootstrap.min.css">
    <link rel = "stylesheet" href="../global/css/utubers.css">
    <link rel = "stylesheet" href="../global/css/humor.css">
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel = "shortcut icon" href="../global/imagens/icon.png" type="image/png" />
    <script src="../global/js/jquery-2.1.1.js "></script>
    <script src="../global/js/bootstrap.min.js "></script>
    <script src="../global/js/utubers.js "></script>
    <script src="../global/js/facebook-reed.js"></script>
</head>
<body>
    <?php $nav1=require '../partes/nav1.php';
    $linksnav1=array();
    $linksnav1[ 'Humor']= array
        ( 'Home'=> './',
           'Coisas do Dia a Dia' => 'coisasdoday/index.php',
           'Notícias Bizarras' => 'noticiasbizarras/index.php',
           'Pegadinhas' => 'pegadinhas/index.php',
           'Stand up' => 'standup/index.php');
    $linksnav1['Jogos'] = array
         ('Home' => '../jogos/index.php',
           'Esportes' => '../jogos/esportes/index.php',
           'FPS' => '../jogos/fps/index.php',
           'MOBA' => '../jogos/moba/index.php',
           'Terror' => '../jogos/terror/index.php');
    $linksnav1['Culinária'] = array
        ('Home' => '../culinaria/index.php',
           'Fitness' => '../culinaria/fitness/index.php',
           'Tradicional' => '../culinaria/tradicional/index.php');
    $linksnav1['Lifestyle'] = array
        ('Home' => '../lifestyle/index.php',
           'Cotidiano' => '../lifestyle/cotidiano/index.php',
           'Make up' => '../lifestyle/makeup/index.php',
           'Viagem' => '../lifestyle/viagem/index.php');


    $nav1.nav1('#ffa500', '', $linksnav1, 'imagens/logo-humor.png', ['../global/imagens/ut.png','../']);


    $nav2 = require '../partes/nav2.php';
    $linksnav2 = array();
    $linksnav2['imagens/portadosfundos-logo.jpg'] = 'coisasdoday/portadosfundos.php';
    $linksnav2['imagens/parafernalha-logo.jpg'] = 'coisasdoday/parafernalha.php';
    $linksnav2['imagens/osbarbixas-logo1.jpg'] = 'standup/osbarbixas.php';
    $linksnav2['imagens/cauemoura-logo.jpg'] = 'noticiasbizarras/cauemoura.php';
    $linksnav2['imagens/galofrito-logo.jpg'] = 'coisasdoday/galofrito.php';
    $linksnav2['imagens/passounatv-logo.jpg'] = 'noticiasbizarras/passounatv.php';
    $linksnav2['imagens/rodadathenoite-logo.jpg'] = 'noticiasbizarras/rodadathenoite.php';
    $linksnav2['imagens/rafinhabastos-logo.jpg'] = 'standup/rafinhabastos.php';
    $linksnav2['imagens/canalboom-logo.jpg'] = 'pegadinhas/canalboom.php';
    $linksnav2['imagens/comedycentralbrasil-logo.jpg'] = 'standup/comedycenterbrasil.php';
    $linksnav2['imagens/viralbrothes-logo.jpg'] = 'pegadinhas/viralbrothers.php';
    $linksnav2['imagens/naoeseriotv-logo.jpg'] = 'pegadinhas/naoeseriotv.php';
    $nav2.nav2($linksnav2); ?>


    <div class="container col-md-10 col-md-offset-1 as">

        <article class="col-md-9 col-sm-12 col-xs-12 ">
            <h1 class="text-center ">O melhor do Humor</h1>
            <p>Coeperunt cesseruntnulli orbe praebebat in onerosior obliquis crescendo habendum locoque siccis sed carmen sectamque proximus aequalis natura phoebe sidera lege caligine suis </p>

            <!--comeco de standup-->
            <div class="col-md-12">
                <div class=" col-sm-6 col-md-12 col-xs-12 ">
                    <div class="row ">
                        <!--                    <a class="logo col-md-4 col-sm-6 col-xs-6 img-responsive reed-logo " href="# "></a>-->
                        <img src="imagens/standup-logo-testte.png " alt="logo standup " class="col-md-3 col-sm-5 col-xs-6 reed-logo aues">
                        <h2 class="text-center titulo col-xs-6 col-md-9 col-sm-7 "><a href="standup/index.php ">Stand Up Comedy</a></h2>
                        <p class="col-md-12 col-sm-12 col-xs-12 reed-texto text-center ">Coep runt cess erun t nulli orbe praebebat in one rosior obliquis cre scendo hab endumCoep runt cess erun t nulli orbe praebebat in one rosior obliquis cre scendo hab endum</p>


                        <div class="col-md-12 col-sm-12">
                            <div class="row h ">
                                <div class="visible-md col-md-5 visible-lg col-lg-5">
                                    <div class="row ">
                                        <img src="imagens/rafinhasbastos-2.jpg" alt="os barbixas" class="img-responsive visible-md col-md-12 visible-lg col-lg-12 a e ">
                                    </div>
                                    <div class="row ">
                                        <img src="imagens/comedycentralbrasil-2.jpg" alt="as comedy" class="col-md-12 col-lg-12 f g visible-md visible-lg">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="row ">
                                        <img src="imagens/osbabixas-0.jpg" alt="logo" class="img-responsive col-md-6 col-sm-12 col-xs-4 a c img-colum-med">
                                        <img src="imagens/comedycentral-0.jpg" alt="logo" class="img-responsive col-md-6 col-sm-12 col-xs-4 a c img-colum-med">
                                        <img src="imagens/rafinhabastos-0.jpg" alt="logo" class="img-responsive col-md-12 col-sm-12 col-xs-4 a c img-colum-med">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 hidden-xs ">
                                    <div class="row ">
                                        <img src="imagens/osbarbixas-1.jpg" alt="logo" class="col-md-12  img-responsive a b ">

                                    </div>
                                </div>
                                <div class="visible-sm col-sm-4">
                                    <div class="row ">
                                        <img src="imagens/rafinhasbastos-1.jpg"  alt="logo" class="col-md-12  img-responsive a b ">

                                    </div>
                                </div>
                                <div class="visible-sm col-sm-8 visible-xs col-xs-12">
                                    <div class="row ">
                                        <img src="imagens/comedycentralbrasil-2.jpg" alt="logo" class="col-md-12   img-responsive a b ab ">

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <p class="col-md-12 col-sm-12 col-xs-12 text-center reed-textoum "><b>Os melhores canais de Stand Up</b>
                    </p>
                    <div class="col-md-4 col-sm-12 col-xs-12 reed-borda ">
                        <div class="row ">
                            <img src="imagens/osbarbixas-logo1.jpg " alt="asda " class="col-md-12 col-sm-6 col-xs-5 reed-canais ">
                            <h4 class="col-md-12 col-sm-6 col-xs-7 "><a href="standup/osbarbixas.php">Os Babixas</a></h4>
                            <p class="col-md-12 col-sm-6 col-xs-7 ">Os s melhores asd do mun do é uma coia que trae d tudo mais a todos.
                                <a href="standup/osbarbixas.php">Veja mais</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 reed-borda ">
                        <div class="row ">
                            <img src="imagens/rafinhabastos-logo.jpg " alt="asda " class="col-md-12 col-sm-6 col-xs-5 reed-canais img-responsive ">
                            <h4 class="col-md-12 col-sm-6 col-xs-7 "><a href="standup/rafinhabastos.php">Rafinha Bastos</a></h4>
                            <p class="col-md-12 col-sm-6 col-xs-7 ">Os s melhores asd do mun do é uma coia que traz a tudo mais a todos.
                                <a href="standup/rafinhabastos.php">Veja mais</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 reed-borda ">
                        <div class="row ">
                            <img src="imagens/comedycentralbrasil-logo.jpg " alt = "asda " class="col-md-12 col-sm-6 col-xs-5 ll reed-canais img-responsive ">
                            <h4 class="col-md-12 col-sm-6 col-xs-7 "><a href="standup/comedycenterbrasil.php">Comedy Brasil</a></h4>
                            <p class="col-md-12 col-sm-6 col-xs-7 ">Os s melhores asd do mun do é uma coia que trazas tudo mais a todos.
                                <a href="standup/comedycenterbrasil.php">Veja mais</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-6 col-md-12 col-xs-12 ">
                    <div class="row ">
                        <img src="imagens/pegadinhas-logo.png" alt="logo " class="col-md-3 col-sm-5 col-xs-6 reed-logo aues">
                        <h2 class="text-center titulo col-xs-6 col-md-9 col-sm-7 "><a href="pegadinhas/index.php ">A zoera não tem limite</a></h2>
                        <p class="col-md-12 col-sm-12 col-xs-12 reed-texto text-center ">Coep runt cess erun t nulli orbe praebebat in one rosior obliquis cre scendo hab endumCoep runt cess erun t nulli orbe praebebat in one rosior obliquis cre scendo hab endum</p>
                        <div class="col-md-12 col-sm-12 ">
                            <div class="row h ">
                                <div class="visible-md col-md-5 visible-lg col-lg-5">
                                    <div class="row ">
                                        <img src="imagens/canalboom-2.jpg" alt="img do canal" class="img-responsive visible-md col-md-12 visible-lg col-lg-12 a e ">
                                    </div>
                                    <div class="row ">
                                        <img src="imagens/naoeseriotv-2.jpg" alt="img do canal" class="f g visible-md visible-lg col-md-12 col-lg-12">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="row ">
                                        <img src="imagens/canalboom-0.jpg" alt="img do canal" class="img-responsive col-md-6 col-sm-12 col-xs-4 a c img-colum-med">
                                        <img src="imagens/naoeseriotv-0.jpg" alt="img do canal" class="img-responsive col-md-6 col-sm-12 col-xs-4 a c img-colum-med">
                                        <img src="imagens/viralbrothes-0.jpg" alt="img do canal" class="img-responsive col-md-12 col-sm-12 col-xs-4 a c img-colum-med">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 hidden-xs ">
                                    <div class="row ">
                                        <img src="imagens/viralbrothes-1.jpg " alt="img do canal" class="col-md-12  img-responsive a b ">
                                    </div>
                                </div>
                                <div class="visible-sm col-sm-4">
                                    <div class="row ">
                                        <img src="imagens/canalboom-1.jpg" alt="img do canal" class="col-md-12  img-responsive a b ">

                                    </div>
                                </div>
                                <div class="visible-sm col-sm-8 visible-xs col-xs-12">
                                    <div class="row ">
                                        <img src="imagens/naoeseriotv-2.jpg" alt="img do canal" class="col-md-12   img-responsive a b ab ">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="col-md-12 col-sm-12 col-xs-12 text-center reed-textoum "><b>Os melhores canais de pegadinhas</b>
                    </p>
                    <div class="col-md-4 col-sm-12 col-xs-12 reed-borda ">
                        <div class="row ">
                            <img src="imagens/canalboom-logo.jpg" alt="logo canal boom" class="col-md-12 col-sm-6 col-xs-5 reed-canais ">
                            <h4 class="col-md-12 col-sm-6 col-xs-7 "><a href="pegadinhas/canalboom.php">Canal BOOM</a></h4>
                            <p class="col-md-12 col-sm-6 col-xs-7 ">Os s melhores asd do mun do é uma coia que trae d tudo mais a todos.
                                <a href="pegadinhas/canalboom.php">Veja mais</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 reed-borda ">
                        <div class="row ">
                            <img src="imagens/naoeseriotv-logo.jpg" alt="logo nao é serio tv" class="col-md-12 col-sm-6 col-xs-5 reed-canais img-responsive ">
                            <h4 class="col-md-12 col-sm-6 col-xs-7 "><a href="pegadinhas/naoeseriotv.php">Não é serio TV</a></h4>
                            <p class="col-md-12 col-sm-6 col-xs-7 ">Os s melhores asd do mun do é uma coia que traz a tudo mais a todos.
                                <a href="pegadinhas/naoeseriotv.php">Veja mais</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 reed-borda ">
                        <div class="row ">
                            <img src="imagens/viralbrothes-logo.jpg" alt="logo viral brothers" class="col-md-12 col-sm-6 col-xs-5 ll reed-canais img-responsive ">
                            <h4 class="col-md-12 col-sm-6 col-xs-7 "><a href="pegadinhas/viralbrothers.php">Viral Brothers</a></h4>
                            <p class="col-md-12 col-sm-6 col-xs-7 ">Os s melhores asd do mun do é uma coia que trazas tudo mais a todos
                                <a href="pegadinhas/viralbrothers.php">Veja mais</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-6 col-md-12 col-xs-12 ">
                    <div class="row ">
                        <img src="imagens/coisadoday.png" alt="logo de coisas do day " class="col-md-3 col-sm-5 col-xs-6 reed-logo aues">
                        <h2 class="text-center titulo col-xs-6 col-md-9 col-sm-7 "><a href="coisasdoday/index.php">Coisas do dia-a-dia</a></h2>
                        <p class="col-md-12 col-sm-12 col-xs-12 reed-texto text-center ">Coep runt cess erun t nulli orbe praebebat in one rosior obliquis cre scendo hab endumCoep runt cess erun t nulli orbe praebebat in one rosior obliquis cre scendo hab endum</p>
                        <div class="col-md-12 col-sm-12 ">
                            <div class="row h ">
                                <div class="visible-md col-md-5 visible-lg col-lg-5">
                                    <div class="row ">
                                        <img src="imagens/portadosfundos-2.jpg" alt="img do canal" class="img-responsive visible-md col-md-12 visible-lg col-lg-12 a e ">
                                    </div>
                                    <div class="row ">
                                        <img src="imagens/parafernalha-2.jpg" alt="img do canal" class="img-responsive visible-md col-md-12 visible-lg col-lg-12 f g ">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="row ">
                                        <img src="imagens/parafernalha-0.jpg" alt="img do canal" class="img-responsive col-md-6 col-sm-12 col-xs-4 a c img-colum-med">
                                        <img src="imagens/galofrito-0.jpg" alt="img do canal" class="img-responsive col-md-6 col-sm-12 col-xs-4 a c img-colum-med">
                                        <img src="imagens/portadosfundos-0.jpg" alt="img do canal" class="img-responsive col-md-12 col-sm-12 col-xs-4 a c img-colum-med">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 hidden-xs ">
                                    <div class="row ">
                                        <img src="imagens/galofrito-1.jpg" alt="img do canal" class="col-md-12  img-responsive a b ">

                                    </div>
                                </div>
                                <div class="visible-sm col-sm-4">
                                    <div class="row ">
                                        <img src="imagens/portadosfundos-1.jpg" alt="img do canal" class="col-md-12  img-responsive a b ">

                                    </div>
                                </div>
                                <div class="visible-sm col-sm-8 visible-xs col-xs-12">
                                    <div class="row ">
                                        <img src="imagens/parafernalha-2.jpg" alt="img do canal" class="col-md-12   img-responsive a b ab ">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="col-md-12 col-sm-12 col-xs-12 text-center reed-textoum "><b>Aqueles acontecimentos diários com muito humor</b>
                    </p>
                    <div class="col-md-4 col-sm-12 col-xs-12 reed-borda ">
                        <div class="row ">
                            <img src="imagens/parafernalha-logo.jpg" alt="asda " class="col-md-12 col-sm-6 col-xs-5 reed-canais ">
                            <h4 class="col-md-12 col-sm-6 col-xs-7 "><a href="coisasdoday/parafernalha.php">Parafernalha</a></h4>
                            <p class="col-md-12 col-sm-6 col-xs-7 ">Os s melhores asd do mun do é uma coia que trae d tudo mais a todos.
                                <a href="coisasdoday/parafernalha.php">Veja mais</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 reed-borda ">
                        <div class="row ">
                            <img src="imagens/portadosfundos-logo.jpg" alt="asda " class="col-md-12 col-sm-6 col-xs-5 reed-canais img-responsive ">
                            <h4 class="col-md-12 col-sm-6 col-xs-7 "><a href="coisasdoday/portadosfundos.php">Porta dos Fundos</a></h4>
                            <p class="col-md-12 col-sm-6 col-xs-7 ">Os s melhores asd do mun do é uma coia que traz a tudo mais a todos.
                                <a href="coisasdoday/portadosfundos.php">Veja mais</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 reed-borda ">
                        <div class="row ">
                            <img src="imagens/galofrito-logo.jpg" alt="asda " class="col-md-12 col-sm-6 col-xs-5 ll reed-canais img-responsive ">
                            <h4 class="col-md-12 col-sm-6 col-xs-7 "><a href="coisasdoday/galofrito.php">Galo Frito</a></h4>
                            <p class="col-md-12 col-sm-6 col-xs-7 ">Os s melhores asd do mun do é uma coia que trazas tudo mais a todos
                                <a href="coisasdoday/galofrito.php">Veja mais</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-6 col-md-12 col-xs-12 ">
                    <div class="row ">
                        <img src="imagens/noticiasbizarras.png" alt="logo dos Barbixas " class="col-md-3 col-sm-5 col-xs-6 reed-logo aues">
                        <h2 class="text-center titulo col-xs-6 col-md-9 col-sm-7 "><a href="noticiasbizarras/index.php ">Notícias Bizarras</a></h2>
                        <p class="col-md-12 col-sm-12 col-xs-12 reed-texto text-center ">Coep runt cess erun t nulli orbe praebebat in one rosior obliquis cre scendo hab endumCoep runt cess erun t nulli orbe praebebat in one rosior obliquis cre scendo hab endum</p>
                        <div class="col-md-12 col-sm-12 ">
                            <div class="row h ">
                                <div class="visible-md col-md-5 visible-lg col-lg-5">
                                    <div class="row ">
                                        <img src="imagens/cauemoura-2.jpg" alt="img do canal" class="img-responsive visible-md col-md-12 visible-lg col-lg-12 a e ">
                                    </div>
                                    <div class="row ">
                                        <img src="imagens/rodadathenoite-2.jpg" alt="img do canal" class="img-responsive visible-md col-md-12 visible-lg col-lg-12 f g ">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="row ">
                                        <img src="imagens/passounatv-0.jpg" alt="img do canal" class="img-responsive col-md-6 col-sm-12 col-xs-4 a c img-colum-med">
                                        <img src="imagens/rodadathenoite-0.jpg" alt="img do canal" class="img-responsive col-md-6 col-sm-12 col-xs-4 a c img-colum-med">
                                        <img src="imagens/cauemoura-0.jpg" alt="img do canal" class="img-responsive col-md-12 col-sm-12 col-xs-4 a c img-colum-med">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 hidden-xs ">
                                    <div class="row ">
                                        <img src="imagens/passounatv-1.jpg" alt="img do canal" class="col-md-12  img-responsive a b ">

                                    </div>
                                </div>
                                <div class="visible-sm col-sm-4">
                                    <div class="row ">
                                        <img src="imagens/cauemoura-1.jpg" alt="img do canal" class="col-md-12  img-responsive a b ">

                                    </div>
                                </div>
                                <div class="visible-sm col-sm-8 visible-xs col-xs-12">
                                    <div class="row ">
                                        <img src="imagens/rodadathenoite-2.jpg" alt="img do canal" class="col-md-12   img-responsive a b ab ">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="col-md-12 col-sm-12 col-xs-12 text-center reed-textoum "><b>Os melhore canais sobre as piores noticias do mundo</b>
                    </p>
                    <div class="col-md-4 col-sm-12 col-xs-12 reed-borda ">
                        <div class="row ">
                            <img src="imagens/cauemoura-logo.jpg" alt="asda " class="col-md-12 col-sm-6 col-xs-5 reed-canais ">
                            <h4 class="col-md-12 col-sm-6 col-xs-7 "><a href="noticiasbizarras/cauemoura.php">Caue Moura</a></h4>
                            <p class="col-md-12 col-sm-6 col-xs-7 ">Os s melhores asd do mun do é uma coia que trae d tudo mais a todos.
                                <a href="noticiasbizarras/cauemoura.php">Veja mais</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 reed-borda ">
                        <div class="row ">
                            <img src="imagens/rodadathenoite-logo.jpg" alt="asda " class="col-md-12 col-sm-6 col-xs-5 reed-canais img-responsive ">
                            <h4 class="col-md-12 col-sm-6 col-xs-7 "><a href="noticiasbizarras/rodadathenoite.php">Rodada the Noite </a></h4>
                            <p class="col-md-12 col-sm-6 col-xs-7 ">Os s melhores asd do mun do é uma coia que traz a tudo mais a todos.
                                <a href="noticiasbizarras/rodadathenoite.php">Veja mais</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 reed-borda ">
                        <div class="row ">
                            <img src="imagens/passounatv-logo.jpg" alt="asda " class="col-md-12 col-sm-6 col-xs-5 ll reed-canais img-responsive ">
                            <h4 class="col-md-12 col-sm-6 col-xs-7 "><a href="noticiasbizarras/passounatv.php">Passou na TV</a></h4>
                            <p class="col-md-12 col-sm-6 col-xs-7 ">Os s melhores asd do mun do é uma coia que trazas tudo mais a todos.
                                <a href="noticiasbizarras/passounatv.php">Veja mais</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <aside class="col-md-3 col-sm-12 col-xs-12 reed-aside-video ">
            <div class="row ">
                <h2 class="text-center ">Ultimas postadas</h2>
                <div class="col-sm-4 col-md-12 col-xs-6 reed-video ">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/BgWyG5iVLUs"></iframe>
                    </div>
                </div>
                <div class="col-sm-4 col-md-12 col-xs-6 reed-video ">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com//embed/givzisVwEvc"></iframe>
                    </div>
                </div>
                <div class="col-sm-4 col-md-12 col-xs-6 reed-video ">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/wksP7Y0-6Vg"></iframe>
                    </div>
                </div>
                <div class="col-sm-4 col-md-12 col-xs-6 reed-video ">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/goRVcvxg8Jg "></iframe>
                    </div>
                </div>
                <div class="col-sm-4 col-md-12 hidden-xs reed-video ">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/HJefGMKbaiY"></iframe>
                    </div>
                </div>
                <div class="col-sm-4 col-md-12 hidden-xs reed-video ">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/NfCv0ul0Gdg"></iframe>
                    </div>
                </div>
                <div class="col-sm-4 col-md-12 hidden-xs reed-video ">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/xtMtB6-bJ44"></iframe>
                    </div>
                </div>
                <div class="col-sm-4 col-md-12 hidden-xs reed-video ">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/QQOYuVuG1WI"></iframe>
                    </div>
                </div>
                <div class="col-sm-4 col-md-12 hidden-xs reed-video ">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/plkd6vyjg3M"></iframe>
                    </div>
                </div>
                <div class="hidden-sm col-md-12 hidden-xs reed-video ">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/5KiEtQurqAs"></iframe>
                    </div>
                </div>
                <div class="hidden-sm col-md-12 hidden-xs reed-video ">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/OjpJEFnCvdQ "></iframe>
                    </div>
                </div>
                <div class="hidden-sm col-md-12 hidden-xs reed-video ">
                    <div class="embed-responsive embed-responsive-16by9 ">
                        <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/YvcCi0VytFE"></iframe>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="col-md-3 hidden-sm hidden-xs ">
            <div class="row col-md-12 ">
                <h2 class="text-center ">Comentários </h2>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title ">Source Title</cite>
                    </footer>
                </blockquote>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title ">Source Title</cite>
                    </footer>
                </blockquote>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title ">Source Title</cite>
                    </footer>
                </blockquote>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title ">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </aside>
        <aside class="col-md-3 hidden-sm hidden-xs">
            <h2 class="text-center">Enquete </h2>
            <p> O que achou do site?</p>
            <form class="reed-enquete">
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="optradio">Péssimo</label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="optradio">Regular</label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="optradio">Bom</label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="optradio">Otimo</label>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-default">Enviar</button>
                </div>
            </form>
        </aside>

        <?php
        include 'partes/net.html';
        ?>

        <div class="hidden-lg hidden-md">
        <?php
        include'partes/reed-fo.html';
        ?>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <?php

    $footer = require('../partes/footer.php');
    $linksfooter = array();


    $linksfooter['Home'] = '../';

    $linksfooter['Humor'] = [
        'Home' => '../humor',
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
            'Rodada The Noite' => '../humor/noticiasbizarras/rodadathenoite.php'
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
        'Home' => '../jogos',
        'Esportes' => [
            'Home' => '../jogos/esportes',
            'Copa Cirrose' => '../jogos/esportes/copa-cirrose',
            'Gameplay RJ' => '../jogos/esportes/gameplayrj',
            'SGU' => '../jogos/esportes/sgu',
        ],
        'FPS' => [
            'Home' => '../jogos/fps',
            'Leet' => '../jogos/fps/leet',
            'LeNinja' => '../jogos/fps/leninja',
            'Monark' => '../jogos/fps/monark'
        ],
        'Moba' => [
            'Home' => '../jogos/moba',
            'Dota WTF' => '../jogos/moba/dotawtf',
            'Dry Bear' => '../jogos/moba/drybear',
            'Gordox' => '../jogos/moba/gordox'
        ],
        'Terror' => [
            'Home' => '../jogos/terror',
            'Ambuplay' => '../jogos/terror/ambuplay',
            'Pew Die Pie' => '../jogos/terror/pewdiepie',
            'Terror-Bionic' => '../jogos/terror/terror-bionic'
        ]
    ];

    $linksfooter['Culinária'] = [
        'Home' => '../culinaria',
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
        'Home' => '../lifestyle',
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

    $footer.footer($linksfooter, '../quemsomos.php', '../contato.php');

    ?>

    <script>
    </script>
</body>
</html>