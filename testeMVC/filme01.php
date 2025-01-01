<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require 'controller.php';
    if(isset($_POST['id'])){
      $id = $_POST['id'];
      $novoObj = controller::listarDados($id);
      echo $novoObj->getTitulo();
      $novoObj->listarPersonagens();
    ?>
    <?php


    }
     

    
    
    
    ?>
</body>
</html>

<?php






?>