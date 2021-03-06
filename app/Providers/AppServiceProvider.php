<?php

namespace App\Providers;

use App\Models\Collection;
use App\Models\Media;
use App\Models\Tag;
use App\Models\User;
use App\Observers\CollectionObserver;
use App\Observers\MediaObserver;
use App\Observers\TagObserver;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [];

    /**
     * Register any application services.
     */
    public function register()
    {
        Route::singularResourceParameters(false);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Enforce HTTPS
        // URL::forceScheme('https');

        // Observers
        Collection::observe(CollectionObserver::class);
        Media::observe(MediaObserver::class);
        Tag::observe(TagObserver::class);
        User::observe(UserObserver::class);
    }
}
