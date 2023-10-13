# Laravel Cache Control

A Laravel package for efficient caching control and management.

## Introduction

The Laravel Cache Control package simplifies caching management in your Laravel project. This README provides installation instructions, usage examples, and additional information.

**Why Use Laravel Cache Control?**

Efficient caching is crucial for optimizing Laravel application performance. The Laravel Cache Control package offers a powerful solution, designed to help you:

-   Seamlessly manage caching, supporting Redis, file-based caching, and other storage methods.
-   Control cache tags to group related data and flush them as needed.
-   Forget cache keys or entire tag-based caches with a simple method call.
-   Streamline your caching strategy for optimal application performance.

**Convenience for cPanel or Cloud Environments**

Laravel Cache Control seamlessly adapts to various hosting environments, including cPanel and the cloud, with support for Redis, Memcache, files, and other drivers. This flexibility makes it an ideal choice for developers deploying Laravel applications in diverse hosting environments.

## Installation

To get started, install the package using Composer:

```shell
composer require anisaronno/laravel-cache-control
``` 

### Usage

This package provides a user-friendly way to manage caching with the `CacheControl` class, offering these functions:

### Initialize Caching

Initialize caching with a specific tag using the `init` method:

```php
use AnisAronno\LaravelCacheMaster\CacheControl;

CacheControl::init($tagKey);
```

### Cache Remember

Use the familiar Laravel `remember` method to cache data:

```php
use AnisAronno\LaravelCacheMaster\CacheControl;

$data = CacheControl::init($tagKey)->remember($cacheKey, $timeInSeconds, function () {
    // Your data retrieval logic here
    return $result;
});
```

### Forget Cache

Easily forget specific cache keys or tags:

```php
use AnisAronno\LaravelCacheMaster\CacheControl;

CacheControl::forgetCache($tagKey);
```

### Example

Here's how you can utilize this package to cache and retrieve data:

-   Initialize caching with a specific tag
-   Don't worry if your application doesn't support Laravel tags; it won't affect your application's stability.
-   This package ensures seamless operation in various hosting environments, including cPanel and the cloud, with Redis, Memcache, files, or other drivers.
-   When using a tag-supported driver, your application will benefit from faster performance and tag advantages.
-   However, in cases where tag support is unavailable, it gracefully falls back to the file or the default driver you've set in the .env file.

```php

// Initialize caching with a specific tag
use AnisAronno\LaravelCacheMaster\CacheControl;

$data = CacheControl::init($tagKey)->remember($cacheKey, $timeInSeconds, function () {
    // Your data retrieval logic here
    return $result;
});

// To forget the cache
use AnisAronno\LaravelCacheMaster\CacheControl;

CacheControl::forgetCache($tagKey);
```

## Contribution Guide

If you'd like to contribute to this package, please follow our [Contribution Guide](link-to-your-contribution-guide).

## License

This package is open-source software licensed under the [MIT License](https://opensource.org/licenses/MIT).