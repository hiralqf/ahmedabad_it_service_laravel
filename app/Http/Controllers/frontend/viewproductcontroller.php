<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class viewproductcontroller extends Controller
{
    public function index($slug=null){
        $product = Product::where('slug', $slug)->first();
       
        // Get the category of the current product
        $currentCategory = Category::find($product->category_id);
        $category = Category::where('is_active','1')->get();
        $footer_category = Category::where('is_active','1')->limit('6')->orderBy('id','desc')->get();
    $relatedProducts = Product::where('category_id', $currentCategory->id)
    ->where('id', '!=', $product->id)
    ->get();
    $footer_products = Product::where('is_active','1')->orderBy('id','desc')->limit(5)->get();
    return view('frontend.viewproduct',compact('category','product','currentCategory','relatedProducts','footer_category','footer_products'));
    }
}