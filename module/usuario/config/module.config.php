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
            'usuario.rest.biometria' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/usuario/biometria[/:biometria_id]',
                    'defaults' => [
                        'controller' => 'usuario\\V1\\Rest\\Biometria\\Controller',
                    ],
                ],
            ],
            'usuario.rest.cadastro_usuario' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/cadastro_usuario[/:cadastro_usuario_id]',
                    'defaults' => [
                        'controller' => 'usuario\\V1\\Rest\\Cadastro_usuario\\Controller',
                    ],
                ],
            ],
            'usuario.rest.endereco' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/endereco[/:endereco_id]',
                    'defaults' => [
                        'controller' => 'usuario\\V1\\Rest\\Endereco\\Controller',
                    ],
                ],
            ],
            'usuario.rest.telefones' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/telefones[/:telefones_id]',
                    'defaults' => [
                        'controller' => 'usuario\\V1\\Rest\\Telefones\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            1 => 'usuario.rest.cidades',
            2 => 'usuario.rest.biometria',
            0 => 'usuario.rest.cadastro_usuario',
            3 => 'usuario.rest.endereco',
            4 => 'usuario.rest.telefones',
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
                1 => 'PUT',
                2 => 'DELETE',
                3 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \usuario\V1\Rest\Biometria\BiometriaEntity::class,
            'collection_class' => \usuario\V1\Rest\Biometria\BiometriaCollection::class,
            'service_name' => 'biometria',
        ],
        'usuario\\V1\\Rest\\Cadastro_usuario\\Controller' => [
            'listener' => \usuario\V1\Rest\Cadastro_usuario\Cadastro_usuarioResource::class,
            'route_name' => 'usuario.rest.cadastro_usuario',
            'route_identifier_name' => 'cadastro_usuario_id',
            'collection_name' => 'cadastro_usuario',
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
            'entity_class' => \usuario\V1\Rest\Cadastro_usuario\Cadastro_usuarioEntity::class,
            'collection_class' => \usuario\V1\Rest\Cadastro_usuario\Cadastro_usuarioCollection::class,
            'service_name' => 'cadastro_usuario',
        ],
        'usuario\\V1\\Rest\\Endereco\\Controller' => [
            'listener' => \usuario\V1\Rest\Endereco\EnderecoResource::class,
            'route_name' => 'usuario.rest.endereco',
            'route_identifier_name' => 'endereco_id',
            'collection_name' => 'endereco',
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
            'entity_class' => \usuario\V1\Rest\Endereco\EnderecoEntity::class,
            'collection_class' => \usuario\V1\Rest\Endereco\EnderecoCollection::class,
            'service_name' => 'endereco',
        ],
        'usuario\\V1\\Rest\\Telefones\\Controller' => [
            'listener' => \usuario\V1\Rest\Telefones\TelefonesResource::class,
            'route_name' => 'usuario.rest.telefones',
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
            'entity_class' => \usuario\V1\Rest\Telefones\TelefonesEntity::class,
            'collection_class' => \usuario\V1\Rest\Telefones\TelefonesCollection::class,
            'service_name' => 'telefones',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'usuario\\V1\\Rest\\Cidades\\Controller' => 'HalJson',
            'usuario\\V1\\Rest\\Biometria\\Controller' => 'HalJson',
            'usuario\\V1\\Rest\\Cadastro_usuario\\Controller' => 'HalJson',
            'usuario\\V1\\Rest\\Endereco\\Controller' => 'HalJson',
            'usuario\\V1\\Rest\\Telefones\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'usuario\\V1\\Rest\\Cidades\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Biometria\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Cadastro_usuario\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Endereco\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Telefones\\Controller' => [
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
            'usuario\\V1\\Rest\\Biometria\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Cadastro_usuario\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Endereco\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Telefones\\Controller' => [
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
            \usuario\V1\Rest\Cadastro_usuario\Cadastro_usuarioEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.cadastro_usuario',
                'route_identifier_name' => 'cadastro_usuario_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \usuario\V1\Rest\Cadastro_usuario\Cadastro_usuarioCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.cadastro_usuario',
                'route_identifier_name' => 'cadastro_usuario_id',
                'is_collection' => true,
            ],
            \usuario\V1\Rest\Endereco\EnderecoEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.endereco',
                'route_identifier_name' => 'endereco_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \usuario\V1\Rest\Endereco\EnderecoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.endereco',
                'route_identifier_name' => 'endereco_id',
                'is_collection' => true,
            ],
            \usuario\V1\Rest\Telefones\TelefonesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.telefones',
                'route_identifier_name' => 'telefones_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \usuario\V1\Rest\Telefones\TelefonesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.telefones',
                'route_identifier_name' => 'telefones_id',
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
        'factories' => [],
    ],
    'api-tools-rpc' => [],
    'api-tools-content-validation' => [
        'usuario\\V1\\Rest\\Biometria\\Controller' => [
            'input_filter' => 'usuario\\V1\\Rest\\Biometria\\Validator',
        ],
        'usuario\\V1\\Rest\\Cadastro_usuario\\Controller' => [
            'input_filter' => 'usuario\\V1\\Rest\\Cadastro_usuario\\Validator',
        ],
        'usuario\\V1\\Rest\\Endereco\\Controller' => [
            'input_filter' => 'usuario\\V1\\Rest\\Endereco\\Validator',
        ],
        'usuario\\V1\\Rest\\Telefones\\Controller' => [
            'input_filter' => 'usuario\\V1\\Rest\\Telefones\\Validator',
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
        'usuario\\V1\\Rest\\Biometria\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\ToInt::class,
                        'options' => [],
                    ],
                ],
                'name' => 'id_usuario',
                'description' => 'ID do usuário vinculado a biometria',
                'error_message' => 'usuário inválido.',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'arquivo',
                'description' => 'arquivo com a biometria do tipo WSQ',
                'type' => \Laminas\InputFilter\FileInput::class,
                'error_message' => 'não foi possivel efetuar o upload do arquivo.',
            ],
        ],
        'usuario\\V1\\Rest\\Cadastro_usuario\\Validator' => [
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
                'name' => 'usuario',
                'description' => 'inserção de usuário único.',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'nome',
                'description' => 'Nome completo do usuário',
            ],
            2 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\File\Sha1::class,
                        'options' => [],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'senha',
                'description' => 'senha de acesso',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'CPF',
            ],
            4 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\EmailAddress::class,
                        'options' => [],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'email',
                'description' => 'E-mail pessoal do usuário.',
            ],
        ],
        'usuario\\V1\\Rest\\Endereco\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\ToInt::class,
                        'options' => [],
                    ],
                ],
                'name' => 'id_usuario',
                'description' => 'id do usuario.',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'rua',
                'description' => 'nomenclatura da rua do usuario',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'id_cidade',
                'description' => 'id relacionado a tabela Cidade.',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'numero',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ],
            4 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'bairro',
            ],
            5 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'complemento',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ],
        ],
        'usuario\\V1\\Rest\\Telefones\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'id_usuario',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'telefone',
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authorization' => [
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
            'usuario\\V1\\Rest\\Cadastro_usuario\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'usuario\\V1\\Rest\\Telefones\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            \usuario\V1\Rest\Biometria\BiometriaResource::class => \usuario\V1\Rest\Biometria\BiometriaResourceFactory::class,
            \usuario\V1\Rest\Cadastro_usuario\Cadastro_usuarioResource::class => \usuario\V1\Rest\Cadastro_usuario\Cadastro_usuarioResourceFactory::class,
            \usuario\V1\Rest\Endereco\EnderecoResource::class => \usuario\V1\Rest\Endereco\EnderecoResourceFactory::class,
            \usuario\V1\Rest\Telefones\TelefonesResource::class => \usuario\V1\Rest\Telefones\TelefonesResourceFactory::class,
        ],
    ],
];
