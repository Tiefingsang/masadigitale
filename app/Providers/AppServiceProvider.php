<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS scheme in production or when APP_URL is https
        if (str_starts_with(env('APP_URL', ''), 'https') || env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

        // clear cached homepage/segment data when major models are changed
        \App\Models\Blog::saved(function () {
            cache()->forget('home.blogs');
            cache()->forget('page.blogs.list');
            cache()->forget('page.blogs.recent');
        });
        \App\Models\Blog::deleted(function () {
            cache()->forget('home.blogs');
            cache()->forget('page.blogs.list');
            cache()->forget('page.blogs.recent');
        });

        \App\Models\Service::saved(function () {
            cache()->forget('home.services');
            cache()->forget('home.latest_services');
            cache()->forget('page.services.list');
        });
        \App\Models\Service::deleted(function () {
            cache()->forget('home.services');
            cache()->forget('home.latest_services');
            cache()->forget('page.services.list');
        });

        \App\Models\About::saved(function () {
            cache()->forget('home.abouts');
            cache()->forget('page.about');
        });
        \App\Models\Team::saved(function () {
            cache()->forget('team.public.members');
            cache()->forget('team.public.categories');
        });
        \App\Models\Team::deleted(function () {
            cache()->forget('team.public.members');
            cache()->forget('team.public.categories');
        });
        // you can add similar hooks for Gallery, Client, Team, etc.
    }
}
