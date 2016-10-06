<?php

namespace laravelselect2\select2;

use Illuminate\Support\ServiceProvider;

class Select2ServiceProvider extends ServiceProvider
{

   public function boot()
   {
	include __DIR__ . '/routes.php';
	$this->loadViewsFrom(__DIR__.'/Views','select2');	
		
   } 	
    public function register()
    {
        $this->app['select2']=$this->app->share(function ($app){

		return new select2;	
	});
    }

}
