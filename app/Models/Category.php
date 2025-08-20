<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'category'; // Make sure your table name matches

    protected $fillable = [
        'name',
        // 'thumbnail',
        'slug',
        // 'alt',
        'is_active',
    ];
    // ✅ Add this method to define the relationship
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'category_id');
    }
    
}
