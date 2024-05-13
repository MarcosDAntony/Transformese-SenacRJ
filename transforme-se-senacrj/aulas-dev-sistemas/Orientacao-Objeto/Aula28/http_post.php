<?php
//https://pokeapi.co/ site interessante de uma api de pokémon

$url_post = "https://jsonplaceholder.typicode.com/posts";
$data_post = ["title" => "Fofoca", "body" => "Olha isso menina!", "userId" => 99];
$options_post = [
    "http" => [
        "method" => "POST",
        "header" => "Content-type: application/json",
        "content" => json_encode($data_post)
    ]
];
$context_post = stream_context_create($options_post);
$response_post = file_get_contents($url_post, false, $context_post);

$data_post_response = json_decode($response_post, true);
var_dump($data_post_response); //Forma mais completa de exibição

echo "Status Code: " . http_response_code() . PHP_EOL;
echo "Data: ";
print_r($data_post_response);//Forma mais resumida de exibição
?>
