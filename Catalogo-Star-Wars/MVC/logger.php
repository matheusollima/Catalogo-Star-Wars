<?php
require_once "../vendor/autoload.php";
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\JsonFormatter;





$logger = new Logger('api_access');
$stream = new StreamHandler('api_access.log', Logger::INFO);
$stream->setFormatter(new JsonFormatter());
$logger->pushHandler($stream);

function log_api_request($method, $endpoint, $params, $response_code, $response_body, $ip, $user_agent) {
    $context = [
        'method' => $method,
        'endpoint' => $endpoint,
        'params' => $params,
        'response_code' => $response_code,
        'response_body' => $response_body,
        'ip' => $ip,
        'user_agent' => $user_agent
    ];

    return $context;
}

?>
