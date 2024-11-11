<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'slug',
        'feature_image',
        'meta_title', 
        'meta_description', 
        'meta_tags', 
        'content', 
        'status', 
    ];
}
