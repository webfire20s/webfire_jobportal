<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * These fields can be safely set via create() or fill().
     * The 'style' column is excluded from required fields and is nullable in the DB.
     */
    protected $fillable = [
        'filter_class',
        'title',
        'subtitle',
        'image',
        'alt',
        'url',
        'style',
    ];

    /**
     * Cast the 'style' column to string (though it's implicitly a string, this confirms intent).
     * This is useful if you retrieve this as a Collection and want to ensure its type.
     */
    protected $casts = [
        'style' => 'string',
    ];
}
