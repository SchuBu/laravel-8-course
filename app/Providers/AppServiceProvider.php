<?php

namespace App\Providers;

use App\Components\FlashMessages;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    use FlashMessages;
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('components.flash-messages', function($view) {
           $messages = self::messages();
           return $view->with('messages', $messages);
        });
    }
}
