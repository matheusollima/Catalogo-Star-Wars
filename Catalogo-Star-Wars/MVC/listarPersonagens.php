<?php 
require 'controller.php';
require '../google-translate/translate.php';

$id = $_POST['text'];
$idFilme = $_POST['idFilme'];
$novo_obj = controller::getFilmePorId($idFilme);
$personagens = $novo_obj->listarPersonagens($novo_obj->getPersonagens(), $id);

  header('Content-Type: application/json');
  echo json_encode($personagens[0]);
   
       






?>
