<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
        <?php 

        use Illuminate\Routing\UrlGenerator;

        public function boot(UrlGenerator $url)
        {
            if (env('REDIRECT_HTTPS')) {
            $url->formatScheme('https://');
            }
        }
            }
        }
