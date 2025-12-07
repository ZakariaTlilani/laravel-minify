This package helps to minify your project`s html (blade file) output.

### Requirements

| Laravel  | Package |
| -------- | ------: |
| \>= 10.x |     1.x |

## Installation

You can install the package via composer:

```bash
composer require zakariatlilani/laravel-minify
```

## Setup

### Generate Config

```php
php artisan vendor:publish --tag=LaravelMinify
```

### add middleware to web middleware group within bootstrap/app.php

```php
->withMiddleware(function (Middleware $middleware) {
    $middleware->web(append: [
        \zakariatlilani\LaravelMinify\Middleware\LaravelMinifyHtml::class
    ]);
})
```

## Usage

### for enable/disable in env

```php
HTML_MINIFY=true
```

### exclude route name for from minify update config

```php
'exclude_route' => [
        // 'routeName'
]
```

### minify particular html part

```php
LaravelMinifyFacade::htmlMinify("<div>...</div>");
```

### exclude minify particular html part

```php
LaravelMinifyFacade::excludeHtmlMinify("<div>...</div>");
```

### exclude html minify in blade directory

```php
@excludeMinify
    <div> exclude code from Minify </div>
@endExcludeMinify
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Zakaria Tlilani](https://github.com/zakariatlilani)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
