<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\User;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::model('user', User::class);
        // Below is the model resolution logic the above Eloquent model uses.
        // Route::bind('user', function (string $value) {
        //     return User::where('name', $value)->firstOrFail();
        // });
    }
}
