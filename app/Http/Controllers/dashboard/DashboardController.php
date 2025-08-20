<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Banner;
use App\Models\ContactUs;
use App\Models\Product;
// use App\Models\Ourteam;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index(Request $request)
    { 
        $data = [
            // 'bannerCount' => Banner::count(),
            'inquiryCount' => ContactUs::count(),
            'productCount' => Product::count(),
            'categoryCount' => Category::count(),
            // 'teamCount' => Ourteam::count(),
            'latestInquiries' => ContactUs::latest()->take(5)->get(),
        ];

        return view('new_content.dashboard.dashboards', $data);
    }
}
