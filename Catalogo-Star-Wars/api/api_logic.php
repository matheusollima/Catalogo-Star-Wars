<?php  
  

/*  LISTAR FILMES ----------------------------------------------------------------------------------    */ 
function listarFilmes($filme_id){
    $url = "http://swapi.py4e.com/api/films/";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $filme = json_decode(curl_exec($ch), true);
    $count = $filme['count'];
    for($i = 0; $i<$count; $i++){
      if($filme['results'][$i]['episode_id'] == $filme_id){

        $listaFilmes = $filme['results'][$i];
        return $listaFilmes;
    }
        
       
    }
   }
    





?>