<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected static $service;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageURL;

    public static function uploadImage($request, $service = null)
    {
        self::$image = $request->file('image');
        if (self::$image)
        {
            if(file_exists($service->image))
            {
                unlink($service->image);
            }
            self::$imageName = time().rand(10, 1000).'.'.self::$image->getClientOriginalExtension();
            self::$imageDirectory = 'admin/img/';
            self::$image->move(self::$imageDirectory, self::$imageName);
            self::$imageURL = self::$imageDirectory.self::$imageName;
        }
        else
        {
            self::$imageURL = $service->image;
        }
        return self::$imageURL;
    }

    public static function createService($request)
    {
        self::$service = new Service();
        self::$service->service_category_id   = $request->service_category_id;
        self::$service->title              = $request->title;
        self::$service->author_id          = auth()->id();
        self::$service->short_description  = $request->short_description;
        self::$service->long_description   = $request->long_description;
        self::$service->image              = self::uploadImage($request);
        self::$service->status             = $request->status;
        self::$service->save();
    }

    public static function updateService($request, $id)
    {
        self::$service = Service::find($id);
        self::$service->service_category_id   = $request->service_category_id;
        self::$service->title              = $request->title;
        self::$service->author_id          = auth()->id();
        self::$service->short_description  = $request->short_description;
        self::$service->long_description   = $request->long_description;
        self::$service->image              = self::uploadImage($request, self::$service);
        self::$service->status             = $request->status;
        self::$service->save();
    }

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}
