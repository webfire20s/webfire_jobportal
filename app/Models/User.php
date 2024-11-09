<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable; // Correct inheritance

class User extends Authenticatable // Change here: extend Authenticatable
{
    use HasFactory, Notifiable;

    // Table name (optional if the default is used)
    protected $table = 'users';

    // Primary key (optional if the default is 'id')
    protected $primaryKey = 'id';

    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'shop_name',
        'aadhar',
        'mobile',
        'address',
        'state',
        'pincode',
        'status',
        'photo',
        'aadhar_photo',
        'pan_photo',
    ];

    // The attributes that should be hidden for arrays (e.g. passwords)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // The method to automatically hash passwords before storing
    public function setPasswordAttribute($value)
    {
        // If the password is not already hashed, hash it before saving
        if (!empty($value)) {
            $this->attributes['password'] = Hash::make($value);
        }
    }

   
}
