<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Image;

class BlogController extends Controller
{
    public function allBlogs()
    {
        $allData = Blog::with('blogCategory')
            ->latest()
            ->get();
        return view('backend.blogs.all_blogs', compact('allData'));
    }

    public function addBlog()
    {
        $category = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('backend.blogs.add_blogs', compact('category'));
    }

    public function storeBlog(Request $request)
    {
        if ($request->file('blog_image')) {
            $img = $request->file('blog_image');
            $image = $request->blog_image->extension();
            $imageName = uniqid() . '.' . $image;
            $image_resize = Image::make($img->getRealPath());
            $image_resize->resize(430, 327);
            $path = 'uploads/' . $imageName;
            $image_resize->save($path);
            $imageUri = 'uploads/' . $imageName;

            $dataSave = new Blog();
            $dataSave->blog_category_id = $request->categroy;
            $dataSave->blog_title = $request->title;
            $dataSave->blog_details = $request->description;
            $dataSave->blog_tags = $request->tags;
            $dataSave->blog_image = $imageName;
            $dataSave->blog_image_url = $path;
            $dataSave->save();

            $notification = [
                'message' => 'Successfully Upload',
                'alert-type' => 'success',
            ];
            return back()->with($notification);
        } else {
            $dataSave = new Blog();
            $dataSave->blog_category_id = $request->categroy;
            $dataSave->blog_title = $request->title;
            $dataSave->blog_details = $request->description;
            $dataSave->blog_tags = $request->tags;
            $dataSave->save();

            $notification = [
                'message' => 'Successfully Upload',
                'alert-type' => 'success',
            ];
            return back()->with($notification);
        }
    }

    public function editBlog($id)
    {
        $category = BlogCategory::orderBy('blog_category', 'ASC')->get();
        $blog = Blog::with('blogCategory')->find($id);
        return view('backend.blogs.edit_blogs', compact('blog', 'category'));
    }

    public function updateBlog(Request $request, $id)
    {
        if ($request->file('blog_image')) {
            $img = $request->file('blog_image');
            $image = $request->blog_image->extension();
            $imageName = uniqid() . '.' . $image;
            $image_resize = Image::make($img->getRealPath());
            $image_resize->resize(430, 327);
            $path = 'uploads/' . $imageName;
            $image_resize->save($path);
            $imageUri = 'uploads/' . $imageName;

            $dataSave = Blog::find($id);
            $dataSave->blog_category_id = $request->categroy;
            $dataSave->blog_title = $request->title;
            $dataSave->blog_details = $request->description;
            $dataSave->blog_tags = $request->tags;
            $dataSave->blog_image = $imageName;
            $dataSave->blog_image_url = $path;
            $dataSave->save();

            $notification = [
                'message' => 'Successfully Update',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.blog')
                ->with($notification);
        } else {
            $dataSave = Blog::find($id);
            $dataSave->blog_category_id = $request->categroy;
            $dataSave->blog_title = $request->title;
            $dataSave->blog_details = $request->description;
            $dataSave->blog_tags = $request->tags;
            $dataSave->save();

            $notification = [
                'message' => 'Successfully Update',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.blog')
                ->with($notification);
        }
    }

    public function deleteBlog($id)
    {
        $deleteData = Blog::findOrFail($id);
        $deleteData->delete();
        $notification = [
            'message' => 'Successfully Delete',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.blog')
            ->with($notification);
    }
    
}
