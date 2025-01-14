<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class TextWidget extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'image',
        'title',
        'content',
        'active'
    ];

    public static function getTitle(string $key): string
    {
        $widget = Cache::rememberForever('text-widget-' . $key, function () use ($key) {
            return TextWidget::query()->where('key', '=', $key)->where('active', '=', 1)->first();
        });

        return $widget ? $widget->title : '';
    }

    public static function getContent(string $key): string
    {
        $widget = Cache::rememberForever('text-widget-' . $key, function () use ($key) {
            return TextWidget::query()->where('key', '=', $key)->where('active', '=', 1)->first();
        });

        return $widget ? $widget->content : '';
    }

    public static function updateCache(string $key)
    {
        Cache::forget('text-widget-' . $key);

        $widget = TextWidget::query()->where('key', '=', $key)->where('active', '=', 1)->first();
        
        if ($widget) {
            Cache::forever('text-widget-' . $key, $widget);
        }
    }
}
