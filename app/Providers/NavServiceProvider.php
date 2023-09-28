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

        Menu::macro('main', function ($brands, $categories) {
            return Menu::new()
                ->add(Link::to(route('welcome'), 'Home'))
                ->submenu('Brands', function ($brandSubMenu) use ($brands) {
                    $brandSubMenu->addClass('brandSubMenu');
            
                    foreach ($brands as $brand) {
                        $brandSubMenu->link(
                            route('brand_product', ['brand_name' => $brand->brand_name]),
                            $brand->brand_name
                        );
                    }
                })
                // ->submenu('Categories', function ($CategorySubMenu) use ($categories) {
                //     $CategorySubMenu->addClass('CategorySubMenu');
            
                //     foreach ($categories as $category) {
                //         $CategorySubMenu->link(
                //             route('category_product', ['category_name' => $category->categories_name]),
                //             $category->category_name
                //         );
                //     }
                // })
                ->add(Link::to(route('promotion'), 'Promotion'))
                ->add(Link::to(route('repairandcal'), 'Repair & Calibration'))
                ->add(Link::to(route('quatation'), 'Quatation & DemonStration'))
                ->add(Link::to(route('aboutus'), 'About Us'));
        });
    }
}
