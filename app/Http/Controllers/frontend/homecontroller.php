<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Banner;
use App\Models\Testimonial;

class homecontroller extends Controller
{
    public function index(){
        //get only home show product
    $product = Product::where('is_active','1')->where('is_show_home','1')->get();
    $productCount = Product::where('is_active','1')->count();//product count 

    //get category to show in drop down 1
    $category = Category::where('is_active','1')->get();
    $footer_category = Category::where('is_active','1')->limit('6')->orderBy('id','desc')->get();
    $footer_products = Product::where('is_active','1')->orderBy('id','desc')->limit(5)->get();
        //get banner 
       
        // dd($banner);


        
    return view('frontend.index',compact('product','category','productCount','footer_category','footer_products'));
    }
}
