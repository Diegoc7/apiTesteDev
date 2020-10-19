<?php
return [
    'router' => [
        'routes' => [
            'usuarios.rest.telefones' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/telefones[/:telefones_id]',
                    'defaults' => [
                        'controller' => 'Usuarios\\V1\\Rest\\Telefones\\Controller',
                    ],
                ],
            ],
            'usuarios.rest.enderecos' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/enderecos[/:enderecos_id]',
                    'defaults' => [
                        'controller' => 'Usuarios\\V1\\Rest\\Enderecos\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'usuarios.rest.telefones',
            1 => 'usuarios.rest.enderecos',
        ],
    ],
    'api-tools-rest' => [
        'Usuarios\\V1\\Rest\\Telefones\\Controller' => [
            'listener' => 'Usuarios\\V1\\Rest\\Telefones\\TelefonesResource',
            'route_name' => 'usuarios.rest.telefones',
            'route_identifier_name' => 'telefones_id',
            'collection_name' => 'telefones',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Usuarios\V1\Rest\Telefones\TelefonesEntity::class,
            'collection_class' => \Usuarios\V1\Rest\Telefones\TelefonesCollection::class,
            'service_name' => 'telefones',
        ],
        'Usuarios\\V1\\Rest\\Enderecos\\Controller' => [
            'listener' => \Usuarios\V1\Rest\Enderecos\EnderecosResource::class,
            'route_name' => 'usuarios.rest.enderecos',
            'route_identifier_name' => 'enderecos_id',
            'collection_name' => 'enderecos',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Usuarios\V1\Rest\Enderecos\EnderecosEntity::class,
            'collection_class' => \Usuarios\V1\Rest\Enderecos\EnderecosCollection::class,
            'service_name' => 'enderecos',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Usuarios\\V1\\Rest\\Telefones\\Controller' => 'HalJson',
            'Usuarios\\V1\\Rest\\Enderecos\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Usuarios\\V1\\Rest\\Telefones\\Controller' => [
                0 => 'application/vnd.usuarios.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Usuarios\\V1\\Rest\\Enderecos\\Controller' => [
                0 => 'application/vnd.usuarios.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Usuarios\\V1\\Rest\\Telefones\\Controller' => [
                0 => 'application/vnd.usuarios.v1+json',
                1 => 'application/json',
            ],
            'Usuarios\\V1\\Rest\\Enderecos\\Controller' => [
                0 => 'application/vnd.usuarios.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Usuarios\V1\Rest\Telefones\TelefonesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuarios.rest.telefones',
                'route_identifier_name' => 'telefones_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Usuarios\V1\Rest\Telefones\TelefonesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuarios.rest.telefones',
                'route_identifier_name' => 'telefones_id',
                'is_collection' => true,
            ],
            \Usuarios\V1\Rest\Enderecos\EnderecosEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuarios.rest.enderecos',
                'route_identifier_name' => 'enderecos_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Usuarios\V1\Rest\Enderecos\EnderecosCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuarios.rest.enderecos',
                'route_identifier_name' => 'enderecos_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools' => [
        'db-connected' => [
            'Usuarios\\V1\\Rest\\Telefones\\TelefonesResource' => [
                'adapter_name' => 'db',
                'table_name' => 'telefones',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Usuarios\\V1\\Rest\\Telefones\\Controller',
                'entity_identifier_name' => 'id',
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'Usuarios\\V1\\Rest\\Telefones\\Controller' => [
            'input_filter' => 'Usuarios\\V1\\Rest\\Telefones\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Usuarios\\V1\\Rest\\Telefones\\Validator' => [
            0 => [
                'name' => 'id_usuario',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'db',
                            'table' => 'usuarios',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'telefone',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '30',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            \Usuarios\V1\Rest\Enderecos\EnderecosResource::class => \Usuarios\V1\Rest\Enderecos\EnderecosResourceFactory::class,
        ],
    ],
];
