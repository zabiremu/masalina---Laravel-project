<?php

namespace App\Http\Controllers\backend;

use App\Models\AboutPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MultiImage;
use BackedEnum;
use Image;
class AboutController extends Controller
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

    public function about()
    {
        $data = AboutPage::find(1);
        return view('backend.about.index', compact('data'));
    }

    public function aboutUpdate(Request $request)
    {
        $about_id = $request->id;

        if ($request->file('about_image')) {
            $img = $request->file('about_image');
            $imageExt = $request->about_image->extension();
            $imageName = uniqid() . '.' . $imageExt;
            $image_resize = Image::make($img->getRealPath());
            $image_resize->resize(523, 605);
            $path = 'uploads/' . $imageName;
            $image_resize->save($path);

            $aboutDataSave = AboutPage::find($about_id);
            $aboutDataSave->title = $request->name;
            $aboutDataSave->short_title = $request->shortTitle;
            $aboutDataSave->short_dscription = $request->shortDesc;
            $aboutDataSave->long_dscription = $request->editordata;
            $aboutDataSave->image = $imageName;
            $aboutDataSave->image_uri = $path;
            $aboutDataSave->save();
            $notification = [
                'message' => 'Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('about')
                ->with($notification);
        } else {
            $aboutDataSave = AboutPage::find($about_id);
            $aboutDataSave->title = $request->name;
            $aboutDataSave->short_title = $request->shortTitle;
            $aboutDataSave->short_dscription = $request->shortDesc;
            $aboutDataSave->long_dscription = $request->editordata;
            $aboutDataSave->save();
            $notification = [
                'message' => 'Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('about')
                ->with($notification);
        }
    }

    public function aboutMulti()
    {
        return view('backend.aboutMultiImage.index');
    }

    public function aboutMultiImage(Request $request)
    {
        $image = $request->file('about_image');

        foreach ($image as $multi_image) {
            $imageExt = $multi_image->extension();
            $imageName = uniqid() . '.' . $imageExt;
            $image_resize = Image::make($multi_image->getRealPath());
            $image_resize->resize(220, 200);
            $path = 'uploads/about/' . $imageName;
            $image_resize->save($path);

            $saveData = new MultiImage();
            $saveData->MultiImage = $imageName;
            $saveData->image_url = $path;
            $saveData->save();
        }

        $notification = [
            'message' => 'Successfully Uploaded',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('about.multi')
            ->with($notification);
    }

    public function aboutAllImages()
    {
        $dataSave = MultiImage::all();
        return view('backend.AllMultiImage.index', compact('dataSave'));
    }

    public function aboutImageEdit($id)
    {
        $dataUpdate = MultiImage::find($id);
        return view('backend.aboutEdit.index', compact('dataUpdate'));
    }

    public function aboutImageUpdate(Request $request)
    {

        $dataUpdate = $request->id;

        $img = $request->file('about_image');
        $imageExt = $request->about_image->extension();
        $imageName = uniqid() . '.' . $imageExt;
        $image_resize = Image::make($img->getRealPath());
        $image_resize->resize(220, 200);
        $path = 'uploads/' . $imageName;
        $image_resize->save($path);

        $aboutDataSave = MultiImage::find($dataUpdate);
        $aboutDataSave->MultiImage = $imageName;
        $aboutDataSave->image_url = $path;
        $aboutDataSave->save();
        $notification = [
            'message' => 'Successfully Updated',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('about.All.image')
            ->with($notification);
    }

    public function aboutImageDelete($id)
    {

        $delete = MultiImage::find($id);
        $delete->delete();
        $notification = [
            'message' => 'Successfully Delete',
            'alert-type' => 'success',
        ];
        return back()->with($notification);
    }
}
