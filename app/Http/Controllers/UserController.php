<?php

namespace App\Http\Controllers;

use App\User;
use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Auth;


class UserController extends Controller
{
    public function getUserProfile($userName)
    {
        $user = User::where('name', $userName)->first();

        $userListings = Listing::where('user_id', $user->id)->get();

        return view('pages.profile', compact('user', 'userListings'));
    }

    public function update_avatar(Request $request)
    {
        $user = Auth::user();
        $userListings = Listing::where('user_id', $user->id)->get();
        $fileNameToStore = $this->handleFileUpload($request);

        if ($request->hasFile('avatar')) {
            if ($user->avatar != 'default.jpg') {
                Storage::delete('public/img/avatars/' . $user->avatar);
            }
            $user->avatar = $fileNameToStore;
        }
        $user->save();
        return view('pages.profile', compact('user', 'userListings'));
    }


    private function handleFileUpload(Request $request)
    {


        $fileNameToStore = 'default.jpg';
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
    
            $fileNameToStore = time() . '.' . $avatar->getClientOriginalExtension();
    
            Image::make($avatar)->resize(220, 220)->save( public_path('/img/avatars/' . $fileNameToStore) );
        } 
       
        return $fileNameToStore;

       /* $avatarImage = request()->file('avatar');
        if ($avatarImage != null) {

            // Get filename with the extension 
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just extension
            $extension = $request->file('avatar')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            // Upload Image
            $destinationPath = public_path('/img/avatar');
            $avatarImage->move($destinationPath, $fileNameToStore);
        
            $request->file('avatar')->storeAs('public/avatar_images/thumbnail', $fileNameToStore);

            //Resize image here
            $thumbnailpath = public_path('img/avatar' . $fileNameToStore);
            $img = Image::make($thumbnailpath)->resize(220, 220, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($thumbnailpath);
        } else {
            $fileNameToStore = 'default.jpg';
        }
        return $fileNameToStore;*/
    }
}
