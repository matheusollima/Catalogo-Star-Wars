<?php
require '../index.php';

function selecionar_filme($id_filme){
    $idFilme = $id_filme;
    $filmes = listarFilmes($idFilme);
    echo "<pre>";
   ?> 
   <html>
   <h1 style = "color:red" >
<?php 
    echo $filmes['title'] . "<br><br>";
?>
   </h1>
   
   <p style = 'font-size: 25px'>  
<?php    
  
  echo $filmes['opening_crawl'] . "<br><br>";
  echo "Personagens" . "\n";
  forEach($filmes['characters'] as $f){
     $url = $f;
     $ch = curl_init($url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     $filme = json_decode(curl_exec($ch), true);
     
     echo $filme['name'] . "<br>";
  }
}


?>
  </p>
 </html>