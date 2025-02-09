<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo Star Wars</title>
     <link rel="stylesheet" href="mvc/estilo/estilo-tela-principal.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
     <script src="view-catalogo-script.js" defer></script>
</head>
<body>

 
<!-- Botão de Alternância -->
<button id="toggleOrderBtn">Ordenar por Ordem Cronológica</button>

<!-- Catálogo de Filmes -->
<div id="catalogo-painel">
    <ul id="movieList">
        <li data-order="4">
            <a href="mvc/filme04.php?id=4">
                <div class="container">
                    <img src="mvc/imgs/catalogo/episode04.jpeg" alt="" class="imagem">
                    <div class="overlay">Star Wars: Episódio IV – Uma Nova Esperança<br>25-05-1977</div>
                </div>
            </a>
        </li>
        <li data-order="5">
            <a href="mvc/filme05.php?id=5">
                <div class="container">
                    <img src="mvc/imgs/catalogo/episode05.jpeg" alt="" class="imagem">
                    <div class="overlay">Star Wars: Episódio V – O Império Contra-Ataca<br>17-05-1980</div>
                </div>
            </a>
        </li>
        <li data-order="6">
            <a href="mvc/filme06.php?id=6">
                <div class="container">
                    <img src="mvc/imgs/catalogo/episode06.jpeg" alt="" class="imagem">
                    <div class="overlay">Star Wars: Episódio VI – O Retorno de Jedi<br>25-05-1983</div>
                </div>
            </a>
        </li>
        <li data-order="1">
            <a href="mvc/filme01.php?id=1">
                <div class="container">
                    <img src="mvc/imgs/catalogo/episode01.jpeg" alt="" class="imagem">
                    <div class="overlay">Star Wars: Episódio I – A Ameaça Fantasma<br>19-05-1999</div>
                </div>
            </a>
        </li>
        <li data-order="2">
            <a href="mvc/filme02.php?id=2">
                <div class="container">
                    <img src="mvc/imgs/catalogo/episode02.jpeg" alt="" class="imagem">
                    <div class="overlay">Star Wars: Episódio II – O Ataque dos Clones<br>16-05-2002</div>
                </div>
            </a>
        </li>
        <li data-order="3">
            <a href="mvc/filme03.php?id=3">
                <div class="container">
                    <img src="mvc/imgs/catalogo/episode03.jpeg" alt="" class="imagem">
                    <div class="overlay">Star Wars: Episódio III – A Vingança dos Sith<br>19-05-2005</div>
                </div>
            </a>
        </li>
    </ul>
</div>
    
    
    
</body>
</html>