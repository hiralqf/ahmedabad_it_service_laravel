<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contact_us'; // Make sure your table name matches

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];

    protected $casts = [
        'message' => 'string',
    ];
}   