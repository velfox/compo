<?php
namespace App\Providers;

use App\Competition;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Competition' => 'App\Policies\CompoPolicy',
    ];
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies();
        Gate::before(function ($user){
            $admin = User::where([['id', '=', auth()->id()]])->get('admin')->pluck('admin')->toArray();
            if ($admin[0] == 1) {
                return true;
            } else {
               return false;
            }
        });
    }

}
