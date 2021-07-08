<?php


namespace Prs\ResultResponse\Provider;


use Illuminate\Support\ServiceProvider;
use Prs\ResultResponse\Service\ResultService;

class ResultResponseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('result' , function () {
            return new ResultService();
        });
    }
}
