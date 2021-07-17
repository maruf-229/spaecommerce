<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function products(){
        $product=DB::table('products')->join('categories','products.cat_id','categories.id')
            ->select('products.*','categories.category_name')->get();
        return view('admin.product.index',compact('product'));
    }
    public function createProducts(){
        $category=DB::table('categories')->get();
        $brand=DB::table('brands')->get();
        return view('admin.product.create',compact('category','brand'));
    }

    //json data
    public function getSubcat($id){
        $subcategory=DB::table('subcategories')->where('category_id',$id)->get();
        return response()->json($subcategory);
    }

    public function storeProducts(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['cat_id']=$request->cat_id;
        $data['subcat_id']=$request->subcat_id;
        $data['brand_id']=$request->brand_id;
        $data['price']=$request->price;
        $data['size']=$request->size;
        $data['color']=$request->color;
        $data['details']=$request->details;
        $data['stockout']=$request->stockout;
        $data['hot_deal']=$request->hot_deal;
        $data['buy_one_get_one']=$request->buy_one_get_one;

//        $image=$request->image;
        if($request->hasFile('image')){
            $image              = $request->file('image');
            $OriginalExtension  = $image->getClientOriginalExtension();
            $image_name         = Carbon::now()->format('d-m-Y H-i-s') .'.'. $OriginalExtension;
            $destinationPath    = 'product';
            $resize_image       =Image::make($image->getRealPath());
            $resize_image->resize(500, 500, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->save($destinationPath . '/' . $image_name);

            $data['image']   = $image_name;

            DB::table('products')->insert($data);
            $notification=array(
                'message'=>'Successfully Added',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }
}


