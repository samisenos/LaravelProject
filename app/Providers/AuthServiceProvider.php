<?php

namespace App\Providers;

use App\Models\Permission;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class=>UserPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('auth-user',function(User $user , User $currentuser = null){
            return $user->id == $currentuser->id ? true : false ;
        });
        foreach (Permission::all() as $permission){
            Gate::define($permission->name,function (User $user) use ($permission) {
                return $user->hasPermission($permission);
            });
        }
    }
}
