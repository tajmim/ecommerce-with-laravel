<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class HomeController extends Controller
{
    public function redirect(){
        $usertype = Auth::user()->usertype;
        if($usertype==0){
            return view("home.userpage");
        }else{
            return view("admin.home");
        }
    }

    public function index(){
        return view("home.userpage");
    }
}
