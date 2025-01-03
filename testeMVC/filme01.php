<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php 
//     require 'controller.php';
//       if(isset($_GET['id']))
//       $id = $_GET['id'];
//       $novoObj = controller::listarDados($id);
//       echo $novoObj->getTitulo()."<br>";
//       echo $novoObj->getEpisodio_id() . "<br>";
//       echo $novoObj->getSinopse() . "<br>";
//       echo $novoObj->getData_lançamento() . "<br>";
//       echo $novoObj->getDiretor() . "<br>";
//       echo $novoObj->getProdutor() . "<br>";
//      // Listar nome dos personagens --------------------------
//      $listaPersonagens = $novoObj->listarPersonagens();
//      $listaPersonagensJson = json_encode($listaPersonagens);
//      $total = count($listaPersonagens);
//      echo $total;
//     ?>
   <!-- 
//     <h2>Personagens</h2>
//     <ul>
//     <?php 
//      for($i=0; $i<$total; $i++){
//       ?> 
//     <li>
//       <?php //echo $listaPersonagens[$i]['name'] ?>
//     </li> <?php
//      }
    
//     ?>
//     </ul>
    
//  <br><br>
//   <div id = "nomePersonagens"></div>
-->
  <!-- <script>
    let jaExecutou = false;
    var listaNomes = document.getElementById('nomePersonagens'); 
   function listarPersonagens(){
    if(!jaExecutou){
      var array_Personagens = [];
      var array_Personagens = <?php //echo $listaPersonagensJson; ?>;
      array_Personagens.forEach(function(nome){
       console.log(nome['name']);
      let novoParagrafo = document.createElement('p');
      novoParagrafo.textContent = nome['name'];
      listaNomes.appendChild(novoParagrafo);
     })
      jaExecutou = true;
    } else {
      listaNomes.innerHTML = "";
      jaExecutou = false;
    }
    
  }

  </script> -->
    <?php   
// if(array_key_exists('personagens', $_POST)){
// foreach($listaPersonagens as $p){
// echo $p['name'] ."<br>";
//       }
//      }
    ?>
</body>

</html>

<?php
require 'controller.php';

if(isset($_GET['id'])){
  
  $idFilme = $_GET['id'];
  
  $novo_obj = controller::getFilmePorId($idFilme);
  
  //$filme = $novo_obj; 
 ob_end_clean();
 
 echo "<pre>";
 $especificacoes = get_object_vars($novo_obj);
 echo $especificacoes['titulo'] . "<br><br>";
 $personagens = $novo_obj->listarPersonagens($novo_obj->getPersonagens());
 foreach($personagens as $p){
  echo $p['name'] . "<br>";
 }

}
?>