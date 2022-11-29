<?php

namespace App\Providers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\TheLoai; 
use App\Models\LoaiTin;
use App\Models\Slide;
use App\Models\TinTuc;
// use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View;

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
        $theLoais = TheLoai::all();
        $slides = Slide::all();
        View::share('theLoais', $theLoais);
        View::share('slides', $slides);
    }
}
