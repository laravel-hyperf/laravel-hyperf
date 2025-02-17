<?php

declare(strict_types=1);

namespace App\Http;

use LaravelHyperf\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected array $middleware = [
        // \App\Http\Middleware\TrimStrings::class,
        // \App\Http\Middleware\ConvertEmptyStringsToNull::class
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected array $middlewareGroups = [
        'web' => [
            // \LaravelHyperf\Router\Middleware\SubstituteBindings::class,
            // \LaravelHyperf\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            // \LaravelHyperf\Session\Middleware\StartSession::class,
            // \LaravelHyperf\View\Middleware\ShareErrorsFromSession::class,
            // \App\Http\Middleware\VerifyCsrfToken::class,
        ],

        'api' => [
            // 'throttle:60,1,api',
            // \LaravelHyperf\Router\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's middleware aliases.
     *
     * Aliases may be used instead of class names to conveniently assign middleware to routes and groups.
     *
     * @var array<string, class-string|string>
     */
    protected array $middlewareAliases = [
        'throttle' => \LaravelHyperf\Router\Middleware\ThrottleRequests::class,
        'bindings' => \LaravelHyperf\Router\Middleware\SubstituteBindings::class,
    ];

    /**
     * The priority-sorted list of middleware.
     *
     * Forces non-global middleware to always be in the given order.
     *
     * @var string[]
     */
    protected array $middlewarePriority = [
        // \LaravelHyperf\Router\Middleware\ThrottleRequests::class,
        // \LaravelHyperf\Router\Middleware\SubstituteBindings::class,
        // \LaravelHyperf\Session\Middleware\StartSession::class,
        // \LaravelHyperf\View\Middleware\ShareErrorsFromSession::class,
        // \App\Http\Middleware\VerifyCsrfToken::class,
    ];
}
