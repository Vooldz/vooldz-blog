<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
    ];

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'category_posts');
    }

}
