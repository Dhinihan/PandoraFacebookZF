<?php
namespace FacebookZF\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Facebook\Facebook;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;

class FacebookFactory implements FactoryInterface
{

    protected $fields = array(
        'app_id',
        'app_secret',
        'default_access_token',
        'enable_beta_mode',
        'default_graph_version',
        'http_client_handler',
        'persistent_data_handler',
        'url_detection_handler',
        'pseudo_random_string_generator'
    );

    public function createService(ServiceLocatorInterface $services)
    {
        if (! $services->has('config')) {
            throw new ServiceNotCreatedException('Config não existe');
        }
        if (isset($services->get('config')['facebook-zf']))
            $config = $services->get('config')['facebook-zf'];
        else
            throw new ServiceNotCreatedException('Campo de configuração "facebook-zf" não encontrado');
        
        foreach ($config as $field => $value){
            if(!in_array($field, $this->fields))
                throw new ServiceNotCreatedException("Campo de configuração '$field' não pertence à configuração do facebook-sdk");
        }
        return new Facebook($config);
    }
}