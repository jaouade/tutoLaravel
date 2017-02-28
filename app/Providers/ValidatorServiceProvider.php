<?php

namespace App\Providers;


use Barryvdh\Debugbar\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class  ValidatorServiceProvider extends ServiceProvider{


    public function boot()
    {
        Validator::extend('aaaa',function ($attribute,$value,$parameters){
            return $value =="aaaa";
        });
    }

    public function register()
    {
    }
}