<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class CategoryController extends Controller
{
    public function categories(){
        $category=DB::table('categories')->get();
        return response()->json($category);
    }

    //subcategories
    public function subcategories(){
        $subcategory=DB::table('subcategories')->get();
        return response()->json($subcategory);
    }
}
