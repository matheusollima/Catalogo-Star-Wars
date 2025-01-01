<?php 
// $url = "http://swapi.py4e.com/api/people/";
// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// $personagens = json_decode(curl_exec($ch), true);
//  echo "<pre>";
// for($i = 0; $i< count($personagens['results']); $i++){
//     print_r($personagens['results'][$i]['name']);
//      echo "<br>";
// }
?>
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
        // echo $filme['results'][$i]['title'] . "<br>";
        // echo $filme['results'][$i]['opening_crawl'];
        echo "<pre>";
        $listaFilmes = $filme['results'][$i];
        return $listaFilmes;
    }
        
       
    }
   }




/*  LISTAR PERSONAGENS ----------------------------------------------------------------------------------    */ 
    
  function listarPersonagens(){
    $url = "http://swapi.py4e.com/api/films/";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $personagens = json_decode(curl_exec($ch), true);
    foreach($personagens['results'] as $p){
        echo "<pre>";
        
    ?> <html>    <h1 style = "color: red;"><?php echo  $p['title'] . "<br><br>"; ?></h1> </html>
        <?php
        echo $p['opening_crawl'] . "<br>";
       }  
    
    while(isset($personagens['next'])){
        $url = $personagens['next'];
        $ch = curl_init($url);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       $personagens = json_decode(curl_exec($ch), true);
       foreach($personagens['results'] as $p){
        echo "<pre>";
        echo $p['title'] . "<br>";
        echo $p['opening_crawl'] . "<br>";
       }   
    }

  }
    





?>