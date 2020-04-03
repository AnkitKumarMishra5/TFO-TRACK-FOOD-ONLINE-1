<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Session;

class controller1 extends Controller
{
    public function home(Request $req)
    {
        if(Session::has('user')){
            $restaurants=DB::select('select * from restaurants');
            return view('pages.home',['restaurants'=>$restaurants]);
        }
        else
        {
            return view('pages.invalidAccess');
        }
    }
    public function restaurant(Request $req)
    {
        if(Session::has('user')){
            $curr_restaurant=$req->input('restaurant');
            $curr_restaurant_l=strtolower($curr_restaurant);
            $foods=DB::select("select * from `$curr_restaurant_l`");
            return view('pages.showRestaurant',['foods'=>$foods]);
        }
        else
        {
            return view('pages.invalidAccess');
        }
    }
}
