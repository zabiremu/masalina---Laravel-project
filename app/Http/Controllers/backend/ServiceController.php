<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Image;

class ServiceController extends Controller
{
    public function index()
    {
        return view('backend.services.add_service');
    }

    public function serviceStore(Request $request)
    {
        if ($request->file('service_image')) {
            $img = $request->file('service_image');
            $image = $request->service_image->extension();
            $imageName = uniqid() . '.' . $image;
            $image_resize = Image::make($img->getRealPath());
            $image_resize->resize(323, 240);
            $path = 'uploads/' . $imageName;
            $image_resize->save($path);
            $imageUri = 'uploads/' . $imageName;

            $dataSave = new Service();
            $dataSave->title = $request->title;
            $dataSave->shot_title = $request->shortTitle;
            $dataSave->details = $request->description;
            $dataSave->image = $imageName;
            $dataSave->image_url = $path;
            $dataSave->save();

            $notification = [
                'message' => 'Successfully Upload',
                'alert-type' => 'success',
            ];
            return back()->with($notification);
        } else {
            $dataSave = new Service();
            $dataSave->title = $request->title;
            $dataSave->shot_title = $request->shortTitle;
            $dataSave->details = $request->description;
            $dataSave->save();

            $notification = [
                'message' => 'Successfully Upload',
                'alert-type' => 'success',
            ];
            return back()->with($notification);
        }
    }
    public function allService()
    {
        $service = Service::get();
        return view('backend.services.all_service', compact('service'));
    }
    public function editService($id)
    {
        $data = Service::find($id);
        return view('backend.services.edit_service', compact('data'));
    }

    public function updateService(Request $request, $id)
    {
        if ($request->file('service_image')) {
            $img = $request->file('service_image');
            $image = $request->service_image->extension();
            $imageName = uniqid() . '.' . $image;
            $image_resize = Image::make($img->getRealPath());
            $image_resize->resize(323, 240);
            $path = 'uploads/' . $imageName;
            $image_resize->save($path);
            $imageUri = 'uploads/' . $imageName;

            $dataSave = Service::findOrFail($id);
            $dataSave->title = $request->title;
            $dataSave->shot_title = $request->shortTitle;
            $dataSave->details = $request->description;
            $dataSave->image = $imageName;
            $dataSave->image_url = $path;
            $dataSave->save();

            $notification = [
                'message' => 'Successfully update',
                'alert-type' => 'success',
            ];
            return redirect()->route('service.show')->with($notification);
        } else {
            $dataSave = Service::findOrFail($id);
            $dataSave->title = $request->title;
            $dataSave->shot_title = $request->shortTitle;
            $dataSave->details = $request->description;
            $dataSave->save();

            $notification = [
                'message' => 'Successfully update',
                'alert-type' => 'success',
            ];
            return redirect()->route('service.show')->with($notification);
        }
    }

    public function deleteService($id){

        $data = Service::find($id);
        $data->delete();

        $notification = array(
            'message' => "Successfully Delete",
            'alert-type' => 'success',
        );
        return back()->with($notification);

    }
}
