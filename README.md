# PandoraFacebookZF
Uma factory de Zend Framework para o Facebook PHP SDK. Para informações de como usar esta classe acesse a [documentação oficial](https://developers.facebook.com/docs/php/Facebook/5.0.0).

### Instalação

A forma recomendada de instalação deste módulo é pelo [composer](https://getcomposer.org/):

```json
{
    "require": {
        "pandora-una/pandora-facebook": "dev-master"
    }
}
```

### Usagem

A factory está registrada sob o nome de *Facebook*, para gerar uma instância utilize um *Service Locator* como no exemplo abaixo:

```php
$facebook = $this->getServiceLocator()->get('Facebook');
```

### Configuração

Para definir a configuração do *Facebook PHP SDK* é recomendado criar um arquivo na pasta *autoload* com um nome sugestivo como *facebook.local.php* ou *facebook.global.php*. Porém, qualquer arquivo de configuração pode conter essas informações.

O campo para a configuração é *facebook-zf* e eis um exemplo de um arquivo de configuração:

```
<?php
return array(
    'facebook-zf' => array(
        'app_id' => '<API ID>',
        'app_secret' => '<API SECRET>',
        'default_graph_version' => 'v2.5'
    )
);
```

Para mais informações sobre as configurações possíveis, acesse a [documentação oficial](https://developers.facebook.com/docs/php/Facebook/5.0.0).