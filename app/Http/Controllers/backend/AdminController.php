<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }
    
    
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function profile(){
        
        $id = Auth::user()->id;
        $admin = User::find($id);

        return view('backend.profile.index', compact('admin'));

    }
    public function editProfile(){
        
        $id = Auth::user()->id;
        $editAdmin = User::find($id);

        return view('backend.profile.editProfile.index', compact('editAdmin'));

    }

    public function updateProfile(Request $request){

        $id = Auth::user()->id;
        $updateAdmin = User::find($id);

        $updateAdmin->name = $request->name;
        $updateAdmin->email = $request->email;
        $updateAdmin->username = $request->username;

        if($request->hasFile('profile_image')){

            $imageName = $request->profile_image->extension();
            $imageNewName = uniqid(). '.' . $imageName;
            $imageUpload = $request->profile_image->storeAs('Profile', $imageNewName,'public');
            $imageLink = env('APP_URL'). 'storage/' . $imageUpload;

            $updateAdmin->profile_image = $imageNewName;
            $updateAdmin->image_url = $imageLink;
        }

        $updateAdmin->save();
        $notification = array(
            'message' => "Admin Profile Updated Successfully",
            'alert-type' => 'success',
        );
        return redirect()->route('admin.profile')->with($notification);
    }

    public function Password(){

        return view('backend.profile.changePassword.index');
    }

    public function changePassword(Request $request){
  
        $request->validate([
            'password' => 'required|min:8',
            'NewPassword' => 'required|min:8',
            'confirmPassword' => 'required|min:8|same:NewPassword',
        ]);

        $oldPassword = Auth::user()->password;

        if(Hash::check($request->password,$oldPassword)){
            
            $id = Auth::user()->id;
            $user = User::find($id);

            $user->password = bcrypt($request->NewPassword);
            $user->save();

            $notification = array(
                'message' => "Password Update Successfully",
                'alert-type' => 'success',
            );
            return redirect()->route('admin.password')->with($notification);
        }else{

            $notification = array(
                'message' => "Old Password is not match",
                'alert-type' => 'error',
            );
            return redirect()->route('admin.password')->with($notification);
        }
    }
}
