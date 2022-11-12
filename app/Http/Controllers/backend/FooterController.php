<?php

namespace App\Http\Controllers\backend;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    public function footer()
    {   
        $data =Footer::find(1);
        return view('backend.footer.footer', compact('data'));
    }

    public function storeFooter(Request $request)
    {
       
        Footer::findOrFail(1)->update([
            'number' => $request->number,
            'shortTitle' => $request->shortTitle,
            'address' => $request->address_title,
            'address_details' => $request->address_details,
            'email' => $request->email,
            'socially' => $request->socially,
            'fb' => $request->fb,
            'twitter' => $request->twitter,
            'behance' => $request->behance,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => "Successfully Update",
            'alert-type' => 'success',
        );
        return back()->with($notification);

    }
}
