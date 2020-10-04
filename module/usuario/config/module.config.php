<?php
return [
    'router' => [
        'routes' => [
            'usuario.rest.usuario' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/usuario[/:usuario_id]',
                    'defaults' => [
                        'controller' => 'usuario\\V1\\Rest\\Usuario\\Controller',
                    ],
                ],
            ],
            'usuario.rest.cidades' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/cidades[/:cidades_id]',
                    'defaults' => [
                        'controller' => 'usuario\\V1\\Rest\\Cidades\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'usuario.rest.usuario',
            1 => 'usuario.rest.cidades',
        ],
    ],
    'api-tools-rest' => [
        'usuario\\V1\\Rest\\Usuario\\Controller' => [
            'listener' => 'usuario\\V1\\Rest\\Usuario\\UsuarioResource',
            'route_name' => 'usuario.rest.usuario',
            'route_identifier_name' => 'usuario_id',
            'collection_name' => 'usuario',
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
            'entity_class' => \usuario\V1\Rest\Usuario\UsuarioEntity::class,
            'collection_class' => \usuario\V1\Rest\Usuario\UsuarioCollection::class,
            'service_name' => 'usuario',
        ],
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
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'usuario\\V1\\Rest\\Usuario\\Controller' => 'HalJson',
            'usuario\\V1\\Rest\\Cidades\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'usuario\\V1\\Rest\\Usuario\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Cidades\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'usuario\\V1\\Rest\\Usuario\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Cidades\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \usuario\V1\Rest\Usuario\UsuarioEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.usuario',
                'route_identifier_name' => 'usuario_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \usuario\V1\Rest\Usuario\UsuarioCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.usuario',
                'route_identifier_name' => 'usuario_id',
                'is_collection' => true,
            ],
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
        ],
    ],
    'api-tools' => [
        'db-connected' => [
            'usuario\\V1\\Rest\\Usuario\\UsuarioResource' => [
                'adapter_name' => 'db',
                'table_name' => 'usuario',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'usuario\\V1\\Rest\\Usuario\\Controller',
                'entity_identifier_name' => 'id',
            ],
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
];
