<?php

namespace App\Http\Controllers\product;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    protected $table = 'product'; 

    public function index_AddProduct()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('backend.product.add_product', compact('categories'));
    }

    public function index_Product(Request $request)
    {
        return view('backend.product.productlist');
    }

    public function index_Listproduct(Request $request)
    {
        $draw = $request->input('draw');
        $start = $request->input('start', 0);
        $length = $request->input('length', 10);
        $searchValue = $request->input('search.value');

        $page = ($start / $length) + 1;

        $query = Product::select(
                'product.id',
                'product.primary_title',
                'product.secondary_title',
                'product.thumbnail',
                'product.alt',
                'product.slug',
                'product.is_active',
                'product.is_show_home',
                'category.name as category'
            )
            ->leftJoin('category', 'product.category_id', '=', 'category.id');

        $totalRecords = $query->count();

        if (!empty($searchValue)) {
            $query->where(function($q) use ($searchValue) {
                $q->where('product.primary_title', 'like', "%$searchValue%")
                ->orWhere('product.secondary_title', 'like', "%$searchValue%")
                ->orWhere('product.slug', 'like', "%$searchValue%")
                ->orWhere('category.name', 'like', "%$searchValue%");
            });
        }

        $filteredCount = $query->count();

        $data = $query->orderBy('product.id', 'desc')
                    ->paginate($length, ['*'], 'page', $page);

        return response()->json([
            'draw' => $draw,
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $filteredCount,
            'data' => $data->items()
        ]);
    }

    public function edit_Product($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        if ($product) {
            return view('backend.product.add_product', compact('product', 'categories'));
        }

        return redirect()->route('products')->with('error', 'Product not found.');
    }

    public function store_Product(Request $request, $id = null)
    {
        $validator = Validator::make($request->all(), [
            'primary_title' => 'required',
            'secondary_title' => 'nullable',
            'sub_title' => 'nullable',
            'category_id' => 'required',
            'slug' => 'required',
            'description' => 'nullable',
            'alt' => 'nullable',
            'is_active' => 'nullable|boolean',
            'is_show_home' => 'nullable|boolean',
            'thumbnail' => 'nullable|image',
            'images.*' => 'nullable|image',
        ]);

        if ($validator->fails()) {
            return response()->json(["status" => 404, 'errors' => $validator->errors()]);
        }

        $thumbnail = null;
        $images = [];

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = 'chamunda industries' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('product', $image, $imageName);
            $thumbnail = 'product/' . $imageName;
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = 'chamunda industries' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('product', $image, $imageName);
                $images[] = 'product/' . $imageName;
            }
        }

        if ($id) {
            $product = Product::findOrFail($id);
            $product->primary_title = $request->primary_title;
            $product->secondary_title = $request->secondary_title;
            $product->sub_title = $request->sub_title;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->slug = $request->slug;
            $product->is_active = $request->has('is_active') ? $request->is_active : 1;
            $product->is_show_home = $request->is_show_home == 1 || $request->is_show_home == "1" ? 1 : 0;
            $product->alt = $request->alt;

            if ($thumbnail) {
                $product->thumbnail = $thumbnail;
            }

            if (!empty($images)) {
                $product->images = $images;
            }

            $product->save();

            return redirect()->route('products')->with('success', 'Product updated successfully.');
        } else {
            Product::create([
                'primary_title' => $request->primary_title,
                'secondary_title' => $request->secondary_title,
                'sub_title' => $request->sub_title,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'slug' => $request->slug,
                'alt' => $request->alt,
                'is_active' => $request->has('is_active') ? $request->is_active : 1,
                'is_show_home' => $request->is_show_home == 1 || $request->is_show_home == "1" ? 1 : 0,
                'thumbnail' => $thumbnail,
                'images' => !empty($images) ? $images : null,
            ]);

            return redirect()->route('products')->with('success', 'Product created successfully.');
        }
    }

    public function delete_Product(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return response()->json(["status" => 200, 'success' => 'Product deleted successfully.']);
        }
        return response()->json(["status" => 404, 'error' => 'Product not found.']);
    }

    public function status_product($id, $status)
    {
        $editStatus = Product::find($id);
        if($editStatus)
        {
            $editStatus->is_active = $status;
            $editStatus->save();
            return response()->json(['success' => true, 'status' => $status]);
        }
        return response()->json(['success' => false, 'error' => 'Product not found'], 404);
    }
}