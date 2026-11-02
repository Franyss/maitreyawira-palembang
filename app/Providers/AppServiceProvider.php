<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        // Paksa kompilasi Blade ke /tmp dan paksa HTTPS di Vercel/Production
        if (env('VERCEL') || config('app.env') === 'production') {
            config(['view.compiled' => '/tmp']);
            URL::forceScheme('https');
        }
    }
}
