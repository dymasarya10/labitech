<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Page;
use App\Models\Setting;

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
        Paginator::useBootstrap();
        $page_data = Page::where('id', 1)->first();
        $setting_data =  Setting::where('id', 1)->first();

        view()->share('global_page_data', $page_data);
        view()->share('global_setting_data', $setting_data);
    }
}
