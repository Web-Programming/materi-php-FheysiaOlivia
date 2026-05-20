<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
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
        // hanya bisa dilakukan oleh admin
        Gate::define('manage-products', function (User $user){
            return $user->role === 'admin';
        });

        Gate::define('update-products', function (User $user){
            return $user->role === 'admin' || $user->role === 'sales';
        });

        Gate::define('delete-products', function (User $user){
            return $user->role === 'admin';
        });

        Gate::define('create-products', function (User $user){
            return $user !== null;
        });
    }
}