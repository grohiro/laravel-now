<?php
namespace Grohiro\LaravelNow;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Carbon\Carbon;

/**
 * laravel-now service provider
 */
class ServiceProvider extends LaravelServiceProvider
{
  public function __construct()
  {
    $this->now = env('LARAVEL_NOW', false);
  }

  public function boot()
  {
    if ($this->now) {
      Carbon::setTestNow(new Carbon($this->now));
    }
  }
}
