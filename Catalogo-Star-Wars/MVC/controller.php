
<?php 

require '../api/listarFilmes.php';
require 'classeFilme.php';
require 'conexaoBD.php';


 class controller{


  public static function getFilmePorId($id){
     
    require 'logger.php';
    // Coleta o arquivo Json da api listarFilmes
      $idFilme = $id;
      $api_url = "http://localhost/Projetos/Projeto-Star-Wars/Catalogo-Star-Wars/api/listarFilmes.php?id=" . urlencode($idFilme);

    // CRIAÇÃO DO OBJETO FILMES QUE FAZ A REQUISIÇÃO DA API
    try {
      // Inicializa o cURL
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $api_url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      
      // Executa a requisição
      $jsonData = curl_exec($ch);
      
      // Verifica se ocorreu algum erro
      if (curl_errno($ch)) {
          throw new Exception(curl_error($ch));
      }
  
      curl_close($ch);
  
      // Decodifica o JSON recebido
      $data = json_decode($jsonData, true);
  
      // Cria um objeto com os dados do arquivo JSON
      $obj_filme = new filme(
          $data['title'], 
          $data['episode_id'], 
          $data['opening_crawl'], 
          $data['release_date'], 
          $data['director'], 
          $data['producer'], 
          $data['characters']
      );
  
      return $obj_filme;
  
  } catch (Exception $e) {
      // Lida com possíveis exceções e exibe uma mensagem de erro
      echo 'Erro ao acessar a API: ' . $e->getMessage();
  }
  

  // Criar e enviar logs  
  $method = $_SERVER['REQUEST_METHOD'];
  $endpoint = $api_url;
  $params = $_REQUEST;
  $response_code = http_response_code();
  $response_body = 'corpo da resposta';
  $ip = $_SERVER['REMOTE_ADDR'];
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  
       
      $context = log_api_request($method, $endpoint, $params, $response_code, $response_body, $ip, $user_agent);
      $logger->info('API request', $context);
  
  try {
      global $conexao;
      $sql = "INSERT INTO api_requests (method, endpoint, params, response_code, response_body, ip, user_agent) VALUES (?, ?, ?, ?, ?, ?, ?)";
      $stmt = $conexao->prepare($sql);
  
      // Passando os valores do array $context para o método execute
      $stmt->execute([
          $context['method'],
          $context['endpoint'],
          json_encode($context['params']),
          $context['response_code'],
          $context['response_body'],
          $context['ip'],
          $context['user_agent']
      ]);
      
      echo "Dados inseridos com sucesso!";
  } catch (PDOException $e) {
      echo 'Erro ao inserir os dados: ' . $e->getMessage();
  }





      }




}



?>