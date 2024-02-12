# Installation

1. Install the package using Composer:

```php
composer require deesynertz/laravel-clean
```

2. Add the service provider to the `providers` array in your `config/app.php` file:

```php
'providers' => [
    // Other Laravel service providers...

    /*
     * Package Service Providers...
     */
    Deesynertz\Clean\CleanServiceProvider::class,

    // Other package service providers...
],
