<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('admin',function($user){
            return $user->type == 'admin';
        });
        Gate::define('user',function($user){
            return $user->type == 'user';
        });
        Gate::define('supervisor',function($user){
            return $user->type == 'supervisor';
        });
        Gate::define('order-owner',function($user,$order){
            return $user->id == $order->user_id;
        });
    }
}
