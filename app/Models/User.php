<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',          // If you have a 'role' field to define user roles
        'mobile',        // Added mobile field
        'aadhar',        // Added aadhar field
        'address',       // Added address field
        'state',         // Added state field
        'pincode',       // Added pincode field
        'photo',         // For storing user profile photo (file path)
        'aadhar_photo',  // For storing aadhar photo (file path)
        'pan_photo',     // For storing PAN photo (file path)
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // Laravel 10+ auto-hashes password fields
    ];

    /**
     * Set the user's password and automatically hash it.
     *
     * @param string $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    /**
     * Define relationship if the user has transactions
     * You can add more relationships as needed.
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
