<?php 

require 'C:\xampp\htdocs\Projeto-Star-Wars\api\filmes.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
   selecionar_filme($id);

}


?>