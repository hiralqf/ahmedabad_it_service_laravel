<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class productcontroller extends Controller
{
    public function index($slug = null)
    {
        $currentCategory = null;
    
        if ($slug && $slug !== 'all') {
            $currentCategory = Category::where('slug', $slug)->first();
    
            if ($currentCategory) {
                $product = Product::where('category_id', $currentCategory->id)
                                  ->where('is_active', '1')
                                  ->get();
            } else {
                $product = collect(); // If category not found
            }
        } else {
            // Show all active products when slug is 'all' or null
            $product = Product::where('is_active', '1')->get();
        }
    $category = Category::where('is_active', '1')->get();
    $footer_category = Category::where('is_active','1')->limit('6')->orderBy('id','desc')->get();
    $footer_products = Product::where('is_active','1')->orderBy('id','desc')->limit(5)->get();
    
    return view('frontend.product', compact('product', 'category', 'currentCategory','footer_category','footer_products'));
    }    
}
