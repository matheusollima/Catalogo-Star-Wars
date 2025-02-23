<?php 

namespace App\Text;
use Google\Cloud\Translate\V2\TranslateClient;

class Translate{

    // Método responsável por criar uma instância do cliente de tradução
    private static function getClient(){
        return new TranslateClient([
            'key' => 'AIzaSyBcU9GyPilDTdoqa6Tlb0corRkDaoG9_94'
        ]);
    }

    public static function run($input, $targetLanguages = []){
     // INSTÂNCIA DO CLIENTE DE TRADUÇÂO   
        $obClient = self::getClient();

     // TRADUÇÕES GERADAS
      $response = [];
      
     // ITERA OS IDIOMAS 
      foreach($targetLanguages as $language){
       //EXECUTA A TRADUÇÃO PARA O IDIOMA ATUAL
       $result = $obClient->translate($input,[
        'target' => $language
       ]);

       //TEXTO TRADUZIDO
        $response[$language] = $result['text'] ?? '';
      }

    // RETORNA TODAS AS TRADUÇÕES EXECUTADAS
     return $response;
    }
}


?>


