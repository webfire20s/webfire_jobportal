<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';
    // Fields that are mass assignable
    protected $fillable = [
        'name',
        'office_address',
        'feedback',
        'photo',
        'is_published',
    ];
}