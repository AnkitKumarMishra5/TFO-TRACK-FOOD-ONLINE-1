<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class session_controller extends Controller
{
    public function login(Request $req)
    {
        $reg_users=DB::select('select * from registered_users');
        foreach($reg_users as $reg_user)
        {
            if(($req->input('username_login')==$reg_user->username) && ($req->input('password_login')==$reg_user->userpass))
            {
                $req->session()->put('user',$reg_user->first_name);
                $info=$req->session()->get('user');
                return redirect('/home');
            }
            else
            {
                echo "<script>alert('Invalaid Credentials. Please try again');</script>";
                return redirect('/login');
            }
        }
    }
    public function register(Request $req)
    {
        DB::table('registered_users')->insertorIgnore(['first_name'=>$req->input('first_name'),'last_name'=>$req->input('last_name'),'username'=>$req->input('username'),'userpass'=>$req->input('password')]);
        $req->session()->put('user',$req->input('first_name'));
        $info=$req->session()->get('user');
        return redirect('/home');
    }
    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect('/login');
    }
}
