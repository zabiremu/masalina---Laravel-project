<?php

namespace App\Http\Controllers\frontend;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function aboutPage(){
        return view('frontend.aboutPage.index');
    }
    
    public function portfolioDetails($id){
        $data = Portfolio::find($id);
        return view('frontend.protfolio.index', compact('data'));
    }

    public function blogDetails($id){
        $blogData = Blog::findOrFail($id); 
        $allBlog = Blog::latest()->get(); 
        $category = BlogCategory::latest()->get(); 
        return view('frontend.blog.home_blog_details', compact('blogData','allBlog','category'));
    }

    public function blogCategory($id){
        $blogData = Blog::where('blog_category_id', $id)->latest()->paginate(2); 
        $allBlog = Blog::latest()->get(); 
        $category = BlogCategory::latest()->get(); 
        $categoryName = BlogCategory::findOrFail($id); 
        return view('frontend.blog.all_blog', compact('blogData','allBlog','category','categoryName'));
    }

    public function allBlogs(){
        $blogData = Blog::latest()->paginate(3);
        $category = BlogCategory::latest()->get(); 
        return view('frontend.blog.blogPage', compact('blogData','category'));
    }

    public function serviceDetails($id){
        $service = Service::find($id);
        return view('frontend.service.service_details', compact('service'));
    }
    public function portfolio(){
        return view('frontend.protfolio.portfolio');
    }
    public function contact()
    {
       return view('frontend.contact.contact');
    }
    public function contactStore(Request $request)
    {
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'budget' => $request->budget,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => "Your Message send Successfully",
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
}
