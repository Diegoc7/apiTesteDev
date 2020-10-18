<?php
namespace usuario;

use Laminas\ApiTools\Provider\ApiToolsProviderInterface;

use Laminas\Db\TableGateway\TableGateway;
use Laminas\Db\ResultSet\ResultSet;
use usuario\V1\Rest\Biometria\BiometriaEntity;
use usuario\V1\Rest\Biometria\BiometriaMapper;
class Module implements ApiToolsProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {

        return array(
            'factories' => array(
                'UsuarioBiometriaTableGateway' => function($container){
                    $dbAdapter = $container->get('db');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new BiometriaEntity());
                    return new TableGateway('biometria',$dbAdapter, null, $resultSetPrototype);
                },
                'usuario\V1\Rest\Biometria\BiometriaMapper' => function($container) {
                    $tableGateway = $container->get('UsuarioBiometriaTableGateway');
                    return new BiometriaMapper($tableGateway);
                }
                )
        );
    }

    public function getAutoloaderConfig()
    {
        return [
            'Laminas\ApiTools\Autoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src',
                ],
            ],
        ];
    }
}
