<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        foreach ($this->getPermissions() as $permission) {
            $gate::define($permission->name,function($user) use ($permission){
                return $user->hasRole($permission->roles);
            });
        }
    }
    
    /**
     * Return collection of permissions with roles table (eager loaded roles).
     *
     * @return collection
     */
    protected function getPermissions()
    {
        return Permission::with('roles')->get();
    }
}
