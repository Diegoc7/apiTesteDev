<?php
return [
    'router' => [
        'routes' => [
            'usuario.rest.cidades' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/cidades[/:cidades_id]',
                    'defaults' => [
                        'controller' => 'usuario\\V1\\Rest\\Cidades\\Controller',
                    ],
                ],
            ],
            'usuario.rpc.cadastrar' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '\\cadastrar',
                    'defaults' => [
                        'controller' => 'usuario\\V1\\Rpc\\Cadastrar\\Controller',
                        'action' => 'cadastrar',
                    ],
                ],
            ],
            'usuario.rest.biometria' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/usuario/biometria[/:biometria_id]',
                    'defaults' => [
                        'controller' => 'usuario\\V1\\Rest\\Biometria\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            1 => 'usuario.rest.cidades',
            0 => 'usuario.rpc.cadastrar',
            2 => 'usuario.rest.biometria',
        ],
    ],
    'api-tools-rest' => [
        'usuario\\V1\\Rest\\Cidades\\Controller' => [
            'listener' => 'usuario\\V1\\Rest\\Cidades\\CidadesResource',
            'route_name' => 'usuario.rest.cidades',
            'route_identifier_name' => 'cidades_id',
            'collection_name' => 'cidades',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \usuario\V1\Rest\Cidades\CidadesEntity::class,
            'collection_class' => \usuario\V1\Rest\Cidades\CidadesCollection::class,
            'service_name' => 'cidades',
        ],
        'usuario\\V1\\Rest\\Biometria\\Controller' => [
            'listener' => \usuario\V1\Rest\Biometria\BiometriaResource::class,
            'route_name' => 'usuario.rest.biometria',
            'route_identifier_name' => 'biometria_id',
            'collection_name' => 'biometria',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PATCH',
                3 => 'PUT',
                4 => 'DELETE',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \usuario\V1\Rest\Biometria\BiometriaEntity::class,
            'collection_class' => \usuario\V1\Rest\Biometria\BiometriaCollection::class,
            'service_name' => 'biometria',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'usuario\\V1\\Rest\\Cidades\\Controller' => 'HalJson',
            'usuario\\V1\\Rpc\\Cadastrar\\Controller' => 'Json',
            'usuario\\V1\\Rest\\Biometria\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'usuario\\V1\\Rest\\Cidades\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'usuario\\V1\\Rpc\\Cadastrar\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'usuario\\V1\\Rest\\Biometria\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'usuario\\V1\\Rest\\Cidades\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/json',
            ],
            'usuario\\V1\\Rpc\\Cadastrar\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Biometria\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \usuario\V1\Rest\Cidades\CidadesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.cidades',
                'route_identifier_name' => 'cidades_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \usuario\V1\Rest\Cidades\CidadesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.cidades',
                'route_identifier_name' => 'cidades_id',
                'is_collection' => true,
            ],
            \usuario\V1\Rest\Biometria\BiometriaEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.biometria',
                'route_identifier_name' => 'biometria_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \usuario\V1\Rest\Biometria\BiometriaCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.biometria',
                'route_identifier_name' => 'biometria_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools' => [
        'db-connected' => [
            'usuario\\V1\\Rest\\Cidades\\CidadesResource' => [
                'adapter_name' => 'db',
                'table_name' => 'cidades',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'usuario\\V1\\Rest\\Cidades\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'usuario\\V1\\Rest\\Cidades\\CidadesResource\\Table',
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            'usuario\\V1\\Rpc\\Cadastrar\\Controller' => \usuario\V1\Rpc\Cadastrar\CadastrarControllerFactory::class,
        ],
    ],
    'api-tools-rpc' => [
        'usuario\\V1\\Rpc\\Cadastrar\\Controller' => [
            'service_name' => 'cadastrar',
            'http_methods' => [
                0 => 'PUT',
                1 => 'POST',
                2 => 'GET',
                3 => 'DELETE',
            ],
            'route_name' => 'usuario.rpc.cadastrar',
        ],
    ],
    'api-tools-content-validation' => [
        'usuario\\V1\\Rpc\\Cadastrar\\Controller' => [
            'input_filter' => 'usuario\\V1\\Rpc\\Cadastrar\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'usuario\\V1\\Rpc\\Cadastrar\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\NotEmpty::class,
                        'options' => [],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'nome',
                'description' => 'inserção do nome do usuário',
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authorization' => [
            'usuario\\V1\\Rpc\\Cadastrar\\Controller' => [
                'actions' => [
                    'cadastrar' => [
                        'GET' => true,
                        'POST' => false,
                        'PUT' => true,
                        'PATCH' => false,
                        'DELETE' => true,
                    ],
                ],
            ],
            'usuario\\V1\\Rest\\Biometria\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            \usuario\V1\Rest\Biometria\BiometriaResource::class => \usuario\V1\Rest\Biometria\BiometriaResourceFactory::class,
        ],
    ],
];
