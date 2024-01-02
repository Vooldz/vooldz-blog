<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = DB::table('categories')
        ->leftjoin('category_posts', 'categories.id', '=', 'category_posts.category_id')
        ->select('title', 'slug', 'categories.id', DB::raw('count(*) as total'))
        ->groupBy('title', 'slug', 'categories.id')
        ->orderByDesc('total')
        ->limit(7)
        ->get();
        return view('layouts.app', compact('categories'));
    }
}
