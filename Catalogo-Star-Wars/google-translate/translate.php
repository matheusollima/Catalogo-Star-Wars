<?php

//AUTOLOAD DO COMPOSER
require __DIR__.'/vendor/autoload.php';


use \App\Text\Translate;


//IDIOMAS PARA TRADUÇÃO



function traduzir($input){
    $languages = [
        'pt'
    
    ];
    $result = Translate::run($input, $languages);
    $resultText = implode(" ",$result);
    return $resultText;
}



?>