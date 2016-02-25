<?php

function nav1($corBarra, $pg, $links, $icc, $logoSrc){

    $keys = array_keys($links);

    $icc = ($icc != 'none'? '<img id="ictema" alt="Ícone tema" src="'.$icc.'"/>': '');

    $cor = '#555';
    $corSelecionado = '#fff';
    $corFonte = $corSelecionado;
    $corFonteSelecionado = $cor;

    $lis = '
      <style>

          #ulnav>li.open>ul>li>a:hover{
              background-color: '.$cor.';
              color: '.$corFonte.';
          }

          #ulnav>li.open>a{
              background-color: '.$corSelecionado.';
              color: '.$corFonteSelecionado.'
          }

          #ulnav a{
            color: '.$corFonte.';
          }

          #ulnav a.subta{
            color: '.$corFonteSelecionado.';
          }

      </style>

      <nav class="navbar navbar-default" style="background-color: '.$cor.';">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Expadir Menu</span> <span class="icon-bar"></span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> </button>
      <a href="'.$logoSrc[1].'"><img alt="logo" class="marglef10" height="50px" src="'.$logoSrc[0].'"/></a>'.$icc.'
      </div>
      <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav" id="ulnav">';

    for($i = 0; $i < sizeof($keys); $i++){
        $tema = '';
        if(!is_array($links[$keys[$i]])){
            $tema .= '<li style="'.($pg == $keys[$i] ? "background: ".$corSelecionado : '').'"><a style="'.($pg == $keys[$i] ? "color: ".$corFonteSelecionado : '').'" href="'.$links[$keys[$i]].'">'.$keys[$i].'</a></li>';
        }else{
            $tema .= '<li style="'.($pg == $keys[$i] ? "background: ".$corSelecionado : '').'"><a style="'.($pg == $keys[$i] ? "color: ".$corFonteSelecionado : '').'" href="#" class="dropdown-toggle" data-toggle="dropdown">'.$keys[$i].' <span class="caret"></span></a><ul style="background-color: '.$corSelecionado.'" class="dropdown-menu subt">';
            for($j = 0; $j < sizeof($links[$keys[$i]]); $j++){
                $pos = $links[$keys[$i]];
                $sub = array_keys($pos);
                $tema .= '<li><a class="subta" href="'.$pos[$sub[$j]].'">'.$sub[$j].'</a></li>';
            }
            $tema .= '</ul></li>';
        }
        $lis .= $tema;
    }
    $lis .= '</ul></div></nav><div class="clearfix"></div>

    <div class="bg-danger faix">
        <div style="background-color: '.$corBarra.'"></div>
    </div>

    ';
    echo $lis;
}
