<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function upload(Request $request)
    {
        $image = $_POST["image"];
        $path  = $image->storeAs('profile', uniqid().'.'.$image->extension(), ['disk' => 'public']);
        $link = Storage::url($path);
        if($image != "") {
            //$pic = date("Ymdhis").".jpg";
            file_put_contents($path, base64_decode($image));
            echo "upload done";
            return response()->json([
                'message' => 'yeee',
                'path' => $path,
                'link' => $link,
            ]);
        }
        //$photo = $request->file('photo');
        //$path  = $photo->storeAs('public', 'profile_pics_'.uniqid().'.'.$photo->extension());
        
        
    }
}
