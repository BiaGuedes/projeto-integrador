<?php

function footer($links, $sobre, $contato){

    $keys = array_keys($links);
    $foot = '<div class="clearfix"></div>
    <div id="footer" class="container col-md-12 col-xs-12">
      <div class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
        <h1>Redes Sociais</h1>
        <div class="col-xs-12">
          <div class="col-xs-12 social text-center">
          <a href="#"><span class="fa fa-facebook-square fa-3x"></span></a>
          <a href="#"><span class="fa fa-twitter-square fa-3x"></span></a>
          <a href="#"><span class="fa fa-google-plus-square fa-3x"></span></a>
          </div>
        </div>
      </div>
      <div class="divider col-xs-10 col-xs-offset-1 hidden-xs"></div>
      <div class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1 hidden-xs">
      <h1>Mapa do Site</h1>
        <div class="col-xs-12 col-md-12 col-sm-12">
    ';


    for($i = 0; $i < sizeof($keys); $i++){
        $tema = '';
        if(!is_array($links[$keys[$i]])){
            $tema .= '<div class="col-md-2 col-sm-4 col-xs-6 lks"><h1><a href="'.$links[$keys[$i]].'">'.$keys[$i].'</a></h1></div>';
        }else{
            $tema .= '<div class="col-md-2 col-sm-4 col-xs-6 lks"><h1><a href="'.$links[$keys[$i]]['Home'].'">'.$keys[$i].'</a></h1>';

            $subtemas = array_keys($links[$keys[$i]]);
            $arrsbt = $links[$keys[$i]];

            for($j = 1; $j < sizeof($subtemas); $j++){
                $tema .= '<h2><a href="'.$arrsbt[$subtemas[$j]]['Home'].'">' . $subtemas[$j] . '</a></h2>';

                $pags = array_keys($arrsbt[$subtemas[$j]]);
                $arrpags = $arrsbt[$subtemas[$j]];

                $tema .= '<ul>';
                $arrsbt[$subtemas[$j]];
                for ($k = 1; $k < sizeof($pags); $k++) {
                    $tema .= '<li><a href="' . $arrpags[$pags[$k]] . '">' . $pags[$k] . '</a></li>';
                }
                $tema .= '</ul>';
            }
            $tema .= '</div>';
        }
        $foot .= $tema;
    }

    $foot .= '</div>
      </div>
      <div class="divider col-xs-10 col-xs-offset-1"></div>
      <div class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
        <div id="sobrecontato" class="col-xs-12 text-center">
          <a href="'.$sobre.'">Quem Somos</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$contato.'">Contato</a>
        </div>
      </div>
      <div class="divider col-xs-10 col-xs-offset-1"></div>
      <div class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1">
        <div class="col-xs-12 ">
          <h1 class="text-center">Copyright 2015 - Utuber</h1>
        </div>
      </div>
    </div>';

    echo $foot;
}


?>





