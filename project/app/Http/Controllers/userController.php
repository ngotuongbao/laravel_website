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

class userController extends Controller
{
    public function index(){
    }

    //Add User 1
    // public function store(Request $request){
    //     $user = new User;
    //     $user->name = $request->inputname;
    //     $user->email = $request->inputemail;
    //     $user->password = hash('md5',$request->inputpassword);
    //     $user->save();
    //     return redirect()->action([userController::class,'index']);
    //     // return redirect()->action([userController::class,'index']);

    // }
    // public function checkLogin(Request $request){
    //     $email = $request->inputemail;
    //     $password = $request->inputpw;
    //     $data = user::where('email','=',$email)->where('password','=',hash('md5',$password))->get();
    //     if(count($data)>0){
    //         if($data[0]->email==$email && $data[0]->password=hash('md5',$password)){
    //             return redirect()->route('/');
    //         }
    //     }
    //     else 
    //         return abort('404', $message = 'error');

    // }

}
