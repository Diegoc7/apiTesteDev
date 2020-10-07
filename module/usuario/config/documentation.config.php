<?php
return [
    'usuario\\V1\\Rest\\Biometria\\Controller' => [
        'collection' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuario/biometria"
       },
       "first": {
           "href": "/usuario/biometria?page={page}"
       },
       "prev": {
           "href": "/usuario/biometria?page={page}"
       },
       "next": {
           "href": "/usuario/biometria?page={page}"
       },
       "last": {
           "href": "/usuario/biometria?page={page}"
       }
   }
   "_embedded": {
       "biometria": [
           {
               "_links": {
                   "self": {
                       "href": "/usuario/biometria[/:biometria_id]"
                   }
               }
              "id_usuario": "ID do usuário vinculado a biometria",
              "arquivo": "arquivo com a biometria do tipo WSQ"
           }
       ]
   }
}',
            ],
            'POST' => [
                'request' => '{
   "id_usuario": "ID do usuário vinculado a biometria",
   "arquivo": "arquivo com a biometria do tipo WSQ"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuario/biometria[/:biometria_id]"
       }
   }
   "id_usuario": "ID do usuário vinculado a biometria",
   "arquivo": "arquivo com a biometria do tipo WSQ"
}',
            ],
            'PUT' => [
                'request' => '{
   "id_usuario": "ID do usuário vinculado a biometria",
   "arquivo": "arquivo com a biometria do tipo WSQ"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuario/biometria"
       },
       "first": {
           "href": "/usuario/biometria?page={page}"
       },
       "prev": {
           "href": "/usuario/biometria?page={page}"
       },
       "next": {
           "href": "/usuario/biometria?page={page}"
       },
       "last": {
           "href": "/usuario/biometria?page={page}"
       }
   }
   "_embedded": {
       "biometria": [
           {
               "_links": {
                   "self": {
                       "href": "/usuario/biometria[/:biometria_id]"
                   }
               }
              "id_usuario": "ID do usuário vinculado a biometria",
              "arquivo": "arquivo com a biometria do tipo WSQ"
           }
       ]
   }
}',
            ],
            'DELETE' => [
                'request' => '{
   "id_usuario": "ID do usuário vinculado a biometria",
   "arquivo": "arquivo com a biometria do tipo WSQ"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuario/biometria"
       },
       "first": {
           "href": "/usuario/biometria?page={page}"
       },
       "prev": {
           "href": "/usuario/biometria?page={page}"
       },
       "next": {
           "href": "/usuario/biometria?page={page}"
       },
       "last": {
           "href": "/usuario/biometria?page={page}"
       }
   }
   "_embedded": {
       "biometria": [
           {
               "_links": {
                   "self": {
                       "href": "/usuario/biometria[/:biometria_id]"
                   }
               }
              "id_usuario": "ID do usuário vinculado a biometria",
              "arquivo": "arquivo com a biometria do tipo WSQ"
           }
       ]
   }
}',
            ],
        ],
        'entity' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuario/biometria[/:biometria_id]"
       }
   }
   "id_usuario": "ID do usuário vinculado a biometria",
   "arquivo": "arquivo com a biometria do tipo WSQ"
}',
            ],
            'PUT' => [
                'request' => '{
   "id_usuario": "ID do usuário vinculado a biometria",
   "arquivo": "arquivo com a biometria do tipo WSQ"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuario/biometria[/:biometria_id]"
       }
   }
   "id_usuario": "ID do usuário vinculado a biometria",
   "arquivo": "arquivo com a biometria do tipo WSQ"
}',
            ],
            'DELETE' => [
                'request' => '{
   "id_usuario": "ID do usuário vinculado a biometria",
   "arquivo": "arquivo com a biometria do tipo WSQ"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuario/biometria[/:biometria_id]"
       }
   }
   "id_usuario": "ID do usuário vinculado a biometria",
   "arquivo": "arquivo com a biometria do tipo WSQ"
}',
            ],
            'POST' => [
                'request' => '{
   "id_usuario": "ID do usuário vinculado a biometria",
   "arquivo": "arquivo com a biometria do tipo WSQ"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuario/biometria[/:biometria_id]"
       }
   }
   "id_usuario": "ID do usuário vinculado a biometria",
   "arquivo": "arquivo com a biometria do tipo WSQ"
}',
            ],
        ],
    ],
    'usuario\\V1\\Rest\\Cidades\\Controller' => [
        'collection' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/cidades"
       },
       "first": {
           "href": "/cidades?page={page}"
       },
       "prev": {
           "href": "/cidades?page={page}"
       },
       "next": {
           "href": "/cidades?page={page}"
       },
       "last": {
           "href": "/cidades?page={page}"
       }
   }
   "_embedded": {
       "cidades": [
           {
               "_links": {
                   "self": {
                       "href": "/cidades[/:cidades_id]"
                   }
               }

           }
       ]
   }
}',
            ],
            'POST' => [
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/cidades[/:cidades_id]"
       }
   }

}',
            ],
        ],
    ],
    'usuario\\V1\\Rest\\Telefones\\Controller' => [
        'collection' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/telefones"
       },
       "first": {
           "href": "/telefones?page={page}"
       },
       "prev": {
           "href": "/telefones?page={page}"
       },
       "next": {
           "href": "/telefones?page={page}"
       },
       "last": {
           "href": "/telefones?page={page}"
       }
   }
   "_embedded": {
       "telefones": [
           {
               "_links": {
                   "self": {
                       "href": "/telefones[/:telefones_id]"
                   }
               }
              "id_usuario": "",
              "telefone": ""
           }
       ]
   }
}',
            ],
            'POST' => [
                'request' => '{
   "id_usuario": "",
   "telefone": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/telefones[/:telefones_id]"
       }
   }
   "id_usuario": "",
   "telefone": ""
}',
            ],
        ],
        'entity' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/telefones[/:telefones_id]"
       }
   }
   "id_usuario": "",
   "telefone": ""
}',
            ],
            'PATCH' => [
                'request' => '{
   "id_usuario": "",
   "telefone": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/telefones[/:telefones_id]"
       }
   }
   "id_usuario": "",
   "telefone": ""
}',
            ],
            'PUT' => [
                'request' => '{
   "id_usuario": "",
   "telefone": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/telefones[/:telefones_id]"
       }
   }
   "id_usuario": "",
   "telefone": ""
}',
            ],
            'DELETE' => [
                'request' => '{
   "id_usuario": "",
   "telefone": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/telefones[/:telefones_id]"
       }
   }
   "id_usuario": "",
   "telefone": ""
}',
            ],
        ],
    ],
];
