<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function editusers($id){
        $user = User::findOrFail($id);
        return view('theme.editusers',compact('user'));
    }
    public function profile(Request $request,$id){
        
        $request->validate([
            
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
           
        ]);

        // Save the profile image
        $profileImage = $request->file('cover_image');
        $profileImageName = time() . '_' . $profileImage->getClientOriginalName();
        $profileImage->move(public_path('uploads/profiles_p'), $profileImageName);

        DB::table('users')->where('id', $id)->update([
                'cover_image' =>'/uploads/profiles_p/'.$profileImageName ,
    
    
            ]);

        return back();
       
    }
    public function deleteusers($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
    public function updateusers(Request $request,$id){
        
        $user = User::findOrFail($id);
       $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'status' => 'required',
           
        ]);
        

        $user->update($data);
        return redirect()->back()->with('status', 'User updated successfully');
    }
}
