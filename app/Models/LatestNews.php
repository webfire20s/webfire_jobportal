<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'banner_image'];

    // You can add additional relationships or methods here if needed
}
