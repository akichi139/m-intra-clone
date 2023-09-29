<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Menu\Laravel\Facades\Menu;
use Spatie\Menu\Link;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;

class NavServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Cache::rememberForever('brands', function () {
            return Brand::all();
        });

        Cache::rememberForever('categories', function () {
            return Category::all();
        });
    }
}
