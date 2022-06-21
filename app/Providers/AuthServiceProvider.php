<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Enums\UserRole;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
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

        $this->defineUserRoleGate('isSuperAdmin', UserRole::SUPERADMIN);
        $this->defineUserRoleGate('isAdmin', UserRole::ADMIN);
        $this->defineUserRoleGate('isEmployee', UserRole::EMPLOYEE);
        $this->defineUserRoleGate('isParent', UserRole::PARENT);
        $this->defineUserRoleGate('isUser', UserRole::USER);
    }

    private function defineUserRoleGate(string $name, string $role): void
    {
        Gate::define($name, function (User $user) use ($role) {
            return $user->role == $role;
        });
    }
}
