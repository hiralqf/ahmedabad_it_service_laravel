<?php

namespace App\Http\Controllers\ImageCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\ImageCategoryType;
use App\Models\ImageCategory;
use Yajra\DataTables\DataTables;

class ImageCategoryController extends Controller
{
    //
    public function index(Request $request): View
    {
        return view('image_category.index');
    }

    public function getData(Request $request, DataTables $dataTables)
    {
        $data = ImageCategory::with(['category_type:id,title', 'images.imageActivity'])
        ->withCount('images')
        ->orderByDesc('id');

        return $dataTables->eloquent($data)
            ->addColumn('category_type', function ($row) {
                return $row->category_type->title ?? '';
            })
            ->addColumn('images_count', function ($row) {
                return $row->images_count;
            })
            ->addColumn('image_activity_count', function ($category) {
                return $category->images->sum(function ($image) {
                    return $image->imageActivity->count();
                });
            })
            ->addColumn('is_featured', function ($row) {
                if($row->is_featured === 1) {
                    return '<span class="badge badge-success">yes</span>';
                } else {
                    return '<span class="badge badge-danger">no</span>';
                }
            })
            ->addColumn('created_at', function ($row) {
                return \Carbon\Carbon::parse($row->created_at)->format('d-m-Y h:i A');
            })
            ->addColumn('thumbnail', function ($row) {
                // You can use a default image if there's no thumbnail
                return '<img src="' . asset('storage/' . $row->thumbnail) . '" class="img-fluid shadow"  height="70px" width="70px">';
            })
            ->addColumn('is_active', function ($row) {
                // Add toggle button based on the is_active field
                $status = $row->is_active ? 'checked' : '';
                return '
                    <label class="switch">
                        <input type="checkbox" class="is-active-toggle" data-id="' . $row->id . '" ' . $status . '>
                        <span class="slider round"></span>
                    </label>';
            })
            ->addColumn('action', function ($row) {
                $editUrl = route('image_category.edit', $row->id);
                $deleteUrl = route('image_category.delete', $row->id);
            
                return '
                    <a href="' . $editUrl . '" class="btn btn-sm btn-primary me-2" title="Edit Category">
                        <i class="fas fa-pen"></i>
                    </a>
                    <form action="' . $deleteUrl . '" method="POST" class="d-inline delete-form" title="Delete Category">
                        ' . csrf_field() . method_field('DELETE') . '
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>';
            })
            ->rawColumns(['thumbnail', 'is_active', 'action', 'category_type', 'is_featured', 'images_count', 'image_activity_count'])
            ->make(true);
    }

    public function create(Request $request): View
    {
        $category_type = ImageCategoryType::all();
        return view('image_category.form', compact('category_type'));
    }

    public function edit(Request $request, $id): View
    {
        // Get the category details by ID for editing
        $category = ImageCategory::findOrFail($id);
        $category_type = ImageCategoryType::all();
        
        return view('image_category.form', compact('category', 'category_type'));
    }

    public function storeOrUpdate(Request $request, $id = null)
    {
        $validated = $request->validate([
            'category_name' => 'required|string|max:100',
            'category_description' => 'nullable|string',
            'thumbnail' => $id ? 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048' : 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_active' => 'required|boolean',
            'is_featured' => 'required|boolean',
            'category_type' => 'required|exists:image_category_type,id',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $categories = $id ? ImageCategory::findOrFail($id) : new ImageCategory;

        $thumbnailPath = $id ? $categories->thumbnail : null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('categoty_thumbnails', 'public');
        }

        $categories->name = $validated['category_name'];
        $categories->description = $validated['category_description'];
        $categories->thumbnail = $thumbnailPath;
        $categories->image_category_type_id = $validated['category_type'];
        $categories->is_active = $validated['is_active'];
        $categories->is_featured = $validated['is_featured'];
        $categories->sort_order = $validated['sort_order'];

        $categories->save();

        return redirect()->route('image_category.index')->with('success', $id ? 'Image category updated successfully.' : 'Image category created successfully.');
    }

    public function toggleActive($id, $status)
    {
        $service = ImageCategory::findOrFail($id);
        $service->is_active = $status;
        $service->save();

        return response()->json(['message' => 'Image category updated successfully']);
    }

    public function destroy($id)
    {
        $category = ImageCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('image_category.index')->with('success', 'Image category deleted successfully.');
    }
}
