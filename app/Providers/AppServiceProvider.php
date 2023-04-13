<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Validator;
use App\CustomWebSocketHandler;
use BeyondCode\LaravelWebSockets\Facades\WebSocketsRouter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // if ($this->app->isLocal()) {
        //     $this->app->register(TelescopeServiceProvider::class);
        // }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        WebSocketsRouter::webSocket('/my-websocket', CustomWebSocketHandler::class);
        // Validator::extend('recaptcha', 'app\Validators\Recaptcha@validate');
    }
}