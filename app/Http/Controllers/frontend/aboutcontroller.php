<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
// use App\Models\Ourteam;
use App\Models\Joinourteam;

class aboutcontroller extends Controller
{
    public function index(){
    $productCount = Product::where('is_active','1')->count();

    //product count 
    $category = Category::where('is_active','1')->get();
    $footer_category = Category::where('is_active','1')->limit('6')->orderBy('id','desc')->get();
    $footer_products = Product::where('is_active','1')->orderBy('id','desc')->limit(5)->get();

    //ourteam
    // $ourteam = Ourteam::where('is_active','1')->get();

    return view('frontend.about',compact('category','productCount','footer_category','footer_products'));
    }
  
    //join our team insert function 
    public function store_joinourteam(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'nullable',
            'pdf_url' => 'required', 
            'message' => 'nullable',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $pdfPath = null;

        if ($request->hasFile('pdf_url')) {
            $pdf = $request->file('pdf_url');
            $pdfName = 'resume_' . time() . '.' . $pdf->getClientOriginalExtension();
            Storage::putFileAs('/resumes/', $pdf, $pdfName); // stored in storage/app/resumes/
            $pdfPath = '/resumes/' . $pdfName;
        }
    
    
        // Store in database
        JoinOurTeam::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'pdf_url' => $pdfPath,
            'message' => $request->message,
        ]);
    
        return redirect()->back();
    }
}
