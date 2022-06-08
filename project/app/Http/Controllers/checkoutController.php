<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Controllers\shopController;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;
use Illuminate\Support\Facades\Rediect;
session_start();

class checkoutController extends Controller
{
    
    public function index()
    {
         $brand_product = DB::table('tbl_brand_product')->where('brand_status','1')->orderby('brand_id','desc')->get();

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        return view('pages.checkout.login_checkout')->with('category',$cate_product)->with('brand',$brand_product);

    }
    public function addCustomer(Request $request){
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_password'] = hash('md5',$request->customer_password);
        $customer_id = DB::table('tbl_customers')->insertGetId($data);

        Session::put('customer_id',$customer_id); 
        Session::put('customer_name',$request->customer_name); 
        return view('pages.checkout.checkout');

    }
    public function saveCheckout(){
    
        return 'hehehehehehe';

    }
}
