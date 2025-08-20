<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'users';
    
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'is_active', 
        'is_logged_in'
    ];
    
    protected $hidden = [
        'password',
    ];
}
