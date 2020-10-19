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
            'usuario.rest.telefones' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/telefones[/:telefones_id]',
                    'defaults' => [
                        'controller' => 'usuario\\V1\\Rest\\Telefones\\Controller',
                    ],
                ],
            ],
            'usuario.rest.enderecos' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/enderecos[/:enderecos_id]',
                    'defaults' => [
                        'controller' => 'usuario\\V1\\Rest\\Enderecos\\Controller',
                    ],
                ],
            ],
            'usuario.rest.usuarios' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/usuarios[/:usuarios_id]',
                    'defaults' => [
                        'controller' => 'usuario\\V1\\Rest\\Usuarios\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            1 => 'usuario.rest.cidades',
            2 => 'usuario.rest.biometria',
            4 => 'usuario.rest.telefones',
            5 => 'usuario.rest.enderecos',
            6 => 'usuario.rest.usuarios',
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
        'usuario\\V1\\Rest\\Telefones\\Controller' => [
            'listener' => 'usuario\\V1\\Rest\\Telefones\\TelefonesResource',
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
        'usuario\\V1\\Rest\\Enderecos\\Controller' => [
            'listener' => 'usuario\\V1\\Rest\\Enderecos\\EnderecosResource',
            'route_name' => 'usuario.rest.enderecos',
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
            'entity_class' => \usuario\V1\Rest\Enderecos\EnderecosEntity::class,
            'collection_class' => \usuario\V1\Rest\Enderecos\EnderecosCollection::class,
            'service_name' => 'enderecos',
        ],
        'usuario\\V1\\Rest\\Usuarios\\Controller' => [
            'listener' => 'usuario\\V1\\Rest\\Usuarios\\UsuariosResource',
            'route_name' => 'usuario.rest.usuarios',
            'route_identifier_name' => 'usuarios_id',
            'collection_name' => 'usuarios',
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
            'entity_class' => \usuario\V1\Rest\Usuarios\UsuariosEntity::class,
            'collection_class' => \usuario\V1\Rest\Usuarios\UsuariosCollection::class,
            'service_name' => 'usuarios',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'usuario\\V1\\Rest\\Cidades\\Controller' => 'HalJson',
            'usuario\\V1\\Rest\\Biometria\\Controller' => 'HalJson',
            'usuario\\V1\\Rest\\Telefones\\Controller' => 'HalJson',
            'usuario\\V1\\Rest\\Enderecos\\Controller' => 'HalJson',
            'usuario\\V1\\Rest\\Usuarios\\Controller' => 'HalJson',
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
            'usuario\\V1\\Rest\\Telefones\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Enderecos\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Usuarios\\Controller' => [
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
                2 => 'multipart/form-data',
            ],
            'usuario\\V1\\Rest\\Telefones\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Enderecos\\Controller' => [
                0 => 'application/vnd.usuario.v1+json',
                1 => 'application/json',
            ],
            'usuario\\V1\\Rest\\Usuarios\\Controller' => [
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
            \usuario\V1\Rest\Enderecos\EnderecosEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.enderecos',
                'route_identifier_name' => 'enderecos_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \usuario\V1\Rest\Enderecos\EnderecosCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.enderecos',
                'route_identifier_name' => 'enderecos_id',
                'is_collection' => true,
            ],
            \usuario\V1\Rest\Usuarios\UsuariosEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.usuarios',
                'route_identifier_name' => 'usuarios_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \usuario\V1\Rest\Usuarios\UsuariosCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'usuario.rest.usuarios',
                'route_identifier_name' => 'usuarios_id',
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
            'usuario\\V1\\Rest\\Telefones\\TelefonesResource' => [
                'adapter_name' => 'db',
                'table_name' => 'telefones',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'usuario\\V1\\Rest\\Telefones\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'usuario\\V1\\Rest\\Enderecos\\EnderecosResource' => [
                'adapter_name' => 'db',
                'table_name' => 'enderecos',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'usuario\\V1\\Rest\\Enderecos\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'usuario\\V1\\Rest\\Usuarios\\UsuariosResource' => [
                'adapter_name' => 'db',
                'table_name' => 'usuarios',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'usuario\\V1\\Rest\\Usuarios\\Controller',
                'entity_identifier_name' => 'id',
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
        'usuario\\V1\\Rest\\Telefones\\Controller' => [
            'input_filter' => 'usuario\\V1\\Rest\\Telefones\\Validator',
        ],
        'usuario\\V1\\Rest\\Enderecos\\Controller' => [
            'input_filter' => 'usuario\\V1\\Rest\\Enderecos\\Validator',
        ],
        'usuario\\V1\\Rest\\Usuarios\\Controller' => [
            'input_filter' => 'usuario\\V1\\Rest\\Usuarios\\Validator',
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
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\File\Exists::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Laminas\Validator\File\ExcludeMimeType::class,
                        'options' => [],
                    ],
                ],
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
        'usuario\\V1\\Rest\\Enderecos\\Validator' => [
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
                'name' => 'rua',
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
            2 => [
                'name' => 'id_cidade',
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
                            'table' => 'cidades',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'numero',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            4 => [
                'name' => 'bairro',
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
            5 => [
                'name' => 'complemento',
                'required' => false,
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
                            'max' => '255',
                        ],
                    ],
                ],
            ],
        ],
        'usuario\\V1\\Rest\\Usuarios\\Validator' => [
            0 => [
                'name' => 'usuario',
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
                        'name' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => [
                            'adapter' => 'db',
                            'table' => 'usuarios',
                            'field' => 'usuario',
                        ],
                    ],
                    1 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '50',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'nome',
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
                            'max' => '50',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'senha',
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
                            'max' => '100',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'cpf',
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
                        'name' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => [
                            'adapter' => 'db',
                            'table' => 'usuarios',
                            'field' => 'cpf',
                        ],
                    ],
                    1 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '14',
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'email',
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
                        'name' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => [
                            'adapter' => 'db',
                            'table' => 'usuarios',
                            'field' => 'email',
                        ],
                    ],
                    1 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '50',
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'data',
                'required' => true,
                'filters' => [],
                'validators' => [],
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
        ],
    ],
    'service_manager' => [
        'factories' => [
            \usuario\V1\Rest\Biometria\BiometriaResource::class => \usuario\V1\Rest\Biometria\BiometriaResourceFactory::class,
        ],
    ],
];
