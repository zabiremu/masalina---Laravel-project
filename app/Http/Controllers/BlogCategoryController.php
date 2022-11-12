<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function AllBlogCategory(){
        $allCategory = BlogCategory::latest()->get();
        return view('backend.blog_category.All_blog_cartgory', compact('allCategory'));
    }

    public function addBlogCategory(){
        return view('backend.blog_category.add_category');
    }

    public function insertBlogCategory(Request $request){

        $inserData = new BlogCategory();
        $inserData->blog_category = $request->addCategory;
        $inserData->save();
        $notification = array(
            'message' => "Successfully Upload",
            'alert-type' => 'success',
        );
        return back()->with($notification);

    }

    public function editBlogCategory($id){
        $id = BlogCategory::find($id);
        return view('backend.blog_category.edit_categroy', compact('id'));
    }

    
    public function updateBlogCategory(Request $request,$id){

        $inserData = BlogCategory::find($id);
        $inserData->blog_category = $request->addCategory;
        $inserData->save();
        $notification = array(
            'message' => "Successfully update",
            'alert-type' => 'success',
        );
        return back()->with($notification);

    }

    public function deleteBlogCategory($id){

        $id = BlogCategory::find($id);
        $id->delete();
        $notification = array(
            'message' => "Successfully delete",
            'alert-type' => 'success',
        );
        return back()->with($notification);

    }
}
