> **Warning**
>
> This repository has been transfered to [hypervel/hypervel](https://github.com/hypervel/hypervel).
>
> Please go to the new repository for latest update.

<p align="center"><a href="https://laravel-hyperf.com" target="_blank"><img src="https://laravel-hyperf.com/logo.svg" width="400"></a></p>

<p align="center">
<a href="https://github.com/laravel-hyperf/laravel-hyperf/actions"><img src="https://github.com/laravel-hyperf/laravel-hyperf/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel-hyperf/framework"><img src="https://img.shields.io/packagist/dt/laravel-hyperf/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel-hyperf/laravel-hyperf"><img src="https://img.shields.io/packagist/v/laravel-hyperf/laravel-hyperf" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel-hyperf/laravel-hyperf"><img src="https://img.shields.io/packagist/l/laravel-hyperf/laravel-hyperf" alt="License"></a>
</p>

## Introduction

**Laravel Hyperf** is a Laravel-style PHP framework with native coroutine support for ultra-high performance.

Laravel Hyperf ports many core components from Laravel while maintaining familiar usage patterns, making it instantly accessible to Laravel developers. The framework combines the elegant and expressive development experience of Laravel with the powerful performance benefits of coroutine-based programming. If you're a Laravel developer, you'll feel right at home with this framework, requiring minimal learning curve.

This is an ideal choice for building microservices, API gateways, and high-concurrency applications where traditional PHP frameworks often encounter performance constraints.

## Why Laravel Hyperf?

While Laravel Octane impressively enhances your Laravel application's performance, it's crucial to understand the nature of modern web applications. In most cases, the majority of latency stems from I/O operations, such as file operations, database queries, and API requests.

However, Laravel doesn't support coroutines - the entire framework is designed for a blocking I/O environment. Applications heavily dependent on I/O operations will still face performance bottlenecks. Consider this scenario:

Imagine building an AI-powered chatbot where each conversation API takes 3-5 seconds to respond. With 10 workers in Laravel Octane receiving 10 concurrent requests, all workers would be blocked until these requests complete.

> You can see [benchmark comparison](https://laravel-hyperf.com/docs/introduction.html#benchmark) between Laravel Octane and Laravel Hyperf

Even with Laravel Octane's improvements, your application's concurrent request handling capacity remains constrained by I/O operation duration. Laravel Hyperf addresses this limitation through coroutines, enabling efficient handling of concurrent I/O operations without blocking workers. This approach significantly enhances performance and concurrency for I/O-intensive applications.

> See [this issue](https://github.com/laravel/octane/issues/765) for more discussions.

## Documentation

[https://laravel-hyperf.com/docs](https://laravel-hyperf.com/docs)

Laravel Hyperf provides comprehensive and user-friendly documentation that allows you to quickly get started. From this documentation, you can learn how to use various components in Laravel Hyperf and understand the differences between this framework and Laravel.

> Most of the content in this documentation is referenced from the official Laravel documentation. We appreciate the Laravel community's contributions.

## License

The Laravel Hyperf framework is open-sourced software licensed under the [MIT](https://opensource.org/licenses/MIT) license.