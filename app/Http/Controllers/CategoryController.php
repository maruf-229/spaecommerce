<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $category=DB::table('categories')->get();
        return view('admin.category.category',compact('category'));
    }

    public function store(Request $request){
        $data=array();
        $data['category_name']=$request->category_name;
        DB::table('categories')->insert($data);
        $notification=array(
            'message'=>'Successfully Added',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    //sub categories

    public function subcategory(){
        $subcategory=DB::table('subcategories')->join('categories','subcategories.category_id','categories.id')
                     ->select('subcategories.*','categories.category_name')->get();
        $category=DB::table('categories')->get();
        return view('admin.subcategory.index',compact('subcategory','category'));
    }

    public function storeSubcategory(Request $request){
        $data=array();
        $data['subcategory_name']=$request->subcategory_name;
        $data['category_id']=$request->category_id;
        DB::table('subcategories')->insert($data);
        $notification=array(
            'message'=>'Successfully Added',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }


    //brands
    public function brands(){
        $brands=DB::table('brands')->get();
        return view('admin.brand.index',compact('brands'));
    }

    public function storeBrand(Request $request){
        $data=array();
        $data['brand_name']=$request->brand_name;
        DB::table('brands')->insert($data);
        $notification=array(
            'message'=>'Successfully Added',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
