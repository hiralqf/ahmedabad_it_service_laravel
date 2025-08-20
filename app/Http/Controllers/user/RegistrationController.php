<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{

    public function user(Request $request){
        return view('new_content.user.reg_list');
    }

    public function index_user(Request $request)
    {
        $user= Registration::get();
        return response()->json(['user' => $user]);
    }

    public function edit_user($id){
        $user = Registration::find($id);
        if($user){
            return view('new_content.user.add_reg',compact('user'));
        }
    }

    public function store_user(Request $request ,$id = null)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(["status"=>404,'errors'=>$validator->errors()]);
        }
        $user = session()->get('UserDetails');
        $profile = null;
        if($request->hasFile('profile'))
        {
            $image = $request->file('profile');
            $imageName = 'journal_of_supply_chain_'. time(). '.' .$image->getClientOriginalExtension();
            Storage::putFileAs("/registration/", $image, $imageName);
            $profile = '/registration/' . $imageName;
        }
        $logo = null;
        if($request->hasFile('logo'))
        {
            $image = $request->file('logo');
            $imageName = 'journal_of_supply_chain_'. time(). '.' .$image->getClientOriginalExtension();
            Storage::putFileAs("/registration_logo/", $image, $imageName);
            $logo = '/registration_logo/' . $imageName;
        }
        if ($id) {
            $update_user = Registration::find($id);
            $update_user->name = $request->name;
            $update_user->email = $request->email;
            $update_user->contact = $request->contact;
            $update_user->profile = $profile != null ? $profile : $update_user->profile;
            $update_user->job_title = $request->job_title;
            $update_user->company_name = $request->company_name;
            $update_user->logo = $logo != null ? $logo : $update_user->logo;
            $update_user->is_leaders  = $request->is_leaders  == 1 || $request->is_leaders  == "1" ? 1 : 0;
            $update_user->updated_by = $user->id;
            $update_user->save();
            return redirect()->route('reg-user')->withSuccess(__('Register User updated successfully.'));
        }
    }

    public function delete_user(Request $request,$id)
    {
            $user = session()->get('UserDetails');
            $delete_user = Registration::find($id);
            $delete_user->deleted_by =  $user->id;
            $delete_user->save();
            $delete_user->delete();
            return response()->json(["status"=>200, 'success' => 'User deleted successfully.']);
    }

}
