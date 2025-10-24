<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property string|null $image_path
 * @property string $author_name
 * @property bool $is_published
 * @property \Illuminate\Support\Carbon|null $published_at
 */
class BlogPost extends Model
{
    use HasFactory;

    // The attributes that are mass assignable.
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image_path',
        'author_name',
        'is_published',
        'published_at',
    ];

    // The attributes that should be cast to native types.
    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];
    
    /**
     * Get the route key for the model.
     * This makes sure that routes like /blog/{slug} work automatically.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
