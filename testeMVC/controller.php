<?php 

require '../api/listarFilmes.php';


 class controller{

    // Requisita o endpoint
    public static function listarDados($id){
      return exibirFilme($id);
    }

}
?>