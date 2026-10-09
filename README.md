# Laravel Modular

A Laravel package for scaffolding modules and automatically loading their route files.

## Requirements

- PHP 8.3+
- Laravel 11, 12, or 13

## Installation

```bash
composer require mazdel/laravel-modular
```

Laravel auto-discovers the service provider. To customize the module location or API route group, publish the configuration:

```bash
php artisan vendor:publish --tag=laravel-modular-config
```

## Usage

Create a module with both web and API routes:

```bash
php artisan module:init Catalog
```

Create only an API or web module:

```bash
php artisan module:init Catalog --only-api
php artisan module:init Catalog --only-web
```

Modules are created in `app/Modules` by default. The package automatically loads every `Routes/web.php` file and every `Routes/api.php` file inside that directory. API routes use the configured `v1` prefix and `api.v1.` name prefix by default.

### Scaffolding commands

```bash
php artisan module:make:controller Catalog ProductController
php artisan module:make:controller Catalog ProductController --api
php artisan module:make:model Catalog Product
php artisan module:make:request Catalog StoreProductRequest
php artisan module:make:request Catalog StoreProductRequest --api
php artisan module:make:validation Catalog ProductValidation
php artisan module:make:validation Catalog ProductValidation --api
php artisan module:make:middleware Catalog EnsureCatalogAccess
php artisan module:make:trait HasCatalog
```

## Configuration

```php
return [
    'modules_path' => app_path('Modules'),

    'api' => [
        'prefix' => 'v1',
        'name' => 'api.v1.',
        'middleware' => ['api'],
    ],
];
```

## Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
