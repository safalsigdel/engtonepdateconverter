<?php
/**
 * Created by PhpStorm.
 * User: safal sigdel
 * Date: 1/11/2019
 * Time: 10:51 AM
 */

namespace safal\engtonepdateconverter;
use Illuminate\Support\ServiceProvider;

class NepaliDateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('\safal\engtonepdateconverter\NepaliDateController');
        $this->app->bind('nepdate', function () {
            return new \safal\engtonepdateconverter\NepaliDateController();
        });
    }
}