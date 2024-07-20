<?php

namespace App\Providers;

use App\Models\TextWidget;
use App\Observers\TextWidgetObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        TextWidget::observe(TextWidgetObserver::class);
    }
}
