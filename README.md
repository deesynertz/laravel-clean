# deesynertz/laravel-clean

The Laravel Convenience Clear Command is a handy package designed to streamline your Laravel application maintenance tasks with just a single command. With this package, you can execute multiple Artisan commands at once, simplifying the process of clearing various caches and configurations.

## Features

1. Single Command Execution: Execute multiple Artisan commands with a single command, saving time and effort.
2. Comprehensive Clearing: Clear various caches and configurations, including views, routes, caches, and configurations, in one go.
3. Improved Maintenance Workflow: Simplify your Laravel application maintenance tasks and keep your development environment clean and optimized.

### Installation

Using Composer run

```php
composer require deesynertz/laravel-clean
```

### Laravel >= 5.5

That's it! The package is auto-discovered on 5.5 and up!

### Laravel <= 5.4

Add the service provider to the `providers` array in your `config/app.php` file:

```php
'providers' => [
    // Other Laravel service providers...

    /*
    * Package Service Providers...
    */
    Deesynertz\Clean\CleanServiceProvider::class,

    // Other package service providers...
],
```

<!-- Optionally include the Facade in config/app.php if you'd like.
```php
'CleanComamnd'  => Deesynertz\Clean\Facades\CleanComamnd::class,
``` -->

### Usage

Simply after installing the package via Composer and execute the provided Artisan command to clear all necessary caches and configurations, in your Terminal or cmd (windows user) run:

```php
php artisan clean:all
```

### Included Commands

`view:clear`: Clear compiled view files. </br>
`route:clear`: Clear route cache.</br>
`cache:clear`: Clear the application cache.</br>
`config:clear`: Clear the configuration cache.</br>
`optimize:clear`: Clear the cached bootstrap files.</br>
`spatie.permission.cache` : if `Spatie Permission package` is installed</br>

## Contributions

Contributions and feedback are welcome! Feel free to open an issue or submit a pull request on GitHub.

## License

This package is open-source software licensed under the [MIT](https://github.com/deesynertz/laravel-clean/blob/bea267488a748ed4cb41e99785cfcd135ff0a12d/LICENSE.md) license.
