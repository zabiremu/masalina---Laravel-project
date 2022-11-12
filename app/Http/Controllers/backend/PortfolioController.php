<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Image;

class PortfolioController extends Controller
{
    public function portfolio(){
        $data = Portfolio::all();
        return view('backend.protfolio.index', compact('data'));
    }

    public function addPortfolio(){
        return view('backend.protfolio.addPortfolio.index');
    }

    public function storePortfolio(Request $request){
        
        $request->validate([
            'title' => 'required',
            'shortTitle' => 'required',
            'editordata' => 'required',
            'portfolio_image' => 'mimes:png,jpg,jpeg,webp,svg'
        ]);

        if($request->file('portfolio_image')){

            $img = $request->file('portfolio_image');
            $image = $request->portfolio_image->extension();
            $imageName = uniqid() . '.' . $image;
            $image_resize = Image::make($img->getRealPath());
            $image_resize->resize(1020,519);        
            $path = 'uploads/' . $imageName;
            $image_resize->save($path);
            $imageUri = 'uploads/' . $imageName;  

            $dataSave = new Portfolio();
            $dataSave->title = $request->title;
            $dataSave->short_title = $request->shortTitle;
            $dataSave->short_details = $request->editordata;
            $dataSave->image = $imageName;
            $dataSave->image_url = $path;
            $dataSave->save();

            $notification = array(
                'message' => "Successfully Upload",
                'alert-type' => 'success',
            );
            return back()->with($notification);

        }
        else{
            $dataSave = new Portfolio();
            $dataSave->title = $request->title;
            $dataSave->short_title = $request->shortTitle;
            $dataSave->short_details = $request->editordata;
            $dataSave->save();

            $notification = array(
                'message' => "Successfully Upload",
                'alert-type' => 'success',
            );
            return back()->with($notification);
        }

    }

    public function editPortfolio($id){
        $data = Portfolio::find($id);
        return view('backend.protfolio.editportfolio.index', compact('data'));
    }

    public function updatePortfolio(Request $request, $id){
        
        if($request->file('portfolio_image')){

            $img = $request->file('portfolio_image');
            $image = $request->portfolio_image->extension();
            $imageName = uniqid() . '.' . $image;
            $image_resize = Image::make($img->getRealPath());
            $image_resize->resize(1020,519);        
            $path = 'uploads/' . $imageName;
            $image_resize->save($path);
            $imageUri = 'uploads/' . $imageName;  

            $dataSave = Portfolio::find($id);
            
            $dataSave->title = $request->title;
            $dataSave->short_title = $request->shortTitle;
            $dataSave->short_details = $request->editordata;
            $dataSave->image = $imageName;
            $dataSave->image_url = $path;
            $dataSave->save();

            $notification = array(
                'message' => "Successfully Update",
                'alert-type' => 'success',
            );
            return back()->with($notification);

        }
        else{
            $dataSave = Portfolio::find($id);
            $dataSave->title = $request->title;
            $dataSave->short_title = $request->shortTitle;
            $dataSave->short_details = $request->editordata;
            $dataSave->save();

            $notification = array(
                'message' => "Successfully Update",
                'alert-type' => 'success',
            );
            return back()->with($notification);
        }
    }

    public function deletePortfolio($id){

        $data = Portfolio::find($id);
        $data->delete();

        $notification = array(
            'message' => "Successfully Delete",
            'alert-type' => 'success',
        );
        return back()->with($notification);

    }
}
