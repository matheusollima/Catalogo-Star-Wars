<?php 

require '../api/listarFilmes.php';


 class controller{


  public static function getFilmePorId($id){
      $idFilme = $id;
      $api_url = "http://localhost/Projetos/Projeto-Star-Wars/Catalogo-Star-Wars/api/listarFilmes.php?id=" . urlencode($idFilme);
      
      
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $api_url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $jsonData = curl_exec($ch);
      curl_close($ch);
      $data = json_decode($jsonData, true);
      return $data;
      }

    // Requisita o endpoint
    public static function listarDados($id){
      return exibirFilme($id);
    }

}
?>