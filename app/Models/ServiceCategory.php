<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $fillable = ['category_name', 'status'];

    protected static $serviceCategory;

    public static function newCategory($request)
    {
        self::$serviceCategory = new ServiceCategory();
        self::$serviceCategory->category_name = $request->category_name;
        self::$serviceCategory->status = $request->status;
        self::$serviceCategory->save();
    }

    public static function updateCategory($request, $id)
    {
        self::$serviceCategory = ServiceCategory::find($id);
        self::$serviceCategory->category_name = $request->category_name;
        self::$serviceCategory->status = $request->status;
        self::$serviceCategory->save();
    }
}
