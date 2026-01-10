<?php

declare(strict_types=1);

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::shouldBeStrict();
        Vite::useAggressivePrefetching();
        Http::preventStrayRequests();
        Date::use(CarbonImmutable::class);

        if ($this->app->isProduction()) {
            DB::prohibitDestructiveCommands();
            URL::forceHttps();
        }

        if ($this->app->environment('testing')) {
            config(['inertia.ssr.enabled' => false]);
        }
    }
}
