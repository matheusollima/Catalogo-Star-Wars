<?php 
 require 'api_logic.php'; 
 
 try {
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $filme = listarFilmes($id);
        ob_start();
        echo json_encode($filme);
    }
} catch (Exception $e) {
    echo 'Erro: ' . $e->getMessage();
}


?>


