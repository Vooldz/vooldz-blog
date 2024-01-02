<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextWidget extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'title',
        'content',
        'image',
        'active',
    ];

    public static function getTitle(string $key): string
    {
        $widget = TextWidget::query()
            ->where('active', '=', 1)
            ->where('key', '=', $key)
            ->first();

        if ($widget) {
            return $widget->title;
        }

        return '';

    }

    public static function getContent(string $key): string
    {
        $widget = TextWidget::query()
            ->where('active', '=', 1)
            ->where('key', '=', $key)
            ->first();

        if ($widget && $widget->content)
        {
            return $widget->content;
        }
        return '';
    }

    public function getImage(){

        if (str_starts_with($this->image, 'http')){
            return $this->image;
        }

        return asset("storage/$this->image");
    }

}
