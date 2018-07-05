<?php
return [
    'MDirectorTest\\V1\\Rpc\\Ping\\Controller' => [
        'description' => 'ping the api',
        'GET' => [
            'description' => 'Ping the api for acknowledge',
            'response' => '{
    "ack":"Acknowledge the request with a timestamp"
}',
        ],
    ],
];
