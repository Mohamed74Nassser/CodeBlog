<?php

namespace App\Observers;

use App\Models\TextWidget;
use Illuminate\Support\Facades\Cache;

class TextWidgetObserver
{
    public function saved(TextWidget $textWidget)
    {
        TextWidget::updateCache($textWidget->key);
    }

    public function deleted(TextWidget $textWidget)
    {
        Cache::forget('text-widget-' . $textWidget->key);
    }
}
