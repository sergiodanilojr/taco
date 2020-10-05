# TACO @ElePHPant

[![Maintainer](http://img.shields.io/badge/maintainer-@sergiodanilojr-blue.svg?style=flat-square)](https://twitter.com/sergiodanilojr)
[![Source Code](http://img.shields.io/badge/source-elephpant/taco-blue.svg?style=flat-square)](https://github.com/sergiodanilojr/taco)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/elephpant/taco.svg?style=flat-square)](https://packagist.org/packages/elephpant/taco)
[![Latest Version](https://img.shields.io/github/release/elephpant/taco.svg?style=flat-square)](https://github.com/sergiodanilojr/taco/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/sergiodanilojr/taco.svg?style=flat-square)](https://scrutinizer-ci.com/g/sergiodanilojr/taco)
[![Quality Score](https://img.shields.io/scrutinizer/g/sergiodanilojr/taco.svg?style=flat-square)](https://scrutinizer-ci.com/g/sergiodanilojr/taco)
[![Total Downloads](https://img.shields.io/packagist/dt/elephpant/taco.svg?style=flat-square)](https://packagist.org/packages/elephpant/taco)

###### 
With TACO it is possible to obtain nutritional data from a wide collection of foods through the API of the same name. Its use is very simple.

Com o TACO é possível obter dados nutricionais de uma vasta coleção de alimentos através da API de mesmo nome. Seu uso é muito simples.

## NOTE: This component consumes the TACO API (Brazilian Food Composition Table) (https://taco-food-api.herokuapp.com)
NOTA: Este componente consome a API TACO (Tabela Brasileira de Composição de Alimentos) (https://taco-food-api.herokuapp.com)

### Highlights

- Extremaly Easy
- Supports several Currencies
- Flexible
- Implements PSR7 (Message Interface)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)


## Installation

taco is available via Composer:

```bash
"elephpant/taco": "1.0.*"
```

or run

```bash
composer require elephpant/taco
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of use for each class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. Ele funciona assim:

#### Methods

```php
<?php
require __DIR__ . "/vendor/autoload.php";

use ElePHPant\Taco;

$taco = new Taco();

/* List of all Categories of Food */
$taco->categories();

/* Only one Category - Insert in the ID of the Category that you want bring */
$category = $taco->category(1);

/* Foods From Category - Insert in the the ID of the Category then see all foods */
$foodFromCategory = $taco->foodFromCategory(1);

/* Only One Food - Insert in the param the ID of the Food that you want bring */
$food = $taco->food(2);


/* Provide the timeout to set it (in seconds) */
$timeout = $taco->setTimeout(3)

```


## Thanks TACO-Food-API for yours simple and intuitives APIs and Documentation

[TACO API](https://taco-food-api.herokuapp.com/)


## Contributing

Please see [CONTRIBUTING](https://github.com/sergiodanilojr/taco/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email sergiodanilojr@hotmail.com instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para sergiodanilojr@hotmail.com em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Sérgio Danilo Jr.](https://github.com/sergiodanilojr) (Developer)
- [All Contributors](https://github.com/sergiodanilojr/taco/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/sergiodanilojr/taco/blob/master/LICENSE) for more information.