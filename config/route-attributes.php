<?php

declare(strict_types=1);

use Laravel\Jetstream\Http\Middleware\AuthenticateSession;

return [
    /*
     *  Automatic registration of routes will only happen if this setting is `true`
     */
    'enabled' => true,

    /*
     * Controllers in these directories that have routing attributes
     * will automatically be registered.
     *
     * Optionally, you can specify group configuration by using key/values
     */
    'directories' => [
        app_path('Http/Controllers/API') => [
            'prefix' => 'api',
            'middleware' => 'api',
        ],
        app_path('Http/Controllers/Dashboard') => [
            'middleware' => ['web', AuthenticateSession::class, 'verified'],
        ],
        app_path('Http/Controllers/Guest') => [
            'middleware' => ['web'],
        ],
    ],

    /*
     * This middleware will be applied to all routes.
     */
    'middleware' => [
        Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],

    /*
     * When enabled, implicitly scoped bindings will be enabled by default.
     * You can override this behaviour by using the `ScopeBindings` attribute, and passing `false` to it.
     *
     * Possible values:
     *  - null: use the default behaviour
     *  - true: enable implicitly scoped bindings for all routes
     *  - false: disable implicitly scoped bindings for all routes
     */
    'scope-bindings' => null,
];
