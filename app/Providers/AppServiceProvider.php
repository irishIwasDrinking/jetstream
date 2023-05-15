<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;

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
        Http::macro('spodapi', function () {
            return Http::withHeaders([
                'X-SPOD-ACCESS-TOKEN' => env('SPOD_API_KEY'),
            ])->baseUrl('https://rest.spod.com/');
        });
    }
}
