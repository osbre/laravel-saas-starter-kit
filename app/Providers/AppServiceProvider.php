<?php

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\{Date, DB, Http, URL, Vite};
use Illuminate\Database\Eloquent\Model;
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
        Model::automaticallyEagerLoadRelationships();
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
