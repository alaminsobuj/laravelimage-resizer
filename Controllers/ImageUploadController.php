<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload(){
        return view('imageUpload');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->extension();
     
        $filePath = public_path('/images');
        $img = Image::make($image->path());
        $img->resize(80,80, function ($const) {
            // $const->aspectRatio();
        })->save($filePath.'/'.$input['imagename']);
   
        // $filePath = public_path('/images');
        // $image->move($filePath, $input['imagename']);
        /* Store $imageName name in DATABASE from HERE */
    
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$input['imagename']); 
    }
}
