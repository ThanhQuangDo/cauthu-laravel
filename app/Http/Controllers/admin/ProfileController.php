<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\profile\UpdateProfileRequest;


class ProfileController extends Controller
{
    //
    public function index(){
        if(Auth::check()){
            $country = Country::all();
            return view('admin.profile.index')->with('country', $country);
        }else{
            return view('auth.login');
        }
    }

    public function update(UpdateProfileRequest $request){

        $userid = Auth::id();
        $user = User::findOrFail($userid);
        
        $data = $request->all();
        
        if($data['password']){
            $data['password'] = bcrypt($data['password']);
        } else {
            $data['password'] = $user->password;
        }

        $get_file = $request->avatar;

        if($get_file){
            if(file_exists(($get_file))){
                
            return back()->with('status', 'File exists');
        }else{
            $data['avatar'] = $get_file->GetClientOriginalName();
        }
    }

        if($user->update($data)){
        
            if($get_file){
                
                $get_file->move('upload/user/avatar', $get_file->GetClientOriginalName());

            }

            return back()->with('status', 'Update success');

        }else{
            return back()->with('status', 'Update profile error');
        }

    }
}
