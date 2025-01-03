<?php 

require '../api/listarFilmes.php';
require 'classeFilme.php';
 class controller{


  public static function getFilmePorId($id){
     

    // Coleta o arquivo Json da api listarFilmes
    $idFilme = $id;
      $api_url = "http://localhost:8080/Projetos/Projeto-Star-Wars/Catalogo-Star-Wars/api/listarFilmes.php?id=" . urlencode($idFilme);
      
      
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $api_url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $jsonData = curl_exec($ch);
      curl_close($ch);
      $data = array();
      $data = json_decode($jsonData, true);
     // Cria um objeto com os dados do arquivo Json
      $obj_filme = new filme($data['title'], $data['episode_id'], $data['opening_crawl'], $data['release_date'], $data['director'], $data['producer'], $data['characters']);  
      return $obj_filme;
      }

    // Requisita o endpoint
    public static function listarDados($id){
      return exibirFilme($id);
    }

}
?>