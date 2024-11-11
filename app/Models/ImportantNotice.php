<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportantNotice extends Model
{
    use HasFactory;

    // Add the notice field to the fillable property
    protected $fillable = [
        'notice', // The notice field is now fillable
        // You can add other fields here if needed
    ];

    // You can define relationships, methods, and other model logic here if needed
}
