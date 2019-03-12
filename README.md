# Interact with Cloudflare

This Laravel 5 package allows you to easily interact with Cloudflare to accomplish common tasks, such as purging the cache.

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Quality Score](https://img.shields.io/scrutinizer/g/ci-on/laravel-cloudflare.svg?style=flat-square)](https://scrutinizer-ci.com/g/ci-on/laravel-log-reader)
[![StyleCI](https://styleci.io/repos/175110511/shield?branch=master)](https://styleci.io/repos/170416972)

Please beware: this package is still a work in progress.

## Installation

You can install the package via composer:

```bash
composer require cion/laravel-cloudflare
```

The package will register itself automatically. 

Optionally, you can publish the package configuration using:

```bash
php artisan vendor:publish --provider=Cion\\LaravelCloudflare\\ServiceProvider
```

This will publish a file called `cloudflare.php` in your `config` folder to adjust a few config values.

## Usage

wip

NOTE: the cache invalidation process can take up to 30 seconds to complete the propagation.

### Suggestion

Run this command during deployment process in order to automate the cache invalidation process before your app's new version becomes active!

## Testing

1. Copy `.env.example` to `.env` and fill in your database credentials.
2. Run `composer test`.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email mohamed@cion.agency instead of using the issue tracker.

## Credits

- [Chris Breuer](https://github.com/Chris1904)
- [Mohamed Benhida](https://github.com/simoebenhida)
- [Sébastien Nikolaou](https://github.com/sebdesign/)

Inspired by [Artisan Cloudflare](https://github.com/sebdesign/artisan-cloudflare).

## License

The MIT License (MIT). Please see the [License File](LICENSE.md) for more information.
