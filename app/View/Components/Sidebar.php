<?php

namespace App\View\Components;

use Closure;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class Sidebar extends Component
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
    public function render()
    {
        $categories = DB::table('categories')
        ->join('category_posts', 'categories.id', '=', 'category_posts.category_id')
        ->select('title', 'slug', 'categories.id', DB::raw('count(*) as total'))
        ->groupBy('title', 'slug', 'categories.id')
        ->orderByDesc('total')
        ->get();
        return view('components.sidebar', compact('categories'));
    }
}
