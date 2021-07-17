<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class CartController extends Controller
{
    public function addToCart(Request $request,$id){
        $userid=Auth::id();
        $check=DB::table('carts')->where('userid',$userid)->where('productid',$id)->first();
        $product=DB::table('products')->where('id',$id)->first();


        if ($check){
            $checkid=$check->id;
//            return response()->json('Product ase');
            $data=array();
            $data['qty']=$request->qty;
            $data['subtotal']=$request->qty*$check->price;

            DB::table('carts')->where('id',$checkid)->update($data);
            return response()->json('Cart Updated');

        }else{
            $data=array();
            $data['productid']=$id;
            $data['userid']=$userid;
            $data['productname']=$product->name;
            $data['price']=$product->price;
            $data['size']=$request->size;
            $data['qty']=$request->qty;
            $data['color']=$request->color;
            $data['subtotal']=$product->price*$request->qty;

            DB::table('carts')->insert($data);
            return response()->json('Product added to cart');
        }
    }

    public function itemRemove($id){
        DB::table('carts')->where('id',$id)->delete();
        return response()->json('Item removed from cart');
    }

    public function cartFlash(){
        $userid=Auth::id();
        DB::table('carts')->where('userid',$userid)->delete();
        return response()->json('Cart flash');
    }

    //cart all products show here
    public function cartProducts(){
        $userid=Auth::id();
        $cartProduct=DB::table('carts')->where('userid',$userid)->get();
        return response()->json($cartProduct);
    }
}








