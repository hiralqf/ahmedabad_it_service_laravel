<?php

namespace App\Http\Controllers\category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    public function index_addcategory(){
        return view('backend.category.add_category');
    }
    public function index_category(Request $request){
        return view('backend.category.categorylist');
    }

    public function index_listcategory(Request $request)
    {
        try {
            $draw = $request->input('draw');
            $start = $request->input('start', 0);
            $length = $request->input('length', 10);
            $searchValue = $request->input('search.value');
            
            // Calculate page number
            $page = ($start / $length) + 1;

            $query = Category::query()->orderBy('id', 'asc');

            // Total records count (without filtering)
            $totalRecords = Category::count();

            // Apply search if exists
            if (!empty($searchValue)) {
                $query->where(function($q) use ($searchValue) {
                    $q->where('name', 'like', "%$searchValue%")
                    ->orWhere('slug', 'like', "%$searchValue%");
                });
            }

            // Get filtered count (if searching)
            $filteredCount = $query->count();

            // Get paginated data
            $data = $query->paginate($length, ['*'], 'page', $page);

            return response()->json([
                'draw' => $draw,
                'recordsTotal' => $totalRecords,
                'recordsFiltered' => $filteredCount,
                'data' => $data->items()
            ]);
        } catch (\Exception $e) {
            \Log::error('Category DataTables Error: ' . $e->getMessage());
            return response()->json([
                'draw' => $request->input('draw'),
                'recordsTotal' => 0,
                'recordsFiltered' => 0,
                'data' => [],
                'error' => 'An error occurred while fetching data.'
            ], 500);
        }
    }
    
    public function edit_category($id){
        $category = Category::find($id);
        if($category){
            return view('backend.category.add_category',compact('category'));
        }
    }

   public function store_category(Request $request, $id = null)
{   
    // Validate input
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'slug' => 'required|alpha_dash',  // Add validation rules for slug (optional)
    ]);

    if ($validator->fails()) {
        return response()->json(["status" => 404, 'errors' => $validator->errors()]);
    }

    if ($id) {
        // Update existing category
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = $request->slug;  // Update the slug
        $category->save();

        return redirect()->route('category')->with('success', 'Category updated successfully.');
    } else {
        // Insert new category
        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,  // Insert the slug
        ]);

        return redirect()->route('category')->with('success', 'Category created successfully.');
    }
}


    public function delete_category(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(["status" => 404, 'error' => 'Category not found.']);
        }

        // Check if category has any products
        if ($category->products()->exists()) {
            return response()->json(["status" => 400, 'error' => 'Category has products. Deletion not allowed.']);
        }

        // No products, safe to delete
        $category->delete();
        return response()->json(["status" => 200, 'success' => 'Category deleted successfully.']);
    }

    public function status_category($id, $status)
    {
        $editStatus = Category::find($id);
        if($editStatus)
        {
            $editStatus->is_active = $status == 1 ? 0 : 1;
            $editStatus->save();
        }
        return response()->json();
    }
}

