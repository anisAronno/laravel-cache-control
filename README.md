# Laravel Cache Control

-   Laravel package for efficient caching control and management.

## Introduction

The Laravel Cache Control package simplifies the management of caching in your Laravel project. This README provides installation instructions, usage examples, and additional information.

**Why Use Laravel Cache Control?**

Managing caching efficiently is crucial for optimizing the performance of your Laravel applications. The Laravel Cache Control package offers a straightforward and powerful solution for this purpose. It is designed to help you:

-   Seamlessly manage caching, whether you're using Redis, file-based caching, or other storage methods.
-   Control cache tags, making it easy to group related data and flush them as needed.
-   Forget cache keys or entire tag-based caches with a simple method call.
-   Streamline your caching strategy, ensuring your application performs optimally.

**Convenience for cPanel or Cloud Environments**

Laravel Cache Control is built to work seamlessly in various hosting environments, including cPanel and cloud platforms. It adapts to the caching setup you have, whether you're using Redis or other cache storage systems. This flexibility makes it a great choice for developers who deploy their Laravel applications in different hosting environments.

## Installation

To get started, install the package using Composer:

```shell
composer require anisaronno/laravel-cache-control
```

### Usage

This package provides a convenient way to manage caching with a primary class `CacheControl`. Here are the available functions:

### Initialize Caching

To initialize caching with a specific tag, use the `init` method:

```php
CacheControl::init($tagKey);
```

### Cache Remember

To cache data with the usual Laravel `remember` method, you can use it like this:

```php
CacheControl::init($tagKey)->remember($cacheKey, $timeInSeconds, function () {
    // Your data retrieval logic here
});
```

### Forget Cache

To forget a specific cache key or tag, follow this step:

```php
CacheControl::forgetCache($tagKey);
```

### Example

Here's an example of how to use this package to cache and retrieve data:

```php
// Initialize caching with a specific tag
$cache = CacheControl::init($tagKey);

// Cache data with a specific key and expiration time
$data = $cache->remember($cacheKey, $timeInSeconds, function () {
    // Your data retrieval logic here
    return $result;
});

// To forget the cache
CacheControl::forgetCache($tagKey);
```

## Contribution Guide

Please follow our [Contribution Guide](link-to-your-contribution-guide) if you'd like to contribute to this package.

## License

This package is open-source software licensed under the [MIT License](https://opensource.org/licenses/MIT).
