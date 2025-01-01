<?php 
 require 'api_logic.php';
 require '../testeMVC/classeFilme.php';

function exibirFilme($id){
    $filme = listarFilmes($id);
   $obj_filme = new filme($filme['title'], $filme['episode_id'], $filme['opening_crawl'], $filme['release_date'], $filme['director'], $filme['producer'], $filme['characters']);
    return $obj_filme;
 
}


?>