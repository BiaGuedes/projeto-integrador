<?php
function nav2($imagens)
{

    $keys = array_keys($imagens);


    $menus = '';
    for ($i = 0; $i < sizeof($keys); $i++) {
        $menus .= '<li><a href="' . $imagens[$keys[$i]] . '"><img alt="Ícone canal" class=" img-circle" src="' . $keys[$i] . '"/></a></li>';
    };

    echo'
        <div id="seguranav" class="col-xs-12 col-md-12 col-sm-12 pull-left">
          <div class="col-xs-1 col-md-1 col-sm-1 hidden-xs" id="setaesq"><span class="setaa glyphicon glyphicon-arrow-left"></span></div>
          <nav class="navbar col-md-10 col-xs-12 col-sm-10 " id="navfotos">
            <ul id="ulmaldito" class="text-center">
               '.$menus.'
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
            ';
}
