<?php

namespace App\Http\Controllers;

use App\Models\TextWidget;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function about()
    {
        $widget = TextWidget::query()->where('active', 1)
        ->where('key', '=', 'about-page')
        ->first();
        return view('about', compact('widget'));
    }
}
