<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Registration extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $table = 'registration';
    protected $fillable = [
        'name', 'email', 'contact', 'password', 'profile', 'alt', 'job_title', 'company_name', 'logo', 'logo_alt', 'is_active', 'is_leaders', 'created_by', 'updated_by', 'deleted_by'
    ];
}