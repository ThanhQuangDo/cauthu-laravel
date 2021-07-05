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

        if ($get_file) {  
            
            $imageName= time() . $get_file->getClientOriginalName();       
            $data['avatar'] = $imageName;  
            
        }
        //  else {
        //     $user = User::where('id', Auth::id())->update($request->except(['avatar']));
        //     return back()->with('status', 'Update success');
        // }

        
        if($user->update($data)) {
            if($get_file){
                $targetDir = 'upload/user/avatar';
                $get_file->move($targetDir, $imageName); 
            }
            return back()->with('status', 'Update success');
        } else{
            return back()->with('status', 'Update profile error');
        }  
        
    }    
    
   
}
