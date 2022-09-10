<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Http\Rediect;
use App\Http\Requests;
session_start();

class shopController extends Controller{
    public function index(){
        return view('pages.shop');
    }
}
