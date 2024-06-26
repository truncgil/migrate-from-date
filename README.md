# Migrate From Date

A Laravel package to migrate migrations from a specific date.

## Installation

You can install the package via Composer:

```sh
composer require truncgil/migrate-from-date
```

## Usage
This package provides an Artisan command to migrate migrations from a specific date.

## Run the Command
You can run the command as follows:

```sh
php artisan migrate:from-date 2024_06_23
```


## Service Provider
The package automatically registers its service provider using Laravel's auto-discovery feature. However, if you need to register it manually, you can add the following to your config/app.php file:

```php
'providers' => [
    // Other service providers...

    Truncgil\MigrateFromDate\MigrateFromDateServiceProvider::class,
],
```

## Author
- Ümit Tunç - umitreva@gmail.com 

## License
This package is open-source software licensed under the MIT license.