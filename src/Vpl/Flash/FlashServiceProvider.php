<?php namespace Vpl\Flash;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider {

  public function register()
  {
    $this->app->bindShared('flash', function()
    {
      return $this->app->make('Vpl\Flash\FlashNotifier');
    });
  }
} 