<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {
        $data = Contact::latest()->get();
        return view('backend.contact.contact', compact('data'));
    }

    public function deleteContact($id)
    {
        $data = Contact::findOrFail($id);
        $data->delete();
        
        $notification = array(
            'message' => "Successfully deleted",
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
}
