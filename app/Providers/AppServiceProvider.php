<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Model\link;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // $data1 =Link::where('status',1)->first();
        $data1 =\DB::table('Link')->where('status',1)->get();
        view()->share('data1',$data1);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
