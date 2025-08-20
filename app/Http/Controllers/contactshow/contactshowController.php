<?php

namespace App\Http\Controllers\contactshow;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactshowcontroller extends Controller
{
    public function index_contactshow(Request $request)
    {
        return view('backend.contactshow.contactshowlist');
    }

    public function index_listcontactshow(Request $request)
    {
        $draw = $request->input('draw');
        $start = $request->input('start', 0);
        $length = $request->input('length', 10);
        $searchValue = $request->input('search.value');
        
        // Calculate page number
        $page = ($start / $length) + 1;

        $query = ContactUs::query()->orderBy('id', 'desc');

        // Total records count (without filtering)
        $totalRecords = ContactUs::count();

        // Apply search if exists
        if (!empty($searchValue)) {
            $query->where(function($q) use ($searchValue) {
                $q->where('name', 'like', "%$searchValue%")
                  ->orWhere('email', 'like', "%$searchValue%")
                  ->orWhere('phone', 'like', "%$searchValue%")
                  ->orWhere('message', 'like', "%$searchValue%");
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
    }

    public function view_contactshow(Request $request, $id = null)
    {
        $contactshow = ContactUs::where('id', $id)->first();
        return view('backend.contactshow.view_contactshow', compact('contactshow'));
    }
}