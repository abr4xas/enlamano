# EnLaMano

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abr4xas/enlamano.svg?style=flat-square)](https://packagist.org/packages/abr4xas/enlamano)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/abr4xas/enlamano/run-tests?label=tests)](https://github.com/abr4xas/enlamano/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/abr4xas/enlamano.svg?style=flat-square)](https://packagist.org/packages/abr4xas/enlamano)

## Installation

You can install the package via composer:

```bash
composer require abr4xas/enlamano
```


You can publish the config file with:
```bash
php artisan vendor:publish --provider="Abr4xas\Enlamano\EnlamanoServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
<?php

return [
    'base_uri'     => env('ENLAMANO_BASE_URI', 'https://test.mymanalytics.com/api/models/v2/rapidoyfacil/execute'),
    'user'         => env('ENLAMANO_USER'),
    'password'     => env('ENLAMANO_PASSWORD'),
];
```

## Usage

``` php
// @todo
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [angel cruz](https://github.com/abr4xas)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
