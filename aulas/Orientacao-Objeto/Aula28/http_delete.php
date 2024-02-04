<?php
## API Delete
$url_delete = "https://jsonplaceholder.typicode.com/posts/1";
$options_delete = [
    "http" => [
        "method" => "DELETE"
    ]
];
$context_delete = stream_context_create($options_delete);
$response_delete = file_get_contents($url_delete, false, $context_delete);



?>