<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {
        // return product::all();
        $data = product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data =product::find($id);
        return view('detail',['products'=>$data]);
    }

    function search(Request $req)
    {
        // return $req->input();
        $data = product::
        where('name','like','%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
            // return 'hellp';
        }else{
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        echo "hello";
    }
}
