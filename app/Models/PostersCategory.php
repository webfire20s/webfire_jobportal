<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostersCategory extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow the naming convention
    protected $table = 'posters_category';

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'id'; // Default is 'id', so this can be omitted if using the default

    // Specify which attributes are mass assignable
    protected $fillable = [
        'name',
        'status',
    ];

    // Timestamps are enabled by default, if you don't want them, add:
    // public $timestamps = false; // Use false if your table doesn't have created_at and updated_at

    /**
     * Get the posters for the category.
     */
    public function posters()
    {
        return $this->hasMany(Poster::class, 'category_id');
    }
}
