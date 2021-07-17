<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Auth;
use Response;

class ProductController extends Controller
{
    public function dealsOfTheDay(){
        $product=DB::table('products')->where('hot_deal',1)->orderBy('id','DESC')->limit(6)->get();
        return response()->json($product);
    }

    public function buyOneGetOne(){
        $product=DB::table('products')->where('buy_one_get_one',1)->orderBy('id','DESC')->limit(6)->get();
        return response()->json($product);
    }

    public function recentProduct(){
        $product=DB::table('products')->orderBy('id','DESC')->limit(6)->get();
        return response()->json($product);
    }

    public function singleProducts($id){
        $product=DB::table('products')->join('categories','products.cat_id','categories.id')
                ->join('subcategories','products.subcat_id','subcategories.id')
                ->join('brands','products.brand_id','brands.id')
                ->select('products.*','categories.category_name','subcategories.subcategory_name','brands.brand_name')
                ->where('products.id',$id)
                ->first();

            $color=explode(',',$product->color);
            $size=explode(',',$product->size);

        return response::json(array(
            'product'=> $product,
            'color'=> $color,
            'size'=> $size
        ));
    }

    public function addWishList($id){
        $userid=Auth::id();

        $check=DB::table('wishlists')->where('user_id',$userid)->where('product_id',$id)->first();
        if ($check){
            return response([
                'message'=>'Product Already Exist On Wishlist'
            ],200);
        }
        else{
            $data=array();
            $data['user_id']=$userid;
            $data['product_id']=$id;
            DB::table('wishlists')->insert($data);

            return response([
                'message'=>'Product Added On Wishlist'
            ],200);
        }
    }
}























