<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

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
    // Share footer categories with all views
    View::composer('*', function ($view) {
      $footer_category = Category::where('is_active', 1)
                                ->orderBy('id', 'desc')
                                ->limit(5)
                                ->get();
      $view->with('footer_category', $footer_category);
    });
  }
}
