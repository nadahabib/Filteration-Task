<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use App\User;
 
class ImageController extends Controller
{
 
    public function index()
    {
        return view('change_image');
    }
 
    public function save()
    {
       request()->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
        if ($files = request()->file('profile_picture')) {
           $destinationPath = 'public/media/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['profile_picture'] = "$profileImage";
        }
        $user = User::find(auth()->user()->id);
        $user->profile_picture = "$profileImage";
        $user-> save();
 
        return Redirect::to("change_profile_picture")
        ->withSuccess('Great! Image has been successfully uploaded.');
 
    }
}