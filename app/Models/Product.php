<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product';

    protected $fillable = [
        'primary_title',
        'secondary_title',
        'sub_title',
        'category_id',
        'thumbnail',
        'alt',
        'slug',
        'is_active',
        'is_show_home',
        'description',
        'images'
    ];

    protected $casts = [
        'images' => 'array',
        'is_active' => 'boolean',
        'is_show_home' => 'boolean'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
