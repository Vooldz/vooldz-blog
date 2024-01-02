<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'body',
        'active',
        'published_at',
        'user_id',
    ];

    // User information
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Categories
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_posts');
    }

    // Show the first 3 lines from the post body
    public function shortBody()
    {
        return Str::words(strip_tags($this->body), 30);
    }

    // Published At Date Format
    public function getPublishedAtAttribute($date)
    {
        return date('Y/m/d', strtotime($date));
    }

    public function getThumbnail(){
        if (str_starts_with($this->thumbnail, 'http')){
            return $this->thumbnail;
        }

        return asset("storage/$this->thumbnail");
    }

}
