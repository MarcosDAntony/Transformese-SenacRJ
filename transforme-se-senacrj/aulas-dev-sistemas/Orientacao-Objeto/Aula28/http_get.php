<?php
//Uso de API

$url_get = "https://jsonplaceholder.typicode.com/posts/2";
$response_get = file_get_contents($url_get);
$data_get = json_decode($response_get, true);

echo "Status Code: ". http_response_code() . PHP_EOL;
echo "Dados";
print_r($data_get);
print_r($data_get['userId']);
?>