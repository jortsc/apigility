<?php
return [
    'controllers' => [
        'factories' => [
            'MDirectorTest\\V1\\Rpc\\Ping\\Controller' => \MDirectorTest\V1\Rpc\Ping\PingControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'm-director-test.rpc.ping' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/ping',
                    'defaults' => [
                        'controller' => 'MDirectorTest\\V1\\Rpc\\Ping\\Controller',
                        'action' => 'ping',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'm-director-test.rpc.ping',
        ],
    ],
    'zf-rpc' => [
        'MDirectorTest\\V1\\Rpc\\Ping\\Controller' => [
            'service_name' => 'Ping',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'm-director-test.rpc.ping',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'MDirectorTest\\V1\\Rpc\\Ping\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'MDirectorTest\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.m-director-test.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'MDirectorTest\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.m-director-test.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-content-validation' => [
        'MDirectorTest\\V1\\Rpc\\Ping\\Controller' => [
            'input_filter' => 'MDirectorTest\\V1\\Rpc\\Ping\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'MDirectorTest\\V1\\Rpc\\Ping\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'ack',
                'description' => 'Acknowledge the request with a time stamp',
            ],
        ],
    ],
];
