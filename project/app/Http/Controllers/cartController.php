<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Rediect;
use App\Http\Requests;
use Cart;
session_start();


class cartController extends Controller
{
    public function saveCart(Request $request){
        $productId = $request->productId_hidden;
        $quantity = $request->qty;
        
        $product_info = DB::table('tbl_product')->where('product_id',$productId)->first();
        
        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = $product_info->product_price;
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);
        Cart::setGlobalTax(10);
        
        return redirect('/show-cart');
        

    }
    public function showCart(){
        $brand_product = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();

        return view('pages.cart.show_cart')->with('category',$cate_product)->with('brand',$brand_product);

    }
    public function deleteCart($id){
        Cart::update($id,0);
        return redirect('/show-cart');
    
    }
    public function updateCart(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->quantity_cart;
        Cart::update($rowId,$qty);
        return redirect('/show-cart');
    
    }

}
