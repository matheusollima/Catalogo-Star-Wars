<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js" defer></script>
    <script src="listarPersonagem.js" defer></script>
    <script src = "listarPersonagem.js" defer></script>
    <link rel="stylesheet" href="estilo/estilo.css">
    <!-- Fonte  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">


    <title>Filme 1</title>
</head>
<body>

<?php

require 'controller.php';
require 'conexaoBD.php';
require 'calculoIdade.php';
require '../google-translate/translate.php';

// Criação do objeto do com dados do filme

if(isset($_GET['id'])){

$idFilme = $_GET['id'];

$idFilmeJson = json_encode($idFilme);

$novo_obj = controller::getFilmePorId($idFilme);

ob_end_clean(); 

 $especificacoes = get_object_vars($novo_obj);
 $idImg = $especificacoes['episodio_id'];
 $spec = json_encode($especificacoes); 
 
 ?>
 <script>
  console.log(<?php echo $spec; ?>);
  var idFilme = <?php echo $idFilmeJson; ?>
 </script>

<!-- Botão de retorno ---------------->
 <a href="../index.php" id = "link-catalogo" ><button id = "botao-retorno"><img src="imgs/icons/back.png" alt="" id = "img-back">Catálogo</button></a>
 <div id = banner-tela>
 <img src="imgs/banner-filmes/banner-episode0<?php echo $idImg  ?>.webp" alt="" id = "bannerepisode">
 <h1 id = "titulo">
 
 <?php 
// Calculo idade do Filme

$idadeFilme = calcularIdade($especificacoes['data_lançamento']);
$idadeFilme = $idadeFilme['anos'] . " anos " . $idadeFilme['meses'] . " meses " . $idadeFilme['dias'] . " dias <br>";

// ESPECIFICAÇÕES -----------------------------------------------------------------------------
echo "Star Wars - " . traduzir($especificacoes['titulo']) . "<br>";
?>
</h1>
</div>
 

<section class = "specs">
<div id = "poster-div">
<img src="imgs/catalogo/episode01.jpeg" alt="" id = "poster">
</div>


 <div class = "painel">
 <h2 class = "label">Episódio </h2><h2 class = "texto"><?php echo $especificacoes['episodio_id'] . "<br>";?></h2> 
 <h2 class = "label">Data de lançamento - </h2>
 <div class = "texto" >
  <?php
  // ALTERAR DATA DO FORMATO YMD PARA DMY
  $dataYMD = DateTime::createFromFormat("Y-m-d", $especificacoes['data_lançamento'] );
  $dataDMY = $dataYMD->format("d-m-Y");
  echo $dataDMY . "<br>";
  ?>
</div>
 <h2 class = "label">Sinopse - </h2> <div class = "texto"><?php echo traduzir($especificacoes['sinopse']) . "<br>";?></div>
 <h2 class = "label" >Diretor - </h2> <div class = "texto"><?php echo $especificacoes['diretor'] . "<br>";?></div>
 <h2 class = "label" >Produtor - </h2> <div class = "texto"><?php echo $especificacoes['produtor'] . "<br><br>";?></div>
 <h2 class = "label" >Idade do filme - </h2> <div class = "texto"><?php echo $idadeFilme;?></div>     
 

</div>
<!-- HTML para incorporar um vídeo do YouTube -->
<div style = "display:block" class="trailer-div">
<h1>Trailer</h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/bD7bpG-zDJQ?si=WiZpHP3KRTqlr_Ps" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

</div>
 </section>

 <?php
 // LISTAR PERSONAGENS -------------------------------------------------------------------------



 ?>
<h1 class = "titulo-personagens">Personagens</h1>
<div id = "container-personagens">

<div class = "wrapper">
 <i id = "left" class="fa-solid fa-angle-left"></i>
  <div class = "carousel">
   
    <button class = "btn-personagem" id = "0"><img src="imgs/personagens/episode01/c3po-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>    
    <button class = "btn-personagem" id = "1"><img src="imgs/personagens/episode01/r2d2-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "2"><img src="imgs/personagens/episode01/obiwan-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "3"><img src="imgs/personagens/episode01/anakin-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "4"><img src="imgs/personagens/episode01/jabba-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "5"><img src="imgs/personagens/episode01/yoda-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "6"><img src="imgs/personagens/episode01/palpatine-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "7"><img src="imgs/personagens/episode01/quigonjinn-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "8"><img src="imgs/personagens/episode01/nutegunray-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "9"><img src="imgs/personagens/episode01/valorum-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "10"><img src="imgs/personagens/episode01/padmeamidala-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "11"><img src="imgs/personagens/episode01/jarjarbinks-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "12"><img src="imgs/personagens/episode01/tarpals-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "13"><img src="imgs/personagens/episode01/nass-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "14"><img src="imgs/personagens/episode01/ricolie-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "15"><img src="imgs/personagens/episode01/watto-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "16"><img src="imgs/personagens/episode01/sebulba-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "17"><img src="imgs/personagens/episode01/panaka-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "18"><img src="imgs/personagens/episode01/shmiskywalker-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "19"><img src="imgs/personagens/episode01/darthmaul-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "21"><img src="imgs/personagens/episode01/ratts-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "22"><img src="imgs/personagens/episode01/dudbolt-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "23"><img src="imgs/personagens/episode01/gasgano-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "24"><img src="imgs/personagens/episode01/benquadinaros-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "25"><img src="imgs/personagens/episode01/macewindu-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "26"><img src="imgs/personagens/episode01/kiadimundi-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "29"><img src="imgs/personagens/episode01/adigallia-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "30"><img src="imgs/personagens/episode01/saeseetiin-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "31"><img src="imgs/personagens/episode01/yaraelpoof-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "32"><img src="imgs/personagens/episode01/plokoon-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>
    <button class = "btn-personagem" id = "33"><img src="imgs/personagens/episode01/masamedda-episode01.webp" alt="" class = "personagem"><h1 class = "nome-main" ></h1></button>  
    
  </div>
  <i id = "right" class="fa-solid fa-angle-right" ></i>
</div>
  
</div>

<?php
} 
?>
<script>
  var idFilme = <?php echo $idFilme; ?>;
const botoes = document.querySelectorAll('.btn-personagem');
$(document).ready(function() {
   $(botoes).click(function() {
    var id = this.getAttribute('id');
     $.ajax({
       url: "listarPersonagens.php",
       type: "POST",
       data: { 
        text: id, 
        idFilme: idFilme
      },
       dataType: "json",
       success: function(response) {
        var personagens = response;
        abrirModal(personagens, id);
        console.log(response);
        },
       error: function(xhr, status, error) {
         console.error("Erro na requisição AJAX:", status, error);
       }
     });
   });
 });
</script>


<!-- JANELA MODAL PARA EXIBIR OS PERSONAGENS  -->
<div class="janela-modal" id = "janela-modal" >

  <div class="modal">
  
    <button class = "fechar" id = "fechar">X</button>

   
<!-- NOME PERSONAGEM-->
<h1 id = "nome-personagem"></h1>
<div style = "display: flex; align-items: center; justify-content: center; gap: 100px;">
<dl>

<!-- ALTURA -->
<dt>Altura: </dt>
<dd id = "altura"></dd>
<!-- PESO -->
<dt>Peso: </dt>
<dd id = "peso"></dd>
<!-- DATA DE NASCIMENTO -->
<dt>Data de nascimento: </dt>
<dd id = "data-nasc"></dd>
<!-- COR DO OLHO -->
<dt>Cor do olho: </dt>
<dd id = "cor-olhos"></dd>
<!-- COR DE CABELO -->
<dt>Cor do cabelo: </dt>
<dd id = "cor-cabelo"></dd>

<!-- COR DA PELE -->
<dt>Cor da pele: </dt>
<dd id = "cor-pele"></dd>

<!-- GÊNERO -->
<dt>Gênero: </dt>
<dd id = "genero"></dd>



</dl>
<img id = "imagem-personagem-modal" src= "" alt="">
</div>
   
    

  </div>
</div>


</body>

</html>




