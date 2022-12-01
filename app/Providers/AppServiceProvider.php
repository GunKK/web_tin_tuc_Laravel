<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\TheLoai; 
use App\Models\LoaiTin;
use App\Models\Slide;
use App\Models\TinTuc;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        $theLoais = TheLoai::all();
        $slides = Slide::all();
        View::share('theLoais', $theLoais);
        View::share('slides', $slides);
    }
}
