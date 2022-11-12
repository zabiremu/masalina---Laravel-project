<?php

namespace App\Http\Controllers\backend;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;
class HomeSlideController extends Controller
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
    
    
    
    public function homeSlide(){

        $data = Home::find(1);

        return view('backend.homeSlide.index', compact('data'));
    }

    public function homeSlideUpdate(Request $request, $id){

        if($request->hasFile('profile_image')){
            
            $img = $request->file('profile_image');
            $image = $request->profile_image->extension();
            $imageName = uniqid() . '.' . $image;
            $image_resize = Image::make($img->getRealPath());
            $image_resize->resize(636,852);        
            $path = 'uploads/' . $imageName;
            $image_resize->save($path);
            $imageUri = 'uploads/' . $imageName;  

            $homeSlide = Home::find($id);
            $homeSlide->title = $request->title;
            $homeSlide->short_title = $request->shortTitle;
            $homeSlide->image = $imageName;
            $homeSlide->image_url = $imageUri;
            $homeSlide->video = $request->videoUrl;
            $homeSlide->save();
            $notification = array(
                'message' => "Successfully Updated",
                'alert-type' => 'success',
            );
            return redirect()->route('home.slide')->with($notification);
        }else{
            $homeSlide = Home::find($id);
            $homeSlide->title = $request->title;
            $homeSlide->short_title = $request->shortTitle;
            $homeSlide->video = $request->videoUrl;
            $homeSlide->save();
            $notification = array(
                'message' => "Successfully Updated",
                'alert-type' => 'success',
            );
            return redirect()->route('home.slide')->with($notification);
        }

    }
}
