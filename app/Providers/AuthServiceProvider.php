<?php
namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Example: only allow users with is_admin = true
        Gate::define('admin', function (User $user) {
            return $user->is_admin; // assumes you have a boolean column `is_admin`
        });
    }
}
