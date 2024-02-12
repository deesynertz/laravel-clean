# laravel-clean

## By Deesynertz

### Installation

> Using Composer run

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

> in your Terminal or cmd (windows user) run

```php
php artisan clean:all
```
