<?php 
 require 'api_logic.php';
//  require '../testeMVC/classeFilme.php';

// function exibirFilme($id){
    
//         $filme = listarFilmes($id);
//         $obj_filme = new filme($filme['title'], $filme['episode_id'], $filme['opening_crawl'], $filme['release_date'], $filme['director'], $filme['producer'], $filme['characters']);
//         $json_filme = JSON_encode($obj_filme); 
//         return $obj_filme;
    
 
// }

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $filme = listarFilmes($id);
    ob_start();
    echo json_encode($filme);
    $jsonData = ob_get_contents();
    

}

?>