<?php 

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "logs";



try{
    $conexao = new PDO('mysql:host=localhost;dbname=logs', $userName, $password);
      $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
    echo 'ERROR::::::::::: ' . $e->getMessage();
}





?>