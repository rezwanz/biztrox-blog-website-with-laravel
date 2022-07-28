<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\Blog;
use function Symfony\Component\Mime\Header\get;

class BlogController extends Controller
{
    protected $blog;
    public function addBlog()
    {
        return view('admin.blog.add',[
            'blogCategories' => BlogCategory::all(),
        ]);
    }

    public function newBlog(Request $request)
    {
        Blog::createBlog($request);
        return redirect()->back()->with('message', 'Blog Created Successfully!');
    }

    public function manageBlog()
    {
        return view('admin.blog.manage',[
            'blogs' => Blog::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function editBlog($id)
    {
        return view('admin.blog.edit',[
            'blog' => Blog::find($id),
            'blogCategories' => BlogCategory::all(),
        ]);
    }

    public function deleteBlog($id)
    {
        $this->blog = Blog::find($id);
        if(file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return back()->with('message', 'Blog Deleted Successfully!');
    }

    public function updateBlog(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect(route('manage-blog'))->with('message', 'Blog updated successfully!');
    }
}
