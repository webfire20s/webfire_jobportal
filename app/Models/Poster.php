<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    use HasFactory;

    // Specify the table if it's not following Laravel's convention
    protected $table = 'posters'; // Only needed if your table is not named 'posters'

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'id'; // Only needed if your primary key is not 'id'

    // Specify which attributes are mass assignable
    protected $fillable = [
        'title',
        'description',
        'poster_url', // Make sure to include the correct field names
        'category_id',
        'pdf',
        'image'
    ];
}
