<?php
namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Gate;
use App\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Gate::define('admin',function(User $user){
            return $user->isAdmin();
        });
        Gate::define('demandeur', function(User $user){
            return $user->isDemandeur();
        });
     
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
  public function boot(){
   \Illuminate\Support\Facades\Schema::defaultStringLength(191);
}

}