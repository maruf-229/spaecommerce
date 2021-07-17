<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Auth;
use Response;

class OrderController extends Controller
{
    public function myCart(){
        $userid=Auth::id();
        $products=DB::table('carts')->where('userid',$userid)->get();

        $total=$products->sum('subtotal');

        return response::json(array(
            'products'=> $products,
            'total'=> $total,
        ));
    }
}
