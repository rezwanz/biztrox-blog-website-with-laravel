<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected static $blog;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageURL;

    public static function uploadImage($request, $blog = null)
    {
        self::$image = $request->file('image');
        if (self::$image)
        {
            if(file_exists($blog->image))
            {
                unlink($blog->image);
            }
            self::$imageName = time().rand(10, 1000).'.'.self::$image->getClientOriginalExtension();
            self::$imageDirectory = 'admin/img/';
            self::$image->move(self::$imageDirectory, self::$imageName);
            self::$imageURL = self::$imageDirectory.self::$imageName;
        }
        else
        {
            self::$imageURL = $blog->image;
        }
        return self::$imageURL;
    }

    public static function createBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->blog_category_id   = $request->blog_category_id;
        self::$blog->title              = $request->title;
        self::$blog->author_id          = auth()->id();
        self::$blog->short_description  = $request->short_description;
        self::$blog->long_description   = $request->long_description;
        self::$blog->image              = self::uploadImage($request);
        self::$blog->status             = $request->status;
        self::$blog->save();
    }

    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        self::$blog->blog_category_id   = $request->blog_category_id;
        self::$blog->title              = $request->title;
        self::$blog->author_id          = auth()->id();
        self::$blog->short_description  = $request->short_description;
        self::$blog->long_description   = $request->long_description;
        self::$blog->image              = self::uploadImage($request, self::$blog);
        self::$blog->status             = $request->status;
        self::$blog->save();
    }

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
