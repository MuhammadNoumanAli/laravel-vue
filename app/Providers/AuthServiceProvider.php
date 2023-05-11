<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Models\User;
use App\Models\Admin;
use Auth;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Auth::viaRequest('user-token', function ($request) {
        //     return User::where('api_token', $request->input('api_token'))->first();
        // });

        // Auth::viaRequest('admin-token', function ($request) {
        //     return Admin::where('api_token', $request->input('api_token'))->first();
        // });

        // Auth::viaRequest('super-admin-token', function ($request) {
        //     return SuperAdmin::where('api_token', $request->input('api_token'))->first();
        // });

        

        Auth::viaRequest('user-token', function ($request) {
            return User::where('api_token', $request->header('Authorization'))->first();
        });
    
        Auth::viaRequest('admin-token', function ($request) {
            return Admin::where('api_token', $request->header('Authorization'))->first();
        });
    
        Auth::viaRequest('super-admin-token', function ($request) {
            return Superadmin::where('api_token', $request->header('Authorization'))->first();
        });
    }
}
